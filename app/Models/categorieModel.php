<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorieModel extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable=['titre'];
    public function produits()
    {
        return $this->belongsTo(produitModel::class);
    }
}
