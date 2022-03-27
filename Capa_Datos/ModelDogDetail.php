<?php 
class ModelDogDetail{

    private $obj_conexion;
    public function __construct()
    {
        $dsn = sprintf('mysql:dbname=%s;host=%s', "RelocaDB", "localhost");
        $this->obj_conexion =  new PDO($dsn, "root", "oxipusio");        
    }

    public function insertDogDetail($DNI,$symptom,$ray_img,$blood_diagnostic,$medicine,$cost_consultation){
        $sql = "INSERT INTO perro_detail (DNI, detail_symptom, detail_ray_img, detail_blood_diagnostic, detail_medicine, detail_cost_consultation)
        VALUES ('$DNI', '$symptom', '$ray_img', '$blood_diagnostic', '$medicine', '$cost_consultation')";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }

    public function updateDogDetail($DNI,$symptom,$ray_img,$blood_diagnostic,$medicine,$cost_consultation){
        $sql = "UPDATE perro_detail SET detail_symptom = '$symptom', detail_ray_img = '$ray_img', detail_blood_diagnostic = '$blood_diagnostic',
        detail_medicine = '$medicine', detail_cost_consultation = '$cost_consultation' WHERE DNI = '$DNI'";
        $result = $this->obj_conexion->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }

}
?>