<?php

namespace App\Exports;

use App\Models\clientModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportclientpdf implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $clients = clientModel::all();

        $pdf = PDF::loadView('pdf.clientsdetails', compact('clients'));

        return $pdf->download('clients.pdf');
    }

}
