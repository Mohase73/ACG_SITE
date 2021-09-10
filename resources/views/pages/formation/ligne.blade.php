@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Formations en Ligne </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('formation')}}">Formation</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Formation en ligne
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150  c-gutter-60 c-mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <article class="vertical-item type-event status-publish format-standard has-post-thumbnail">
                    <div class="item-media post-thumbnail">
                        <img src="images/formation/ligne3.jpg" alt="img">
                    </div>
                    <div class="item-content mt-40">
                        <div class="entry-content">
                            <p class="excerpt">
                                Afric Consulting Group fait des formations en ligne.
                            </p>
                            <p>
                                E-learning est devenu un terme assez connu internationalement. Les contenus pédagogiques sont mis en ligne, souvent via un module que l'institut, l'école ou l'organisme met en place. L'apprenant peut être n'importe où géographiquement et suivre les cours où qu'il soit : c'est le principal atout du e-learning.
                            </p>
                            <ul class="list-styled color-darkgrey">
                                <li>Initiation en infirmatique; </li>
                                <li>Entrepreunariat;</li>
                                <li>Contactez nous au <span class="color-main">+226 25 41 64 66</span></li>
                            </ul>
                            <p>
                                CNFDI : Centre National Privé de Formation à distance sous contrôle pédagogique de l'Etat. EDUCATEL : établissement privé de formation à distance. Learnissimo : cours de langue par webcam. laformationadistance.fr : guide indépendant de la formation par correspondance.
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
                                    Créer son rythme et son planning.
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/formation/ligne2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Pour pouvoir suivre une formation en ligne il faut créer son emploie du temps.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    Se créer un espace de travail.
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/formation/ligne2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Avoir un espace de travail ou vous pouvez travailler pendant des heures sans être dérangé.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Pensez à réviser régulièrement.
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/formation/ligne2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Toujours trouver du temps pour faire des révisions pour ne pas oublier ce que vous avez appris.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    Fixez-vous des objectifs.
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/formation/ligne2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Se fixer des objectifs et maximiser pour les atteindre et d'en faire votre priorité.
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
                        <span>Gounghinhin, Ouagadougou Avenue de la grande mosquée</span>
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
                        <span>admin@africconsultinggroup.com</span>
                    </p>
                </div>

                <form class="contact-form" method="post" action="/">


                    <div class="form-group has-placeholder">
                        <label for="name">Votre nom complet <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Votre nom complet">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Téléphone<span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="email">Votre email<span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Votre email">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="message">Message</label>
                        <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor2 btn-short mt-20 mb-0 ">Réservation
                    </button>


                </form>


            </div>

        </div>
    </div>
</section>

@endsection
