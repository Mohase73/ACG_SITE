@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nos Actualités </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Actualités
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-pb-30 s-pt-60 s-pt-md-90 s-py-lg-90 s-py-xl-150">
    <div class="container">

        <div class="row c-gutter-60">

            <main class="col-lg-7 col-xl-8">
                <article class="post ls vertical-item type-post status-publish format-standard has-post-thumbnail">
                    <div class="item-media">
                        <img src="images/actualite/Call.jpg" alt="img">
                    </div>
                    <div class="item-content mt-35">
                        <p class="item-meta ">
                            <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">10 Sep 2021</time>
                            </span>
                        </p>


                        <h5 class="mt-15 mb-0">
                            <a href="{{url('centre-appel')}}">Centre d'appel</a>
                        </h5>

                        <p class="mt-3">
                            Entreprises de télécommunications. ... Un opérateur de télécommunications est une entreprise qui commercialise des services en utilisant des infrastructures de télécommunications.
                        </p>

                        <hr class="mt-20">

                        <div class="meta-wrap">
                            <div class="tag-wrapper">
                                <span class="cat-links">
                                    <a href="{{url('boutique')}}">Boutique</a>
                                    <a href="{{url('nos-service')}}">Services</a>
                                    <a href="{{url('formation')}}">Formations</a>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                        <a href="blog-single-right.html" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                    </div>
                </article>

                <article class="post ls vertical-item type-post status-publish format-video has-post-thumbnail post_format-post-format-video">
                    <div class="item-media">
                        <div class="embed-responsive">
                            <a href="images/actualite/08.jpg" class="photoswipe-link" data-width="970" data-height="600" data-iframe="https://www.youtube.com/embed/mcixldqDIEQ">
                                <img src="images/actualite/formation.jpeg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="item-content mt-35">

                        <p class="item-meta ">
                            <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">09 Sep 2021</time>
                            </span>
                        </p>

                        <h5 class="mt-15 mb-0">
                            <a href="{{url('formation')}}">Formations</a>
                        </h5>

                        <p class="mt-3">
                            La compétence Télécom peut s'acquérir grâce à une formation qui facilitera votre embauche ou votre évolution professionnelle dans le domaine Communication. Pour ceux qui souhaitent trouver un emploi rapidement après une formation Télécom, un stage ou une alternance se révèlent souvent comme des choix pertinents.
                        </p>

                        <hr class="mt-20">

                        <div class="meta-wrap">
                            <div class="tag-wrapper">
                                <span class="cat-links">
                                    <a href="{{url('a_propos_de_nous')}}">À Propos de nous</a>
                                    <a href="{{url('nos_partenaire')}}">Partenaires</a>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                        <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire</a>

                    </div>
                </article>

                <article class="post ls vertical-item type-post status-publish has-post-thumbnail gallery post_format-post-format-gallery">
                    <div class="owl-carousel owl-theme" data-loop="true" data-margin="0" data-nav="true" data-dots="false" data-themeclass="entry-thumbnail-carousel" data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                        <div class="item">
                            <img style="widows: 800px" src="images/actualite/boutique.jpg" alt="image">
                        </div>
                        <div class="item">
                            <img style="widows: 800px"  src="images/actualite/bou.jpg" alt="image">
                        </div>
                        <div class="item">
                            <img style="widows: 800px"  src="images/actualite/bout.jpg" alt="image">
                        </div>
                    </div><!-- .owl-thumbnail -->
                    <div class="item-content mt-35">

                        <p class="item-meta ">
                            <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">08 Sep 2021</time>
                            </span>
                        </p>

                        <h5 class="mt-15 mb-0">
                            <a href="{{url('boutique')}}">Boutique</a>
                        </h5>

                        <p class="mt-3">
                            Le terme « télécommunications » se réfère à la transmission, l'émission ou la réception à distance de signaux diffusant des informations de toute nature : texte, image, son etc. Par opposition aux messagers et postiers, les télécommunications véhiculent les messages immatériels.
                        </p>

                        <hr class="mt-20">

                        <div class="meta-wrap">
                            <div class="tag-wrapper">
                                <span class="cat-links">
                                    <a href="{{url('developpement_web')}}">Dev Web</a>
                                    <a href="{{url('nos-service')}}">Services</a>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                        <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                    </div>
                </article>

                <article class="cover-image ds s-overlay post type-post status-publish format-status post_format-post-format-status has-post-thumbnail">
                    <div class="post-thumbnail">
                        <a href="images/actualite/bureau.jpg">
                            <img src="images/actualite/bureau.jpg" alt="img">
                        </a>
                    </div><!-- .post-thumbnail -->
                    <header class="entry-header">
                        <div class="user-img">
                            <img src="images/actualite/homme.jpg" alt="img">
                        </div>

                        <!-- .entry-meta -->
                    </header>
                    <h5 class="mt-0 mb-0">
                        <a href="blog-single-right.html">Representant de la boite</a>
                    </h5>
                    <!-- .entry-header -->
                    <div class="item-content">

                    Les télécommunications, étymologiquement « communication à distance », recouvrent les situations de communication immatérielle et distante, excluant ainsi la communication présentielle. À la différence des transports, elles ne supposent pas de déplacement matériel autre que celui des ondes électro-magnétiques.
                    </div>

                    <div class="meta-wrap">
                        <div class="item-meta">
                            <span class="entry-date">
                                <i class="far fa-clock color-main2"></i>
                                    <time class="published updated" datetime="2018-03-18T15:15:12+00:00">
                                        12 Mai, 2021
                                    </time>
                            </span>
                        </div>
                        <div class="share_buttons">
                            <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                            <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                            {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                            <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                            {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                            {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                        </div>
                    </div>

                </article>

                <article class="post ls vertical-item type-post cont-padding status-publish has-post-thumbnail post_format-post-format-link box-shadow">
                    <div class="item-content ">
                        <p class="item-meta ">
                            <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">12 Jan 2021</time>
                            </span>
                        </p>

                        <p class="mt-3">
                            <a href="http://213.246.56.170:8066/welcome" class="link-underline">
                                https://africconsultinggroup.bf
                            </a>
                        </p>

                        <hr class="mt-20">

                        <div class="meta-wrap">
                            <div class="tag-wrapper">
                                <span class="cat-links">
                                    <a href="{{url('a_propos_de_nous')}}">À Propos de nous</a>
                                    <a href="{{url('nos-service')}}">Services</a>
                                    <a href="{{url('nous_contactez')}}">Contacez nous</a>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                        <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                    </div>
                </article>

                <article class="post sls vertical-item type-post status-publish  has-post-thumbnail format-chat post_format-post-format-chat">
                    <div class="item-media">
                        <img src="images/actualite/admin.jpg" alt="img">
                        <div class="media-links">
                            <a class="abs-link" title="" href="#"></a>
                        </div>
                    </div>
                    <div class="item-content mt-35">

                        <p class="item-meta ">
                            <span>
                                <a href="#" rel="bookmark">
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">02 Jan 2021</time>
                                </a>
                            </span>
                        </p>

                        <h5 class="mt-15 mb-0">
                            <a href="{{url('nous_contactez')}}">L'administration</a>
                        </h5>


                        <div class="entry-content mt-3">
                            <p><strong>Serge: </strong>Le Directeur Général de Afric Consulting Group. </p>
                            <p><strong>Loui: </strong> Directeur informatique charger de la gestion des ressources numeriques et la maintenance du serveur.</p>
                            <p><strong>Cheick: </strong>Marketeur digital charger de visualiser et de faire la promotion de l'entreprise dans les different réseaux sociaux. </p>
                            <p><strong>Alain: </strong> Développeur web et web mobile charger de concevoir des solutions numérique en vue des bésoins du client et pour sa satisfaction.</p>
                        </div><!-- .entry-content -->

                    </div>
                </article>

                <article class=" box-shadow cont-padding ls post type-post  status-publish format-quote post_format-post-format-quote has-post-thumbnail">
                    <blockquote>
                        <p>
                            Je vous écris pour vous demander si cela ne vous dérangerait pas de nous donner un bref témoignage sur notre site Web. Nous mettons à jour quelques pages, et j'espère ajouter quelque chose de votre part
                        </p>
                    </blockquote>
                    <div class="quote-image">
                        <img src="images/actualite/homme.jpg" alt="шьп">
                    </div>
                    <div class="quote-title text-center">
                        <h6 class="mb-3">Responsable de la mise à jour</h6>
                        <p class="mb-0 color-darkgrey">24/7 ouvert</p>
                    </div>

                </article><!-- #post-## -->

                <article class="ls vertical-item post box-shadow type-post status-publish cont-padding bordered post_format-post-format-aside has-post-thumbnail">
                    <div class="item-content">
                        <p class="item-meta ">
                            <span>
                                <a href="blog-single-right.html" rel="bookmark">
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">12 Dec 2020</time>
                                </a>
                            </span>
                        </p>


                        <h5 class="mt-15 mb-0">
                            <a href="blog-single-right.html">Porte Monaie Électronique</a>
                        </h5>

                        <p class="mt-3">
                            Au cours de nos nombreuses années en ligne et de nos nombreux hôtes, UnlimHost a été de loin le meilleur. En déménageant dans cette société, nous avons non seulement amélioré notre infrastructure, mais consolidé nos arrangements d'hébergement et la gestion de notre portefeuille de domaines en un seul endroit.
                        </p>

                        <hr class="mt-20">

                        <div class="meta-wrap">
                            <div class="tag-wrapper">
                                <span class="cat-links">
                                    <a href="{{url('service_a_valeur_ajouter')}}">Kiosque</a>
                                    <a href="{{url('sms')}}">Campagne SMS</a>
                                    <a href="{{url('transformation_digital')}}">Transforation Digital</a>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso"  target="_blank" class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric"  target="_blank" class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group"  target="_blank" class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                        <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                    </div>
                </article><!-- #post-## -->


                <div>
                    <nav class="navigation pagination " role="navigation">
                        <h2 class="screen-reader-text">Navigation dans les articles</h2>
                        <div class="nav-links">
                            <a class="prev page-numbers" href="blog-right.html">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Page précédente</span>
                            </a>
                            <span class="page-numbers current">
                                <span class="meta-nav screen-reader-text">Page </span>
                                1
                            </span>
                            <a class="page-numbers shadow-none" href="blog-right.html">
                                <span class="meta-nav screen-reader-text">Page </span>
                                ...
                            </a>
                            <a class="page-numbers" href="blog-right.html">
                                <span class="meta-nav screen-reader-text">Page </span>
                                5
                            </a>
                            <a class="next page-numbers" href="blog-right.html">
                                <span class="screen-reader-text">Page suivante</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </main>

            <aside class="col-lg-5 col-xl-4">

                <div class="hero-bg">
                    <div class="widget widget_search">

                        <h3 class="widget-title">Recherche</h3>

                        <form role="search" method="get" class="search-form" action="/">
                            <label for="search-form-top">
                                <span class="screen-reader-text">Recherche pour:</span>
                            </label>
                            <input type="search" id="search-form-top" class="search-field" placeholder="Entré le mot clé" value="" name="search">
                            <button type="submit" class="search-submit">
                                <span class="screen-reader-text">Recherche</span>
                            </button>
                        </form>

                    </div>
                </div>

                <div class="widget widget_categories">

                    <h3 class="widget-title">Categories</h3>

                    <ul>
                        <li class="cat-item">
                            <a href="{{url('service_a_valeur_ajouter')}}">Service Kiosque</a>
                            <ul class="children">
                                <li class="cat-item">
                                    <a href="{{url('developpement_web')}}">Dev web et web mobile
                                    </a>
                                </li>
                                <li class="cat-item">
                                    <a href="{{url('centre-appel')}}">Centre d'appel
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item">
                            <a href="{{url('transformation_digital')}}">Transforation digital</a>
                        </li>
                        <li class="cat-item">
                            <a href="{{url('nos-service')}}">Services</a>
                        </li>
                        <li class="cat-item">
                            <a href="{{url('formation')}}">Formations</a>
                        </li>
                        <li class="cat-item">
                            <a href="{{url('campagne_sms')}}">Campagne SMS
                            </a>
                        </li>
                        <li class="cat-item">
                            <a href="{{url('nous_contactez')}}">Contactez nous
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_calendar">

                    <div id="calendar_wrap" class="calendar_wrap">
                        <table id="wp-calendar">
                            <caption>10 Septembre</caption>
                            <thead>
                                <tr>
                                    <th scope="col" title="Monday">Dim</th>
                                    <th scope="col" title="Tuesday">Lun</th>
                                    <th scope="col" title="Wednesday">Mar</th>
                                    <th scope="col" title="Thursday">Mer</th>
                                    <th scope="col" title="Friday">Jeu</th>
                                    <th scope="col" title="Saturday">Ven</th>
                                    <th scope="col" title="Sunday">Sam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1" class="pad">31</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>
                                        <a href="blog-right.html" aria-label="Posts published on January 5, 2017">5</a>
                                    </td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>
                                        <a href="blog-right.html" aria-label="Posts published on January 9, 2017">9</a>
                                    </td>
                                    <td>
                                        <a href="blog-right.html" aria-label="Posts published on January 10, 2017">10</a>
                                    </td>
                                    <td>
                                        <a href="blog-right.html" aria-label="Posts published on January 11, 2017">11</a>
                                    </td>
                                    <td>12</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td colspan="1" class="pad">1</td>
                                    <td colspan="1" class="pad">2</td>
                                    <td colspan="1" class="pad">3</td>
                                    <td colspan="1" class="pad">4</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" id="prev">
                                        <a href="blog-right.html">« Mar</a>
                                    </td>
                                    <td class="pad">&nbsp;</td>
                                    <td colspan="3" id="next">
                                        <a href="blog-right.html">May »</a>
                                    </td>
                                </tr>
                            </tfoot>


                        </table>
                    </div>
                </div>


                <div class="widget widget_tag_cloud">

                    <h3 class="widget-title">Pour vous</h3>

                    <div class="tagcloud">

                        <a href="{{url('formation_en_ligne')}}" class="tag-cloud-link">
                            Formation en ligne
                        </a>

                        <a href="{{url('formation_en_presentielle')}}" class="tag-cloud-link">
                            Formation présentielle
                        </a>

                        <a href="{{url('boutique')}}" class="tag-cloud-link">
                            Boutique
                        </a>

                        <a href="{{url('a_propos_de_nous')}}" class="tag-cloud-link">
                            À propos de nous
                        </a>

                        <a href="{{url('nos_partenaire')}}" class="tag-cloud-link">
                            Nos partenaires
                        </a>

                    </div>
                </div>


                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Articles populaires</h3>
                    <ul class="list-unstyled">
                        <li class="media">
                            <a class="media-image" href="blog-single-right.html">
                                <img src="images/actualite/formation.jpeg" alt="img">
                            </a>
                            <div class="media-body">
                                <h4 class="mb-2">
                                    <a href="{{url('formation')}}">Formations</a>
                                </h4>
                                <p class="item-meta">
                                    <a href="{{url('formation')}}"><i class="far color-main fa-clock mr-2"></i>09 Sep 2021</a>
                                </p>
                            </div>
                        </li>

                        <li class="media">
                            <a class="media-image" href="#">
                                <img src="images/actualite/Call.jpg" alt="img">
                            </a>
                            <div class="media-body">
                                <h4 class="mb-2">
                                    <a href="{{url('centre-appel')}}">Centre d'appel</a>
                                </h4>
                                <p class="item-meta">
                                    <a href="{{url('centre-appel')}}"><i class="far color-main fa-clock mr-2"></i> 10 Sep 2021</a>
                                </p>
                            </div>
                        </li>

                        <li class="media">
                            <a class="media-image" href="#">
                                <img src="images/actualite/boutique.jpg" alt="img">
                            </a>
                            <div class="media-body">
                                <h4 class="mb-2">
                                    <a href="{{url('boutique')}}">Boutique</a>
                                </h4>
                                <p class="item-meta">
                                    <a href="{{url('boutique')}}"><i class="far color-main fa-clock mr-2"></i> 08 Sep 2021</a>
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </aside>

        </div>

    </div>
</section>

@endsection
