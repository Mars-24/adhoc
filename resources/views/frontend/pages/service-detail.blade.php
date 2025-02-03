@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/1.jpg') }}');"></span>
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
                            <p>Design graphique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Service Detail Start -->
    <div class="services-details-area pt-50 pb-105">
        <div class="container">
            <div class="row image-service">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45">
                        <picture>
                            <source srcset="{{ asset('frontend/images/2.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/2.jpg') }}"
                            alt="services-sm-img">
                    
                        </picture>
                       
                        </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45">
                        <picture>
                            <source srcset="{{ asset('frontend/images/3.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/3.jpg') }}"
                            alt="services-sm-img">
                        </picture>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Design graphique</h4>
                    <p class="services-text mb-25"> La communication visuelle joue un rôle déterminant dans la création
                        d'une identité de marque forte
                        et mémorable. Les entreprises qui intègrent efficacement la communication visuelle dans leur
                        stratégie de communication bénéficient d'un avantage concurrentiel significatif.
                        adhoc, votre agence créative basée au Togo, vous offre une gamme de services pour vous aider à
                        atteindre vos objectifs de communication visuelle.</p>
                    <h5 class="services-sm-title mb-25"> Renforcement de l'identité de marque </h5>

                    <p class="services-text mb-45"> Nous savons que la communication visuelle permet de développer une
                        identité de marque cohérente et
                        reconnaissable. En travaillant avec vous, nous créons des éléments graphiques de votre marque tels
                        que votre logo, vos couleurs, vos typographies et vos motifs pour donner vie à une image de marque
                        unique qui reflète les valeurs et la personnalité de votre entreprise. Cela aide à créer une
                        connexion émotionnelle avec votre public cible et à renforcer la notoriété de votre marque.</p>



                    <h5 class="services-sm-title mb-25">Amélioration de l'expérience utilisateur </h5>
                    <p>Chez adhoc, nous comprenons l'importance de l'expérience utilisateur dans le monde numérique
                        d'aujourd'hui. Nous intégrons le design graphique dans la création d'interfaces conviviales,
                        attrayantes et intuitives, que ce soit sur votre site web, votre application mobile ou vos supports
                        imprimés. En proposant des designs attrayants et ergonomiques, nous améliorons l'expérience globale
                        de vos clients, renforçant ainsi leur fidélité et leur engagement envers votre marque.</p>

                    <h5 class="services-sm-title mb-25">Différenciation de la concurrence </h5>

                    <p>Nous aidons nos clients ici au Togo, en Afrique et dans le monde à se démarquer de la concurrence.
                        Adhoc s’entoure de designers créatifs, qui conçoivent des supports de communication innovants et
                        professionnels qui permettent à votre entreprise de se distinguer et d'attirer l'attention. Que ce
                        soit à travers des visuels uniques, des campagnes publicitaires créatives ou des supports de
                        communication accrocheurs, notre équipe vous propose des services personnalisés qui vous aident à
                        vous démarquer et à gagner la préférence des consommateurs.
                        L'intégration de la communication visuelle dans la stratégie de communication d'entreprise offre de
                        nombreux avantages, de la création d'une identité de marque forte à la différenciation
                        concurrentielle. Adhoc, votre agence créative, vous aide à exploiter pleinement le potentiel de la
                        communication visuelle en offrant des services personnalisés adaptés à vos besoins.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
