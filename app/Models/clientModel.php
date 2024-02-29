<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientModel extends Model
{
    use HasFactory;
    protected $table='clients';
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'numero',
        'sexe',

    ];
    public function produits()
    {
        return $this->belongsToMany(produitModel::class);
    }
}
