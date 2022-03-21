
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Datos/ModelDog.php');   
    $dogModel = new ModelDog();
    $result = $dogModel->getDogs();
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/admin/ShowDogs.php');

?>