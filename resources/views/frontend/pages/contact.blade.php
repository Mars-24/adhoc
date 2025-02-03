@extends('frontend.layouts.master')
@section('content')
    	<!-- Banner Start -->
	<section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/contact-banner.jpg') }}');"></span>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Contactez-nous</h1>
						<div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="{{ route('index') }}" title="Home">Acceuil</a>
                            <span class="arrow"><img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow"></span>
                            <p>Contactez-Nous</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Contact Link Start -->
	<div class="main-contact-link">
		<div class="container">
			<div class="contact-link-list">
				<div class="row">
					<div class="col-lg-4 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="contact-link-text-box">
							<span class="icon"><img width="18" height="18" src="{{ asset('frontend/images/call-icon.svg') }}" alt="Call"></span>
							<p><a href="tel:0022892666801" title="Call on +228 92 66 68 01">+228 92 66 68 01</a></p> 
							<p><a href="tel:0022898170057" title="Call on +228 98 17 00 57">+228 98 17 00 57</a></p>
							
						</div>
					</div>
					<div class="col-lg-4 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="contact-link-text-box">
							<span class="icon"><img width="18" height="13" src="{{ asset('frontend/images/email-icon.svg') }}" alt="Mail"></span>
							<p><a href="mailto:info@email.com" title="Mail on info@email.com">infos@adhoc.tg</a></p>
							<p><a href="mailto:agenceadhoc@gmail.com" title="Mail on support@email.com">agenceadhoc@gmail.com</a></p>
						</div>
					</div>
					<div class="col-lg-4 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.4s">
						<div class="contact-link-text-box">
							<span class="icon"><img width="15" height="22" src="{{ asset('frontend/images/map-icon.svg') }}" alt="Map"></span>
							<p><a href="javascript:void(0);" title="Adidogomé">Adidogomé</a></p>
							<p><a href="javascript:void(0);" title="Lomé-TOGO">Lomé-TOGO</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Link End -->

	<!-- Contact Us Start -->
    <section class="main-contact-us page-contact-us">
		<div class="container">
			<div class="row" id="contact-us">
				<div class="col-lg-7 wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
					<div class="contact-content">
						<div class="title left">
							<span class="sub-title">CONTACTEZ-NOUS</span>
						</div>
						<h2 class="h2-title">Contactez-nous pour plus d'informations</h2>
						<div class="contact-form">
							<form method="POST" action="{{ route('message') }}">
								@csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-box">
											<input name="prenoms" type="text" class="form-input" placeholder="Prénoms" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input name="name" type="text" class="form-input" placeholder="Nom de famille" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input type="email" name="email" class="form-input" placeholder="Adresse e-mail" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-box">
											<input type="text" name="phone" class="form-input" placeholder="Numéro de téléphone" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-box">
											<textarea name="message" class="form-input" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-box mb-0">
											<button name="submit" type="submit" value="Submit" class="sec-btn"><span>Soumettre</span></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-5 wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
					{{-- <div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d172744.69784295498!2d-121.76887171678929!3d38.592420248044654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80852b16e7cc5ef7%3A0x6cdbd93f708beeee!2sWebster%2C%20CA%2095618%2C%20USA!5e0!3m2!1sen!2sin!4v1637322401820!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Us End -->

	
@endsection
