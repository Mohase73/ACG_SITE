@extends('layouts.main')
@section('content')
<section class="ls s-py-60 s-py-md-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-layout p-4 text-center">
                    <div class="mb-4">
                        <i class="fas fa-user-circle" style="font-size: 80px; color: #0FA697;"></i>
                    </div>
                    <h4 class="special-heading">
                        <span>Bienvenue, {{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                    </h4>
                    <p class="color-darkgrey mt-3">
                        <i class="fas fa-envelope mr-2"></i> {{ Auth::user()->email }}
                    </p>
                    <p class="color-darkgrey">
                        <i class="fas fa-phone mr-2"></i> {{ Auth::user()->tel }}
                    </p>
                    <p class="color-darkgrey">
                        <i class="fas fa-user-tag mr-2"></i> {{ Auth::user()->role->designation ?? 'Client' }}
                    </p>
                    <div class="mt-4">
                        <a href="{{ url('welcome') }}" class="btn btn-maincolor2 btn-short mr-2">
                            <i class="fas fa-home mr-1"></i> Accueil
                        </a>
                        @if(Auth::user()->role_id == 1)
                        <a href="{{ url('admin') }}" class="btn btn-maincolor2 btn-short mr-2">
                            <i class="fas fa-cog mr-1"></i> Administration
                        </a>
                        @endif
                        <a href="{{ route('logout') }}" class="btn btn-outline-maincolor btn-short"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-1"></i> Se déconnecter
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
