@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notre Boutique</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Boutique</li>
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

        <div class="row c-gutter-30">
            @forelse($produits as $produit)
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="product text-center">
                    <a href="{{ route('boutique.show', $produit) }}">
                        <img src="/{{ $produit- class="img-fluid">image }}" alt="{{ $produit->nom }}" class="img-fluid mb-3" style="height:180px;object-fit:cover;width:100%;">
                        <h5>{{ $produit->nom }}</h5>
                    </a>
                    <p class="price"><strong>{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</strong></p>
                    <form action="{{ route('panier.ajouter', $produit) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-maincolor btn-short">Ajouter au panier</button>
                    </form>
                </div>
            </div>
            @empty
                <div class="col-12"><p>Aucun produit disponible pour le moment.</p></div>
            @endforelse
        </div>

        <div class="text-right mt-3">
            <a href="{{ route('panier.index') }}" class="btn btn-maincolor2">
                <i class="fa fa-shopping-cart"></i> Voir mon panier
            </a>
        </div>

    </div>
</section>

@endsection
