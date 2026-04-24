@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nos Services</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Services
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light pt-2">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Centre d'appel</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms ">
                        <div>
                            <div class="col-12 text-center">
                                <p class=" text-center text-left">
                                    <span>Vous pouvez nous contacter en appelant notre  service client 7jours/7, 24h/24 :</span>
                                    Besoin de faire appel à un call center pour vos activités professionnelles? Les prix des centres d’appels sont peut-être le facteur le plus important dans tout le processus d’externalisation. De nombreuses variables entrent en jeu dans les coûts, notamment : les niveaux de compétence, le type de travail, le lieu et la durée de l’application.
                                </p>
                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                                <div class="divider-60 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>

                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="data-table1" class="table table-striped table-bordered text-nowrap w-100 table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-15p">Services</th>
                                                                <th>Prix</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a  class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels de plusieurs clients en même temps</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 1000 à 2000f par minute </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels exclusifs pour un client</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 5000 à 10000f par minute </a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pl-md-4">
                                        <div class="text-center d-flex">
                                            <div class="col-md-4">
                                                <a href="{{ asset('pdf/Presentation.pdf') }}" download="Presentation" class="btn btn-maincolor2 btn-short" > <span class="text-dark">Télécharger</span> </a>
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <a href="{{ asset('pdf/Presentation.pdf') }}" target="_blank" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Détails</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                            <img style="height: 500px !important" src="/images/centre-appel/prix.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Service à Valeur Ajouter</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://www.youtube.com/embed/WwvNiN2_Jlk">
                            <img style="height: 600px !important" src="/images/service/sva.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>Un service à valeur ajoutée est un service fourni par le biais d’un service de télécommunication et facturé par un fournisseur en sus des services de télécommunication. Les services à valeur ajoutée sont des services qui sont au- delà des services de la transmission de la voix et des télécopies.</span>
                            </p>
                            <div class="divider-55 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                            <div class=" font-weight-light widget widget_nav_menu" style="color: black !important">
                                    <div class="menu-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                                <a href="">Les Services de traitement de données en ligne.</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Les services d’échange électronique de données.</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Les  services de stockage et de recherche en ligne dans les bases de données.</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Les services de courrier électronique et services d’audio messagerie électronique.</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="row pt-3 pl-md-4">
                                <div class="text-center d-flex">
                                    <div class="col-md-4">
                                        <a href="{{ asset('pdf/Presentation.pdf') }}" download="Presentation" class="btn btn-maincolor2 btn-short" > <span class="text-dark">Télécharger</span> </a>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('pdf/Presentation.pdf') }}" target="_blank" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Détails</span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-60 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Serveur Vocal Intéractif</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms ">
                        <div>
                            <div class=" col-12 text-center">
                                <p class=" text-center text-rigth">
                                    Le Serveur Vocal Interactif, ou SVI, est une technologie de téléphonie qui permet aux clients d'interagir avec le système hôte de l'entreprise par le biais de menus vocaux configurables, en utilisant des tonalités DTMF en temps réel.
                                </p>
                                <div class="row pt-3 pl-md-4">
                                    <div class="text-center d-flex">
                                        <div class="col-md-4">
                                            <a href="{{ asset('pdf/Presentation.pdf') }}" download="Presentation" class="btn btn-maincolor2 btn-short" > <span class="text-dark">Télécharger</span> </a>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <a href="{{ asset('pdf/Presentation.pdf') }}" target="_blank" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Détails</span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                            <img style="height: 350px !important" src="/images/service/svi.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Application USSD</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://youtu.be/WP-QpZTiNDg">
                            <img style="height: 600px !important" src="/images/service/ussd.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                            </p>
                            <div class="divider-55 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                            <div class=" font-weight-light widget widget_nav_menu" style="color: black !important">
                                    <div class="menu-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Activer le transfert d'appel</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Consulter votre solde</span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Faire un quiz</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="row pt-3 pl-md-4">
                                <div class="text-center d-flex">
                                    <div class="col-md-4">
                                        <a href="{{ asset('pdf/Presentation.pdf') }}" download="Presentation" class="btn btn-maincolor2 btn-short" > <span class="text-dark">Télécharger</span> </a>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('pdf/Presentation.pdf') }}" target="_blank" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Détails</span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider-60 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Porte Monaie Électronique</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms ">
                        <div>
                            <div class="col-12 text-center">
                                <p class=" text-center text-left">
                                    Les transactions s'effectuent par saisie d'un identifiant de connexion ou d'une adresse de courrier électronique et d'un mot de passe, parfois associé à un code secret ; cela permet de valider le paiement des achats effectués.
                                </p>
                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                                <div class="row pt-3 pl-md-4">
                                    <div class="text-center d-flex">
                                        <div class="col-md-4">
                                            <a href="{{ asset('pdf/Presentation.pdf') }}" download="Presentation" class="btn btn-maincolor2 btn-short" > <span class="text-dark">Télécharger</span> </a>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <a href="{{ asset('pdf/Presentation.pdf') }}" target="_blank" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Détails</span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-60 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>

                                {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="data-table1" class="table table-striped table-bordered text-nowrap w-100 table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-15p">Services</th>
                                                                <th>Prix</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a  class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels de plusieurs clients en même temps</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 1000 à 2000f par minute </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels exclusifs pour un client</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 5000 à 10000f par minute </a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                            <img style="height: 350px !important" src="/images/service/pe.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Lovelink</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms ">
                        <div>
                            <div class=" col-12 text-center">
                                <p class=" text-center text-rigth">
                                    Lovelink est le meilleur site de rencontre et de chat pour trouver l'amour. Connectez-vous avec des milliers de célibataires, discutez en toute sécurité et trouvez la personne qui vous correspond vraiment grâce à notre algorithme de matchmaking avancé.
                                </p>
                                <div class="row pt-3 pl-md-4">
                                    <div class="text-center d-flex">
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-maincolor2 btn-short" > <span class="text-dark">S'inscrire</span> </a>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn" style="background-color: #cfcfcf"> <span class="text-dark">Découvrir</span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                            <span class="iconify color-main" data-icon="mdi:heart-outline" style="font-size: 250px;"></span>
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>

@endsection



{{-- <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="data-table1" class="table table-striped table-bordered text-nowrap w-100 table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-15p">Services</th>
                                                                <th>Prix</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a  class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels de plusieurs clients en même temps</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 1000 à 2000f par minute </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Appels exclusifs pour un client</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 5000 à 10000f par minute </a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
