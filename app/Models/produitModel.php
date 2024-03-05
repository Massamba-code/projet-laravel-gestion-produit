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
        return $this->hasOne(categorieModel::class);
    }
    public function commande()
    {
        return $this->belongsToMany(Commande::class);
    }
}
