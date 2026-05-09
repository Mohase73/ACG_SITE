@extends('layouts.master4')

@section('content')

@include('partials._notification')

<h2 style="color:#808080!important;" class="mb-4">Gestion des Commandes</h2>

{{-- Stats --}}
<div class="row mb-4">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col">
                        <p style="color:#808080!important;" class="mb-1">Total commandes</p>
                        <h3 class="mb-0 number-font">{{ $stats['total'] }}</h3>
                    </div>
                    <div class="col-auto"><div class="dash-icon text-orange"><i class="fa fa-shopping-cart"></i></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col">
                        <p style="color:#808080!important;" class="mb-1">En attente</p>
                        <h3 class="mb-0 number-font text-warning">{{ $stats['en_attente'] }}</h3>
                    </div>
                    <div class="col-auto"><div class="dash-icon text-warning"><i class="fa fa-clock-o"></i></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col">
                        <p style="color:#808080!important;" class="mb-1">Confirmées</p>
                        <h3 class="mb-0 number-font text-success">{{ $stats['confirme'] }}</h3>
                    </div>
                    <div class="col-auto"><div class="dash-icon text-secondary"><i class="fa fa-check-circle"></i></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-1">
                    <div class="col">
                        <p style="color:#808080!important;" class="mb-1">Chiffre d'affaires</p>
                        <h3 class="mb-0 number-font">{{ number_format($stats['chiffre'], 0, ',', ' ') }} F</h3>
                    </div>
                    <div class="col-auto"><div class="dash-icon text-secondary1"><i class="bx bxs-wallet"></i></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Filtre --}}
<div class="card mb-4">
    <div class="card-body d-flex align-items-center">
        <span class="mr-3">Filtrer :</span>
        <a href="{{ route('admin.commandes.index') }}"
            class="btn btn-sm mr-2 {{ !$statut ? 'btn-primary' : 'btn-outline-secondary' }}">Toutes</a>
        <a href="{{ route('admin.commandes.index', ['statut' => 'en_attente']) }}"
            class="btn btn-sm mr-2 {{ $statut == 'en_attente' ? 'btn-warning' : 'btn-outline-warning' }}">En attente</a>
        <a href="{{ route('admin.commandes.index', ['statut' => 'confirme']) }}"
            class="btn btn-sm mr-2 {{ $statut == 'confirme' ? 'btn-success' : 'btn-outline-success' }}">Confirmées</a>
        <a href="{{ route('admin.commandes.index', ['statut' => 'annule']) }}"
            class="btn btn-sm {{ $statut == 'annule' ? 'btn-danger' : 'btn-outline-danger' }}">Annulées</a>
    </div>
</div>

{{-- Table --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Liste des commandes</h3>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-nowrap mb-0">
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Client</th>
                        <th>Téléphone</th>
                        <th>Paiement</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($commandes as $commande)
                    <tr>
                        <td><strong>{{ $commande->reference }}</strong></td>
                        <td>{{ $commande->nom }}</td>
                        <td>{{ $commande->telephone }}</td>
                        <td>
                            @php
                                $labels = ['orange_money' => 'Orange Money', 'moov_money' => 'Moov Money', 'virement' => 'Virement'];
                            @endphp
                            {{ $labels[$commande->moyen_paiement] ?? $commande->moyen_paiement }}
                            <br><small class="text-muted">{{ $commande->numero_paiement }}</small>
                        </td>
                        <td><strong>{{ number_format($commande->total, 0, ',', ' ') }} FCFA</strong></td>
                        <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            @if($commande->statut == 'en_attente')
                                <span class="badge badge-warning">En attente</span>
                            @elseif($commande->statut == 'confirme')
                                <span class="badge badge-success">Confirmé</span>
                            @else
                                <span class="badge badge-danger">Annulé</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.commandes.show', $commande) }}"
                                class="btn btn-sm btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Aucune commande trouvée.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $commandes->appends(request()->query())->links() }}
        </div>
    </div>
</div>

@endsection
