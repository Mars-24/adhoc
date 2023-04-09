@extends('frontend.layouts.master')
@section('content')
    <!-- Banner Start -->
	<section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/services-banner.jpg') }}');"></span>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Nos Services</h1>
						<div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="{{ route('index') }}" title="Home">Accueil</a>
                            <span class="arrow"><img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow"></span>
                            <p>Nos Services</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

    <!-- Services Start -->

	@include('frontend.layouts.services_section')
    <!-- Services End -->
	<!-- Have a Project Start -->
	@include('frontend.layouts.haveProject_section')
	<!-- Have a Project End -->

	
@endsection
		