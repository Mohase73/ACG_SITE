<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom', 'description', 'prix', 'image', 'categorie', 'stock', 'actif'];

    public function panierItems()
    {
        return $this->hasMany(PanierItem::class);
    }
}
