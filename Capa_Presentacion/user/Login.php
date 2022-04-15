<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/css.php') ?>   
    <link rel="stylesheet" href="<?php echo "http://".$_SERVER['SERVER_NAME']."/src/stylesheet/login.css"; ?>">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/js.php') ?>   


    <title>Document</title>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/nav.php') ?>   
    <main class="login__main">
        <div class="text-center">
            <img src="https://cdn.pixabay.com/photo/2015/12/29/19/46/dog-1113336_960_720.png" alt="" class="login__main__image" >

        </div>
        <div class="card-header">
            <h4 class="text-center login__main__title">Login</h4>
        </div>
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
        <div class="card-body">
            <form action="<?php echo "http://".$_SERVER['SERVER_NAME']."/Capa_Logica/Login_User.php" ?>" method="post">
                <div class="row">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <label for="">&#x1f436;</label>
                    </div>
                    <div class="col-11">
                        <input class="form-control" type="text" name="username" placeholder="Usuario">
                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <label for="">&#x1f512;</label>
                    </div>

                    <div class="col-11">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-verde m-4" type="submit">Iniciar</button>
                    </div>
                </div>
            </form>
        </div>

    </main>
    <br>
    <br>
    <br>
    <br>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/footer.php') ?>

</body>
</html>