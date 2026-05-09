@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $produit->nom }}</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('boutique.index') }}">Boutique</a></li>
                    <li class="breadcrumb-item active">{{ $produit->nom }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 c-gutter-60">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            <div class="col-md-5 mb-4">
                <img src="/{{ $produit->image }}" alt="{{ $produit->nom }}" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2 class="product_title">{{ $produit->nom }}</h2>
                <p class="price" style="font-size:1.5rem;">
                    <strong>{{ number_format($produit->prix, 0, ',', ' ') }} FCFA</strong>
                </p>
                <p>{{ $produit->description }}</p>
                <p><span class="badge badge-secondary">{{ $produit->categorie }}</span></p>

                <form action="{{ route('panier.ajouter', $produit) }}" method="POST" class="d-flex align-items-center mt-4">
                    @csrf
                    <input type="number" name="quantite" value="1" min="1" max="{{ $produit->stock }}"
                        class="form-control mr-3" style="width:80px;">
                    <button type="submit" class="btn btn-maincolor2">Ajouter au panier</button>
                </form>

                <div class="product_meta mt-4">
                    <span>Catégorie : <strong>{{ $produit->categorie }}</strong></span>
                </div>
            </div>
        </div>

        @if($suggestions->count())
        <div class="mt-60">
            <h3>Tu pourrais aussi aimer</h3>
            <div class="row c-gutter-30 mt-3">
                @foreach($suggestions as $s)
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="product text-center">
                        <a href="{{ route('boutique.show', $s) }}">
                            <img src="/{{ $s->image }}" alt="{{ $s->nom }}" class="img-fluid mb-2" style="height:150px;object-fit:cover;width:100%;">
                            <h6>{{ $s->nom }}</h6>
                        </a>
                        <p><strong>{{ number_format($s->prix, 0, ',', ' ') }} FCFA</strong></p>
                        <form action="{{ route('panier.ajouter', $s) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-maincolor btn-short">Ajouter</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection
