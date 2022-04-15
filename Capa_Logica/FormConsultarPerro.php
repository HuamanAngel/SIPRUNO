
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelDog.php');   
    $orderModel = new ModelDog();
    $result = $orderModel->getDogsForName($_REQUEST['Nombre']);;
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/ShowPerro.php');

?>