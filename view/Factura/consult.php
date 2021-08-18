<div class="mt-3 col-md-3 row">
    <input type="text" name="filtro" id="filtro" data-url="<?php echo getUrl("Factura","Factura","filtro",false,"ajax") ?>" class="form-control" placeholder="Buscar...">
</div>
<table class="mt-3 table table-striped table-hover">
    <thead>
        <tr>
            <th>ID Factura</th>
            <th>Fecha</th>
            <th>Nombre Usuario</th>
            <th>Total</th>
            <th>Observación</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($fac=mysqli_fetch_assoc($facturas)){
            echo "<tr>";
                echo "<td>".$fac['cod_fact']."</td>";
                echo "<td>".$fac['fecha_fact']."</td>";
                echo "<td>".$fac['nom_user']."</td>";
                echo "<td>".$fac['total_fact']."</td>";
                echo "<td>".$fac['obs_fact']."</td>";
                echo "<td><a href='".getUrl("Factura","Factura","getUpdate",array("cod_fact"=>$fac["cod_fact"]))."'</td>";
                echo "<td><a href='".getUrl("Factura","Factura","getDelete",array("cod_fact"=>$fac["cod_fact"]))."'</td>";
            echo "</tr>";
            }
        ?>
    </tbody>
</table>