<?php
   include_once('clase.php');

   $cabecera = new Venta(); // guardamos la cabecera
   $detalle = new DetalleVenta(); // guardamos los detalles

   $hoy = date("Y-m-d");

   $id_venta = $cabecera->setCabecera($hoy);

    foreach($_POST['items'] as $item){
        //echo var_dump($item);
        $detalle->setDetalleVenta($id_venta, $item['id_producto'], $item['cantidad']);
    }

    echo '200-'.$id_venta;

?>