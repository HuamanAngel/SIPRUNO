<?php
    session_start();
    session_destroy();                
    header("Location: ../Capa_Presentacion/FormConsultarPerro.php", TRUE, 301);
?>