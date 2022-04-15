
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelUser.php');   
    $veterinary = new ModelUser();
    $result = $veterinary->getAllVeterinary();
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/citas/ShowVeterinary.php');

?>