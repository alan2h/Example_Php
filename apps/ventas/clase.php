<?php
 require_once('../../config.php');

 class Venta{
     
     private $id;
     private $fecha;

     public function setCabecera($id, $fecha){
         /*
         setea la cabecera de la venta
        */
        $mysql = new Connection();
        $query = 'INSERT INTO ventas VALUES ('.$id.',"'.$fecha.'")';
        $result = $mysql->insertar($query);
        return $result;
     }

 }
?>