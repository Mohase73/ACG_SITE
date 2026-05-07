@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Astrologie</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Astrologie</li>
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
                    <span>Les astres vous guident,<br>chaque jour</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    Découvrez un univers de contenus astrologiques riches et personnalisés. Notre service vous accompagne au quotidien avec des horoscopes précis, des lectures de thème astral et des consultations avec des experts reconnus.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Mieux vous connaître, anticiper les tendances et prendre les bonnes décisions — l'astrologie au service de votre vie.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:star-shooting" style="font-size: 220px;"></span>
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
                    <span>Nos contenus astrologiques</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:calendar-star" style="font-size: 60px;"></span>
                    </div>
                    <h5>Horoscope quotidien</h5>
                    <p class="color-darkgrey">Recevez chaque matin votre horoscope personnalisé selon votre signe et votre ascendant.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:orbit" style="font-size: 60px;"></span>
                    </div>
                    <h5>Thème astral</h5>
                    <p class="color-darkgrey">Obtenez une lecture complète de votre thème natal pour mieux comprendre votre personnalité.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:account-star-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Consultations privées</h5>
                    <p class="color-darkgrey">Échangez en direct avec des voyants et astrologues expérimentés pour des conseils personnalisés.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:moon-waning-crescent" style="font-size: 60px;"></span>
                    </div>
                    <h5>Tendances de la semaine</h5>
                    <p class="color-darkgrey">Anticipez les grandes tendances astrales de la semaine pour mieux planifier vos décisions.</p>
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
                    <span>Pourquoi nous faire confiance ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:star-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Experts certifiés</h5>
                        <p class="color-darkgrey">Nos astrologues et voyants sont sélectionnés pour leur sérieux et leur expérience reconnue.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:tune-vertical" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Contenu personnalisé</h5>
                        <p class="color-darkgrey">Chaque lecture est adaptée à votre profil astrologique unique, pas de contenu générique.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:bell-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Alertes astrologiques</h5>
                        <p class="color-darkgrey">Recevez des notifications lors d'événements astrologiques importants vous concernant.</p>
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
                        <h5>Accessible par SMS</h5>
                        <p class="color-darkgrey">Recevez votre horoscope directement par SMS, sans connexion internet nécessaire.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Laissez les astres vous guider</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Commencez dès aujourd'hui votre voyage astrologique et découvrez ce que les étoiles ont prévu pour vous.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
