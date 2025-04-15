@extends('app_base')
@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
           <li style="background-image: url(images/img_bg_1.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1">Hommes</h1>
                                <h2 class="head-2">Chaussures</h2>
                                <h2 class="head-3">Collection</h2>
                                <p class="category"><span>Nouvelles chaussures tendances</span></p>
                                <p><a href="#" class="btn btn-primary">Découvrir la collection</a></p>
                            </div>
                        </div>
                        
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/img_bg_2.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 otext-inner">
                        <div class="desc">
                            <h1 class="head-1">Enorme</h1>
                            <h2 class="head-2">Promotion</h2>
                            <h2 class="head-3"><strong class="font-weight-bold">50%</strong> de réduction</h2>
                            <p class="cffset-sm-3 text-center slider-text">
                            <div class="slider-category"><span>Grandes promotions sur les sandales</span></p>
                                <p><a href="#" class="btn btn-primary">Découvrir la collection</a></p>
                            </div>
                        </div>
                        
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/img_bg_3.jpg);">
               <div class="overlay"></div>
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6 offset-sm-3 text-center slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h1 class="head-1">Nouveau</h1>
                                <h2 class="head-2">Arrivage</h2>
                                <h2 class="head-3">jusqu'à <strong class="font-weight-bold">30%</strong> de réduction</h2>
                                <p class="category"><span>Nouvelles chaussures élégantes pour hommes</span></p>
                                <p><a href="#" class="btn btn-primary">Découvrir la collection</a></p>
                            </div>
                        </div>
                        
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro">Tout a commencé avec une simple idée : créer des produits de qualité, bien conçus, que je voulais pour moi-même.</h2>
            </div>
            
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url(images/men.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Découvrir la collection homme</a></h2>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url(images/women.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Découvrir la collection femme</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- meilleurs ventes --}}
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Meilleures Ventes</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($mostSells as $mostSell)
                
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border" >
                    <a href="#" class="prod-img">
                        <img src="{{asset('upload_images/'.$mostSell->image_principale)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">{{$mostSell->intitule}}</a></h2>
                        <span class="price">{{$mostSell->prix_unitaire}} Franc CFA</span>
                    </div>
                   

                    <p><input class="form_control" type="number" min="1" value="1" placeholder="Entrer une quantité"/></p>
                    <p><button  class="btn btn-primary add_panier" data-article_id="{{$mostSell->id}}" data-user_id="{{ Auth::check() ? Auth::user()->id : '' }}">Ajouter au panier</button></p> 
                    
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Voir tous les produits</a></p>
            </div>					
        </div>
    </div>
</div>
{{-- marque --}}
<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Nos marques</h2>
            </div>					
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>
@endsection