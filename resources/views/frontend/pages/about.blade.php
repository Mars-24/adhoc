@extends('frontend.layouts.master')
@section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img"
            style="background-image: url('{{ asset('frontend/images/about-banner.jpg') }}');"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">À Propos De Nous
                        </h1>
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="{{ route('index') }}" title="Acceuil">Acceuil</a>
                            <span class="arrow"><img src="{{ asset('frontend/images/right-arrow.svg') }}"
                                    alt="Arrow"></span>
                            <p>À Propos De Nous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- About Us Start -->
    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center" id="about-us">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about-content wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="title left">
                            <span class="sub-title">À PROPOS DE NOUS</span>
                        </div>
                        <h2 class="h2-title">Nous Sommes Plus Qu'une Agence Numérique</h2>
                        <div class="about-text">
                            <p>Perdurer dans l’avenir ; c’est notre signature.</p>
                            <p>Basée au Togo, adhoc est une agence créative et digitale qui offre des services comme la
                                communication 360° ; la création et gestion des marques ; le community management ; le
                                référencement SE0, le développement web et le web design.</p>
                            <p>adhoc a pour mission d'accompagner et de guider tous types d'entreprises à la recherche des
                                meilleures stratégies visuelles et digitales pour atteindre ses objectifs.</p>
                        </div>
                        <a href="contact-us.html" class="sec-btn" title="Nous Contacter maintenant"><span>Nous
                                Contacter</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-img img2 back-img wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s"
                        style="background-image: url('{{ asset('frontend/images/about-img2.jpg') }}');"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- How We Work Start -->
    <section class="main-how-work">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img back-img wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s"
                        style="background-image: url('{{ asset('frontend/images/about-img.jpg') }}');">
                        <a href="{{ asset('frontend/images/banner-video.mp4') }}" class="video-play-icon popup-youtube"
                            data-fancybox="video" title="Play Video"><span><i class="fa fa-play"
                                    aria-hidden="true"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="title left">
                            <span class="sub-title">nos Valeurs </span>
                        </div>
                        <h3 class="h3-title">Les mots qui nous définissent le mieux sont entre autres: </h3>
                        <div class="about-text">
                            <p></p>
                        </div>
                        <ul>
                            <li><b>Créativité</b> : Nous apportons des idées créatives qui permettent à nos clients de se
                                démarquer de la concurrence. </li>
                            <li><b>Diligence</b> : Nous répondons avec promptitude aux demandes de nos clients.</li>
                            <li><b>Optimisme</b> : Nous croyons qu’en chaque difficulté se trouve une chance, une
                                opportunité de faire mieux et cette croyance fait notre force.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How We Work End -->
    <!-- Our Team Start -->
    @include('frontend.layouts.teams_section')
    <!-- Our Team End -->
    <!-- Contact Us Start -->
    @include('frontend.layouts.contactUs_section')
    <!-- Contact Us End -->
@endsection
