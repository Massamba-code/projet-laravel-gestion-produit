<?php

namespace App\Http\Controllers;

use App\Models\clientModel;
use App\Models\produitModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countMaleClients = clientModel::where('sexe', 'M')->count();
        $countfemClients = clientModel::where('sexe', 'F')->count();
        $countClients = clientModel::all()->count();
        $countprod = produitModel::all()->count();
        return view('dashboard.index',compact('countMaleClients','countfemClients','countClients','countprod'));

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
        //
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
