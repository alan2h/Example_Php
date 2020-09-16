<?php 

    require_once('clase.php');

    $productos = new Producto();

    $result = $productos->obtenerTodos();

    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);

?>