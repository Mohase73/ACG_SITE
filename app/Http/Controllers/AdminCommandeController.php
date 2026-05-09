<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class AdminCommandeController extends Controller
{
    public function index(Request $request)
    {
        $statut = $request->get('statut');
        $query = Commande::latest();

        if ($statut) {
            $query->where('statut', $statut);
        }

        $commandes = $query->paginate(15);
        $stats = [
            'total'      => Commande::count(),
            'en_attente' => Commande::where('statut', 'en_attente')->count(),
            'confirme'   => Commande::where('statut', 'confirme')->count(),
            'annule'     => Commande::where('statut', 'annule')->count(),
            'chiffre'    => Commande::where('statut', 'confirme')->sum('total'),
        ];

        return view('pages.backoffice.commandes.index', compact('commandes', 'stats', 'statut'));
    }

    public function show(Commande $commande)
    {
        $commande->load('items.produit');
        return view('pages.backoffice.commandes.show', compact('commande'));
    }

    public function updateStatut(Request $request, Commande $commande)
    {
        $request->validate(['statut' => 'required|in:en_attente,confirme,annule']);
        $commande->update(['statut' => $request->statut]);
        return back()->with('success', 'Statut mis à jour avec succès.');
    }
}
