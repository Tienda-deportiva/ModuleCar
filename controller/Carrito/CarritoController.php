<?php 
    include_once '../model/Carrito/CarritoModel.php';
    public function getInsert(){
        $obj=new CarritoModel();
        $sql="SELECT * FROM productos";
        $productos=$obj->consult($sql);
        include_once '../view/Carrito/consult.php';
    }
?>