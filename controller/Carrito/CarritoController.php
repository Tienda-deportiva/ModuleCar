<?php 
    include_once '../model/Carrito/CarritoModel.php';
    public function getInsert(){
        $obj=new CarritoModel();
        $sql="SELECT * FROM productos";
        $productos=$obj->consult($sql);
        include_once '../view/Carrito/insert.php';
    }
    public function postInsert(){
        $obj=new CarritoModel();
        $cod_prod=$_POST['cod_prod'];
        $nom_prod=$_POST['nom_prod'];
        $img_prod=$_FILES['img_prod']['name'];
        $desc_prod=$_POST['desc_prod'];
        $costo_prod_inv=$_POST['costo_prod_inv'];
        $precio_prod_inv=$_POST['precio_prod_inv'];
        $cod_cat=$_POST['cod_cat'];
        $cod_inv=$_POST['cod_inv'];
        $ruta="img/$img_prod";
        move_uploaded_file($_FILES['img_prod']['tmp_name'], $ruta);
        $sql="INSERT INTO productos VALUES($cod_prod, '$nom_prod', '$desc_prod', $costo_prod_inv, $precio_prod_inv, $cod_cat, $cod_inv, '$ruta')";
        $ejecutar=$obj->insert($sql);
        if ($ejecutar) {
            redirect("Carrito","Carrito","getInsert");
        }else{
            echo "Ups, ha ocurrido un error";
        }
    }
?>