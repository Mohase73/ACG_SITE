@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services  À Valeurs Ajoutées </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('service')}}">Nos services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Services  À Valeurs Ajoutées
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{--  <section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 pt-2">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Notre stratégie </span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">AFRIC CONSULTING GROUP couvre tout le Burkina Faso, le Mali, le Niger et le Bénin compte conclure des accords de partenariat avec d’autres opérateurs de télécommunication présents en zone CEDEAO. <br>
                        Nous assurons  à nos clients des applications et des services sur mesure répondant à leurs besoins à cout  réduit. <br>
                        Nous sommes également partenaire de plusieurs opérateurs médias (radios, journaux) via ses services de communication SMS et audiotel. <br>
                        Nous mettons au profit du grand public un ensemble riche de produits de personnalisation et d’animation autour de la téléphonie mobile at l’envoi groupé de SMS pour les professionnels et TPE : SMS association, SMS mairie, SMS services à la personne, SMS Diagnostic immobilier. <br>
                        Notre plate-forme de SMS est au service des médias, des entreprises, des commerçants, des établissements publics et des associations. La possibilité de répondre à un message SMS offre également différents types de développements interactifs :Universalité de l’accès internet ; L’ergonomie du téléphone mobile; La mutualisation des ressources; La réduction des coûts unitaires de communication; Un marché international.
                    </p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Notre stratégie </span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://www.youtube.com/embed/WwvNiN2_Jlk">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>
                                    E-learning est devenu un terme assez connu internationalement. Les contenus pédagogiques sont mis en ligne, souvent via un module que l'institut, l'école ou l'organisme met en place. L'apprenant peut être n'importe où géographiquement et suivre les cours où qu'il soit : c'est le principal atout du e-learning..</span>
                            </p>
                            <div class="divider-55 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                                        <ul class="list-styled color-darkgrey">

                                            <li >
                                                Créer son rythme et son planning.
                                            </li>
                                            <li >
                                                Site E-commerce..Se créer un espace de travail.
                                            <li >
                                                Pensez à réviser régulièrement.
                                            </li>
                                            <li >
                                                Accordez-vous du temps pour faire des pauses.
                                            </li>
                                        </ul>
                            <div class="divider-60 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  --}}

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light pt-3">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 section-special right text-center text-lg-left">
                <h2 class="special-heading underline text-dark text-center">
                    <span>Notre stratégie </span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                    <p class="color-darkgrey">
                        Nous assurons  à nos clients des applications et des services sur mesure répondant à leurs besoins à cout  réduit. <br>
                        Nous sommes également partenaire de plusieurs opérateurs médias (radios, journaux) via ses services de communication SMS et audiotel. <br>
                        Nous mettons au profit du grand public un ensemble riche de produits de personnalisation et d’animation autour de la téléphonie mobile at l’envoi groupé de SMS pour les professionnels et TPE : SMS association, SMS mairie, SMS services à la personne, SMS Diagnostic immobilier. <br>
                        Notre plate-forme de SMS est au service des médias, des entreprises, des commerçants, des établissements publics et des associations. La possibilité de répondre à un message SMS offre également différents types de développements interactifs :Universalité de l’accès internet ; L’ergonomie du téléphone mobile; La mutualisation des ressources; La réduction des coûts unitaires de communication; Un marché international.
                    </p>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Services Vocaux</span>
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
                                    Le Serveur Vocal Interactif, ou SVI, est une technologie de téléphonie qui permet aux clients d'interagir avec le système hôte de l'entreprise par le biais de menus vocaux configurables, en utilisant des tonalités DTMF en temps réel. Centre d’appel; Développement, intégration de serveurs vocaux interactifs (Serveurs d’entreprise; Sites portails vocaux.); Hébergement de serveurs vocaux interactifs; Standards automatiques.
                                </p>

                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <img style="height: 360px !important" src="/images/service/svi.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>

<section class="ls s-py-20 s-py-md-90 s-py-xl-50  c-gutter-60 c-mb-20">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="special-heading underline text-dark">
                <span>Services SMS</span>
            </h2>
            <div class="divider-55 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <article class="vertical-item type-event status-publish format-standard has-post-thumbnail">
                    <div class="item-media post-thumbnail">
                        <img style="height: 650px !important" src="images/kiosque/maj.jpg" alt="img">
                    </div>
                    <div class="item-content mt-40">
                        <div class="entry-content">
                            <p class="excerpt">
                                Afric Consulting Group est un opérateur de télécomunication.
                            </p>
                            <p>
                            qui connecte un usager à un fournisseur de services à valeur ajoutée, consistant à assurer la facturation et le recouvrement de la totalité des sommes dues par l'usager et à reverser au fournisseur de services la part qui lui revient, sans lui révéler l'identité de l'usager.
                            </p>
                            <ul class="list-styled color-darkgrey">
                                <li>Déterminez ce que vous voulez changer ; </li>
                                <li>Découvrez nos services et nos tarifs ;</li>
                                <li>Contactez nous au <span class="color-main">+226 25 41 64 66</span></li>
                            </ul>
                            <p>
                                Le Kiosque est un ensemble de services web marchands connectés à AEC... et qui s’intègre facilement à votre site web : réservation et inscription en ligne aux cours, programmation d’évènements, billetterie en ligne... Vous n’avez pas encore de site web ? ATL le crée sur-mesure, avec le Kiosque complet !
                            </p>
                        </div>
                    </div>
                </article>


            </div>

            <div class="col-lg-5 mb-0">

                <div id="accordion01" role="tablist">

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse01_header">
                            <h5>
                                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    MEDIA SMS
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/sms.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Services de jeux quiz, voting, sondage et de chat destinés aux médias (radio, télé…..)
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    GRC SMS
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/grc.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Services de gestion clientèle (relance, alerte, réservation, commande) destinés aux assurances, agences de voyage, restaurants…
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    FAITH SMS
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/faith.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Emissions ; diffusion de versets, d’annonces, service de demandes d’aide, résumé de prêches….
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    BANK SMS
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/bank.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Télé–transactions  bancaires simples (consultation de soldes, consultation des dernières opérations comptables, commande de chéquier, alerte découvert bancaire)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    TÉLÉCOM SMS
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/COM.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Diffusion d’annonces publicitaires (push-SMS) vers une base  d’abonnés
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    CASH SMS
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/cash.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Alertes jobs
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/job.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Le service Job SMS permet de rapprocher les demandeurs d’emplois et les différentes structures de recrutement. Les candidats sont informés en temps réel par SMS des nouvelles offres d’emplois.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    Alertes immobilier
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/immobilier.png" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    NEXTO
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/nexto.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nexto dont l'activité historique est la fourniture de services de virtualisation et d'infogérance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Alertes jobs
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/presse.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        envoyer un mail à la maison d'édition ou à l'auteur en lui demandant s'il est possible de recevoir un service presse de tel livre.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    MOBILE SMS
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/kiosque/mobile.jpeg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Personnalisation de mobile, téléchargement de sonneries, de logos via un mobile et via le site : www.africconsultinggroup.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="my-30">
                    <p class="icon-inline">
                        <span class="icon-styled fs-inherit">
                            <i class="fa fa-map-marker color-main"></i>
                        </span>
                        <span>Secteur 8; Rue 8.38; 3ième Etage de l'Immeuble abritant le cabinet d'expertise comptable(CDEC-I), 01 BP 588</span>
                    </p>

                    <p class="icon-inline">
                        <span class="icon-styled fs-inherit">
                            <i class="fa fa-phone fa-flip-horizontal color-main"></i>
                        </span>
                        <span>+226 25 41 64 66</span>
                    </p>

                    <p class="icon-inline">
                        <span class="icon-styled fs-inherit">
                            <i class="fas fa-pencil-alt color-main"></i>
                        </span>
                        <span>medias@africconsultinggroup.com</span>
                    </p>
                </div>

                    @csrf
                    <div class="form-group has-placeholder">
                        <label for="name">Votre nom complet <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" name="name" id="name" class="form-control" placeholder="Votre nom complet">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Téléphone<span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Service<span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="service" id="phone" class="form-control" placeholder="Votre service">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="email">Votre email<span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" name="email" id="email" class="form-control" placeholder="Votre email">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="message">Message</label>
                        <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" id="contact_form_submit"  class="btn btn-maincolor2 btn-short mt-20 mb-0 ">Envoyer
                    </button>


                </form>


            </div>

        </div>
    </div>
</section>

@endsection
