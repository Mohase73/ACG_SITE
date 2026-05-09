<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CommandeItem;
use App\Models\PanierItem;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    private function sessionId()
    {
        return session()->getId();
    }

    private function getItems()
    {
        return PanierItem::with('produit')->where('session_id', $this->sessionId())->get();
    }

    public function checkout()
    {
        $items = $this->getItems();

        if ($items->isEmpty()) {
            return redirect()->route('boutique.index')->with('error', 'Votre panier est vide.');
        }

        $total = $items->sum(fn($i) => $i->produit->prix * $i->quantite);
        return view('pages.boutique.checkout', compact('items', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'             => 'required|string|max:100',
            'telephone'       => 'required|string|max:20',
            'email'           => 'nullable|email|max:100',
            'moyen_paiement'  => 'required|in:orange_money,moov_money,virement',
            'numero_paiement' => 'required|string|max:20',
            'note'            => 'nullable|string|max:500',
        ]);

        $items = $this->getItems();

        if ($items->isEmpty()) {
            return redirect()->route('boutique.index')->with('error', 'Votre panier est vide.');
        }

        $total = $items->sum(fn($i) => $i->produit->prix * $i->quantite);

        $commande = Commande::create([
            'reference'       => Commande::genererReference(),
            'nom'             => $request->nom,
            'telephone'       => $request->telephone,
            'email'           => $request->email,
            'moyen_paiement'  => $request->moyen_paiement,
            'numero_paiement' => $request->numero_paiement,
            'total'           => $total,
            'note'            => $request->note,
        ]);

        foreach ($items as $item) {
            CommandeItem::create([
                'commande_id'   => $commande->id,
                'produit_id'    => $item->produit_id,
                'quantite'      => $item->quantite,
                'prix_unitaire' => $item->produit->prix,
            ]);
        }

        // Vider le panier après commande
        PanierItem::where('session_id', $this->sessionId())->delete();

        return redirect()->route('commande.confirmation', $commande->reference);
    }

    public function confirmation(string $reference)
    {
        $commande = Commande::with('items.produit')->where('reference', $reference)->firstOrFail();
        return view('pages.boutique.confirmation', compact('commande'));
    }
}
