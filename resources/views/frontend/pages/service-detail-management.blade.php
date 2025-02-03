@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/10.jpg') }}');"></span>
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
                            <p>Brand Management</p>
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
                        <picture class="mb-45">
                            <source srcset="{{ asset('frontend/images/11.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/11.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45">
                        <picture>
                            <source srcset="{{ asset('frontend/images/12.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/12.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Brand Management</h4>
                    <p class="services-text mb-25"> La création et la gestion de marque sont des éléments clés pour toute
                        entreprise souhaitant se démarquer dans un marché compétitif. Une marque forte peut susciter la
                        confiance des consommateurs, créer une connexion émotionnelle et différencier votre entreprise de
                        vos concurrents.
                        La création d'une marque forte chez adhoc commence toujours par une compréhension approfondie de
                        l’entreprise, de ses valeurs, de sa mission et de son public cible.
                        Voici quelques étapes clés que nous suivons pour créer une marque :</p>
                    <h5 class="services-sm-title mb-25"> Nous définissons votre identité de marque </h5>

                    <p class="services-text mb-45"> Identification des valeurs fondamentales de votre entreprise, sa
                        personnalité et son positionnement unique sur le marché.</p>



                    <h5 class="services-sm-title mb-25">Nous développons votre identité visuelle </h5>
                    <p>Création de logo, choix de palette de couleurs, des polices et d'autres éléments visuels qui
                        représentent votre marque de manière cohérente.</p>

                    <h5 class="services-sm-title mb-25">Nous créons une proposition de valeur </h5>

                    <p>Détermination de ce qui distingue votre entreprise de la concurrence afin de communiquer clairement
                        les avantages de vos produits ou services pour vos clients.Une fois que votre marque est créée, il
                        est essentiel de la gérer de manière efficace pour maintenir sa cohérence et son impact.</p>

                    <h5 class="services-sm-title mb-25">Nous assurons que tous les aspects de votre communication</h5>

                    <p> qu'il s'agisse de votre site web, de vos supports marketing ou de vos réseaux sociaux, reflètent
                        l'identité et les valeurs de votre marque.</p>

                    <h5 class="services-sm-title mb-25">Nous impliquons votre public cible </h5>

                    <p>en créant des expériences significatives, en interagissant avec eux sur les réseaux sociaux, en
                        fournissant un excellent service client et en écoutant leurs besoins.</p>
                    <h5 class="services-sm-title mb-25">Nous surveillons votre réputation </h5>

                    <p>Nous suivons ce que les gens disent de votre marque en ligne et répondez de manière appropriée aux
                        commentaires et aux critiques, en montrant votre engagement envers la satisfaction de vos clients.
                        La création et la gestion de marque sont des éléments essentiels pour toute entreprise cherchant à
                        se démarquer sur le marché. Une marque forte crée une perception positive, fidélise les clients et
                        favorise la croissance de l'entreprise. En suivant les étapes de création de marque et en mettant en
                        œuvre des stratégies de gestion efficaces, vous pouvez renforcer votre présence sur le marché et
                        développer une marque solide et durable pour votre entreprise.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
