<?php

namespace App\Http\Controllers;

use App\Models\clientModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class pdfcontroller extends Controller
{
    public function viewPDF()
    {
        $clients = clientModel::all();

        $pdf = PDF::loadView('pdf.clientsdetails', array('clients' =>  $clients))
            ->setPaper('a4', 'portrait');

        return $pdf->stream();

    }
    public function downloadPDF()
    {
        $clients = clientModel::all();

        $pdf = PDF::loadView('pdf.clientsdetails', array('clients' =>  $clients))
            ->setPaper('a4', 'portrait');

        return $pdf->download('clients_details.pdf');
    }
}
