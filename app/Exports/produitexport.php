<?php

namespace App\Exports;

use App\Models\produitModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class produitexport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return produitModel::all('libelle','description','stock','prix');
    }

    public function headings(): array
    {
        return [
            'Libelle','Description','Stock','Prix Unitaire'
        ];
    }
}
