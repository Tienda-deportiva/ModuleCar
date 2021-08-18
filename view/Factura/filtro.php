<?php
    while($fac=mysqli_fetch_assoc($facturas)){
    echo "<tr>";
        echo "<td>".$fac['cod_fact']."</td>";
        echo "<td>".$fac['fecha_fact']."</td>";
        echo "<td>".$fac['nom_user']."</td>";
        echo "<td>".$fac['ape_user']."</td>";
        echo "<td>".$fac['total_fact']."</td>";
        echo "<td>".$fac['obs_fact']."</td>";
        echo "<td><a href='".getUrl("Factura","Factura","getUpdate",array("cod_fact"=>$fac["cod_fact"]))."'<button class='btn btn-primary'>Editar</button></td>";
        echo "<td><a href='".getUrl("Factura","Factura","getDelete",array("cod_fact"=>$fac["cod_fact"]))."'<button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
    }
?>