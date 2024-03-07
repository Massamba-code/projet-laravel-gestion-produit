<?php

namespace App\Http\Controllers;

use App\Models\clientModel;
use App\Models\Commande;
use App\Models\produitModel;
use Illuminate\Http\Request;

class commandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes=Commande::all();
        $com=new Commande();
        $produits=produitModel::all();
        $clients=clientModel::all();
       // $produitsJson = json_encode($produits);
        return view('commandes.listecommandes',compact('commandes','produits','clients','com'));
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
    public function store(Request $request)
    {
        $request->validate([
            'date_commande' => 'required|date',
            'client_id' => 'required|exists:clients,id',
            'produits' => 'required|array|min:1', // Au moins un produit est requis
            'produits.*.id' => 'required|exists:produits,id',
            'quantite' => 'required|array|min:1',
            'quantite.*' => 'required|integer|min:1',
        ]);

        // Créer une nouvelle commande
        $commande = new Commande();
        $commande->date_commande = $request->date_commande;
        $commande->client_id = $request->client_id;
        $commande->save();

        // Ajouter les produits à la commande
        foreach ($request->produits as $key => $produitData) {
            $produit = produitModel::findOrFail($produitData['id']); // Récupérer le produit
            $quantite = $request->quantite[$key];
            $prix_unitaire = $produit->prix; // Prix unitaire du produit depuis la table produits
            $total = $quantite * $prix_unitaire; // Calculer le total

            $commande->produits()->attach($produitData['id'], [
                'quantite' => $quantite,
                'total' => $total,
            ]);
        }

        // Rediriger avec un message de succès
        return redirect()->route('commandes.index')->with('success', 'La commande a été ajoutée avec succès.');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
