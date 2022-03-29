<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/css.php') ?>   

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/js.php') ?>   
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/nav.php') ?>

    <main class="container custom-content-central">
        <h4 class="custom-title">! Elige a tu veterinario ¡</h4> 
        <div class="d-flex justify-content-end">
            <a href="<?php echo 'http://localhost:8087/tarea1/Capa_Logica/ShowCitas.php'; ?>" class="btn btn-success">Ver mis citas</a>
        </div>
        <p class="text-center">
            <!-- Veterinarios disponibles : <?php echo $num_resultados; ?> -->
        </p>
        <div class="class-grid-now-3">
            <?php foreach ($result as $veterinary): ?>
            <div class="">
                <img class="img-thumbnail" src="<?php echo 'http://localhost:8087/tarea1/src/assets/profile_doctor.jpg'?>" alt="">
                <form action="http://localhost:8087/tarea1/Capa_Logica/RegisterCita.php" method="POST">
                    <h4 class="custom-title custom-size"> <?php echo $veterinary["user_name"].' '.$veterinary["user_lastname"]; ?></h4>
                    <!-- <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6 d-flex justify-content-end">                            
                            <a href="<?php echo 'http://localhost:8087/tarea1/Capa_Logica/FormHistoricConsulta.php?code='.$dog["DNI"]; ?>" class="btn btn-info" style="padding: 0px; background-color:transparent;border-color:transparent;">
                                <i style="color:burlywood ;font-size: 2rem;" class="material-icons">info</i>
                            </a>

                        </div>
                    </div> -->
                    <input type="hidden" name="user_id" value="<?php echo $veterinary["user_id"]; ?>">
                    <input required type="date" name="date"><input required type="time" name="hour"> 
                    <!-- <div> <strong>DNI :</strong>   <label for=""> <?php echo $veterinary["user_name"]; ?></label></div>
                    <div> <strong>Nacimiento :</strong>   <label for=""><?php echo $veterinary["user_lastname"]; ?></label></div> -->
                    <div class="d-flex justify-content-center p-2">
                        <button class="btn btn-warning" type="submit">Reservar Cita</button>
                    </div>
                </form>

            </div>
            <?php endforeach ?>

        </div>
    </main>
    <br>
    <br>

    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>

</body>
</html>