<?php 
class ModelDogDetail{

    private $obj_conexion;
    public function __construct()
    {
        $dsn = sprintf('mysql:unix=/var/run/mysqld/mysqld.sock;dbname=%s', "RelocaDB");
        $this->obj_conexion =  new PDO($dsn, "admin", "password");        
    }

    public function getForDni($dni){
        $sql = "SELECT * FROM perro_detail INNER JOIN users ON users.user_id = perro_detail.user_veterinary_id WHERE DNI LIKE '".$dni."' ";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getForOwner($id){
        $sql = "SELECT * FROM perro_detail INNER JOIN perro ON perro.DNI = perro_detail.DNI WHERE perro.user_id = '".$id."' ";
        // $sql = "SELECT * FROM perro_detail INNER JOIN users ON users.user_id = perro_detail.user_veterinary_id WHERE DNI LIKE '".$dni."' ";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertDogDetail($DNI,$symptom,$ray_img,$blood_diagnostic,$medicine,$cost_consultation,$idVeterinary,$detail_vomitos=0,$detail_apetito=0,$detail_fiebre=0,$detail_debilidad=0){

        $sql = "INSERT INTO perro_detail(DNI,detail_symptom,detail_ray_img,detail_blood_diagnostic,detail_medicine,detail_cost_consultation,user_veterinary_id,detail_vomitos,detail_apetito,detail_fiebre,detail_debilidad)
        VALUES ('$DNI', '$symptom', '$ray_img', '$blood_diagnostic', '$medicine', '$cost_consultation','$idVeterinary','$detail_vomitos','$detail_apetito','$detail_fiebre','$detail_debilidad')";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();        
        return $result->rowCount();
    }

    public function updateDogDetail($DNI,$symptom,$ray_img,$blood_diagnostic,$medicine,$cost_consultation,$idVeterinary){
        $sql = "UPDATE perro_detail SET detail_symptom = '$symptom', detail_ray_img = '$ray_img', detail_blood_diagnostic = '$blood_diagnostic',
        detail_medicine = '$medicine', detail_cost_consultation = '$cost_consultation'  WHERE DNI = '$DNI' AND user_veterinary_id = '$idVeterinary' ";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }

}
?>