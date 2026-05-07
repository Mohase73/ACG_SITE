@extends('layouts.main')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Alerte Job</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Alerte Job</li>
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
                    <span>Ne ratez plus aucune<br>opportunité professionnelle</span>
                </h2>
                <div class="divider-40"></div>
                <p class="color-darkgrey">
                    Votre carrière mérite mieux que de passer des heures à chercher. Alerte Job analyse en permanence le marché de l'emploi et vous envoie en temps réel uniquement les offres qui correspondent à votre profil et à vos ambitions.
                </p>
                <div class="divider-20"></div>
                <p class="color-darkgrey">
                    Définissez vos critères une seule fois — poste, secteur, ville, niveau d'expérience — et laissez notre système travailler pour vous 24h/24.
                </p>
                <div class="divider-40"></div>
                <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Nous contacter</a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="divider-40 hidden-above-lg"></div>
                <span class="iconify color-main" data-icon="mdi:briefcase-search-outline" style="font-size: 220px;"></span>
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
                        <span class="iconify color-main" data-icon="mdi:account-cog-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Créez votre profil</h5>
                    <p class="color-darkgrey">Renseignez vos compétences, votre secteur d'activité et vos préférences de poste.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:filter-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Définissez vos critères</h5>
                    <p class="color-darkgrey">Ville, salaire, type de contrat, secteur — personnalisez vos alertes selon vos besoins.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:bell-ring-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Recevez des alertes</h5>
                    <p class="color-darkgrey">Soyez notifié instantanément dès qu'une offre correspondant à votre profil est publiée.</p>
                </div>
                <div class="divider-30 hidden-above-md"></div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="icon-box shadow-layout text-center p-30">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:send-outline" style="font-size: 60px;"></span>
                    </div>
                    <h5>Postulez rapidement</h5>
                    <p class="color-darkgrey">Accédez directement à l'offre et postulez en quelques clics avant les autres candidats.</p>
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
                    <span>Pourquoi choisir Alerte Job ?</span>
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
                        <h5>Alertes en temps réel</h5>
                        <p class="color-darkgrey">Ne perdez plus de temps à consulter des dizaines de sites. Les offres viennent à vous instantanément.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:target" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Offres ciblées et pertinentes</h5>
                        <p class="color-darkgrey">Notre algorithme filtre uniquement les offres qui correspondent réellement à votre profil.</p>
                    </div>
                </div>
                <div class="divider-40"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled">
                        <span class="iconify color-main" data-icon="mdi:shield-check-outline" style="font-size: 60px;"></span>
                    </div>
                    <div class="media-body">
                        <h5>Offres vérifiées</h5>
                        <p class="color-darkgrey">Toutes les offres sont vérifiées et proviennent de sources fiables et reconnues.</p>
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
                        <h5>Disponible sur mobile</h5>
                        <p class="color-darkgrey">Recevez vos alertes par SMS ou notification mobile, où que vous soyez.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="ls ms s-py-60" style="background-color: #F3F2F2 !important">
    <div class="container text-center">
        <h3 class="special-heading"><span>Prêt à booster votre carrière ?</span></h3>
        <div class="divider-30"></div>
        <p class="color-darkgrey">Rejoignez des milliers de professionnels qui reçoivent déjà leurs alertes emploi chaque jour.</p>
        <div class="divider-30"></div>
        <a href="{{ url('nous_contactez') }}" class="btn btn-maincolor2 btn-short">Commencer maintenant</a>
    </div>
</section>

@endsection
