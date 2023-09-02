 <!-- Contact Us Start -->
 <section class="main-contact-us">
    <div class="container">
        <div class="row align-items-end" id="contact-us">
            <div class="col-lg-5 wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="contact-img">
                    <img width="524" height="708" src="{{ asset('frontend/images/contact-img.png') }}"
                        alt="adhoc Man">
                </div>
            </div>
            <div class="col-lg-7 wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="contact-content">
                    <div class="title left">
                        <span class="sub-title">CONTACTEZ-NOUS</span>
                    </div>
                    <h2 class="h2-title">Contactez-nous pour toute information</h2>
                    <div class="contact-form">
                        <form action="{{ route('message') }}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input name="prenoms" type="text" class="form-input"
                                            placeholder="Prénom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input name="name" type="text" class="form-input"
                                            placeholder="Nom de famille" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input type="email" name="email" class="form-input"
                                            placeholder="Adresse e-mail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="phone" class="form-input"
                                            placeholder="Numéro de téléphone" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box">
                                        <textarea name="message" class="form-input" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box mb-0">
                                        <button name="submit" type="submit" value="Submit"
                                            class="sec-btn"><span>Soumettre</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->