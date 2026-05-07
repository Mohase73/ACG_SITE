@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>PingFoot</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">PingFoot</li>
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
                    <span>Tout le foot, en direct<br>dans votre poche</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    PingFoot est l'application de référence pour tous les passionnés de football. Scores en direct, classements, statistiques détaillées — tout ce dont vous avez besoin pour ne rien manquer du beau jeu.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Vos équipes et compétitions préférées, toujours à portée de main. Recevez une notification à chaque but, chaque carton, chaque événement important.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:soccer" style="font-size: 220px;"></span>
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
                    <span>Tout ce qu'un fan de foot peut vouloir</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:scoreboard-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Scores en direct</h5>
                    <p class="color-darkgrey">Suivez tous les matchs en temps réel avec les scores mis à jour à la minute près.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:trophy-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Classements</h5>
                    <p class="color-darkgrey">Consultez les classements de toutes les ligues et compétitions du monde entier.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:chart-bar" style="font-size: 60px;"></span>
                    </div>
                    <h5>Stats de joueurs</h5>
                    <p class="color-darkgrey">Accédez aux statistiques détaillées de vos joueurs et équipes favoris.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:bell-ring-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Notifications instantanées</h5>
                    <p class="color-darkgrey">Soyez alerté à chaque but, carton rouge ou coup de sifflet final de vos matchs favoris.</p>
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
                    <span>Pourquoi choisir PingFoot ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:lightning-bolt-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Rapidité et fiabilité</h5>
                        <p class="color-darkgrey">Les scores et événements sont mis à jour en temps réel, sans délai ni interruption.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:earth" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Couverture mondiale</h5>
                        <p class="color-darkgrey">Des centaines de compétitions couvertes, des ligues locales aux grandes compétitions internationales.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:heart-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Équipes favorites</h5>
                        <p class="color-darkgrey">Suivez uniquement vos équipes et compétitions préférées pour une expérience personnalisée.</p>
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
                        <h5>100% mobile</h5>
                        <p class="color-darkgrey">Conçu pour mobile, PingFoot vous accompagne partout, même sans connexion stable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Ne manquez plus aucun match !</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Rejoignez des milliers de fans qui suivent leur passion avec PingFoot chaque jour.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
