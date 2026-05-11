@extends('layouts.master4')

@section('content')

@include('partials._notification')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 style="color:#808080!important;">Commande {{ $commande->reference }}</h2>
    <a href="{{ route('admin.commandes.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="fa fa-arrow-left mr-1"></i> Retour
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">

    {{-- Infos client --}}
    <div class="col-lg-5 mb-4">
        <div class="card h-100">
            <div class="card-header"><h3 class="card-title">Informations client</h3></div>
            <div class="card-body">
                <div class="table-responsive"><table class="table table-sm mb-0">
                    <tr><th>Nom</th><td>{{ $commande->nom }}</td></tr>
                    <tr><th>Téléphone</th><td>{{ $commande->telephone }}</td></tr>
                    <tr><th>Email</th><td>{{ $commande->email ?? '—' }}</td></tr>
                    <tr>
                        <th>Paiement</th>
                        <td>
                            @php $labels = ['orange_money' => 'Orange Money', 'moov_money' => 'Moov Money', 'virement' => 'Virement']; @endphp
                            {{ $labels[$commande->moyen_paiement] ?? $commande->moyen_paiement }}
                        </td>
                    </tr>
                    <tr><th>Numéro</th><td>{{ $commande->numero_paiement }}</td></tr>
                    <tr><th>Date</th><td>{{ $commande->created_at->format('d/m/Y à H:i') }}</td></tr>
                    @if($commande->note)
                    <tr><th>Note</th><td><em>{{ $commande->note }}</em></td></tr>
                    @endif
                </table></div>
            </div>
        </div>
    </div>

    {{-- Changer statut --}}
    <div class="col-lg-7 mb-4">
        <div class="card h-100">
            <div class="card-header"><h3 class="card-title">Statut de la commande</h3></div>
            <div class="card-body">
                <p class="mb-3">
                    Statut actuel :
                    @if($commande->statut == 'en_attente')
                        <span class="badge badge-warning badge-lg">En attente</span>
                    @elseif($commande->statut == 'confirme')
                        <span class="badge badge-success badge-lg">Confirmé</span>
                    @else
                        <span class="badge badge-danger badge-lg">Annulé</span>
                    @endif
                </p>

                <form action="{{ route('admin.commandes.statut', $commande) }}" method="POST" class="d-flex align-items-center">
                    @csrf @method('PATCH')
                    <select name="statut" class="form-control mr-3" style="max-width:200px;">
                        <option value="en_attente" {{ $commande->statut == 'en_attente' ? 'selected' : '' }}>En attente</option>
                        <option value="confirme"   {{ $commande->statut == 'confirme'   ? 'selected' : '' }}>Confirmé</option>
                        <option value="annule"     {{ $commande->statut == 'annule'     ? 'selected' : '' }}>Annulé</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>

</div>

{{-- Détail produits --}}
<div class="card">
    <div class="card-header"><h3 class="card-title">Produits commandés</h3></div>
    <div class="card-body">
        <div class="table-responsive"><table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($commande->items as $item)
                <tr>
                    <td>{{ $item->produit->nom }}</td>
                    <td>{{ number_format($item->prix_unitaire, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $item->quantite }}</td>
                    <td>{{ number_format($item->prix_unitaire * $item->quantite, 0, ',', ' ') }} FCFA</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-right">Total</th>
                    <th>{{ number_format($commande->total, 0, ',', ' ') }} FCFA</th>
                </tr>
            </tfoot>
        </table></div>
    </div>
</div>

@endsection
