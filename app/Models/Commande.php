<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'reference', 'nom', 'telephone', 'email',
        'moyen_paiement', 'numero_paiement', 'total', 'statut', 'note'
    ];

    public function items()
    {
        return $this->hasMany(CommandeItem::class);
    }

    public static function genererReference(): string
    {
        return 'ACG-' . strtoupper(uniqid());
    }
}
