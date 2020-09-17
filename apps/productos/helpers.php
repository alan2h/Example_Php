<?php 

    require_once('clase.php');

    $productos = new Producto();

    if (isset($_GET['text_buscar'])){
        $result = $productos->buscarProducto($_GET['text_buscar']);
    }elseif (isset($_GET['codigo'])){
        $result = $productos->buscarCodigo($_GET['codigo']);
    }else{
        $result = $productos->obtenerTodos();
    }

    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    
    print json_encode($rows);

?>