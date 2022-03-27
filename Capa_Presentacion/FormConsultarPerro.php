<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consilta perruna</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/css.php') ?>   
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/js.php') ?>   
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/nav.php') ?>   
    

    <main class="container custom-content-central">
        <h4 class="custom-title">Sistema de identificacion Perruno</h4>
        <p class="text-center bg-success text-white">
            <?php
                if( !   isset($_SESSION["message"]) ){
                    echo "";
                }else{
                    echo $_SESSION["message"];
                    unset($_SESSION["message"]);                    
                }
            ?>        
        </p>

        <div class="row ">
            <div class="col-sm-6">
                <img class="img-thumbnail" src="https://img.freepik.com/vector-gratis/personaje-dibujos-animados-perro-detective-siguiendo-pistas_20412-443.jpg?size=626&ext=jpg" alt="">
            </div>
            <div class="col-sm-6">
                <h4 class="custom-title custom-size">¿Buscando a tu perro? Puede consultar aqui</h4>
                <form action="../Capa_Logica/FormConsultarPerro.php" class="" method="GET">
                    <label for=""></label> Ingresar nombre canino
                    <input type ="text" name = "Nombre" class="form-control p-2" >

                    <div class="d-flex justify-content-center p-4">
                        <button type="submit" class="btn btn-success ">Buscar</button>
                    </div>
                </form>
        
            </div>
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_admin']) ): ?>
                <?php if ($_SESSION['user_is_admin'] ==  '1' ): ?>
                    <div for="" class="d-flex justify-content-center p-4">
                        <a class="custom-link-to" href="http://localhost:8087/tarea1/Capa_Presentacion/FormRegistrarPerro.php">!No esta mi perro! Registrelo &#10140;</a>
                    </div>

                <?php endif ?>
            <?php endif ?>

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
    <br>
    <br>
    <br>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>

</body>
</html>