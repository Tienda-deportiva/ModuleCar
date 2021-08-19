<!-- SECTION -->
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Cameras<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
<!-- /SECTION -->
<!-- SECTION -->
<div class="section">
<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">

        <!-- section title -->
        <div class="col-md-12">
            <div class="section-title">
                <h3 class="title">New Products</h3>
                <div class="section-nav">
                    <ul class="section-tab-nav tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                        <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                        <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                        <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick" data-nav="#slick-nav-1">
        <!-- juan creo un php para mostrar desde la bd los productos -->
        <?php
        ?>
                            <!-- product -->
                            <div class="product" id="lista-producto">
                                <div class="product-img">
                                    <img src="./img/product01.png" alt="" class="img">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#" data-id="1">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <!-- <del class="product-old-price">$990.00</del> --></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <!--juan modifique la parte de url de envio al insert en php-->
                                <div href="<?php /* echo getUrl("Carrito","Carrito","getInsert"); */?>" class="add-to-cart">
                                    <!--juan agregue esta funcion para agregar al map del icono del carrito-->
                                    <button class="add-to-cart-btn button agregar-carrito"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->

                            <!-- product -->
                            <!--juan comento todo el product pa verficar con una cola card desde la line 118 al 228-->
                             <div class="product">
                                <div class="product-img">
                                    <img src="./img/product02.png" alt="" class="img">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here now</a></h3>
                                    <h4 class="product-price">$980.00 <!-- <del class="product-old-price">$990.00</del> --></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn button"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                            <!-- /product -->

                            <!-- product -->
                            <!-- <div class="product">
                                <div class="product-img">
                                    <img src="./img/product03.png" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                    </div>
                                </div>
                                <div 
                                class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div> -->
                            <!-- /product -->

                            <!-- product -->
                            <!-- <div class="product">
                                <div class="product-img">
                                    <img src="./img/product04.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div> -->
                            <!-- /product -->

                            <!-- product -->
                            <!-- <div class="product">
                                <div class="product-img">
                                    <img src="./img/product05.png" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div> -->
                            <!-- /product -->
                        </div>
                        <div id="slick-nav-1" class="products-slick-nav"></div>
                        <br>
                        <br>
                        <br>
                        <!--juan gregue esta tabla para probar -->
        <!-- <div class="bg-light p-5 rounded-lg m-4 mt-3">
            <h3 style="margin-left: 20px">Lista del Carrito</h3>
        </div> -->
        <!-- <form action="#" method="post">
            <div class="row">
                <div class="col-md-4" style="margin-left: 20px">
                    <label for="my-input" style="margin-left: 20px">Mis Productos</label>
                    <table class="mt-3 table table-striped table-hover"> -->
                        <!-- <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Quitar</th>
                            </tr>
                        </thead> -->
                         <!-- <tbody class="tbody"> -->
                             <!-- <tr>
                                <td class="table__productos"><img src=${item.img} alt="" class="img" style="width: 60px"></td>
                                <td><p class="product-name">${item.title}</p></td>
                                <td><input type="number" style="width: 50px" min="1" name="cant_prod" id="cant" class="input__elemento table__cantidad" value=${item.amount}></td>
                                <td>${item.price}</td>
                                <td><button type="button" class="btn btn-danger delete"><i class="fa fa-trash"></i></button></td>
                            </tr> -->
                         <!-- </tbody>
                    </table>
                    <br><br>
                    <div class="row">
                        <div class="col">
                            <h3 class="itemCartTotal">Total: 0</h3>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-success">Comprar</button>
                        </div>
                    </div> 
                </div>
            </div>
        </form> -->
        <!-- juan termino de editar --> 
                    </div>
                    <!-- /tab -->
                </div>
            </div>
        </div>
        <!-- Products tab & slick -->
        </div>
    <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->