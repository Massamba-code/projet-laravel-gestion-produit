<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\clientModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Scalar\String_;


class clientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-client|edit-client|delete-client', ['only' => ['index','show']]);
        $this->middleware('permission:create-client', ['only' => ['create','store']]);
        $this->middleware('permission:edit-client', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-client', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=clientModel::all();
        return view('clients.listeclients',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        clientModel::create($request->all());
        return redirect()->route('clients.index')
            ->withSuccess('New product is added successfully.');
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
    public function edit(clientModel $client):View
    {

        return view('clients.update',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client=clientModel::find($id);
        $client->delete();
        return redirect()->route('clients.index')->with('Client suprrimer avec succes');
    }
}
