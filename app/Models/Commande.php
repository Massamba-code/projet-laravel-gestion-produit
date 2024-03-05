<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_commande',
        'client_id',
        'status'

    ];

    public function produits()
    {
        return $this->belongsToMany(produitModel::class, 'pivot_commandes','commande_id','produit_id')->withPivot('quantite', 'total');
    }

}
