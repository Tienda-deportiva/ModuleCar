<div class="jumbotron mt-3">
    <h3>Eliminar Factura</h3>
    <?php 
        while($fac=mysqli_fetch_assoc($factura)) {
    ?>
    <form action="<?php echo getUrl("Factura","Factura","postDelete");?>" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Factura</label>
                    <input type="hidden" name="cod_fact" value="<?php echo $fac['cod_fact'];?>">
                    <input type="date" name="fecha_fact" id="" readonly value="<?php echo $fac['fecha_fact'];?>" class="form-control">
                    <input type="number" name="total_fact" id="" readonly value="<?php echo $fac['total_fact'];?>" class="form-control">
                    <input type="text" name="obs_fact" id="" readonly value="<?php echo $fac['obs_fact'];?>" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <p>¿Estas Seguro De Eliminar La Factura?</p>
                <div class="col-md-4">
                    <input type="submit" value="Confirmar" class="btn btn-danger">
                    <a href="<?php echo geturl("Factura","Factura","consult");?>"><button type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </div>
    </form>
    <?php 
        }
    ?>
</div>