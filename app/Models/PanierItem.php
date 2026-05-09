<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanierItem extends Model
{
    protected $fillable = ['session_id', 'produit_id', 'quantite'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
