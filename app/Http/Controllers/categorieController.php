<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\categorieModel;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-categorie|edit-categorie|delete-categorie', ['only' => ['index','show']]);
        $this->middleware('permission:create-categorie', ['only' => ['create','store']]);
        $this->middleware('permission:edit-categorie', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-categorie', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=categorieModel::all();
        return view('categories.liste',compact('categories'));
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
    public function store(StoreCategorieRequest $request)
    {
        categorieModel::create($request->all());
        return redirect()->route('categories.index')->with('Nouvelle Ctegorie ajouté');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request, string $id)
    {
        $categorie=categorieModel::find($id);
        $input=$request->all();
        $categorie->update($input);
        return redirect()->back()
            ->withSuccess('categorie is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie=categorieModel::find($id);
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
