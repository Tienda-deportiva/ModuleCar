<!-- NAVIGATION -->
<nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li>
                        <ul class="nav justify-content-center|justify-content-end">
                            <label for="" class="active">Factura</label>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo getUrl("Factura","Factura","getInsert"); ?>">Registrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo getUrl("Factura","Factura","consult"); ?>">Consultar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->