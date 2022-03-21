<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/stylesheet/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../src/script/main.js"></script>
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
            <div class="col-sm-4">
                <div class="column">
                </div>
                <img class="img-thumbnail" src="<?php echo 'http://localhost:8087//tarea1/'.$dog["Foto"];?>" alt="">
                <form action="">
                    <h4 class="custom-title custom-size"> <?php echo $dog["Nombre"]; ?></h4>
                    <div> <strong>DNI :</strong>   <label for=""> <?php echo $dog["DNI"]; ?></label></div>
                    <div> <strong>Raza :</strong>   <label for=""><?php echo $dog["Raza"]; ?></label></div>
                    <div> <strong>Genero :</strong>   <label for=""><?php echo $dog["Genero"]; ?></label></div>
                    <div> <strong>Nacimiento :</strong>   <label for=""><?php echo $dog["FechaNacimiento"]; ?></label></div>
                    <div class="d-flex justify-content-center p-2">
                        <!-- <button class="btn btn-warning" type="submit">Editar</button> -->
                    </div>
                </form>


                <form action="http://localhost:8087/tarea1/Capa_Logica/EliminarPerro.php" method="post">
                    <input type="hidden" name="DNI" value=<?php echo $dog["DNI"]; ?>>
                    <input type="hidden" name="for-admin" value=<?php echo '1'; ?>>
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
            <!-- <div for="" class="d-flex justify-content-center p-4">
                <a class="custom-link-to" href="http://localhost:8087/tarea1/Capa_Presentacion/FormConsultarPerro.php">Hacer otra consulta &#10140;</a>
            </div> -->

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