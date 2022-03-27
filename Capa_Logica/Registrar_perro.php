<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDog.php');   
    $dogModel = new ModelDog();
    $temp = $_FILES['Foto']['tmp_name'];
    $archivo = $_FILES['Foto']['name'];
    $tipo = $_FILES['Foto']['type'];
    $dir_db = $_REQUEST['Codigo'];
    $target_path_real = "uploads/";
    $target_path = $_SERVER['DOCUMENT_ROOT'].'/tarea1/'.$target_path_real;
    $dir_db = $target_path_real.$dir_db;

    $ext = substr(strstr($tipo, '/', false), 1);
    $dir_db = $dir_db.'.'.$ext; 
    $target_path = $_SERVER['DOCUMENT_ROOT'].'/tarea1/'.$target_path_real.$_REQUEST['Codigo'].'.'.$ext;
    
    move_uploaded_file($temp, $target_path);
    session_start();
    $dog = $dogModel->insertDog($_REQUEST['Codigo'],$_REQUEST['Nombre'],$_REQUEST['FechNac'],$_REQUEST['Raza']
    ,$_REQUEST['Genero'],$dir_db,$_SESSION['user_id']);
    $_SESSION["message"]="Registrado con exito";
    header("Location: ../Capa_Presentacion/FormConsultarPerro.php", TRUE, 301);
    exit();          
       
?> 
