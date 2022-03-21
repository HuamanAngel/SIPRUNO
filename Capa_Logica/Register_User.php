<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelUser.php');

    $modelUser = new ModelUser();
    $result = $modelUser->register($_REQUEST['name'],$_REQUEST['lastname'],$_REQUEST['username'],$_REQUEST['password']);
    session_start();
    $_SESSION["message"]="Registrado con exito";
    header("Location: ../Capa_Presentacion/user/Login.php", TRUE, 301);
?>