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

                <main class="col-lg-7 col-xl-8 order-lg-2">
                    <article class="post ls vertical-item type-post status-publish format-standard has-post-thumbnail">
                        <div class="item-media">
                            <img src="/images/actualite/Call.jpg" alt="img">
                        </div>
                        <div class="item-content mt-35">
                            <p class="item-meta ">
                                <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">10 Sep
                                        2026</time>
                                </span>
                            </p>


                            <h5 class="mt-15 mb-0">
                                <a href="{{ url('centre-appel') }}">Centre d'appel</a>
                            </h5>

                            <p class="mt-3">
                                Entreprises de télécommunications. ... Un opérateur de télécommunications est une entreprise
                                qui commercialise des services en utilisant des infrastructures de télécommunications.
                            </p>

                            <hr class="mt-20">

                            <div class="meta-wrap">
                                <div class="tag-wrapper">
                                </div>
                                <div class="share_buttons">
                                    <a href="https://www.facebook.com/acgburkinafaso" target="_blank"
                                        class="fab fa-facebook-square " title="facebook"></a>
                                    <a href="https://twitter.com/ConsultingAfric" target="_blank"
                                        class="fab fa-twitter-square " title="twitter"></a>
                                    {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                    <a href="https://www.linkedin.com/company/afric-consulting-group" target="_blank"
                                        class="fab fa-linkedin " title="linkedin"></a>
                                    {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                    {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                                </div>
                            </div>

                            <a href="{{ url('actualite') }}" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                        </div>
                    </article>

                    <article
                        class="post ls vertical-item type-post status-publish has-post-thumbnail gallery post_format-post-format-gallery">
                        <div class="owl-carousel owl-theme" data-loop="true" data-margin="0" data-nav="true"
                            data-dots="false" data-themeclass="entry-thumbnail-carousel" data-center="false" data-items="1"
                            data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1"
                            data-responsive-lg="1">
                            <div class="item">
                                <img style="widows: 800px" src="/images/actualite/boutique.jpg" alt="image">
                            </div>
                            <div class="item">
                                <img style="widows: 800px" src="/images/actualite/bou.jpg" alt="image">
                            </div>
                            <div class="item">
                                <img style="widows: 800px" src="/images/actualite/bout.jpg" alt="image">
                            </div>
                        </div><!-- .owl-thumbnail -->
                        <div class="item-content mt-35">

                            <p class="item-meta ">
                                <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">08 Sep
                                        2026</time>
                                </span>
                            </p>

                            <h5 class="mt-15 mb-0">
                                <a href="{{ url('boutique') }}">Boutique</a>
                            </h5>

                            <p class="mt-3">
                                Le terme « télécommunications » se réfère à la transmission, l'émission ou la réception à
                                distance de signaux diffusant des informations de toute nature : texte, image, son etc. Par
                                opposition aux messagers et postiers, les télécommunications véhiculent les messages
                                immatériels.
                            </p>

                            <hr class="mt-20">

                            <div class="meta-wrap">
                                <div class="tag-wrapper">
                                </div>
                                <div class="share_buttons">
                                    <a href="https://www.facebook.com/acgburkinafaso" target="_blank"
                                        class="fab fa-facebook-square " title="facebook"></a>
                                    <a href="https://twitter.com/ConsultingAfric" target="_blank"
                                        class="fab fa-twitter-square " title="twitter"></a>
                                    {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                    <a href="https://www.linkedin.com/company/afric-consulting-group" target="_blank"
                                        class="fab fa-linkedin " title="linkedin"></a>
                                    {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                    {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                                </div>
                            </div>

                            <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                        </div>
                    </article>

                    <article
                        class="cover-image ds s-overlay post type-post status-publish format-status post_format-post-format-status has-post-thumbnail">
                        <div class="post-thumbnail">
                            <a href="images/actualite/bureau.jpg">
                                <img src="/images/actualite/bureau.jpg" alt="img">
                            </a>
                        </div><!-- .post-thumbnail -->
                        <header class="entry-header">
                            <div class="user-img">
                                <img src="/images/actualite/homme.jpg" alt="img">
                            </div>

                            <!-- .entry-meta -->
                        </header>
                        <h5 class="mt-0 mb-0">
                            <a href="{{ url('actualite') }}">Representant de l'entreprise</a>
                        </h5>
                        <!-- .entry-header -->
                        <div class="item-content">

                            Les télécommunications, étymologiquement « communication à distance », recouvrent les situations
                            de communication immatérielle et distante, excluant ainsi la communication présentielle. À la
                            différence des transports, elles ne supposent pas de déplacement matériel autre que celui des
                            ondes électro-magnétiques.
                        </div>

                        <div class="meta-wrap">
                            <div class="item-meta">
                                <span class="entry-date">
                                    <i class="far fa-clock color-main2"></i>
                                    <time class="published updated" datetime="2018-03-18T15:15:12+00:00">
                                        12 Mai, 2026
                                    </time>
                                </span>
                            </div>
                            <div class="share_buttons">
                                <a href="https://www.facebook.com/acgburkinafaso" target="_blank"
                                    class="fab fa-facebook-square " title="facebook"></a>
                                <a href="https://twitter.com/ConsultingAfric" target="_blank"
                                    class="fab fa-twitter-square " title="twitter"></a>
                                {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                <a href="https://www.linkedin.com/company/afric-consulting-group" target="_blank"
                                    class="fab fa-linkedin " title="linkedin"></a>
                                {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                            </div>
                        </div>

                    </article>

                    <article
                        class="post ls vertical-item type-post cont-padding status-publish has-post-thumbnail post_format-post-format-link box-shadow">
                        <div class="item-content ">
                            <p class="item-meta ">
                                <span>
                                    <i class="far fa-clock color-main"></i>
                                    <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">12 Jan
                                        2026</time>
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
                                </div>
                                <div class="share_buttons">
                                    <a href="https://www.facebook.com/acgburkinafaso" target="_blank"
                                        class="fab fa-facebook-square " title="facebook"></a>
                                    <a href="https://twitter.com/ConsultingAfric" target="_blank"
                                        class="fab fa-twitter-square " title="twitter"></a>
                                    {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                    <a href="https://www.linkedin.com/company/afric-consulting-group" target="_blank"
                                        class="fab fa-linkedin " title="linkedin"></a>
                                    {{--  <a href="#" class="fab fa-instagram" title="instagram"></a>  --}}
                                    {{--  <a href="#" class="fab fa-youtube" title="youtube"></a>  --}}
                                </div>
                            </div>

                            <a href="#" class="btn btn-maincolor2 btn-short mt-40 mb-0">Lire plus</a>

                        </div>
                    </article>

                    <article
                        class="post sls vertical-item type-post status-publish  has-post-thumbnail format-chat post_format-post-format-chat">
                        <div class="item-media">
                            <img src="/images/actualite/admin.jpg" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="#"></a>
                            </div>
                        </div>
                        <div class="item-content mt-35">

                            <p class="item-meta ">
                                <span>
                                    <a href="#" rel="bookmark">
                                        <i class="far fa-clock color-main"></i>
                                        <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">02 Jan
                                            2026</time>
                                    </a>
                                </span>
                            </p>

                            <h5 class="mt-15 mb-0">
                                <a href="{{ url('nous_contactez') }}">L'administration</a>
                            </h5>


                            <div class="entry-content mt-3">
                                <p><strong>Serge: </strong>Le Directeur Général de Afric Consulting Group Telecom. </p>
                                <p><strong>Loui: </strong> Directeur informatique charger de la gestion des ressources
                                    numeriques et la maintenance du serveur.</p>
                                <p><strong>Cheick: </strong>Marketeur digital charger de visualiser et de faire la promotion
                                    de l'entreprise dans les different réseaux sociaux. </p>
                                <p><strong>Mohase: </strong> Développeur web et web mobile charger de concevoir des solutions
                                    numérique en vue des bésoins du client et pour sa satisfaction.</p>
                            </div><!-- .entry-content -->

                        </div>
                    </article>

                    <article
                        class=" box-shadow cont-padding ls post type-post  status-publish format-quote post_format-post-format-quote has-post-thumbnail">
                        <blockquote>
                            <p>
                                Je vous écris pour vous demander si cela ne vous dérangerait pas de nous donner un bref
                                témoignage sur notre site Web. Nous mettons à jour quelques pages, et j'espère ajouter
                                quelque chose de votre part
                            </p>
                        </blockquote>
                        <div class="quote-image">
                            <img src="/images/actualite/homme.jpg" alt="шьп">
                        </div>
                        <div class="quote-title text-center">
                            <h6 class="mb-3">Responsable de la mise à jour</h6>
                            <p class="mb-0 color-darkgrey">24/7 ouvert</p>
                        </div>

                    </article><!-- #post-## -->

                    <article
                        class="ls vertical-item post box-shadow type-post status-publish cont-padding bordered post_format-post-format-aside has-post-thumbnail text-center">
                        <div class="item-content">
                            <p class="item-meta ">
                                <span>
                                    <a href="{{ url('actualite') }}" rel="bookmark">
                                        <i class="far fa-clock color-main"></i>
                                        <time datetime="2018-03-18T15:15:12+00:00" class="published entry-date">12 Dec
                                            2026</time>
                                    </a>
                                </span>
                            </p>


                            <h5 class="mt-15 mb-0">
                                <a href="{{ url('actualite') }}">Porte Monaie Électronique</a>
                            </h5>

                            <p class="mt-3">
                                Au cours de nos nombreuses années en ligne et de nos nombreux hôtes, UnlimHost a été de loin
                                le meilleur. En déménageant dans cette société, nous avons non seulement amélioré notre
                                infrastructure, mais consolidé nos arrangements d'hébergement et la gestion de notre
                                portefeuille de domaines en un seul endroit.
                            </p>

                            <hr class="mt-20">

                            <div class="meta-wrap">
                                <div class="tag-wrapper">
                                </div>
                                <div class="share_buttons">
                                    <a href="https://www.facebook.com/acgburkinafaso" target="_blank"
                                        class="fab fa-facebook-square " title="facebook"></a>
                                    <a href="https://twitter.com/ConsultingAfric" target="_blank"
                                        class="fab fa-twitter-square " title="twitter"></a>
                                    {{--  <a href="#" class="fab fa-telegram-plane" title="telegram"></a>  --}}
                                    <a href="https://www.linkedin.com/company/afric-consulting-group" target="_blank"
                                        class="fab fa-linkedin " title="linkedin"></a>
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
                                <a class="prev page-numbers" href="{{ url('actualite') }}">
                                    <i class="fa fa-chevron-left"></i>
                                    <span class="screen-reader-text">Page précédente</span>
                                </a>
                                <span class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    1
                                </span>
                                <a class="page-numbers shadow-none" href="{{ url('actualite') }}">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    ...
                                </a>
                                <a class="page-numbers" href="{{ url('actualite') }}">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    5
                                </a>
                                <a class="next page-numbers" href="{{ url('actualite') }}">
                                    <span class="screen-reader-text">Page suivante</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </main>

                <aside class="col-lg-5 col-xl-4 order-lg-1">

                    <div class="hero-bg">
                        <div class="widget widget_search">

                            <h3 class="widget-title">Recherche</h3>

                            <form role="search" method="get" class="search-form" action="/">
                                <label for="search-form-top">
                                    <span class="screen-reader-text">Recherche pour:</span>
                                </label>
                                <input type="search" id="search-form-top" class="search-field"
                                    placeholder="Entré le mot clé" value="" name="search">
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
                                <a href="{{ url('service_a_valeur_ajouter') }}">Service Kiosque</a>
                                <ul class="children">
                                    <li class="cat-item">
                                        <a href="{{ url('developpement_web') }}">Dev web et web mobile
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{ url('centre-appel') }}">Centre d'appel
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item">
                                <a href="{{ url('transformation_digital') }}">Transforation digital</a>
                            </li>
                            <li class="cat-item">
                                <a href="{{ url('nos-service') }}">Services</a>
                            </li>
                            <li class="cat-item">
                            </li>
                            <li class="cat-item">
                                <a href="{{ url('campagne_sms') }}">Campagne SMS
                                </a>
                            </li>
                            <li class="cat-item">
                                <a href="{{ url('nous_contactez') }}">Contactez nous
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_calendar">
                        <div id="calendar_wrap" class="calendar_wrap">
                            <table id="wp-calendar">
                                <caption>{{ $calendarTitle }}</caption>
                                <thead>
                                    <tr>
                                        <th>Dim</th>
                                        <th>Lun</th>
                                        <th>Mar</th>
                                        <th>Mer</th>
                                        <th>Jeu</th>
                                        <th>Ven</th>
                                        <th>Sam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calendarWeeks as $week)
                                        <tr>
                                            @foreach ($week as $day)
                                                <td class="{{ $day == 0 ? 'pad' : '' }}">
                                                    {{ $day != 0 ? $day : '' }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" id="prev"><a href="{{ $prevUrl }}">«
                                                {{ $prevMonth }}</a></td>
                                        <td class="pad">&nbsp;</td>
                                        <td colspan="3" id="next"><a
                                                href="{{ $nextUrl }}">{{ $nextMonth }} »</a></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>

                    <div class="widget widget_tag_cloud">

                        <h3 class="widget-title">Pour vous</h3>

                        <div class="tagcloud">

                            </a>

                            <a href="{{ url('boutique') }}" class="tag-cloud-link">
                                Boutique
                            </a>

                            <a href="{{ url('a_propos_de_nous') }}" class="tag-cloud-link">
                                À propos de nous
                            </a>

                            <a href="{{ url('nos_partenaire') }}" class="tag-cloud-link">
                                Nos partenaires
                            </a>

                        </div>
                    </div>


                    <div class="widget widget_recent_posts">

                        <h3 class="widget-title">Articles populaires</h3>
                        <ul class="list-unstyled">
                            <li class="media">
                                <a class="media-image" href="#">
                                    <img src="/images/dev/code.jpg" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="mb-2">
                                        <a href="{{ url('developpement_web') }}">Développement Web et Mobile</a>
                                    </h4>
                                    <p class="item-meta">
                                        <a href="{{ url('developpement_web') }}"><i
                                                class="far color-main fa-clock mr-2"></i> 10 Sep 2021</a>
                                    </p>
                                </div>
                            </li>

                            <li class="media">
                                <a class="media-image" href="#">
                                    <img src="/images/actualite/boutique.jpg" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="mb-2">
                                        <a href="{{ url('boutique') }}">Boutique</a>
                                    </h4>
                                    <p class="item-meta">
                                        <a href="{{ url('boutique') }}"><i class="far color-main fa-clock mr-2"></i> 08
                                            Sep 2021</a>
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
