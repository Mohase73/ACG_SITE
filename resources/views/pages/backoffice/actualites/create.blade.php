@extends('layouts.master4')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #808080;">Nouvel article</h2>
        <a href="{{ route('admin.actualites.index') }}" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="card p-4">
        <form action="{{ route('admin.actualites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre') }}">
                @error('titre') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Catégorie</label>
                    <select name="categorie" class="form-control @error('categorie') is-invalid @enderror">
                        <option value="">-- Choisir --</option>
                        <option value="Centre d'appel">Centre d'appel</option>
                        <option value="Dev Web">Dev Web</option>
                        <option value="Boutique">Boutique</option>
                        <option value="Transformation Digital">Transformation Digital</option>
                        <option value="Campagne SMS">Campagne SMS</option>
                        <option value="Services">Services</option>
                    </select>
                    @error('categorie') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Date de publication</label>
                    <input type="date" name="date_publication" class="form-control @error('date_publication') is-invalid @enderror" value="{{ old('date_publication', now()->format('Y-m-d')) }}">
                    @error('date_publication') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group">
                <label>Lien (optionnel)</label>
                <input type="text" name="lien" class="form-control" value="{{ old('lien') }}" placeholder="ex: /boutique">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>
</div>
@endsection
