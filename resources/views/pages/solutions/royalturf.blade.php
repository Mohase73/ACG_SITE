@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>RoyalTurf</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">RoyalTurf</li>
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
                    <span>Les meilleurs pronostics<br>hippiques pour jouer gagnant</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    RoyalTurf est votre expert en pronostics de courses PMU. Chaque jour, nos analystes passionnés décryptent les programmes hippiques pour vous livrer des sélections fiables et argumentées.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Tiercé, Quarté+, Quinté+ — pariez avec méthode et maximisez vos chances de gains grâce à des analyses sérieuses et rigoureuses.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:horse" style="font-size: 220px;"></span>
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
                    <span>Nos types de pronostics</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:numeric-3-circle-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Tiercé</h5>
                    <p class="color-darkgrey">Nos sélections des 3 premiers chevaux pour maximiser vos chances sur cette course classique.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:numeric-4-circle-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Quarté+</h5>
                    <p class="color-darkgrey">Nos analyses approfondies pour identifier les 4 chevaux gagnants dans le bon ordre.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:numeric-5-circle-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Quinté+</h5>
                    <p class="color-darkgrey">La course phare du PMU — nos experts vous livrent leurs meilleures sélections chaque jour.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:flag-checkered" style="font-size: 60px;"></span>
                    </div>
                    <h5>Plat, Trot & Obstacles</h5>
                    <p class="color-darkgrey">Toutes les disciplines hippiques couvertes par nos analystes spécialisés.</p>
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
                    <span>Pourquoi choisir RoyalTurf ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:magnify" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Analyses approfondies</h5>
                        <p class="color-darkgrey">Chaque pronostic est basé sur une étude rigoureuse des chevaux, des jockeys et des conditions de course.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:account-tie-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Experts passionnés</h5>
                        <p class="color-darkgrey">Notre équipe d'analystes suit les courses de près et partage son expertise chaque jour.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:bell-ring-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Pronostics quotidiens</h5>
                        <p class="color-darkgrey">Recevez vos sélections chaque matin avant les courses, directement par SMS ou notification.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:trending-up" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Maximisez vos gains</h5>
                        <p class="color-darkgrey">Pariez avec méthode et confiance grâce à des sélections fiables et régulièrement performantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Prêt à jouer gagnant ?</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Rejoignez RoyalTurf et recevez chaque jour les meilleurs pronostics hippiques directement sur votre mobile.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
