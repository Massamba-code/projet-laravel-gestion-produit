<?php

namespace App\Exports;

use App\Models\clientModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class clientexport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return clientModel::all('nom','prenom','adresse','numero','sexe');
    }

    public function headings(): array
    {
        return [
            'nom',
            'prenom',
            'adresse',
            'numero',
            'sexe'
        ];
    }
}
