@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Commande confirmée</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('boutique.index') }}">Boutique</a></li>
                    <li class="breadcrumb-item active">Confirmation</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">

                <div class="box-shadow cont-padding">
                    <i class="fa fa-check-circle fa-4x color-main mb-4" style="color:#28a745;"></i>
                    <h3>Merci {{ $commande->nom }} !</h3>
                    <p class="mt-3">Votre commande a bien été enregistrée. Notre équipe va vérifier votre paiement et vous contacter sous peu.</p>

                    <div class="alert alert-info mt-4 text-left">
                        <strong>Référence :</strong> {{ $commande->reference }}<br>
                        <strong>Téléphone :</strong> {{ $commande->telephone }}<br>
                        <strong>Moyen de paiement :</strong>
                        @php
                            $labels = ['orange_money' => 'Orange Money', 'moov_money' => 'Moov Money', 'virement' => 'Virement bancaire'];
                        @endphp
                        {{ $labels[$commande->moyen_paiement] ?? $commande->moyen_paiement }}<br>
                        <strong>Numéro utilisé :</strong> {{ $commande->numero_paiement }}<br>
                        <strong>Statut :</strong>
                        <span class="badge badge-warning">En attente de confirmation</span>
                    </div>

                    <h5 class="mt-4 mb-3">Détail de la commande</h5>
                    <div class="table-responsive"><table class="table table-bordered text-left">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Qté</th>
                                <th>Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($commande->items as $item)
                            <tr>
                                <td>{{ $item->produit->nom }}</td>
                                <td>{{ $item->quantite }}</td>
                                <td>{{ number_format($item->prix_unitaire * $item->quantite, 0, ',', ' ') }} FCFA</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total</th>
                                <th>{{ number_format($commande->total, 0, ',', ' ') }} FCFA</th>
                            </tr>
                        </tfoot>
                    </table></div>

                    @if($commande->note)
                        <p class="text-muted"><em>Note : {{ $commande->note }}</em></p>
                    @endif

                    <a href="{{ route('boutique.index') }}" class="btn btn-maincolor2 mt-3">
                        Retour à la boutique
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
