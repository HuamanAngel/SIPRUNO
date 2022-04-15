<?php 
class ModelDog{

    private $obj_conexion;
    public function __construct()
    {
        $dsn = sprintf('mysql:unix=/var/run/mysqld/mysqld.sock;dbname=%s', "RelocaDB");
        $this->obj_conexion =  new PDO($dsn, "admin", "password");        
    }

    public function getDogsForName($name){
        $sql = "SELECT * FROM perro WHERE Nombre LIKE '%".$name."%' AND status = 1";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDogsForDni($dni){
        $sql = "SELECT * FROM perro WHERE DNI LIKE '".$dni."' AND status = 1";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }    

    public function getDogs(){
        $sql = "SELECT * FROM perro WHERE status = 1";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteDog($DNI){
        $sql = "UPDATE perro SET status = 0 WHERE DNI = '$DNI'";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }

    public function insertDog($DNI, $Nombre,$Fecha_Nacimiento,$Raza, $genero,
     $foto, $id_usuario){
        $sql = "INSERT INTO perro (DNI, Nombre, Raza, Genero, FechaNacimiento, Foto, user_id) 
        VALUES ('$DNI', '$Nombre', '$Raza', '$genero', '$Fecha_Nacimiento', '$foto','$id_usuario')";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }
}
?>