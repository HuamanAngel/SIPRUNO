<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDog.php');   
    $orderModel = new ModelDog();
    $result = $orderModel->deleteDog($_REQUEST['DNI']);
    if(isset($_REQUEST['for-admin']))
        return include_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Logica/Show_All_dog.php');        
    else
        return include_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Logica/FormConsultarPerro.php');
    // $result = $orderModel->deleteDog($_REQUEST['DNI']);
    // if(isset($_REQUEST['for-admin']))
    //     return include_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/admin/ShowDogs.php');        
    // else
    //     return include_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Logica/FormConsultarPerro.php');
?>