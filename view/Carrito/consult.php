<?php
    include_once '../lib/helpers.php';
    include_once '../view/partials/head.php';
    include_once '../view/partials/header.php';
?>
<br>
<div class="bg-light p-5 rounded-lg m-4 mt-3">
    <h3 style="margin-left: 20px">Lista del Carrito</h3>
</div>
<form action="<?php echo getUrl("Carrito","Carrito","postInsert")?>" method="post">
    <div class="row">
        <div class="col-md-4" style="margin-left: 20px">
            <label for="my-input" style="margin-left: 20px">Mis Productos</label>
                <table class="mt-3 table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <!-- <tr>
                            <td class="table__productos"><img src="./img/product01.png" alt="" class="img" style="width: 60px"></td>
                            <td>Balon</td>
                            <td class="table__cantidad"><input type="number" style="width: 50px" min="1" values="1" name="cant_prod" id="cant"></td>
                            <td>$400,00</td>
                            <td><a href="#"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                            <div class="row">
                                <div class="col">
                                    <h3 class="itemCartTotal text-white">Total: 0</h3>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-success">Comprar</button>
                                </div>
                            </div> 
                        </tr> -->
                    </tbody>
                </table>
        </div>
    </div>
</form>
<br>
<br>
<?php 
    include_once '../view/partials/footer.php';
?>