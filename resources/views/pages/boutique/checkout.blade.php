@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Finaliser ma commande</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('boutique.index') }}">Boutique</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('panier.index') }}">Panier</a></li>
                    <li class="breadcrumb-item active">Commande</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90">
    <div class="container">
        <div class="row">

            {{-- Formulaire client --}}
            <div class="col-lg-7 mb-5">
                <h4 class="mb-4">Vos informations</h4>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('commande.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Nom complet <span class="required">*</span></label>
                        <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" placeholder="Votre nom" required>
                    </div>

                    <div class="form-group">
                        <label>Téléphone <span class="required">*</span></label>
                        <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Ex: 70000000" required>
                    </div>

                    <div class="form-group">
                        <label>Email <small>(optionnel)</small></label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="votre@email.com">
                    </div>

                    <hr>
                    <h5 class="mb-3">Moyen de paiement</h5>

                    <div class="form-group">
                        <label>Choisir <span class="required">*</span></label>
                        <select name="moyen_paiement" class="form-control" required>
                            <option value="">-- Sélectionner --</option>
                            <option value="orange_money" {{ old('moyen_paiement') == 'orange_money' ? 'selected' : '' }}>Orange Money</option>
                            <option value="moov_money"   {{ old('moyen_paiement') == 'moov_money'   ? 'selected' : '' }}>Moov Money</option>
                            <option value="virement"     {{ old('moyen_paiement') == 'virement'     ? 'selected' : '' }}>Virement bancaire</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Numéro utilisé pour le paiement <span class="required">*</span></label>
                        <input type="text" name="numero_paiement" class="form-control" value="{{ old('numero_paiement') }}" placeholder="Ex: 70000000" required>
                    </div>

                    <div class="form-group">
                        <label>Note / Message <small>(optionnel)</small></label>
                        <textarea name="note" class="form-control" rows="3" placeholder="Instructions particulières...">{{ old('note') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-maincolor2 mt-3">
                        <i class="fa fa-check mr-1"></i> Confirmer la commande
                    </button>
                </form>
            </div>

            {{-- Récapitulatif --}}
            <div class="col-lg-5">
                <div class="box-shadow cont-padding ls">
                    <h4 class="mb-4">Récapitulatif</h4>
                    <table class="table">
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->produit->nom }} <small class="text-muted">x{{ $item->quantite }}</small></td>
                                <td class="text-right">{{ number_format($item->produit->prix * $item->quantite, 0, ',', ' ') }} FCFA</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th class="text-right">{{ number_format($total, 0, ',', ' ') }} FCFA</th>
                            </tr>
                        </tfoot>
                    </table>
                    <a href="{{ route('panier.index') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-arrow-left mr-1"></i> Modifier le panier
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
