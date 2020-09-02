<?php
    require_once('../clase.php');
    $usuario = new Usuario();
    $usuario->setUsername($_POST['username']);
    $usuario->setPassword($_POST['password']);
    $result = $usuario->validate();
    if ($result->num_rows > 0) {
        header('Location: ../../dashboards/dashboard.php');
        exit();
    }else{
        echo 'desaprobado';
    }
?>