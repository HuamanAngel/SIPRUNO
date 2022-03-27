
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDog.php');   
    $dogModel = new ModelDog();
    $dog = $dogModel->getDogsForDni($_GET['code']);
    return include_once('../Capa_Presentacion/consulta/FormRegistrarHistoriaCanina.php');
?>