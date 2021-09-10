@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nos Formations </h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('service')}}">Nos services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Formations
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 pt-2">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Formations en ligne</span>
                </h2>
                <div class="divider-60 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                        <a href="images/video-bg.png" class="photoswipe-link" data-width="970" data-height="515" data-iframe="https://www.youtube.com/embed/WwvNiN2_Jlk">
                            <img style="height: 530px !important" src="/images/formation/ligne.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms">
                        <div>
                            <p class=" text-center text-lg-left">
                                <span>
                                    E-learning est devenu un terme assez connu internationalement. Les contenus pédagogiques sont mis en ligne, souvent via un module que l'institut, l'école ou l'organisme met en place. L'apprenant peut être n'importe où géographiquement et suivre les cours où qu'il soit : c'est le principal atout du e-learning..</span>
                            </p>
                            <div class="divider-55 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                                        <ul class="list-styled color-darkgrey">

                                            <li >
                                                Créer son rythme et son planning.
                                            </li>
                                            <li >
                                                Site E-commerce..Se créer un espace de travail.
                                            <li >
                                                Pensez à réviser régulièrement.
                                            </li>
                                            <li >
                                                Accordez-vous du temps pour faire des pauses.
                                            </li>
                                        </ul>
                            <div class="divider-60 hidden-below-lg"></div>
                            <div class="divider-40 hidden-above-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls s-py-lg-5 s-py-xl-0 container-px-0 c-gutter-0 bg-light pt-2">
    <div class="container-fluid">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="special-heading underline text-dark">
                    <span>Formation en pésentiel</span>
                </h2>
                <div class="divider-55 hidden-below-lg"></div>
                <div class="divider-40 hidden-above-lg"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 section-special right text-center text-lg-left">
                    <div class="ls ms ">
                        <div>
                            <div class="col-12 text-center">
                                <p class=" text-center text-left">
                                    <span>La formation en présentiel résulte de la présence d'un formateur et des apprenants au sein d'un seul et même lieu. Les formations en présentiel peuvent être individuelles ou collectives. Les formateurs dispensent alors aux apprenants des cours sur un domaine précis et pendant une durée précise et déterminée à l'avance.</span>
                                </p>
                                <div class="divider-55 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>
                                <div class="divider-60 hidden-below-lg"></div>
                                <div class="divider-40 hidden-above-lg"></div>

                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="data-table1" class="table table-striped table-bordered text-nowrap w-100 table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="wd-15p">Formations</th>
                                                                <th>Prix</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a  class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Formation en ligne</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 100000 à 2000000f  </a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: #8CC53D"> <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" >Formation en présentiel</a></td>
                                                                <td> <a class="text-dark" href="#" data-toggle="tooltip" data-placement="top" title="Cliquer pour afficher les détails" > 50000 à 1000000f  </a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 post_format-post-format-video">
                    <div class="embed-responsive text-center">
                            <img style="height: 490px !important" src="/images/formation/present.jpg" alt="img">
                    </div>
                </div>
            </div>
            <div class="divider-60 hidden-below-lg"></div>
            <div class="divider-40 hidden-above-lg"></div>
        </div>
    </div>
</section>

@endsection
