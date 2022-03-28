
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDogDetail.php');   
    $DogDetailForUser = new ModelDogDetail();
    session_start();

    $result = $DogDetailForUser->getForOwner($_SESSION['user_id']);;
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/consulta/ConsultaDeudas.php');

?>