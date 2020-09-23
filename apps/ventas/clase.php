<?php
 require_once('../../config.php');

 class Venta{
     
     private $id;
     private $fecha;

     public function setCabecera($fecha){
        /*
         setea la cabecera de la venta
        */
        $mysql = new Connection();
        $query = 'INSERT INTO ventas VALUES (Null,"'.$fecha.'")';
        $result = $mysql->insertar($query);
        return $result;
     }
 }

class DetalleVenta{
   
    private $id;
    private $id_venta;
    private $id_producto;
    private $cantidad;

    public function setDetalleVenta($id_venta, $id_producto, $cantidad){
        /*
        setea los items de ventas
        */
        $mysql = new Connection();
        $query = 'INSERT INTO detalle_venta VALUES (NULL,'.$id_venta.','.$id_producto.','.$cantidad.')';
        //echo ($query);
        //exit();
        $result = $mysql->insertar($query);
        return $result;
    }
}

?>