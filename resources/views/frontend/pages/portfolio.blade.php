@extends('frontend.layouts.master')
@section('content')
    <!-- Banner Start -->
	<section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/portfolio-banner.jpg') }}');"></span>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Notre portfolio</h1>
						<div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="{{ route('index') }}" title="Home">Acceuil</a>
                            <span class="arrow"><img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow"></span>
                            <p>Portfolio</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

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
					<div class="row">
                        <div class="col-12">
                            <div
                                class="pagination wow fadeup-animation"
                                data-wow-duration="1s"
                                data-wow-delay="0.2s"
                            >
                                <ul>
                                    <li>
                                        <a
                                            href="javascript:void(0);"
                                            class="arrow"
                                            title="Previous"
                                            ><img
                                                src="{{asset('frontend/images/right-arrow.svg')}}"
                                                alt="Arrow"
                                        /></a>
                                    </li>
                                    <li><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li class="active">
                                        <a href="javascript:void(0);">3</a>
                                    </li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li><a href="javascript:void(0);">5</a></li>
                                    <li>
                                        <a
                                            href="javascript:void(0);"
                                            class="arrow"
                                            title="Next"
                                            ><img
                                                src="{{asset('frontend/images/right-arrow.svg')}}"
                                                alt="Arrow"
                                        /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->

	<!-- Contact Us Start -->
    @include('frontend.layouts.contactUs_section')
	<!-- Contact Us End -->

@endsection

	
	