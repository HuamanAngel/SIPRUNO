<?php
    class ModelCita{
        private $obj_conexion;
        public function __construct()
        {
            $dsn = sprintf('mysql:unix=/var/run/mysqld/mysqld.sock;dbname=%s', "RelocaDB");
            $this->obj_conexion =  new PDO($dsn, "admin", "password");        
        }
        
        public function insertCita($id_veterinary,$id_owner,$day,$hour)
        {
            $sqlValidation = "SELECT * FROM cita WHERE user_client=".$id_owner." AND user_veterinary=".$id_veterinary."";
            $resultValidation = $this->obj_conexion->prepare($sqlValidation);
            $resultValidation->execute();
            $validation = $resultValidation->fetch(PDO::FETCH_ASSOC);
            if($validation == false){
                $sql = "INSERT INTO cita (user_client,user_veterinary,cita_day,cita_hour) 
                VALUES ('$id_owner', '$id_veterinary', '$day', '$hour')";
                $result = $this->obj_conexion->prepare($sql);
                $result->execute();
                return $result->rowCount();
            }else{
                return false;
            }
        }

        public function showCita($id_owner)
        {
            $sql = "SELECT * FROM cita INNER JOIN users ON users.user_id = cita.user_veterinary  WHERE user_client = '$id_owner'";
            $result = $this->obj_conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function showCitaVeterinary($id_veterinary)
        {
            $sql = "SELECT * FROM cita INNER JOIN users ON users.user_id = cita.user_veterinary  WHERE user_veterinary = '$id_veterinary'";
            $result = $this->obj_conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>