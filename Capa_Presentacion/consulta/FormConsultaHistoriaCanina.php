<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/css.php') ?>   

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/js.php') ?>   
</head>
<body>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/nav.php') ?>   
    <main class="container">
        <div class="custom-content-central">
        <h4 class="custom-title">Perrudatos</h4>
        <?php if($dog): ?>
            <div class="row p-4">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-12">
                    <img style="width: 100%; height:250px" src="<?php echo "http://".$_SERVER['SERVER_NAME'].'/'.$dog["Foto"];?>" alt=""> 
                </div>
                <div class="col-lg-5 col-12 p-1">
                    <br>
                    <div> <strong>DNI :</strong>   <input type="text" value="<?php echo $dog["DNI"]; ?>" disabled></div>
                    <br>
                    <div> <strong>Raza :</strong> <input type="text" value="<?php echo $dog["Raza"]; ?>" disabled>  </div>
                    <br>
                    <div> <strong>Genero :</strong>  <input type="text" value="<?php if($dog["Genero"] == 2){echo 'Macho';}else{echo 'Hembra';}  ?>" disabled></div>
                    <br>
                    <div> <strong>Nacimiento :</strong>  <input type="text" value="<?php echo $dog["FechaNacimiento"]; ?>" disabled> </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        <?php endif ?>
        </div>
        <?php if($dogDetailFromDni == false): ?>
            <h4 class="custom-title">No se registro ninguna consulta</h4>
        <?php endif ?>

        <?php foreach ($dogDetailFromDni as $dogDetail): ?>

        <div class="custom-content-central">
            <h4 class="custom-title">Datos de consultas</h4>
            <input type="hidden" name="dni" value="<?php echo $dog["DNI"]; ?>" >
            <div class="row">
                <div class="col-12">
                    <strong> <h5 class="text-center">Consulta : <?php echo $dogDetail["detail_fecha"]; ?> </h5> </strong>
                    <strong> <h6 class="text-center p-4">Datos del veterinario </h6> </strong>
                    <div class="text-center">
                        <img style="height: 240px;" src="<?php echo "http://".$_SERVER['SERVER_NAME'].'/src/assets/profile_doctor.jpg'; ?>" alt="error">
                        <div class="text-center">
                            <label for="">MV. <?php echo $dogDetail['user_name'].' '.$dogDetail['user_lastname']; ?> </label>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                <strong> <h6 class="text-center p-4">Datos clinicos</h6> </strong>
                <div class="col-sm-6 ">
                    <div class="text-center">
                        <label for="" class="p-1 text-center"><strong> Sintomas </strong></label> 
                    </div>

                <br>
                
                <label for="" class="label-form-now p-1">Tos : </label>                 
                <input disabled name="simptoms" value="<?php echo $dogDetail['detail_vomitos']==1 ? 'Si': 'No'; ?>" type="text" class="form-control p-2">

                <label for="" class="label-form-now p-1">Apetito : </label>                 
                <input disabled name="simptoms" value="<?php echo $dogDetail['detail_apetito']==1 ? 'Si': 'No'; ?>" type="text" class="form-control p-2">

                <label for="" class="label-form-now p-1">Fiebre : </label>                 
                <input disabled name="simptoms" value="<?php echo $dogDetail['detail_fiebre']==1 ? 'Si': 'No'; ?>" type="text" class="form-control p-2">

                <label for="" class="label-form-now p-1">Debilidad : </label>                 
                <input disabled name="simptoms" value="<?php echo $dogDetail['detail_debilidad']==1 ? 'Si': 'No'; ?>" type="text" class="form-control p-2">

                <label for="" class="p-1">Sintomas adicionales</label> 
                <input name="simptoms" disabled value="<?php  echo (isset($dogDetail['detail_symptom']) ? $dogDetail['detail_symptom'] : '')  ?>" type="text" class="form-control p-2">

                
                </div>
                <div class="col-sm-6">

                     <div class="text-center">
                        <label for="" class="p-1 text-center"><strong> Diagnostico </strong></label> 
                    </div>

                    <!-- <h4 class="custom-title custom-size">Registro canino</h4> -->
                        <br>
                        <label for="" class="p-1">Inserte imagen de rayos X</label> 
                        <div class="custom-file">
                            <img style="width: 100%; height:250px" src="<?php echo "http://".$_SERVER['SERVER_NAME'].'/'.$dogDetail["detail_ray_img"];?>" alt=""> 
                        </div>                        
                        <br>
                        <label for="" class="p-1">Inserte diagnostico de sangre</label> 
                        <input name= "diagnostic" disabled value="<?php  echo (isset($dogDetail['detail_blood_diagnostic']) ? $dogDetail['detail_blood_diagnostic'] : '')  ?>" type="text" class="form-control p-2">
                        
                        <br>

                        <label for="" class="p-1">Inserte la medicina</label>
                        <input name= "medicine" disabled value="<?php  echo (isset($dogDetail['detail_medicine']) ? $dogDetail['detail_medicine'] : '')  ?>" type="text" class="form-control p-2">

                        <br>
                        <label for="" class="p-1">Inserte costo de consula</label> 
                        S/ <input name= "cost" disabled value="<?php  echo (isset($dogDetail['detail_cost_consultation']) ? $dogDetail['detail_cost_consultation'] : '')  ?>" type="number" class="form-control p-2">
                            
                </div>
            </div>
        </div>
        <?php endforeach ?>


    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/footer.php') ?>
</body>
</html>
