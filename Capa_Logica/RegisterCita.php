<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelCita.php');   
    $cita = new ModelCita();
    session_start();
    $result = $cita->insertCita($_REQUEST['user_id'],$_SESSION['user_id'] ,$_REQUEST['date'],$_REQUEST['hour']);
    if($result){
        $_SESSION["message"]="Cita agendada";
    }else{
        $_SESSION["message"]="La cita ya fue agendada";
    }
    header("Location: ../Capa_Presentacion/FormConsultarPerro.php", TRUE, 301);
    exit();          
?>