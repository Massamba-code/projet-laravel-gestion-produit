<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitModel extends Model
{
    use HasFactory;
    protected $table ='produits';
    protected $fillable=[
      'libelle',
      'description',
      'stock',
      'photo',
      'prix',
        'cat_id'
    ];
    public function categories()
    {
        return $this->belongsTo(categorieModel::class,'cat_id');
    }
    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'pivot_commandes','commande_id','produit_id')->withPivot('quantite', 'total');
    }
}
