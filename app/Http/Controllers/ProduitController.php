<?php

namespace App\Http\Controllers;

use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::where('actif', true)->get();
        return view('pages.boutique.index', compact('produits'));
    }

    public function show(Produit $produit)
    {
        $suggestions = Produit::where('actif', true)->where('id', '!=', $produit->id)->take(4)->get();
        return view('pages.boutique.show', compact('produit', 'suggestions'));
    }
}
