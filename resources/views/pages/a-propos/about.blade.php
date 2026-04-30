@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>A propos de nous </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">
                        A propos de nous
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <h2 class="special-heading underline text-center text-lg-left">
                    <span>A propos</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <p>
                    Afric Consulting Group est une boite de télécommunication.
                    Nous avons avons des partenariats avec les grandes startup de télécommunications du Burkina Faso Mali Benin et nous gérons leur service kiosques pour la satisfaction des clients des différents réseaux.
                </p>
                <p>
                    Nous faisons de la transformation digital(Conseils, accompagnement et intégration de solutions et de nouvelles technologies).
                </p>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="divider-50 hidden-below-lg"></div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-box text-center text-lg-left small-box">
                            <div class="icon-styled ">
                            <span class="iconify color-main" data-icon="mdi:message-text-outline" style="font-size: 60px;"></span>
                            </div>
                            <h5>Campagne SMS</h5>
                        </div>
                        <div class="divider-40 hidden-above-sm"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box text-center text-lg-left small-box">
                            <div class="icon-styled ">
                            <span class="iconify color-main" data-icon="mdi:code-tags" style="font-size: 70px;"></span>
                            </div>
                            <h5>Développement Web et Mobile</h5>
                        </div>
                    </div>
                </div>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <p>
                    Nous offrons plusieurs service dans notre boite à savoir service Kioque, centre d'appel. Ici votre satisfaction est notre priorité. Nous sommes ouverts du Lundi au Vendredi de 7h30 à 16h30 avec une pause de 12h00 à 13h00. Vous trouverez notre localité à Gounghin à 50m de Kaïzer.
                </p>
            </div>
        </div>
    </div>
    <div class="mt--15"></div>
