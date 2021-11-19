@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nous contactez </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Contacts
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150 overflow-visible">
    <div class="container">
        <div class="row c-mb-30">
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    Contacts
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">Vous pouvez nous laissez un message nous vous reviendrons sous peu.</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 animate" data-animation="pullDown">
                <form class="contact-form" method="post" action="{{url('contact')}}">
                    @csrf
                    <div class="row c-mb-10 c-gutter-10">

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="name">Entrer votre nom<span class="required"></span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Entrer votre nom">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="email">Entrer votre E-mail<span class="required"></span></label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Entrer votre E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row c-mb-10 c-gutter-10">

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="name">Entrer votre numéro<span class="required"></span></label>
                                <input type="number" aria-required="true" size="30" value="" name="phone" id="name" class="form-control" placeholder="Entrer votre numéro">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="email">Entrer votre sujet<span class="required"></span></label>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="email" class="form-control" placeholder="Entrer votre sujet">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-45">

                        <div class="col-sm-12 mb-0">

                            <div class="form-group has-placeholder">
                                <label for="message">Entrer votre message</label>
                                <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Entrer votre message"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row d-flex align-items-center">

                        <div class="col-12">

                            <div class="form-group ">
                                <button type="submit" id="contact_form_submit"  class="btn btn-maincolor2 btn-short mb-0 ">Envoyer</button>
                            </div>

                            <div class="mb--5"></div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-6 animate" data-animation="pullDown">
                <div class="divider-30 hidden-above-lg"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="media small-box">
                            <div class="icon-styled ">
                                <i class="fas fa-map-marker-alt color-main"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Address
                                </h5>
                                <p>
                                    Secteur 8; Rue 8.38; 3ième Etage de l'Immeuble abritant le cabinet d'expertise comptable(CDEC-I), 01 BP 588
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media small-box">
                            <div class="icon-styled ">
                                <i class="fas fa-mobile-alt color-main"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Téléphone
                                </h5>
                                <p>
                                    +226 25 41 64 66
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media small-box">
                            <div class="icon-styled ">
                                <i class="fas fa-fax color-main"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Fixe
                                </h5>
                                <p>
                                    +226 25 41 64 66
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media small-box">
                            <div class="icon-styled ">
                                <i class="fas fa-envelope-open-text color-main fs-32"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Email
                                </h5>
                                <p>
                                    medias@africconsultinggroup.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt--35"></div>
</section>

<section class="ls s-pt-10 s-pb-60 s-pb-md-90 s-pb-xl-150 overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-12 p-30 box-shadow animate" data-animation="scaleAppear">
                <div class="page_map">
                    <div class="marker">
                        <div class="marker-address">Burki Faso, Mali, Niger, Benin, 66</div>
                        <div class="marker-title">Afric Consulting Group</div>
                        <div class="marker-description">

                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-map-marker"></i>
                                        </span>

                                        <span>
                                            Burki Faso, Mali, Niger, Benin, 66
                                        </span>
                                    </span>
                                </li>

                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-phone"></i>
                                        </span>

                                        <span>
                                            +266 25 41 64 66
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span>
                                            medias@africconsultinggroup.com
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1948.7009024741592!2d-1.5413627091077136!3d12.355995677306993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e95db59c8410d%3A0xc538aa36edadea3f!2srue%208.38%2C%20Goughin%2C%20Ouagadougou!5e0!3m2!1sfr!2sbf!4v1633337806774!5m2!1sfr!2sbf" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
