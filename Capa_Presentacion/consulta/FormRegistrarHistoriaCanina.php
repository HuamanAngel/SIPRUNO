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
        <div class="custom-content-central">
            <h4 class="custom-title">Datos perruclinicos</h4>
            <form action="../Capa_Logica/FromHistoricRegister.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="dni" value="<?php echo $dog["DNI"]; ?>" >

            <div class="row ">
                <div class="col-sm-6 ">
                    <div class="text-center">
                        <label for="" class="p-1 text-center"><strong> Inserte los sintomas </strong></label> 
                    </div>

                <br>
                <label for="" class="label-form-now p-1">Tos : </label>                 
                <input name="detail_vomitos" value="1" type="radio" class=" p-2">Si
                <input name="detail_vomitos" value="0" type="radio" checked class=" p-2">No

                <br>
                <label for="" class="label-form-now p-1">Apetito : </label>                 
                <input name="detail_apetito" value="1" type="radio" class=" p-2">Si
                <input name="detail_apetito" value="0" type="radio" checked class=" p-2">No

                <br>
                <label for="" class="label-form-now p-1">Fiebre : </label>                 
                <input name="detail_fiebre" value="1" type="radio" class=" p-2">Si
                <input name="detail_fiebre" value="0" type="radio" checked class=" p-2">No

                <br>
                <label for="" class="label-form-now p-1">Debilidad : </label>                 
                <input name="detail_debilidad" value="1" type="radio" class=" p-2">Si
                <input name="detail_debilidad" value="0" type="radio" checked class=" p-2">No

                <br>


                <label for="" class="label-form-now p-1">Otros sintomas : </label> 
                <input name="simptoms" value="<?php  echo (isset($dogDetail['detail_symptom']) ? $dogDetail['detail_symptom'] : '')  ?>" type="text" class="form-control p-2">
<!-- 

                <label for="" class="p-1">Gripe</label>                 
                <input name="simptoms" type="text" class="form-control p-2">

                <label for="" class="p-1">Dolor de garganta</label>                 
                <input name="simptoms" type="text" class="form-control p-2">

                <label for="" class="p-1">Dificultad respitaroria</label>                 
                <input name="simptoms" type="text" class="form-control p-2">

                <label for="" class="p-1">Congestion nasal</label>                 
                <input name="simptoms" type="text" class="form-control p-2">

                <label for="" class="p-1">Cefalea</label>                 
                <input name="simptoms" type="text" class="form-control p-2"> -->


                </div>
                <div class="col-sm-6">


                    <!-- <h4 class="custom-title custom-size">Registro canino</h4> -->
                        <br>
                        <label for="" class="p-1">Inserte imagen de rayos X</label> 
                        <div class="custom-file">
                            <input name="rayx" required type="file" class="custom-file-input" id="validatedCustomFile">
                            <br>
                            <?php if (isset($dogDetail['detail_blood_diagnostic'])): ?>
                                Imagen insertada : <?php  echo (isset($dogDetail['detail_blood_diagnostic']) ? $dogDetail['detail_blood_diagnostic'] : '')  ?>
                            <?php endif ?>
                        </div>                        
                        <br>
                        <label for="" class="p-1">Inserte diagnostico de sangre</label> 
                        <input name= "diagnostic" value="<?php  echo (isset($dogDetail['detail_blood_diagnostic']) ? $dogDetail['detail_blood_diagnostic'] : '')  ?>" type="text" class="form-control p-2">
                        
                        <br>

                        <label for="" class="p-1">Inserte la medicina</label>
                        <input name= "medicine" value="<?php  echo (isset($dogDetail['detail_medicine']) ? $dogDetail['detail_medicine'] : '')  ?>" type="text" class="form-control p-2">

                        <br>
                        <label for="" class="p-1">Inserte costo de consula</label> 
                        S/ <input type="number" required step="0.1" min="1" name= "cost" value="<?php  echo (isset($dogDetail['detail_cost_consultation']) ? $dogDetail['detail_cost_consultation'] : '')  ?>" type="number" class="form-control p-2">
                            
                </div>
                <div for="" class="d-flex justify-content-center p-4">
                    <button type="submit" class="btn-verde">  <?php  echo (isset($dogDetail) ? 'Actualizar historia' : 'Agregar historia')  ?> </button>
                </div>

            </div>
            </form>    
        </div>

    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/footer.php') ?>
</body>
</html>
