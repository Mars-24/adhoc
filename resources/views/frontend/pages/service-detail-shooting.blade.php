@extends('frontend.layouts.master') @section('content')
    <!-- Banner Start -->
    <section class="main-banner inner-banner">
        <span class="inner-banner-bg back-img" style="background-image: url('{{ asset('frontend/images/16.jpg') }}');"></span>
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
                            <p>Shooting photo produits</p>
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
                            <source srcset="{{ asset('frontend/images/17.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/17.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-sm-image w-img mb-45">
                        <picture>
                            <source srcset="{{ asset('frontend/images/18.webp') }} 1x" type="image/webp">
                            <img src="{{ asset('frontend/images/18.jpg') }}"
                            alt="services-sm-img">
                           </picture>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="services-d-title mb-25">Shooting photo produits</h4>
                    <p class="services-text mb-25">  En tant qu'entreprise moderne, il est essentiel de se démarquer de la concurrence et de captiver l'attention de vos clients potentiels. L'une des meilleures façons d'y parvenir est d'investir dans un shooting photo produit professionnel. Les images de haute qualité de vos produits peuvent faire une énorme différence dans la perception de votre marque et influencer les décisions d'achat des consommateurs.
                        En travaillant avec notre équipe de photographes, les photos de vos produits peuvent produire les effets suivants :</p>
                    <h5 class="services-sm-title mb-25"> Des images qui suscitent l'émotion </h5>

                    <p class="services-text mb-45"> Les photographies de produits bien réalisées ont le pouvoir de susciter des émotions chez les consommateurs. Des images attrayantes et de qualité professionnelle peuvent captiver l'attention des visiteurs de votre site web, les incitant à explorer davantage vos produits. Des photos soigneusement mises en scène avec des éclairages appropriés et des angles créatifs par les photographes adhoc peuvent créer une connexion émotionnelle entre vos produits et vos clients potentiels, stimulant ainsi leur désir d'achat.</p>



                    <h5 class="services-sm-title mb-25">Une image de marque cohérente</h5>
                    <p>                    Un shooting photo produit professionnel permet de créer une image de marque cohérente et professionnelle. En utilisant des techniques de photographie ad hoc à votre secteur d'activité et à votre public cible, vous pouvez renforcer l'identité visuelle de votre entreprise. Des images cohérentes et de haute qualité contribuent à instaurer la confiance chez les consommateurs, en leur montrant que vous attachez de l'importance aux détails et à la qualité de vos produits.
                    </p>

                    <h5 class="services-sm-title mb-25">Différenciation par rapport à la concurrence </h5>

                    <p>                    Dans un marché concurrentiel, il est crucial de se démarquer. Un shooting photo produit professionnel vous permet de présenter vos produits sous leur meilleur jour, en mettant en avant leurs caractéristiques uniques. Des images qui capturent l'attention et mettent en valeur les avantages de vos produits vous permettent de vous démarquer de la concurrence et de renforcer votre position sur le marché.
                    </p>

                        <h5 class="services-sm-title mb-25">Amélioration de la conversion des ventes </h5>

                        <p>Des photos de produits de qualité professionnelle ont un impact direct sur les taux de conversion des ventes. Lorsque les consommateurs voient des images claires et attrayantes de vos produits, ils sont plus susceptibles d'acheter. Les images de qualité mettent en valeur les détails, les textures et les couleurs de vos produits, aidant ainsi les clients à se faire une idée précise de ce qu'ils achètent. Une meilleure compréhension du produit entraîne une plus grande confiance et augmente les chances de conversion des ventes.
                            Investir dans un shooting photo produit professionnel est un choix judicieux pour toute entreprise qui souhaite améliorer son image de marque, se démarquer de la concurrence et augmenter ses ventes. Des images de haute qualité créent une première impression positive et influencent les décisions d'achat des consommateurs. En travaillant avec une agence de communication expérimentée et spécialisée dans la photographie de produits comme adhoc, vous bénéficiez de résultats professionnels qui auront un impact significatif sur votre entreprise.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Service Detail End -->
@endsection
