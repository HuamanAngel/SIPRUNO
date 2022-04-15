<?php
    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Datos/ModelUser.php');   
        $modelUser = new ModelUser();
        $result = $modelUser->loginCheck($username,$password);
        session_start();

        foreach ($result as $key => $value) {
            $_SESSION[$key] = $value;
        }
        header("Location: ../Capa_Presentacion/FormConsultarPerro.php", TRUE, 301);
    }else{
        return include_once('../Capa_Presentacion/user/login.php');
    }

?>