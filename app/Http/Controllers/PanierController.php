<?php

namespace App\Http\Controllers;

use App\Models\PanierItem;
use App\Models\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    private function sessionId()
    {
        return session()->getId();
    }

    public function index()
    {
        $items = PanierItem::with('produit')->where('session_id', $this->sessionId())->get();
        $total = $items->sum(fn($item) => $item->produit->prix * $item->quantite);
        return view('pages.boutique.panier', compact('items', 'total'));
    }

    public function ajouter(Request $request, Produit $produit)
    {
        $quantite = max(1, (int) $request->input('quantite', 1));

        $item = PanierItem::firstOrNew([
            'session_id' => $this->sessionId(),
            'produit_id' => $produit->id,
        ]);
        $item->quantite = ($item->exists ? $item->quantite : 0) + $quantite;
        $item->save();

        return redirect()->route('panier.index')->with('success', 'Produit ajouté au panier !');
    }

    public function supprimer(PanierItem $item)
    {
        if ($item->session_id === $this->sessionId()) {
            $item->delete();
        }
        return redirect()->route('panier.index')->with('success', 'Article retiré du panier.');
    }

    public function vider()
    {
        PanierItem::where('session_id', $this->sessionId())->delete();
        return redirect()->route('panier.index')->with('success', 'Panier vidé.');
    }
}
