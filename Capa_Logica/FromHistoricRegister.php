
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDogDetail.php');   
    $dogModelDetail = new ModelDogDetail();
    $temp = $_FILES['rayx']['tmp_name'];
    $archivo = $_FILES['rayx']['name'];
    $tipo = $_FILES['rayx']['type'];
    $dir_db = $_REQUEST['dni'];
    $target_path_real = "uploads/";
    $target_path = $_SERVER['DOCUMENT_ROOT'].'/tarea1/'.$target_path_real;
    $dir_db = $target_path_real.'ray_'.$dir_db;


    $ext = substr(strstr($tipo, '/', false), 1);
    $dir_db = $dir_db.'.'.$ext; 
    $target_path = $_SERVER['DOCUMENT_ROOT'].'/tarea1/'.$target_path_real.'ray_'.$_REQUEST['dni'].'.'.$ext;
    $dog =$dogModelDetail->getForDni($_REQUEST['dni']);
    move_uploaded_file($temp, $target_path);

    session_start();
    $dogModelDetail->insertDogDetail($_REQUEST['dni'],$_REQUEST['simptoms'],$dir_db,$_REQUEST['diagnostic'],
    $_REQUEST['medicine'],$_REQUEST['cost'],$_SESSION['user_id'],$_REQUEST['detail_vomitos'],$_REQUEST['detail_apetito'],$_REQUEST['detail_fiebre'],$_REQUEST['detail_debilidad']);

    // $validation = false;
    // if(preg_match("/^[A-Z]/", $_REQUEST['Nombre'])){
    //     $validation = true;
    // }
    // if(!$validation){
    //     $_SESSION["message"]="Nombre invalido";
    //     return include_once('../Capa_Presentacion/FormConsultarPerro.php');
    // }

    // if($dog){
    //     $dogModelDetail->updateDogDetail($_REQUEST['dni'],$_REQUEST['simptoms'],$dir_db,$_REQUEST['diagnostic'],
    //     $_REQUEST['medicine'],$_REQUEST['cost'],$_SESSION['user_id']);
    // }else{
    //     $dogModelDetail->insertDogDetail($_REQUEST['dni'],$_REQUEST['simptoms'],$dir_db,$_REQUEST['diagnostic'],
    //     $_REQUEST['medicine'],$_REQUEST['cost'],$_SESSION['user_id']);
    // }
    $_SESSION["message"]="Operacion registrada con exito";
    header("Location: ../Capa_Presentacion/FormConsultarPerro.php", TRUE, 301);
    exit();          
?>