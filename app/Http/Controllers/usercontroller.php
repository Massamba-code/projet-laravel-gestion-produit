<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-user|edit-user|delete-user', ['only' => ['index','show']]);
        $this->middleware('permission:create-user', ['only' => ['create','store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users=User::all();


        return view('users.listeusers',[
            'users' => User::all()
        ],
            [
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.listeusers', [
            'roles' => Role::pluck('name')->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data= $request->all();
        $data['password']=Hash::make($request->input('password'));
        if($request->hasFile('photo')){
            $photoname=time().'.'.$request->photo->extension();
            $photopath=$request->file('photo')->storeAs('photos',$photoname,'public');

        }

        $status=user::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'email'=>$request->input('email'),
            'password'=>$data['password'],
            'photo'=>$photopath
        ]);

        $status->assignRole($request->roles);
        return redirect()->route('users.index')->withSuccess('utilisateur ajouter avec succes');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /*
       $users=User::all();
        $useredit=User::find($id);
        return view('users.listeusers',compact('users','useredit'));
        */

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user )
    {
        $input=$request->all();
        if(!empty($request->password)){
            $input['password'] = Hash::make($request->password);
        }else{
            $input = $request->except('password');
        }
        $photoname=time().'.'.$request->photo->extension();
        $photopath=$request->file('photo')->storeAs('photos',$photoname,'public');
        $input['photo']=$photopath;
        $user->update($input);

        $user->syncRoles($request->roles);
        return redirect()->back()
            ->withSuccess('User is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        // About if user is Super Admin or User ID belongs to Auth User
        if ($user->hasRole('Super Admin') || $user->id == auth()->user()->id)
        {
            abort(403, 'USER DOES NOT HAVE THE RIGHT PERMISSIONS');
        }

        $user->syncRoles([]);
        $user->delete();
        return redirect()->route('users.index')
            ->withSuccess('User is deleted successfully.');
    }

}
