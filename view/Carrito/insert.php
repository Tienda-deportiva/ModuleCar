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
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Quitar</th>
                    </thead>
            <?php 
                /* foreach($prod=mysqli_fetch_assoc($productos)) { */
            ?>
                    <tbody>
                        <td>Balon</td>
                        <td><select name="cant_prod" id="cant_prod" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select></td>
                        <td>$400,00</td>
                        <td>$948.00</td>
                        <td><a href="<?php echo getUrl("Carrito", "Carrito", "getDelete");?>"><button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tbody>
                </table>
            <?php
              /*   } */
            ?>
        </div>
    </div>
</form>