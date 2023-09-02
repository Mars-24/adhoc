<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>adhoc</title>
    <meta charset="utf-8">
    <meta name="keywords" content="adhoc" />
    <meta name="description" content="adhoc" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
                                <a href="index.html" title="Digital Design">
                                    <img src="{{ asset('frontend/images/logo.png') }}" alt="Digital Design">
                                    <img src="{{ asset('frontend/images/logo-black.png') }}" class="sticky-logo"
                                        alt="Digital Design">
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
                                            <li class="{{ request()->routeIs('service') ? 'active' : '' }}"><a
                                                    href="{{ route('service') }}" title="Services">Services</a></li>
                                            <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a
                                                    href="{{ route('portfolio') }}" title="Portfolio">Portfolio</a>
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
        <!-- Banner Start -->
	<section class="main-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-lg-1 order-2 wow right-animation" data-wow-duration="1s" data-wow-delay="0.3s">
					<div class="banner-img-box">
						<img src="{{ asset('frontend/images/banner-man.png') }}" alt="Man">
						<span class="about-shape1">
							<img width="340" height="188" src="{{ asset('frontend/images/client-satisfaction.svg') }}" alt="Client Satisfaction">
						</span>
						<span class="about-shape3">
							<img width="190" height="240" src="{{ asset('frontend/images/chart.svg') }}" alt="Chart">
						</span>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="banner-content">
						<span class="sub-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s"></span>
						<h1 class="h1-title wow fadeup-animation" data-wow-delay="0.3s">Erreur 404</h1>
                        <h2>Veuillez regagner la page d'acceuil</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->
       

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

</body>

</html>
