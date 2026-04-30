<div class="header_absolute">
    <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
    <header class="page_header ds justify-nav-end color-change logo-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-4 col-sm-5 col-9">
                    <a href="./" class="logo logo-color">
                        <img src="images/logo_color.png" alt="img">
                    </a>
                </div>
                <div class="col-xl-8 col-1 d-flex align-items-center justify-content-end px-1">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">


                            <li>
                                <a href="/">L'entreprise</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('a_propos_de_nous') }}">A propos de nous</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('nos_partenaire') }}">Partenaires</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('nous_contactez') }}">Contacts</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('nos-service') }}">Nos services</a>
                                <ul style="width: auto !important">
                                    <li style="width: auto !important">
                                        <a href="{{ url('service_a_valeur_ajouter') }}">Services À Valeurs Ajoutées</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="{{ url('developpement_web') }}">Développement Web et Mobile</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="{{ url('centre-appel') }}">Centre d'appel</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Nos solutions</a>
                                <ul style="width: auto !important">
                                    <li style="width: auto !important">
                                        <a href="#">ALERTE JOB</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="#">ALERTE IMMOBILIER</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="#">LOVELINK</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="#">ASTROLOGIE</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="#">ROYALTURF</a>
                                    </li>
                                    <li style="width: auto !important">
                                        <a href="#">PINGFOOT</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('actualite') }}">Actualités</a>
                            </li>
                            <!-- eof blog -->

                            <li>
                                <a href="{{ url('boutique') }}">Boutique</a>
                            </li>


                        </ul>


                    </nav>
                    <!-- eof main nav -->
                </div>
                <div class="col-xl-1 col-md-6 col-sm-5 justify-content-end d-flex align-items-center">
                    <div class="icons-wrap d-flex align-items-center justify-content-end">
                        {{-- <div class="dropdown hidden-below-sm widget_search">
                            <a class="dropdown-toggle dropdown-toggle-split" href="#" id="headerSearchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right ls ms " aria-labelledby="headerSearchDropdown">
                                <form role="search" method="get" class="search-form" action="/">
                                    <label for="search-form-top-modal">
                                        <span class="screen-reader-text">Search for:</span>
                                    </label>
                                    <input type="search" id="search-form-top-modal" class="search-field" placeholder="Search keyword" value="" name="search">
                                    <button type="submit" class="search-submit">
                                        <span class="screen-reader-text">Search</span>
                                    </button>
                                </form>
                            </div>
                        </div> --}}
                        <a href="#" class="far fa-envelope ml-4 mr-2 hidden-below-sm contact_modal_window"></a>
                        <a href="#" class="far fa-user ml-4 hidden-below-sm login_modal_window"></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>
</div>
