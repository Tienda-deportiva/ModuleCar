<div class="jumbotron mt-3">
    <h3>Editar Factura</h3>
</div>
<?php 
    while($fac=mysqli_fetch_assoc($factura)) {
?>
<form action="<?php echo getUrl("Factura","Factura","postUpdate");?>" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Factura</label>
            <input type="hidden" name="cod_fact" value="<?php echo $fac['cod_fact'];?>">
            <input type="date" name="fecha_fact" id="" class="form-control" value="<?php echo $fac['fecha_fact'];?>">
            <input type="number" name="total_fact" id="" class="form-control" value="<?php echo $fac['total_fact'];?>">
            <input type="text" name="obs_fact" id="" class="form-control" value="<?php echo $fac['obs_fact'];?>">
        </div>
        <div class="col-md-4">
            <label for="">Usuarios</label>
            <select name="cod_user" id="" class="form-control">
                <?php 
                    while($usu=mysqli_fetch_assoc($usuarios)) {
                        if ($usu['cod_user']==$fac['cod_user']) {
                            echo "<option value='".$usu['cod_user']."' selected>".$usu['login_user']."</option>";  
                        }else{
                            echo "<option value='".$usu['cod_user']."'>".$usu['login_user']."</option>"; 
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="submit" value="Editar" class="btn btn-success">
        </div>
    </div>
</form>
<?php 
    }
?>