</section>

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="item-media cover-image">
                    <img style="height: 650px" src="images/pillone_about.jpeg" alt="img">
                </div>
            </div>
            <div class="col-12 col-lg-6 section-special right text-center text-lg-left z-index-2">
                <div class="ls ms">
                    <div>
                        <h2 class="special-heading underline text-center text-lg-left">
                            <span>Qui sommes nous</span>
                        </h2>
                        <div class="divider-55 hidden-below-lg"></div>
                        <div class="divider-40 hidden-above-lg"></div>
                        <div class="special-heading font-weight-light">
                            <p class="color-darkgrey">Nous sommes une entreprises qui excelle dans le domaine de la télécommunication et nous euvrons à passer les informations importantes aux communocteurs abonnés.</p>
                        </div>
                        <div class="divider-20"></div>
                        <div class="special-heading font-weight-light">
                            <p class="color-darkgrey">Nous concevons des sites web dynamiques et statiques, des applications web,  des aplications USSD, nous travaillons en scrum (méthode agil) pour satisfaire le client et finir le projet à temps.</p>
                        </div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-40 hidden-above-lg"></div>
                        <a href="{{url('nous_contactez')}}" class="btn btn-maincolor2 btn-short text-center">Contact nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150 c-gutter-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    <span>Nos Services</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">Nous offrons les meilleurs services et nous veillons à ce que l'information soit passée. <br> Noussommes là pour vous aider dans les projets vous satisfaire et participer à sa réalisation.</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled ">
                        <a href="#">
                            <span class="iconify color-main" data-icon="mdi:headset" style="font-size: 70px;"></span>
                        </a>
                    </div>
                    <div class="media-body">
                        <h5>
                            <a href="service-single.html">Centre d'Appel</a>
                        </h5>
                        <p>
                            Service client, aide et support en permanance 24h/7j. contactez nous sur le +226 25 41 64 66 pour plus d'informations
                        </p>
                    </div>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled ">
                        <a href="service-single.html">
                            <span class="iconify color-main" data-icon="mdi:store-outline" style="font-size: 70px;"></span>
                        </a>
                    </div>
                    <div class="media-body">
                        <h5>
                            <a href="#">Service Kiosque</a>
                        </h5>
                        <p>
                            Conception et mise en place de kiosque mobile, Création et mise à jour de contenue. Nous connectons les usager à un fournisseur de services à valeur ajoutée.
                        </p>
                    </div>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled ">
                        <a href="service-single.html">
                            <span class="iconify color-main" data-icon="mdi:code-tags" style="font-size: 70px;"></span>
                        </a>
                    </div>
                    <div class="media-body">
                        <h5>
                            <a href="#">Développement Web et Mobile</a>
                        </h5>
                        <p>
                            Nous conception et créons des sites web, applications USSD, applications web et applications mobiles, des programmes informatiques, à la différence qu'on se spécialise dans le domaine mobile et nomade (mobile, smartphone, tablettes).
                        </p>
                    </div>
                </div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-lg-6">
                <div class="media">
                    <div class="icon-styled ">
                        <a href="service-single.html">
                            <span class="iconify color-main" data-icon="mdi:lightning-bolt-outline" style="font-size: 70px;"></span>
                        </a>
                    </div>
                    <div class="media-body">
                        <h5>
                            <a href="service-single.html">Transformation digitale</a>
                        </h5>
                        <p>
                            Conseils, accompagnement et intégration de solutions et de nouvelles technologies dans l'ensemble des activités d'une entreprise afin de simplifier le travail des employés et d'améliorer ses performances
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="item-media cover-image">
                    <img style="height: 650px" src="images/mission.jpg" alt="img">
                </div>
            </div>
            <div class="col-12 col-lg-6 section-special right z-index-2">
                <div class="ls ms">
                    <div>
                        <h2 class="special-heading underline text-center text-lg-left">
                            <span>Notre mission</span>
                        </h2>
                        <div class="divider-55 hidden-below-lg"></div>
                        <div class="divider-40 hidden-above-lg"></div>
                        <div class="special-heading font-weight-light">
                            <p class="color-darkgrey">Est d'aider les differentes startup de télécommunications dans la diffusion des messages, former les entreprises et les jeunes dans le domaine du numérique, donner des conseils et participer à l'intégration des du digital dans les entreprises, développer des solutions numériques. </p>
                        </div>
                        <div class="divider-60 hidden-below-lg"></div>
                        <div class="divider-40 hidden-above-lg"></div>
                        <ul class="list-styled color-darkgrey">
                            <li>Informations générales pour les utilisateurs</li>
                            <li>Actualités sur l'entreprise</li>
                            <li>Conception de site web et mobile</li>
                            <li>Diffusion des méssages</li>
                            <li>Connaissances et expérience de base</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150 c-gutter-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="special-heading underline">
                    <span>Notre équipe</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
                <div class="special-heading font-weight-light">
                    <p class="color-darkgrey">Groupe de personnes travaillant ensemble dans la direction<br> ainsi que quelques membres travaillant dans l'entreprise.</p>
                </div>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6">
                <div class="team-item c-gutter-0 shadow-hover2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-media cover-image">
                                <img src="images/team/03.jpg" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item-content p-20 text-center text-lg-left">
                                <div class="divider-20 hidden-above-lg"></div>
                                <h6 class=" mt-0 mb-0"><a href="team-single.html">Ouédraogo M Serge</a></h6>
                                <div class="divider-25 hidden-below-lg"></div>
                                <div class="divider-10 hidden-above-lg"></div>
                                <p class="color-darkgrey mb-0">Directeur Général</p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <p>
                                    Expérimenté de plus de 20ans dans le domaine de la télécommunication et de l'entrepreunariat.
                                </p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <div class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-linkedin" title="linkedin"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                    <a href="#" class="fab fa-youtube" title="youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-70 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6">
                <div class="team-item c-gutter-0 shadow-hover2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-media cover-image">
                                <img src="images/team/01.jpg" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item-content p-20 text-center text-lg-left">
                                <div class="divider-20 hidden-above-lg"></div>
                                <h6 class=" mt-0 mb-0"><a href="team-single.html">Christine Reedy</a></h6>
                                <div class="divider-25 hidden-below-lg"></div>
                                <div class="divider-15 hidden-above-lg"></div>
                                <p class="color-darkgrey mb-0">Customer Support</p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <p>
                                    In our many years online and many hosts UnlimHost have been
                                </p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <div class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-linkedin" title="linkedin"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                    <a href="#" class="fab fa-youtube" title="youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-70 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6">
                <div class="team-item c-gutter-0 shadow-hover2">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="item-media cover-image">
                                <img src="images/team/02.jpg" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="item-content p-20 text-center text-lg-right">
                                <div class="divider-20 hidden-above-lg"></div>
                                <h6 class=" mt-0 mb-0"><a href="team-single.html">Wendell Simmons</a></h6>
                                <div class="divider-25 hidden-below-lg"></div>
                                <div class="divider-15 hidden-above-lg"></div>
                                <p class="color-darkgrey mb-0">Customer Support</p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <p>
                                    In our many years online and many hosts UnlimHost have been
                                </p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <div class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-linkedin" title="linkedin"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                    <a href="#" class="fab fa-youtube" title="youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="col-md-6">
                <div class="team-item c-gutter-0 shadow-hover2">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="item-media cover-image">
                                <img src="images/team/05.jpg" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="item-content p-20 text-center text-lg-right">
                                <div class="divider-20 hidden-above-lg"></div>
                                <h6 class=" mt-0 mb-0"><a href="team-single.html">Edna Smith</a></h6>
                                <div class="divider-25 hidden-below-lg"></div>
                                <div class="divider-15 hidden-above-lg"></div>
                                <p class="color-darkgrey mb-0">Customer Support</p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <p>
                                    In our many years online and many hosts UnlimHost have been
                                </p>
                                <div class="divider-40 hidden-below-lg"></div>
                                <div class="divider-25 hidden-above-lg"></div>
                                <div class="social-icons">
                                    <a href="#" class="fab fa-facebook-f" title="facebook"></a>
                                    <a href="#" class="fab fa-telegram-plane" title="telegram"></a>
                                    <a href="#" class="fab fa-linkedin" title="linkedin"></a>
                                    <a href="#" class="fab fa-instagram" title="instagram"></a>
                                    <a href="#" class="fab fa-youtube" title="youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
        </div>
    </div>
</section>

</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="js/compressed.js"></script>
<script src="js/main.js"></script>

@endsection


