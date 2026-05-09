@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Centre d'Appels </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('service')}}">Nos services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Centre d'appel
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls s-py-60 s-py-md-90 s-pt-xl-150 s-pb-xl-105 c-gutter-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Qui sommes nous ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">AFRIC CONSULTING GROUP (ACG) TELECOM est une entreprise de télécommunication,
                        implanté dans plusieurs pays à savoir le Burkina Faso, le Mali,
                        et le Niger. Nous intervenons dans le domaine de la télécommunication à travers
                        un réseau de centre d’appel installé et mise à la disposition de
                        sa clientèle, et les services à valeur ajouté tel que le IVR, les
                        services SMS, les services vocaux, le digital. Nous disposons d’un réseau de partenaires techniques nationaux
                        et internationaux, grâce à qui, nous offrons des services de qualité,
                        répondant à l’attente de ses clients !</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    <span>Comment pouvons nous vous aidez ?</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            {{-- <i class="color-main fi flaticon-022-hosting-1"></i> --}}
                            <img style="height: 100px; width:100px" src="/images/centre-appel/telesecretariat.png" alt="">
                        </a>
                    </div>
                    <h5><a href="#">Télésécretariat</a></h5>
                    {{--  <p> Nos Télésecrétaires Assurent la Gestion des Appels & de votre Agenda en Temps Réel. </p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            {{-- <i class="color-main fi flaticon-017-computer"></i> --}}
                            <img style="height: 100px; width:100px" src="/images/centre-appel/appelentrant.png" alt="">
                        </a>
                    </div>
                    <h5><a href="#">Appel Entrant</a></h5>
                    {{--  <p>ces appels sont effectués par des clients ou des partenaires qui souhaitent recevoir des informations.....</p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            {{-- <i class="color-main fi flaticon-035-bug"></i> --}}
                            <img style="height: 100px; width:100px" src="/images/centre-appel/appelsortant.png" alt="">
                        </a>
                    </div>
                    <h5><a href="#">Appel Sortant</a></h5>
                    {{--  <p>ces appels sont effectués par le personnel du centre d’appel dans le but de prospecter et d’informer les clients ..... </p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            <img style="height: 100px; width:100px" src="/images/centre-appel/conseil.jpg" alt="">
                            {{-- <i class="color-main fi flaticon-032-cloud"></i> --}}
                        </a>
                    </div>
                    <h5><a href="#">Gestion de la relation client</a></h5>
                    {{--  <p> C'est la mise en œuvre de moyens et de techniques dans le but de créer et d'entretenir une relation ...... </p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            <img style="height: 100px; width:100px" src="/images/centre-appel/client.jpg" alt="">
                            {{-- <i class="color-main fi flaticon-001-website"></i> --}}
                        </a>
                    </div>
                    <h5><a href="#">Téléconseiller</a></h5>
                    {{--  <p>Optez pour nos Télésecrétaires Spécialisées pour votre Cabinet Médical, votre TPE, PME. </p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="icon-box shadow-layout text-center">
                    <div class="icon-styled ">
                        <a href="#">
                            <img style="height: 100px; width:100px" src="/images/centre-appel/assistance.png" alt="">
                            {{-- <i class="color-main fi flaticon-023-search"></i> --}}
                        </a>
                    </div>
                    <h5><a href="#">Centre d'Assistance</a></h5>
                    {{--  <p> Relation de Confiance. Confidentialité. Contrat sans engagement. Gain Organisationnel. </p>  --}}
                    <div class="divider-40"></div>
                    <a href="#" class="simple_link">Lire plus</a>
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
                    <span>Notre équipement</span>
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
                                    Le Multimedia Contact Center intégré (centre de contact multimédia) d'OpenScape Business vous permet d'améliorer le service auprès de vos clients et donc la
                                    satisfaction de ces derniers. Grâce à la répartition
                                    intelligente des conversations, vos clients sont servis
                                    rapidement et de manière compétente; ils sont toujours mis
                                    en relation avec le collaborateur approprié. Outre la
                                    répartition des appels, vous pouvez également proposer à
                                    vos clients de prendre contact par e-mail ou par fax.
                                    Exactement comme pour les appels, les demandes
                                    formulées via ces médias sont toujours et automatiquement
                                    envoyées au bon collaborateur.
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
                                                                <th class="wd-15p">Serveur</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a  class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >X8 OpenScape Business</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                            <img style="height: 600px !important" src="/images/centre-appel/equipement.jpg" alt="img">
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
                    <span>Normes supportées</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://www.youtube.com/embed/WwvNiN2_Jlk">
                            <img style="height: 700px !important" src="/images/centre-appel/call.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>
                                    Un call center a pour mission de prendre en charge la gestion de la relation client d'une entreprise et parfois ses campagnes de prospection. Il constitue à lui seul une solution complète pour répondre aux besoins de la clientèle, en entretenant un certain lien avec elle et en la fidélisant. Vous pouvez nous contacter en appelant notre  service client 7jours/7, 24h/24:</span>
                            </p>
                            <div class="divider-40 hidden-above-lg"></div>
                            <div class=" font-weight-light widget widget_nav_menu" style="color: black !important">
                                    <div class="menu-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                                <a href="">RFC 2822 Internet Message Format</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">RFC 1877 PPP Internet Protocol Control Protocol</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">NAT : RFC 2663 NAT</span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">IPSec : RFC 2403 IPsec Authentication - MD5</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">SNMP : RFC 1213 MIB-II</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">QdS : IEEE 802.1p Priority Tagging</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="divider-60 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                            <a href="{{url('contact')}}" class="btn btn-maincolor2 btn-short">Contactez nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Vos bénéfices</span>
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
                                    Avoir un centre d’appel, apporte de nombreux avantages à l’entreprise.
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
                                                                <th class="wd-15p">Bénéfices</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Décongestion des standards</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Prise et traitement rapide des appels entrants</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Fidélisation de la clientèle</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Mutualisation ressources et locaux</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Mise à disposition des salles de centre d’appel</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td > <a  class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Mise à disposition des téléopérateurs</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                            <img style="height: 550px !important" src="/images/centre-appel/benefice.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section> --}}
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Vos bénéfices</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special left text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>
                                    Avoir un centre d’appel, apporte de nombreux avantages à l’entreprise.</span>
                            </p>
                            <div class="divider-40 hidden-above-lg"></div>
                            <div class=" font-weight-light widget widget_nav_menu" style="color: black !important">
                                    <div class="menu-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                                <a href="">Décongestion des standards</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Prise et traitement rapide des appels entrants</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Fidélisation de la clientèle</span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Mutualisation ressources et locaux</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Mise à disposition des salles de centre d’appel</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Mise à disposition des téléopérateurs</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <img style="height: 510px !important" src="/images/centre-appel/benefice.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Avantages de nos solutions</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://www.youtube.com/embed/WwvNiN2_Jlk">
                            <img style="height: 465px !important" src="/images/centre-appel/avantages.jpeg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>
                                    Le centre de contact permet de fidéliser les clients de différentes manières.</span>
                            </p>
                            <div class="divider-40 hidden-above-lg"></div>
                            <div class=" font-weight-light widget widget_nav_menu" style="color: black !important">
                                    <div class="menu-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                                <a href="">Disponibilité 24 heures sur 24, 7 jours sur 7</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Assistance et changement aisés et rapides par
                                                    Internet ou le téléphone</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Possibilité rapide et flexible d´avoir accès à
                                                    l´information désirée</span></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="">Solutions sécurisées</a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls s-py-60 s-py-md-90 s-py-xl-150 c-gutter-30 ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Questions fréquemments posées ?</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">Vous vous posez souvent des questions sur la procédure et l'utilisation <br> plus de soucis veillez consulter notre FAQ pour plus de compréhension et n'hésitez pas de laisser un messages en cas de soucis majeure.</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div id="accordion01" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse01_header">
                            <h5>
                                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    <i class="far fa-question-circle"></i>Comment vous contactez ?
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">
                                Vous pouvez nous contacter en utilisant le numéro de fixe, notre mail au dessus ou en clicquant sur le bouton contactez nous pour obtenir le formulaire de contact
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    <i class="far fa-question-circle"></i>Quel est fonctionnement de votre télésecretariat ?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                Nos Télésecrétaires Assurent la Gestion des Appels & de votre Agenda en Temps Réel.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    <i class="far fa-question-circle"></i>Comment fonctionne Gestion De La Relation Client ?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">
                                C'est la mise en œuvre de moyens et de techniques dans le but de créer et d'entretenir une relation
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div id="accordion02" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse06_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse06" aria-expanded="true" aria-controls="collapse06">
                                    <i class="far fa-question-circle"></i>Quel est le fontionnement de votre téléconseil ?
                                </a>
                            </h5>
                        </div>

                        <div id="collapse06" class="collapse" role="tabpanel" aria-labelledby="collapse06_header" data-parent="#accordion02">
                            <div class="card-body">
                                Optez pour nos Télésecrétaires Spécialisées pour votre Cabinet Médical, votre TPE, PME.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse07_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                    <i class="far fa-question-circle"></i>Comment fonctionne votre centre d'assistance ?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion02">
                            <div class="card-body">
                                Relation de Confiance. Confidentialité. Contrat sans engagement. Gain Organisationnel.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="collapse08_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                    <i class="far fa-question-circle"></i>Est il possible d'éffectuer en recevoir des appels dans vos locaux ?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse08" class="collapse" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion02">
                            <div class="card-body">
                                Il possible d'en effectuer ou d'en recevoir des appels de nos locaux nous sommes là pour vous satisfaire.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
