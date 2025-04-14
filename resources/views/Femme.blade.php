@extends('app_base')
@section('content')
    
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Accueil</a></span> / <span>Femmes</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
                        <div class="breadcrumbs-img" style="background-image: url(images/cover-img-1.jpg);">
                            <h2>Femmes</h2>
                        </div>
                        <div class="menu text-center">
                            <p><a href="#">Nouveautés</a> <a href="#">Meilleures ventes</a> <a href="#">Tailles élargies</a> <a href="#">Promotions</a></p>
                        </div>
                    </div>                    
				</div>
			</div>
		</div>

		<div class="colorlib-featured">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/img_bg_2.jpg);">
                                <h2>Décontractés</h2>
                                <p><a href="#" class="btn btn-primary btn-lg">Achetez maintenant</a></p>
                            </div>                            
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/women.jpg);">
                                <h2>Talons</h2>
                                <p><a href="#" class="btn btn-primary btn-lg">Achetez maintenant</a></p>
                            </div>                            
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div<div class="featured-img featured-img-2" style="background-image: url(images/item-14.jpg);">
                                <h2 style="color: black;">Sports</h2>
                                <p><a href="#" class="btn btn-primary btn-lg">Achetez maintenant</a></p>
                            </div>                            
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-xl-12">
						<div class="row row-pb-md">
							@foreach ($mostSells as $mostSell) 
                                <div class="col-md-4 col-lg-4 mb-4 text-center">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                        <img src="{{asset('upload_images/'.$mostSell->image_principale)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                        <div class="desc">
                                            <h2><a href="#">{{$mostSell->intitule}}</a></h2>
                                            <span class="price">{{$mostSell->prix_unitaire}} Franc CFA</span>
											<p><input class="form_control" type="number" min="1" value="1" placeholder="Entrer une quantité"/></p>
											<p><button  class="btn btn-primary add_panier" data-article_id="{{$mostSell->id}}" data-user_id="{{ Auth::check() ? Auth::user()->id : '' }}">Ajouter au panier</button></p> 
						
                                        </div>

                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>

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