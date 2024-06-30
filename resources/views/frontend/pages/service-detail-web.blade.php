@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/7.jpg') }}');"></span>
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
                            <p>Développement web</p>
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
                    <div class="services-sm-image w-img mb-45"><img src="{{ asset('frontend/images/8.jpg') }}"
                            alt="services-sm-img"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45"><img src="{{ asset('frontend/images/9.jpg') }}"
                            alt="services-sm-img"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Développement web</h4>
                    <p class="services-text mb-25"> Un outil efficace pour votre entreprise, un site web bien conçu et optimisé vous permet d’être
                        visible en ligne, d’accroître votre crédibilité et d’améliorer l’image de marque de votre
                        entreprise. La présence en ligne est essentielle pour les entreprises de toutes tailles de nos
                        jours. <br>Voici quelques avantages d’avoir un site web : </p>
                    <h5 class="services-sm-title mb-25"> Accessibilité 24/7</h5>

                    <p class="services-text mb-45"> L'un des avantages majeurs d'avoir un site web est qu'il permet à votre entreprise d'être accessible
                        24 heures sur 24, 7 jours sur 7. Les clients potentiels peuvent consulter vos produits, services et
                        informations à tout moment, quelle que soit leur localisation géographique. Cela vous permet de
                        toucher un public plus large et de générer des opportunités commerciales, même en dehors des heures
                        de bureau traditionnelles.</p>



                    <h5 class="services-sm-title mb-25"> Crédibilité et professionnalisme </h5>
                    <p> Un site web bien conçu renforce la crédibilité et le professionnalisme de votre entreprise. Il offre
                        une plateforme pour présenter vos produits, services, témoignages clients et informations
                        pertinentes. Un site web de qualité témoigne de votre engagement envers la satisfaction du client et
                        renforce la confiance en votre marque.</p>

                    <h5 class="services-sm-title mb-25">Élargissement de la portée </h5>

                    <p>Avec un site web, vous n'êtes plus limité par des frontières géographiques. Vous pouvez atteindre
                        des clients potentiels à l'échelle locale, nationale ou même internationale, en fonction de vos
                        objectifs commerciaux. Cela offre une opportunité unique d'élargir votre portée et d'explorer de
                        nouveaux marchés sans les contraintes traditionnelles liées à l'expansion géographique.</p>

                        <h5 class="services-sm-title mb-25">Communication efficace </h5>

                        <p> Votre site web est un canal de communication essentiel avec vos clients. Nous vous aidons à fournir
                            des informations sur vos produits, des réponses aux questions fréquemment posées, des coordonnées de
                            contact et même intégrer des fonctionnalités interactives telles que des formulaires de demande de
                            devis ou de réservation en ligne. Cela permet une communication efficace avec vos clients
                            potentiels, en facilitant l'échange d'informations et en améliorant le service à la clientèle.</p>

                            <h5 class="services-sm-title mb-25">Marketing et promotion</h5>

                            <p> Un site web offre une plateforme puissante pour votre stratégie de marketing et de promotion. Nous
                                utilisons des techniques telles que le référencement (SEO) pour améliorer la visibilité de votre
                                site web dans les moteurs de recherche, attirer du trafic qualifié et augmenter vos chances de
                                conversions. De plus, nous pouvons intégrer des fonctionnalités de partage sur les réseaux sociaux
                                pour encourager les utilisateurs à diffuser votre contenu et à promouvoir votre entreprise.
                                Intégrer un site web dans votre stratégie de communication d'entreprise présente de nombreux
                                avantages. Il offre une accessibilité permanente à votre entreprise, renforce votre crédibilité,
                                élargit votre portée géographique, facilite la communication avec les clients et vous permet de
                                mettre en œuvre des initiatives de marketing et de promotion efficaces.
                                Si vous souhaitez rester compétitif sur le marché d'aujourd'hui, contactez-nous dès maintenant pour
                                obtenir votre site web essentiel pour votre entreprise.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
