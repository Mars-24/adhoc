@extends('frontend.layouts.master')
@section('content')
    
	<!-- Banner Start -->
	<section class="main-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-lg-1 order-2 wow right-animation" data-wow-duration="1s" data-wow-delay="0.3s">
					<div class="banner-img-box">
						<img src="{{ asset('frontend/images/banner-man.png') }}" alt="adhoc Man">
						<span class="about-shape1">
							<img width="340" height="188" src="{{ asset('frontend/images/client-satisfaction.svg') }}" alt="adhoc Client Satisfaction">
						</span>
						<span class="about-shape3">
							<img width="190" height="240" src="{{ asset('frontend/images/chart.svg') }}" alt="Chart">
						</span>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="banner-content">
						<span class="sub-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s"></span>
						<h1 class="h1-title wow fadeup-animation" data-wow-delay="0.3s">Perdurer dans l'avenir</h1>
						<div class="banner-btn wow fadeup-animation" data-wow-delay="0.5s">
							<a href="{{ route('contact') }}" class="sec-btn" title="Nous contacter maintenat"><span>Nous contacter</span></a>
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
						<h3 class="h2-title">Nous sommes plus qu'une Agence Numérique</h3>
						<div class="about-text">
							<p>Perdurer dans l’avenir ; c’est notre signature.</p>
							<p>Basée au Togo, adhoc est une agence créative et digitale qui offre des services comme la communication 360° ; la création et gestion des marques ; le community management ; le référencement SE0, le développement web et le web design.</p>
						</div>
						<a href="{{ route('about') }}" class="sec-btn" title="Read More"><span>En Savoir Plus</span></a>
					</div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="about-img-box wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
						<span class="about-bg back-img" style="background-image: url('{{ asset('frontend/images/about-bg.jpg') }}');"></span>
						<div class="about-img back-img" style="background-image: url('{{ asset('frontend/images/about-img.jpg') }}');">
							<a href="{{ asset('frontend/images/banner-video.mp4') }}" class="video-play-icon popup-youtube" data-fancybox="video" title="Play Video"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us End -->

	<!-- Services Start -->
	@include('frontend.layouts.services_section')
	<!-- Services End -->

	<!-- Have a Project Start -->
	@include('frontend.layouts.haveProject_section')
	<!-- Have a Project End -->
	<!-- Portfolio Start -->
	<section class="main-portfolio">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="title-box" id="portfolio">
						<div class="title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
							<span class="sub-title">Portfolio</span>
						</div>
						<h2 class="h2-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">Voir nos travaux récents</h2>
						<div class="portfolio-tabbing wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.4s">
							<ul class="clearfix" id="filters">
								<li><span class="filter active" data-filter=".all, .graphic-design, .web-design, .ui-ux, .mobile-app">Tous</span></li>
								<li><span class="filter" data-filter=".graphic-design">CONCEPTIONS GRAPHIQUES</span></li>
								<li><span class="filter" data-filter=".web-design">CRÉATION DE SITES WEB</span></li>
								<li><span class="filter" data-filter=".mobile-app">SHOOTING PHOTO</span></li>
							</ul>
						</div>
					</div>
					<div class="portfolio-list-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="portfoliolist bydefault_show" id="portfoliolist">
							@foreach ($portfolios as $portfolio)
								<div class="portfolio {{$portfolio->slug}}" data-cat=".{{$portfolio->slug}}">
									<div class="portfolio-wrapper">
										<div class="portfolio-img back-img" style="background-image: url('/storage/uploads/files/{{$portfolio->photo}}')"></div>
										<div class="portfolio-wrapper-text">
												@if ($portfolio->slug=='graphic-design')
												<h3 class="h3-title">Concèption Graphique</h3>
												<p>Concèption, Graphique</p>													
												@elseif ($portfolio->slug=='mobile-app')
												<h3 class="h3-title">Shooting Photo</h3>
												<p>Shooting, Photo</p>
												@elseif ($portfolio->slug=='web-design')
												<h3 class="h3-title">Creation de site web</h3>
												<p>Site Web</p>
												@endif
											{{-- <a href="portfolio-detail.html" title="View More"><i class="fa fa-search" aria-hidden="true"></i></a> --}}
										</div>
									</div>
								</div>
								@endforeach		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->
     <!-- Our Team Start -->
    @include('frontend.layouts.teams_section')
    <!-- Our Team End -->
     <!-- Contact Us Start -->
     @include('frontend.layouts.contactUs_section')
    <!-- Contact Us End -->



@endsection