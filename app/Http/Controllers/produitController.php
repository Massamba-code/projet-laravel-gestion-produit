<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Models\categorieModel;
use App\Models\produitModel;
use Illuminate\Http\Request;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=produitModel::all();
        $categories=categorieModel::all();
        return view('produits.listeproduits',compact('produits','categories'));
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
    public function store(StoreProduitRequest $request)
    {
        $produit=$request->all();
        $photoname=time().'.'.$request->photo->extension();
        $photopath=$request->file('photo')->storeAs('photos',$photoname,'public');
        $produit['photo']=$photopath;
        produitModel::create($produit);
        return redirect()->route('produits.index')->with('produit ajouter');
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
    public function update(UpdateProduitRequest $request, string $id)
    {
        $produit=produitModel::find($id);
        $input=$request->all();
        $photoname=time().'.'.$request->photo->extension();
        $photopath=$request->file('photo')->storeAs('photos',$photoname,'public');
        $input['photo']=$photopath;
        $produit->update($input);
        return redirect()->back()
            ->withSuccess('produit is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit=produitModel::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('produit supprimmer avec succes');

    }
}
