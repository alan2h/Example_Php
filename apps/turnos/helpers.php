<?php
    require_once('clase.php');

    $turno = new Turno();
    $result = $turno->obtenerTodos();

    $listado_turnos = []; // creo un array para formatear
    $i = 0;
    foreach($result as $item){
        $listado_turnos[$i]['title'] = $item['titulo'];
        $listado_turnos[$i]['start'] = $item['fecha_desde'].'T'.$item['hora_desde'];
        $listado_turnos[$i]['end'] = $item['fecha_hasta'].'T'.$item['hora_hasta'];
        $i += 1; // contador
    }

    echo json_encode($listado_turnos);

?>