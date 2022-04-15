
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelCita.php');   
    $veterinary = new ModelCita();
    session_start();
    

    $result = $veterinary->showCita($_SESSION['user_id']);
    $num_resultados = count($result);
    return include_once('../Capa_Presentacion/citas/ShowCitas.php');

?>