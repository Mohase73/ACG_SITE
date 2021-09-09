@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Campagne SMS </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('service')}}">Nos services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Campagne SMS
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
                        <img src="images/sms/sms.jpg" alt="img">
                    </div>
                    <div class="item-content mt-40">
                        <div class="entry-content">
                            <p class="excerpt">
                                Afric Consulting Group fait des campagne d'sms.
                            </p>
                            <p>
                               qui consiste à envoyer des campagnes promotionnelles ou des messages transactionnels via des messages texte (sms). Ces messages sont essentiellement destinés à communiquer des offres limitées dans le temps, des alertes ou des notifications à des clients qui ont consenti à les recevoir.
                            </p>
                            <ul class="list-styled color-darkgrey">
                                <li>Définir l'objectif de votre sms; </li>
                                <li>Cibler vos destinataires;</li>
                                <li>Contactez nous au <span class="color-main">+226 25 41 64 66</span></li>
                            </ul>
                            <p>
                                Les campagnes sms les plus performantes sont souvent envoyées le mardi ou le jeudi de 10 h à 12 h ou de 14 h à 16 h pour être sûr d'être lues.Mais le créneau 17 h à 18h donne de très bons résultats pour toucher les cadres et chefs d'entreprise, juste avant leur sortie du travail.
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
                                    Définir l'objectif de votre sms
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/sms/SMS.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Pour pouvoir envoyer le contenue attendu du client en le satisfaisant.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    Cibler vos destinataires
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/sms/SMS.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous n'envoyon nos messages qu'à ceux qui désirent les recevoir en s'abonnant.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Choisir les mots de vos messages
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/sms/SMS.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous choisissons les mots de nos messages pour ne pas avoir à herter la sensibilité du client.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    Programmer le moment de vos envois
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/sms/SMS.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous programmons les moments d'envoies des messages pour respecter l'heure convenue.
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
