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
        <h4 class="custom-title">Sistema de identificacion Perruno</h4> 
        <p class="text-center">
            Numero de perros encontrados : <?php echo $num_resultados; ?>
        </p>
        <div class="row ">
            <?php foreach ($result as $dog): ?>
            <div class="col-sm-3">
                <div class="column">
                </div>
                <img class="img-thumbnail" src="<?php echo 'http://localhost:8087//tarea1/'.$dog["Foto"];?>" alt="">
                <form action="">
                    <h4 class="custom-title custom-size"> <?php echo $dog["Nombre"]; ?></h4>
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6 d-flex justify-content-end">                            
                            <a href="<?php echo 'http://localhost:8087/tarea1/Capa_Logica/FormHistoricConsulta.php?code='.$dog["DNI"]; ?>" class="btn btn-info" style="padding: 0px; background-color:transparent;border-color:transparent;">
                                <i style="color:burlywood ;font-size: 2rem;" class="material-icons">info</i>
                            </a>

                        </div>
                    </div>
                    <div> <strong>DNI :</strong>   <label for=""> <?php echo $dog["DNI"]; ?></label></div>
                    <div> <strong>Raza :</strong>   <label for=""><?php echo $dog["Raza"]; ?></label></div>
                    <!-- <div> <strong>Genero :</strong>   <label for=""><?php echo $dog["Genero"]; ?></label></div> -->
                    <div> <strong>Nacimiento :</strong>   <label for=""><?php echo $dog["FechaNacimiento"]; ?></label></div>
                    <div class="d-flex justify-content-center p-2">
                        <!-- <button class="btn btn-warning" type="submit">Editar</button> -->
                    </div>
                </form>


                <form action="http://localhost:8087/tarea1/Capa_Logica/EliminarPerro.php" method="post">
                    <input type="hidden" name="DNI" value=<?php echo $dog["DNI"]; ?>>
                    <input type="hidden" name="Nombre" value=<?php echo $_REQUEST['Nombre']; ?>>
                    <div class="d-flex justify-content-center p-2">
                        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_admin']) ): ?>
                            <?php if ($_SESSION['user_is_admin'] ==  '1' ): ?>
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            <?php endif ?>
                        <?php endif ?>

                    </div>
                </form>

            </div>
            <?php endforeach ?>
            <div for="" class="d-flex justify-content-center p-4">
                <a class="custom-link-to" href="http://localhost:8087/tarea1/Capa_Presentacion/FormConsultarPerro.php">Hacer otra consulta &#10140;</a>
            </div>

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