
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelDog.php');   
    require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelDogDetail.php');   

    $dogModel = new ModelDog();
    $dogModelDetail = new ModelDogDetail();
    $dog = $dogModel->getDogsForDni($_GET['code']);
    $dogDetailFromDni = $dogModelDetail->getForDni($_GET['code']);
    return include_once('../Capa_Presentacion/consulta/FormConsultaHistoriaCanina.php');
?>