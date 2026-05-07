@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Alerte Immobilier</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Alerte Immobilier</li>
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
                    <span>Soyez le premier à voir<br>le bien qu'il vous faut</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    Trouver le bien immobilier idéal ne devrait pas être une course épuisante. Alerte Immobilier surveille pour vous des dizaines de plateformes en continu et vous avertit en temps réel dès qu'un bien correspondant à vos critères est mis en ligne.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Achat ou location, appartement ou villa — configurez vos filtres une fois et laissez-nous faire le reste.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:home-search-outline" style="font-size: 220px;"></span>
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
                    <span>Comment ça fonctionne ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:tune" style="font-size: 60px;"></span>
                    </div>
                    <h5>Configurez vos filtres</h5>
                    <p class="color-darkgrey">Budget, superficie, quartier, type de bien — définissez vos critères précisément.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:magnify-scan" style="font-size: 60px;"></span>
                    </div>
                    <h5>Surveillance continue</h5>
                    <p class="color-darkgrey">Notre système scrute en permanence les annonces sur de nombreuses plateformes immobilières.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:bell-ring-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Alerte instantanée</h5>
                    <p class="color-darkgrey">Recevez une notification dès qu'un bien correspondant à vos critères est publié.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:home-check-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Visitez en premier</h5>
                    <p class="color-darkgrey">Soyez parmi les premiers à contacter le propriétaire et à visiter le bien.</p>
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
                    <span>Pourquoi choisir Alerte Immobilier ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:clock-fast" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Réactivité maximale</h5>
                        <p class="color-darkgrey">Les meilleures annonces partent vite. Nos alertes vous permettent d'être toujours parmi les premiers.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:map-marker-radius-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Recherche géolocalisée</h5>
                        <p class="color-darkgrey">Ciblez précisément le quartier ou la zone géographique qui vous convient.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:currency-usd" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Respect de votre budget</h5>
                        <p class="color-darkgrey">Filtrez par fourchette de prix et ne recevez que des annonces dans votre budget.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:cellphone-message" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Notifications multi-canaux</h5>
                        <p class="color-darkgrey">Recevez vos alertes par SMS ou notification mobile selon votre préférence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Votre prochain chez-vous vous attend</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Configurez vos alertes dès aujourd'hui et trouvez le bien idéal avant tout le monde.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
