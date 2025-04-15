@extends('app_base')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Accueil</a></span> / <span>Contact</span></p>
            </div>
        </div>
    </div>
</div>


<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Information Contact</h3>
                <div class="row contact-info-wrap">
                    <div class="col-md-3">
                        <p><span><i class="icon-location"></i></span> Koulouba <br> Ouagadougou</p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 226 52 14 68 33</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">shopshoes@gmail.com</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-globe"></i></span> <a href="#">youtube.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-wrap">
                    <h3>Get In Touch</h3>
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nom">Nom</label>
                                    <input type="text" id="Nom" class="form-control" placeholder="Votre Nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Prenom">Prenom</label>
                                    <input type="text" id="Prenom" class="form-control" placeholder="Votre Prenom">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Votre adresse email">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="subject">Sujet</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Votre sujet sur ce message">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Dire quelque chose à notre propos"></textarea>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="submit" value="Soumettre" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
            <div class="col-md-6">
                <div id="map" class="colorlib-map"></div>		
            </div>
        </div>
    </div>
</div>

@endsection