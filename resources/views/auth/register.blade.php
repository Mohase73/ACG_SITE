@extends('layouts.main')
@section('content')
<section class="ls s-py-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card shadow-layout p-5">
                    <h4 class="special-heading underline text-center">
                        <span>Créer un compte</span>
                    </h4>
                    <div class="divider-30"></div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Votre nom" value="{{ old('nom') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Votre prénom" value="{{ old('prenom') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Votre email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="Votre mot de passe" required>
                        </div>
                        <div class="form-group">
                            <label>Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer votre mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-maincolor2 w-100">S'inscrire</button>
                    </form>
                    <div class="divider-20"></div>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="color-main">Déjà un compte ? Se connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
