<?php 
    include_once '../model/Factura/FacturaModel.php';
    class FacturaController{
        public function getInsert(){
            $obj=new FacturaModel();
            $sql="SELECT * FROM facturas";
            $facturas=$obj->consult($sql);
            include_once '../view/Factura/insert.php';
        }
        public function postInsert(){
            $obj=new FacturaModel();
            $cod_fact=$obj->autoincrement('facturas','cod_fact');
            $fecha_fact=$_POST['fecha_fact'];
            $cod_user=$_POST['cod_user'];
            $total_fact=$_POST['total_fact'];
            $obs_fact=$_POST['obs_fact'];
            $sql="INSERT INTO facturas VALUES($cod_fact,'$fecha_fact',$cod_user,$total_fact,'$obs_fact')";
            $ejecutar=$obj->insert($sql);
            if($ejecutar){
                redirect(getUrl("Factura","Factura","getInsert"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }
        public function consult(){
            $obj=new FacturaModel();
            $sql="SELECT facturas.cod_fact, facturas.fecha_fact, usuarios.nom_user, facturas.total_fact, facturas.obs_fact WHERE facturas.cod_user=usuarios.cod_user";
            $facturas=$obj->consult($sql);
            include_once '../view/Factura/consult.php';
        }
        public function filtro(){
            $obj=new FacturaModel();
            

        }
        public function getUpdate(){
            $obj=new FacturaModel();
            $cod_fact=$_GET['cod_fact'];
            $sql="SELECT * FROM facturas WHERE cod_fact=$cod_fact";
            $factura=$obj->consult($sql);
            $sql="SELECT * FROM usuarios";
            $usuarios=$obj->consult($sql);
            include_once '../view/Factura/update.php';
        }
        public function postUpdate(){
            $obj=new FacturaModel();
            $cod_fact=$_POST['cod_fact'];
            $fecha_fact=$_POST['fecha_fact'];
            $cod_user=$_POST['cod_user'];
            $total_fact=$_POST['total_fact'];
            $obs_fact=$_POST['obs_fact'];
            $sql="UPDATE facturas SET fecha_fact=$fecha_fact, cod_user=$cod_user, total_fact=$total_fact, obs_fact=$obs_fact WHERE cod_fact=$cod_fact";
            $ejecutar=$obj->update($sql);
            if ($ejecutar) {
                redirect(getUrl("Factura","Factura","consult"));
            } else {
                echo "Ups, ha ocurrido un error";
            }
        }
        public function getDelete(){
            $obj=new FacturaModel();
            $cod_fact=$_GET['cod_fact'];
            $sql="SELECT * FROM facturas WHERE cod_fact=$cod_fact";
            $factura=$obj->consult($sql);
            include_once '../view/Factura/delete.php';
        }
        public function postDelete(){
            $obj=new FacturaModel();
            $cod_fact=$_POST['cod_fact'];
            $fecha_fact=$_POST['fecha_fact'];
            $total_fact=$_POST['total_fact'];
            $obs_fact=$_POST['obs_fact'];
            $sql="DELETE FROM facturas WHERE cod_fact=$cod_fact";
            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Factura","Factura","consult"));
            } else {
                echo "Ups, ha ocurrido un error";
            }
            
        }
    }
?>