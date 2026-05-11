@extends('layouts.master4')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #808080;">Actualités</h2>
        <a href="{{ route('admin.actualites.create') }}" class="btn btn-primary">+ Nouvel article</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($actualites as $article)
                    <tr>
                        <td>
                            @if($article->image)
                                <img src="{{ asset('storage/' . $article- class="img-fluid">image) }}" width="60" height="50" style="object-fit:cover; border-radius:5px;">
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>{{ $article->titre }}</td>
                        <td><span class="badge badge-info">{{ $article->categorie }}</span></td>
                        <td>{{ \Carbon\Carbon::parse($article->date_publication)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.actualites.edit', $article) }}" class="btn btn-sm btn-warning">Modifier</a>
                            <form action="{{ route('admin.actualites.destroy', $article) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet article ?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted">Aucun article pour l'instant.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
