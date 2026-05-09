<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        $produits = [
            ['nom' => 'SMS Personnel', 'description' => 'Envoi d\'un SMS personnel à un destinataire.', 'prix' => 10, 'image' => 'images/shop/07.jpg', 'categorie' => 'SMS Personnel'],
            ['nom' => 'SMS Groupés 100', 'description' => 'Envoi de 100 SMS groupés à vos contacts.', 'prix' => 500, 'image' => 'images/shop/06.jpeg', 'categorie' => 'SMS Groupés'],
            ['nom' => 'SMS Groupés 500', 'description' => 'Envoi de 500 SMS groupés à vos contacts.', 'prix' => 1500, 'image' => 'images/shop/08.jpg', 'categorie' => 'SMS Groupés'],
            ['nom' => 'SMS Groupés 1000', 'description' => 'Envoi de 1000 SMS groupés à vos contacts.', 'prix' => 4000, 'image' => 'images/shop/28.png', 'categorie' => 'SMS Groupés'],
        ];

        foreach ($produits as $p) {
            Produit::firstOrCreate(['nom' => $p['nom']], $p);
        }
    }
}
