<div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-9">
                <div id="colorlib-logo"><a href="index.html">Shop-shoes</a></div>
            </div>
            <div class="col-sm-5 col-md-3">
            <form action="#" class="search-wrap">
               <div class="form-group">
                  <input type="search" class="form-control search" placeholder="Rechercher">
                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
               </div>
            </form>
         </div>
     </div>
        <div class="row">
            <div class="col-sm-12 text-left menu-1">
                <ul>
                    <li class="active"><a href="#">Accueil</a></li>
                    <li class="has-dropdown">
                        <a href={{route('site.homme')}}>Hommes</a>
                        {{-- <ul class="dropdown">
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="order-complete.html">Order Complete</a></li>
                            <li><a href="add-to-wishlist.html">Wishlist</a></li>
                        </ul> --}}
                    </li>
                    <li><a href={{route('site.femme')}}>Femmes</a></li>
                    <li><a href="about.html">Apropos</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="cart" ><a href="{{route('panier.index')}}"><i class="icon-shopping-cart"></i> Pannier [ <span id="cart_value"></span> ] </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
                <div class="row">
                    <div class="owl-carousel2">
                        <div class="item">
                            <div class="col">
                                <h3><a href="#">25% de réduction sur (presque) tout ! Utilisez le code : Promo Été</a></h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col">
                                <h3><a href="#">Notre plus grande promotion : 50% de réduction sur toutes les chaussures d'été</a></h3>
                            </div>
                        </div>									
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>