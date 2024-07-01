@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/13.jpg') }}');"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Service Detail
                        </h1>
                        <div class="breadcrumb-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="index.html" title="Home">Home</a>
                            <span class="arrow"><img src="{{ asset('/frontend/images/right-arrow.svg') }}"
                                    alt="Arrow"></span>
                            <a href="{{ route('service') }}" title="Service">Services</a>
                            <span class="arrow"><img src="{{ asset('/frontend/images/right-arrow.svg') }}"
                                    alt="Arrow"></span>
                            <p>Inbound Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Service Detail Start -->
    <div class="services-details-area pt-140 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45"><img src="{{ asset('frontend/images/14.jpg') }}"
                            alt="services-sm-img"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45"><img src="{{ asset('frontend/images/15.jpg') }}"
                            alt="services-sm-img"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Inbound Marketing</h4>
                    <p class="services-text mb-25"> L'inbound marketing est une approche stratégique qui permet aux entreprises de se connecter avec
                        leur public cible de manière organique et naturelle. Contrairement aux méthodes de marketing
                        traditionnelles axées sur la publicité intrusive, l'inbound marketing se concentre sur la création
                        de contenu de qualité pour attirer, engager et convertir les clients potentiels.
                        L'un des avantages clés de l'inbound marketing est sa capacité à générer des leads qualifiés pour
                        votre entreprise.
                        Notre équipe ad hoc crée du contenu pertinent et informatif qui répond aux besoins et aux
                        préoccupations de votre public cible. Cela permet d'attirer des visiteurs intéressés par vos
                        produits ou services. Ces visiteurs deviennent des leads qualifiés car ils ont déjà démontré un
                        certain niveau d'intérêt envers votre entreprise en consommant votre contenu.
                        L'inbound marketing est étroitement lié à la présence en ligne et au référencement naturel (SEO). En
                        créant du contenu optimisé pour les moteurs de recherche, nous améliorons votre classement dans les
                        résultats de recherche et augmentons votre visibilité en ligne. Cela permet à votre entreprise
                        d'être trouvée plus facilement par votre public cible lorsqu'il recherche des informations
                        pertinentes.
                        Notre service vous permet également d'engager votre audience de manière authentique et durable. Nous
                        vous aidons à offrir régulièrement du contenu de qualité qui répond à leurs besoins. Cela nous
                        permet d'établir une relation de confiance avec votre public, favorisant ainsi la fidélité des
                        clients et encourageant leur engagement continu avec votre entreprise. En créant une communauté
                        active et engagée autour de votre marque, nous renforçons votre position sur le marché.
                        L'inbound marketing offre de nombreux avantages pour les entreprises qui souhaitent attirer, engager
                        et convertir leur public cible de manière efficace et durable. En adoptant cette approche moderne du
                        marketing, vous pouvez générer des leads qualifiés, augmenter votre visibilité en ligne, fidéliser
                        vos clients et obtenir un retour sur investissement élevé.
                        Si vous souhaitez développer votre entreprise de manière stratégique et durable, prenez rendez-vous
                        dès maintenant </p>

                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
