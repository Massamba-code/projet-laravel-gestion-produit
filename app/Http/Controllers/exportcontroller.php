<?php

namespace App\Http\Controllers;

use App\Exports\clientexport;
use App\Exports\produitexport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class exportcontroller extends Controller
{
    public function clientexport()
    {
        return Excel::download(new clientexport(),'Clients.xlsx');
    }
    public function produitexport()
    {
        return Excel::download(new produitexport(),'Produits.xlsx');
    }
}
