
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDog.php');   
    $orderModel = new ModelDog();
    $result = $orderModel->getDogsForName($_REQUEST['Nombre']);;
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/ShowPerro.php');

?>