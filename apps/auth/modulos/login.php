<?php
    require_once('../clase.php');
    $usuario = new Usuario();
    $usuario->setUsername($_POST['username']);
    $usuario->setPassword($_POST['password']);
    $result = $usuario->validate();
    if ($result->num_rows > 0) {
        header('Location: ../../dashboards/dashboard.php?message='.'Bienvenido '.$usuario->getUsername().'&status=success');
        exit();
    }else{
        header('Location: ../../../index.php?message='.'Usuario y/o password incorrecto'.'&status=danger');
        exit();
    }
?>