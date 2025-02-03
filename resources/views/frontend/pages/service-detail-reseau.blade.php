@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/4.jpg') }}');"></span>
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
                            <p>Réseaux sociaux</p>
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
                            <source srcset="{{ asset('frontend/images/5.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/5.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        
                        </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45">
                        <picture>
                            <source srcset="{{ asset('frontend/images/6.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/6.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Réseaux sociaux</h4>
                    <p class="services-text mb-25"> Les réseaux sociaux jouent, aujourd’hui, un rôle très important dans la stratégie de communication
                        des entreprises. Un community management efficace peut offrir de nombreux avantages :.</p>
                    <h5 class="services-sm-title mb-25"> Renforcer la présence en ligne </h5>

                    <p class="services-text mb-45"> adhoc peut vous aider à renforcer la présence en ligne de votre entreprise en créant et en gérant
                        vos communautés sur les réseaux sociaux professionnels. Notre équipe d'experts peut vous guider dans
                        le choix des plateformes les plus adaptées à votre entreprise et créer des profils attrayants qui
                        captivent votre public cible.</p>



                    <h5 class="services-sm-title mb-25">Engagement accru des utilisateurs </h5>
                    <p>adhoc développe des stratégies pour inciter les utilisateurs à interagir avec la marque sur les
                        réseaux sociaux en créant du contenu engageant, en encourageant les commentaires, le partage et les
                        "j'aime", et en répondant activement aux interactions des utilisateurs. Cela favorise la fidélité à
                        la marque et crée une relation plus étroite avec les clients potentiels.</p>

                    <h5 class="services-sm-title mb-25">Gestion de la réputation en ligne </h5>

                    <p>adhoc surveille votre présence en ligne et gère les commentaires négatifs avec promptitude. Notre
                        équipe de community managers expérimentés peut répondre aux commentaires négatifs de manière
                        professionnelle et empathique, atténuant ainsi les problèmes potentiels et démontrant votre
                        engagement envers la satisfaction des clients.</p>

                        <h5 class="services-sm-title mb-25">Création de contenu attrayant </h5>

                        <p> Nous créons avec vous des contenus pertinents et attrayants pour vos réseaux sociaux. Nous
                            produisons des images, des vidéos, des articles de blog et d'autres formes de contenu qui captivent
                            votre public et renforcent votre image de marque.</p>

                            <h5 class="services-sm-title mb-25">Suivi des performances  </h5>

                            <p>Nous aimons les données chez <span class="h5">ADHOC</span> ; nous les utilisons pour évaluer
                                l'efficacité de votre stratégie de communication et suivons les indicateurs clés de performance tels
                                que l'engagement, la portée et les conversions. Les informations recueillies sont utilisées pour
                                optimiser votre stratégie et maximiser les résultats, en vous fournissant des rapports clairs et
                                détaillés.
                                L'intégration du community management dans votre stratégie de communication d'entreprise offre de
                                nombreux avantages. adhoc, en tant qu'agence de communication spécialisée, peut vous aider à tirer
                                pleinement parti de ces avantages. Notre expertise dans la gestion des réseaux sociaux, la création
                                de contenu attrayant, la gestion de la réputation en ligne et le suivi des performances vous
                                permettra d'atteindre vos objectifs de communication de manière efficace et rentable. Faites
                                confiance à adhoc pour optimiser votre présence en ligne et renforcer votre relation avec votre
                                public cible.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
