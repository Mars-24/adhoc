<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>adhoc</title>
    <meta charset="utf-8">
    <meta name="keywords" content="adhoc" />
    <meta name="description" content="adhoc" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="p:domain_verify" content="2bf55081d98ff43ac9e8046e783a510d"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  
    <meta name="description"
    content="adhoc a pour mission d'accompagner et de guider tous types d'entreprises à la recherche des meilleures stratégies visuelles et digitales pour atteindre ses objectifs.">
    <meta property="og:url" content="https://adhoc.tg">
    <meta property="og:title" content="adhoc">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <!-- FavIcon Link -->
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icon CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Slick Slider CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}">

    <!-- Wow Animation CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">

    <!-- Fancybox CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">

</head>

<body class="fixed">
    <div class="main">

        <!-- Loder Start -->
        <div class="loader-box">
            <div class="loader">
                <span class="circle-1"></span>
                <span class="circle-2"></span>
                <span class="circle-3"></span>
                <span class="circle-4"></span>
                <span class="circle-5"></span>
            </div>
        </div>
        <!-- Loder End -->

        <!-- Header Start -->
        <header class="site-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-box">
                            <div class="site-branding">
                                <a href="{{ route('index') }}" title="adhoc">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="adhoc logo">
                                    <img src="{{ asset('frontend/images/logo-black.png') }}" class="sticky-logo"
                                        alt="adhoc logo">
                                </a>
                            </div>
                            <div class="header-menu">
                                <nav class="main-navigation">
                                    <button class="toggle-button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="mobile-menu-box">
                                        <ul>
                                            <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a
                                                    href="{{ route('index') }}" title="Accueil">Accueil</a></li>
                                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a
                                                    href="{{ route('about') }}" title="À propos">À propos</a></li>
                                            <li class="{{ request()->routeIs('service') || request()->routeIs('service_design-detail')|| request()->routeIs('service_web')|| request()->routeIs('service_shooting')|| request()->routeIs('service_marketing')|| request()->routeIs('service_management') ? 'active' : '' }}"><a
                                                    href="{{ route('service') }}" title="Services">Services</a></li>
                                            <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a
                                                    href="{{ route('portfolio') }}" title="Portfolio">Portfolio</a>
                                            </li>
                                            <li class="{{ request()->routeIs('blog-list') ? 'active' : '' }}">
                                                <a href="{{route('blog-list')}}" title="Blog List">Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="header-btn">
                                    <a href="{{ route('contact') }}"
                                        class="sec-btn {{ request()->routeIs('contact') ? 'active' : '' }}"
                                        title="Nous contacter"><span>Nous
                                            contacter</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        @yield('content')
        <!-- Partners Start -->
        <div class="main-partners wow fadeIn">
            <div class="partners-slider">
                <div class="partner-img">
                    <img width="245" height="34" src="{{ asset('frontend/images/converse-logo.png') }}"
                        alt="adhoc Converse">
                </div>
                <div class="partner-img">
                    <img width="245" height="46" src="{{ asset('frontend/images/unison-logo.png') }}"
                        alt="adhoc Unison">
                </div>
                <div class="partner-img">
                    <img width="245" height="67" src="{{ asset('frontend/images/rollei-logo.png') }}"
                        alt="adhoc Rollei">
                </div>
                <div class="partner-img">
                    <img width="245" height="46" src="{{ asset('frontend/images/deloitte-logo.png') }}"
                        alt="adhoc Deloitte">
                </div>
                <div class="partner-img">
                    <img width="245" height="75"
                        src="{{ asset('frontend/images/friendly-s-restaurant-logo.png') }}" alt="adhoc Friendly">
                </div>
                <div class="partner-img">
                    <img width="245" height="67" src="{{ asset('frontend/images/rollei-logo.png') }}"
                        alt="adhoc Rollei">
                </div>
            </div>
        </div>
        <!-- Partners End -->

        <!-- Footer Start -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-12">
                        <div class="newsletter-box">
                            <div class="title-box">
                                <div class="title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <span class="sub-title">NewsLetter</span>
                                </div>
                                <h2 class="h2-title wow fadeup-animation" data-wow-duration="1s"
                                    data-wow-delay="0.3s">Restons en contact</h2>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="newsletter-form wow fadeup-animation" data-wow-duration="1s"
                                        data-wow-delay="0.4s">
                                        <form>
                                            <div class="form-box mb-0">
                                                <input name="emailaddress" type="email" class="form-input"
                                                    placeholder="Entrer l'adresse e-mail..." required>
                                                <button name="subscribe" type="submit" value="Submit"
                                                    class="sec-btn"><span>Abonnez-Vous</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="footer-info">
                            <div class="footer-logo">
                                <a href="{{ route('index') }}" title="adhoc">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="adhoc logo">
                                </a>
                            </div>
                            <div class="footer-contact-link">
                                <div class="contact-link-box">
                                    <a href="tel:0022892666801" title="appelez sur le +228 92 66 68 01"><img
                                            src="{{ asset('frontend/images/call-icon.svg') }}" alt="Call">+228 92
                                        66 68 01</a>
                                </div>
                                <div class="contact-link-box">
                                    <a href="mailto:infos@adhoc.tg" title="Mail on infos@adhoc.tg"><img
                                            src="{{ asset('frontend/images/email-icon.svg') }}"
                                            alt="Mail">infos@adhoc.tg</a>
                                </div>
                                <div class="contact-link-box">
                                    <a href="javascript:void(0);" title="Adidogomé, Lomé-TOGO, 45406"><img
                                            src="{{ asset('frontend/images/map-icon.svg') }}"
                                            alt="Map">Adidogomé, Lomé-TOGO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="our-links">
                            <div class="title left footer-title">
                                <span class="sub-title">NOS LIENS</span>
                            </div>
                            <ul>
                                <li><a href="{{ route('index') }}" title="Home">Acceuil</a></li>
                                <li><a href="{{ route('about') }}" title="À propos">À propos</a></li>
                                <li><a href="{{ route('service') }}" title="Services">Services</a></li>
                                <li><a href="{{ route('portfolio') }}" title="Portfolio">Portfolio</a></li>
                                <li><a href="{{ route('contact') }}" title="Nous contacter">Nous contacter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="footer-about">
                            <div class="title left footer-title">
                                <span class="sub-title">À PROPOS DE NOUS</span>
                            </div>
                            <p>Basée au Togo, adhoc est une agence créative et digitale qui offre des services comme la
                                communication 360° ; la création et gestion des marques ; le community management ; le
                                référencement SE0, le développement web et le web design.</p>
                            <div class="social-icon">
                                <a href="https://www.facebook.com/adhoc.tg" title="Follow on Facebook"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/adhoc.tg/" title="Follow on Instagram"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/adhoc_tg" title="Follow on Twitter"><i
                                        class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.pinterest.fr/adhoc_Tg/" title="Follow on Pinterest"><i
                                        class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom wow fadeIn">
                            <div class="copy-right">
                                <p>Copyright © 2023 <a href="https://adhoc.tg" target="_blank"
                                        title="adhoc">adhoc</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scroll To Top Start -->
        <a href="javascript:void(0);" id="scroll-to-top" class="scroll-to-top">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </a>
        <!-- Scroll To Top End -->

    </div>


    <!-- Jquery JS Link -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS Link -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>

    <!-- Slick Slider JS Link -->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>

    <!-- Portfolio Tabbing JS Link -->
    <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>

    <!-- Wow Animation JS Link -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>

    <!-- Fancybox JS Link -->
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>

    <!-- Custom JS Link -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-scroll-count.js') }}"></script>
    @yield('script')


</body>

</html>
