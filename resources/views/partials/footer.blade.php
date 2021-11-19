<footer class="page_footer ds hero footer-mask backg-gradient s-py-60 s-py-md-90 s-pb-lg-65 s-pt-xl-150 s-pb-xl-135 c-gutter-60">
    <div class="container">
        <div class="row">
            <div class="col-12 animate" data-animation="fadeInUp">
                <div class="z-index-2 ls ms box-shadow">
                    <div class="px-15 px-sm-5 px-xl-0 section-padding">
                        <h5 class="special-heading">
                            <span>Faîtes vos recherche.</span>
                        </h5>
                        <div class="divider-45"></div>
                        <form method="get" id="search-form">
                            <div class="input-group">
                                <input type="text" name="domain-address" class="form-control" placeholder="Entrer le mot clé">
                                <div class="append">
                                    <button type="submit" form="search-form" class="btn btn-maincolor2 btn-short">Recherche</button>
                                </div>
                            </div>
                            <div class="divider-45"></div>
                            <div class="field-checkbox input-styled">
                                <div class="checkbox custom-checkbox ">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="checkboxes" value="" id="form-checkbox">
                                        <label for="form-checkbox">Afric Consulting Group vous remercie pour votre confiance</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="divider-60 divider-md-90 divider-xl-150"></div>
            </div>

            <div class="col-lg-4 text-center text-md-left animate" data-animation="fadeInUp">
                <div class="widget widget_text">
                    <h3 class="widget-title text-white text-bold">A propos de nous</h3>
                    <p>
                        Afric Consulting Group est une socité à responsabilité limité, intervenant dans le domaine de la télécommunication, presente dans quatre pays dont Burkina Faso, Mali, Niger, Benin.
                    </p>
                </div>
                <span class="social-icons">
                    <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                    <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                    {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                    <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                    {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                    {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                </span>
                <div class="divider-60 divider-lg-0"></div>
            </div>

            <div class="col-lg-4 text-center text-md-left animate" data-animation="fadeInUp">
                <div class="widget widget_mailchimp">

                    <h3 class="widget-title text-white text-bold">Newsletter</h3>

                    <p>
                        Veillez souscrire à notre newsletter pour ne manquer aucune information.
                    </p>

                    <form class="signup" action="{{url('subscribe')}}" method="POST">
                        @csrf
                        <label for="mailchimp_email">
                            <span class="screen-reader-text ">Souscrire:</span>
                        </label>

                        <input id="mailchimp_email" name="from_email" type="email" class="form-control mailchimp_email" placeholder="Entrer votre email">

                        <button type="submit" class="search-submit">
                            <span class="screen-reader-text">Souscrire</span>
                        </button>
                        <div class="response"></div>
                    </form>

                    <p class="mb-0 mt-3 fs-12"><span class="color-main2">*</span> Les informations personnelles seront cryptées</p>

                </div>
                <div class="divider-60 divider-lg-0"></div>
            </div>

            <div class="col-lg-4 text-center text-md-left animate" data-animation="fadeInUp">
                <div class="widget widget_nav_menu">
                    <h3 class="widget-title text-white text-bold">Liens</h3>
                    <div class="menu-container">

                        <ul class="menu">

                            <li class="menu-item">
                                <a href="{{url('a_propos_de_nous')}}">
                                    A propos de nous
                                </a>
                            <li class="menu-item">
                                <a href="{{url('nous_contactez')}}" class="contact_modal_window">
                                    Nous contacter
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('formation')}}">
                                    Nos formations
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('nos_service')}}">
                                    Nos service
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('boutique')}}">
                                    Boutique
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt--25 mt-lg-0"></div>
            </div>

        </div>
    </div>
</footer>

<section class="page_copyright ds backg-gradient c-mb-20 s-pt-35 s-pb-15">
    <div class="container">
        <div class="row align-items-center">
            <div class="divider-25 d-none d-lg-block"></div>
            <div class="col-lg-5 text-center text-lg-left animate" data-animation="scaleAppear">
                <p>© Copyright <span class="copyright_year">2021</span> ACG_Dev. Tous droits réservés</p>
            </div>
            <div class="col-lg-7 text-center text-lg-right animate" data-animation="scaleAppear">
                <div class="widget widget_nav_menu">
                    <ul class="menu">
                        <li>
                            <a href="{{url('nos_partenaire')}}">Nos partenaires</a>
                        </li>
                        <li>
                            <a href="{{url('actualite')}}">Actualités</a>
                        </li>
                        <li>
                            <a href="#" class="login_modal_window">Connexion</a>
                        </li>
                        <li>
                            <a href="#" class="login_modal_window">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="divider-25 d-none d-lg-block"></div>
        </div>
    </div>
</section>
