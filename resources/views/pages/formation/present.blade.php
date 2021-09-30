@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Formations en Présentielle </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('formation')}}">Formation</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Formation en Présentielle
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
                        <img src="images/formation/present1.jpg" alt="img">
                    </div>
                    <div class="item-content mt-40">
                        <div class="entry-content">
                            <p class="excerpt">
                                Afric Consulting Group fait des formations en présentielle.
                            </p>
                            <p>
                                La formation en présentiel résulte de la présence d'un formateur et des apprenants au sein d'un seul et même lieu. Les formations en présentiel peuvent être individuelles ou collectives. Les formateurs dispensent alors aux apprenants des cours sur un domaine précis et pendant une durée précise et déterminée à l'avance.
                            </p>
                            <ul class="list-styled color-darkgrey">
                                <li>Initiation en infirmatique; </li>
                                <li>Entrepreunariat;</li>
                                <li>Contactez nous au <span class="color-main">+226 25 41 64 66</span></li>
                            </ul>
                            <p>
                                Le formateur n'est plus présent pour aider les apprenants à apprendre, mais pour les guider à devenir acteurs d'une dynamique d'apprentissage, à devenir autonome dans leur apprentissage.
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
                                            <img src="images/formation/present2.jpg" alt="img">
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
                                    Choisir son module en fonction de la demande du marché.
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/formation/present2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        Pour ne pas avoir à avoir des régret plutard il est conseiller de faire des rechercher et en fonction de la demande du marché choisir son module.
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
                                            <img src="images/formation/present2.jpg" alt="img">
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
                                            <img src="images/formation/present2.jpg" alt="img">
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
                        <span>
                            Secteur 8; Rue 8.38; 3ième Etage de l'Immeuble abritant le cabinet d'expertise comptable(CDEC-I), 01 BP 588</span>
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

                <form class="contact-form" action="{{url('formations')}}" method="post">
                    @csrf
                    <div class="form-group has-placeholder">
                        <label for="name">Votre nom complet <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Votre nom complet">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="phone">Téléphone<span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Votre téléphone">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="name">Réservation </label>
                        <input type="hidden" aria-required="true" size="30" value="" name="reservation" id="name" class="form-control" placeholder="Votre réservation">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="name">Module <span class="required">*</span></label>
                        <input type="text" aria-required="true" size="30" value="" name="module" id="name" class="form-control" placeholder="Votre module">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="name">Formation <span class="required">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="formation">
                            <option >Formation en ligne</option>
                            <option >Formation en presentielle</option>
                          </select>
                        {{--  <input type="text" aria-required="true" size="30" value="" name="formation" id="name" class="form-control" placeholder="Votre formation">  --}}
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="email">Votre email<span class="required">*</span></label>
                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Votre email">
                    </div>

                    <div class="form-group has-placeholder">
                        <label for="message">Suggestion</label>
                        <textarea aria-required="true" rows="4" cols="45" name="suggestion" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor2 btn-short mt-20 mb-0 ">Réservation
                    </button>
                </form>


            </div>

        </div>
    </div>
</section>

@endsection
