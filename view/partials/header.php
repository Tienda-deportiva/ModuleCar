<header>
<!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <!--juan agrege la url en la pagina princial-->
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Category 01</option>
                                    <option value="1">Category 02</option>
                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Mi Cuenta</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <!--juan agrege la url de php para la consulta en php y comento para realizar el carrito abajo de la tarjeta-->
                            <div class="dropdown">
                            <!--juan elimine una class dropdown-toggle, data-toggle dropdown y aria-expanded true para enviar directamente al consult php-->
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                     <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                <!-- juan comente esta linea de codigo de la linea 52 al 87 para enviar directamente al consult.php -->
                                     <div class="qty" id="cant_prod">0</div>
                                </a>
                                <!-- juan comente esta linea de codigo de la linea 58 al 90 para enviar directamente al consult.php -->
                                 <!-- <div class="cart-dropdown">
                                    <div class="cart-list lista-carrito" id="lista-carrito"> -->
                                        <!-- <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#" id="name_prod" data-id="1">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty" id="cant_prod_selected">1x</span id="prec_prod">$980.00</h4>
                                            </div>
                                            <button class="delete" id="vaciar-carrito"><i class="fa fa-close"></i></button>
                                        </div> -->
                                        <!--juan comente esta linea -->
                                        <!-- <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product02.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div> -->
                                    </div>
                                    <!-- <div class="cart-summary"> -->
                                        <!-- <small>3 Item(s) selected</small> -->
                                        <!-- <h5 class="itemCartTotal">Total: 0</h5> -->
                                    </div>
                                    <!-- <div class="cart-btns" style="width: 607px;">
                                        <a href="<?php //echo getUrl("Carrito","Carrito","consult");?>">View Cart</a>
                                         <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a> -->
                                    <!-- </div>
                                </div>
                            </div> -->
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
</header>