@extends('layout.master')

@section('content')
    <!-- Header -->
        @include('partials.contact.header')
    <!-- Contact -->
    <section class="section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h6>Adresses</h6>
                    <p><b>Téléphone :</b> +226 71 71 94 98</p>
                    <p><b>Email :</b> infos@showtools-experience.com</p>
                    <p><b>Addresse :</b> Pissy, Ouagadougou, Burkina Faso</p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <h6>Formulaire de contact</h6>
                    <p>Seriez-vous interessés de travailler avec nous?</p>
                    <form method="post" class="contact__form" action="mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Votre Nom *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Votre Email *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Votre Numero de Téléphone *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="subject" type="text" placeholder="Sujet *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Envoyer le mesage">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <!-- Map Section-->
                @include('partials.contact.map')
        </div>
    </section>
@endsection
    
    