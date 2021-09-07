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
                    <p class="color-darkgrey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec justo rutrum leo feugiat <br> tincidunt. Mauris eleifend efficitur ex, pretium suscipit orci volutpat et.</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6 animate" data-animation="pullDown">
                <form class="contact-form" method="post" action="/">

                    <div class="row c-mb-10 c-gutter-10">

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="name">Enter your name<span class="required"></span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Enter your name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-placeholder">
                                <label for="email">Enter your email<span class="required"></span></label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>


                    </div>
                    <div class="row mb-45">

                        <div class="col-sm-12 mb-0">

                            <div class="form-group has-placeholder">
                                <label for="message">Enter your message</label>
                                <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row d-flex align-items-center">

                        <div class="col-12">

                            <div class="form-group ">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor2 btn-short mb-0 ">Email us
                                </button>
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
                                    Gounghinhin, Ouagadougou
                                    Avenue de la grande mosquée
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
                                    Numéro fixe service
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
                                    Numéro fixe client
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
                                    admin@africconsultinggroup.com
                                    agents@africconsultinggroup.com
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
                        <div class="marker-address">sydney, australia, Liverpool street, 66</div>
                        <div class="marker-title">First Marker</div>
                        <div class="marker-description">

                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-map-marker"></i>
                                        </span>

                                        <span>
                                            Sydney, Australia, Liverpool street, 66
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
                                            admin@africconsultinggroup.com
                                        </span>
                                        <span>
                                            agent@africconsultinggroup.com
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <img class="marker-icon" src="images/map_marker_icon.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
