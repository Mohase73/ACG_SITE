@extends('layouts.main')
@section('content')
<section class="ls s-py-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h2 class="special-heading underline">
                    <span>Vous êtes ?</span>
                </h2>
            </div>
            <div class="col-12 col-md-5 mb-4">
                <a href="{{ route('login') }}" class="text-decoration-none">
                    <div class="icon-box shadow-layout text-center p-5 choix-card">
                        <div class="icon-styled mb-3">
                            <span class="iconify color-main" data-icon="mdi:account" style="font-size: 80px;"></span>
                        </div>
                        <h4>Client</h4>
                        <p class="color-darkgrey">Vous êtes un client d'ACG Telecom</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-5 mb-4">
                <a href="{{ route('login') }}?type=admin" class="text-decoration-none">
                    <div class="icon-box shadow-layout text-center p-5 choix-card">
                        <div class="icon-styled mb-3">
                            <span class="iconify color-main" data-icon="mdi:shield-account" style="font-size: 80px;"></span>
                        </div>
                        <h4>Administrateur</h4>
                        <p class="color-darkgrey">Vous êtes un employé d'ACG Telecom</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
