@extends('layouts.master4')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #808080;">Modifier l'article</h2>
        <a href="{{ route('admin.actualites.index') }}" class="btn btn-secondary">← Retour</a>
    </div>

    <div class="card p-4">
        <form action="{{ route('admin.actualites.update', $actualite) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre', $actualite->titre) }}">
                @error('titre') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $actualite->description) }}</textarea>
                @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Catégorie</label>
                    <select name="categorie" class="form-control">
                        @foreach(['Centre d\'appel', 'Dev Web', 'Boutique', 'Transformation Digital', 'Campagne SMS', 'Services'] as $cat)
                        <option value="{{ $cat }}" {{ $actualite->categorie == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Date de publication</label>
                    <input type="date" name="date_publication" class="form-control" value="{{ old('date_publication', $actualite->date_publication) }}">
                </div>
            </div>
            <div class="form-group">
                <label>Lien (optionnel)</label>
                <input type="text" name="lien" class="form-control" value="{{ old('lien', $actualite->lien) }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                @if($actualite->image)
                    <div class="mb-2"><img src="{{ asset('storage/' . $actualite- class="img-fluid">image) }}" height="80" style="border-radius:5px;"></div>
                @endif
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection
