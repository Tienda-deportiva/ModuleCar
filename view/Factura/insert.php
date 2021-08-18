<div class="jumbotron m-3 mt-3">
    <h3>Registrar Factura</h3>
    <form action="<?php echo getUrl("Factura","Factura","postInsert")?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Fecha</label>
                <input type="date" name="fecha_fact" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">ID Usuario</label>
                <input type="number" name="cod_user" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Total</label>
                <input type="number" name="total_fact" id="" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Observación</label>
                <input type="text" name="obs_fact" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-pull-4" style="margin-left: 40px;">
                <input type="submit" value="Registrar" class="btn btn-success col-md-3">
            </div>
        </div>
    </form>
</div>