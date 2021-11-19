@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Transformations Digitales </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('service')}}">Nos services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Transformation digitale
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
                        <img src="images/digital/dig.jpg" alt="img">
                    </div>
                    <div class="item-content mt-40">
                        <div class="entry-content">
                            <p class="excerpt">
                                Afric Consulting Group fait de la transformation digitale.
                            </p>
                            <p>
                                Aujourd'hui, dans nos sociétés moderne le digital est devenu un facteur essentiel voir indispensable à la prospérité de votre entreprise. Bon nombre d’entreprise se tourne vers lui et cela pour divers raisons. La transformation digitale de votre entreprise vous permettra entre autre d’améliorer votre notoriété auprès de  vos clients, étendre votre zone de chalandise, réduire vos frais d’acquisition de nouveaux clients, améliorer votre communication tout en réduisant son coût, avoir une culture d’entreprise forte, gérer de façons efficace vos équipes mais surtout mieux connaître vos clients afin de leur offrir une meilleure expérience clients.
                            </p>
                            <ul class="list-styled color-darkgrey">
                                <li>facilite une communication en temps réel ; </li>
                                <li>processus métiers automatisés et plus agiles ;</li>
                                <li>Contactez nous au <span class="color-main">+226 25 41 64 66</span></li>
                            </ul>
                            <p>
                                Dans le processus d’accompagnement à la digitalisation, ACG effectue tout d’abord une étude complète de votre entreprise afin de desceller ses besoins et suite à cela des propositions de solutions vous seront faites afin que vous choisissiez celle qui est le plus en phase avec vos valeurs.
                                Ensuite l’étape de développement de vos solutions qui se fera de manière agile et collaborative afin que vous puissiez suivre de façon active le niveau de progression.
                                Et pour terminer, vos bénéficierez d’un suivi pour la prise en main effectifs de ces solutions.
                            </p>
                            {{-- <a  href="images/digital/digital.pdf" type="application/pdf" target="_blank" class="simple_link">Lire plus</a> --}}
                             <a href="images/digital/digital.pdf" download="Tranformation-digital" class="simple_link">Lire plus</a>
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
                                    facilite une communication en temps réel
                                </a>
                            </h5>
                        </div>

                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/digital/digital.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        facilite une communication avec les clients en temps réels via les réseaux sociaux.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    processus métiers automatisés et plus agiles                              </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/digital/digital.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous automatison nos metier et nous utilisons la ethode agile pour satisfaire nos clients.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Sensibilisez et formez vos collaborateurs.
                                </a>
                            </h5>
                        </div>

                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/digital/digital.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous sensibilisons nos collaborateurs pour un meilleur travail d'equipe.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    Déployez les outils nécessaires.
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/digital/digital.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Nous déployons les meilleurs outils nécessaires pour pour réaliser de bon travail.
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

                <form class="contact-form" method="post" action="{{url('transformation_digital')}}">
                    @csrf
                    <div class="form-group has-placeholder">
                        <label for="name">Votre nom complet <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Votre nom complet">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Téléphone<span class="required">*</span></label>
                        <input type="phone" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Service<span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="service" id="phone" class="form-control" placeholder="Votre service">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="email">Votre email<span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Votre email">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="message">Message</label>
                        <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor2 btn-short mt-20 mb-0 ">Envoyer
                    </button>


                </form>


            </div>

        </div>
    </div>
</section>

@endsection
