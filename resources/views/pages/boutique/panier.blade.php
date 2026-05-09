@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mon Panier</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('boutique.index') }}">Boutique</a></li>
                    <li class="breadcrumb-item active">Panier</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($items->isEmpty())
            <p>Votre panier est vide. <a href="{{ route('boutique.index') }}">Continuer vos achats</a></p>
        @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>
                        <img src="/{{ $item->produit->image }}" alt="" style="height:50px;width:50px;object-fit:cover;" class="mr-2">
                        {{ $item->produit->nom }}
                    </td>
                    <td>{{ number_format($item->produit->prix, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $item->quantite }}</td>
                    <td>{{ number_format($item->produit->prix * $item->quantite, 0, ',', ' ') }} FCFA</td>
                    <td>
                        <form action="{{ route('panier.supprimer', $item) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Retirer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total :</strong></td>
                    <td colspan="2"><strong>{{ number_format($total, 0, ',', ' ') }} FCFA</strong></td>
                </tr>
            </tfoot>
        </table>

        <div class="d-flex justify-content-between mt-3">
            <form action="{{ route('panier.vider') }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Vider le panier</button>
            </form>
            <a href="{{ route('commande.checkout') }}" class="btn btn-maincolor2">
                <i class="fa fa-credit-card mr-1"></i> Passer la commande
            </a>
        </div>
        @endif

    </div>
</section>

@endsection
