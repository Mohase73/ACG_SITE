@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>LoveLink</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">LoveLink</li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- Hero --}}
<section class="ls s-py-60 s-py-md-90 s-py-xl-150">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <h2 class="special-heading underline text-center text-lg-left">
                    <span>Des connexions sincères,<br>des histoires qui durent</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    LoveLink est bien plus qu'une application de rencontre. C'est un espace pensé pour des relations authentiques et durables, où chaque connexion est basée sur une vraie compatibilité.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Grâce à notre algorithme de compatibilité profonde, nous mettons en relation des personnes qui partagent les mêmes valeurs, la même vision de la vie et les mêmes projets d'avenir.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:heart-multiple-outline" style="font-size: 220px;"></span>
            </div>
        </div>
    </div>
</section>

{{-- Fonctionnalités --}}
<section class="ls ms s-py-60 s-py-md-90 s-py-xl-150" style="background-color: #F3F2F2 !important">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    <span>Ce qui nous rend différents</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:brain" style="font-size: 60px;"></span>
                    </div>
                    <h5>Algorithme intelligent</h5>
                    <p class="color-darkgrey">Notre système analyse en profondeur votre personnalité pour des suggestions vraiment compatibles.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:account-heart-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Profils authentiques</h5>
                    <p class="color-darkgrey">Chaque profil est vérifié pour garantir des rencontres sincères et sécurisées.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:chat-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Messagerie intuitive</h5>
                    <p class="color-darkgrey">Une interface de chat fluide et agréable pour des échanges naturels et spontanés.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:shield-lock-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Confidentialité totale</h5>
                    <p class="color-darkgrey">Vos données personnelles sont protégées. Vous contrôlez ce que vous partagez.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Avantages --}}
<section class="ls s-py-60 s-py-md-90 s-py-xl-150 c-gutter-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    <span>Pourquoi choisir LoveLink ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:heart-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Relations durables</h5>
                        <p class="color-darkgrey">Nous privilégions la qualité des connexions plutôt que la quantité, pour des relations qui ont du sens.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:equal-box" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Valeurs communes</h5>
                        <p class="color-darkgrey">Trouvez quelqu'un qui partage votre humour, vos passions et vos projets de vie.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:cellphone" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Application mobile</h5>
                        <p class="color-darkgrey">Disponible sur smartphone pour rester connecté à vos matchs où que vous soyez.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:account-group-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Communauté bienveillante</h5>
                        <p class="color-darkgrey">Un espace respectueux où chacun peut chercher l'amour en toute sérénité.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Votre histoire commence ici</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Rejoignez LoveLink et faites la rencontre qui changera votre vie.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
