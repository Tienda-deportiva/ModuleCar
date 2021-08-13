<?php
    include_once '../view/partials/head.php';
    include_once '../view/partials/header.php';
    session_start();
    if (isset($_SESSION['carrito'])) {
        
    }
?>
<br>
<div class="bg-light p-5 rounded-lg m-4 mt-3">
    <h3 style="margin-left: 20px">Lista del Carrito</h3>
</div>
<form action="<?php echo getUrl("Carrito","Carrito","postInsert")?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="my-input" style="margin-left: 20px">Mis Productos</label>
            <!-- <input type="number" name="cod_prod" id="" class="form-control" style="margin-left: 20px; margin-bottom: 20px;"> -->
            <?php foreach($_SESSION['']) ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>
    </div>
</form>