<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/css.php') ?>   
    <link rel="stylesheet" href="http://localhost:8087/tarea1/src/stylesheet/register.css">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/js.php') ?>   
    <title>Document</title>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/nav.php') ?>   
    <main class="login__main">
        <div class="card-header">
            <h4 class="text-center login__main__title">Registro - SIPRUNO</h4>
        </div>
        <div class="card-body">
            <form onsubmit="" action="<?php echo "http://localhost:8087/tarea1/Capa_Logica/Register_User.php" ?>" method="post">
                <div class="row">
                    <div class="col-md-5 d-flex aligns-items-center">
                        <img class="img-fluid" src="https://www.nicepng.com/png/detail/153-1533180_dulces-imagenes-de-perritos-mascotas-en-png-con.png" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="">Nombres : </label>
                            <input required type="text" name="name" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <label for="">Apellidos : </label>
                            <input required type="text" name="lastname" class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="">Nombre de usuario : </label>
                            <input required type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña : </label>
                            <input id="password" required type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <span id="" class="form-text">
                            <label id="character-min" class="set-color-active-error" for="">
                                * Al menos 8 caracteres.
                            </label>
                            <br>
                            <label id="number-min" class="set-color-active-error" for="">
                                * Al menos 2 numeros
                            </label>
                            <br>
                            <label id="character-letter-capital" class="set-color-active-error" for="">
                                * Al menos 1 letra capital
                            </label>
                            <br>
                            <label id="character-special" class="set-color-active-error" for="">
                                * Al menos 2 caracteres especiales de los siguientes : #,$,%,&,/,?
                            </label>
                        </span>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success m-4 disabled" id="button-submit-register" type="submit">Registrar</button>
                        </div>
                    </div>             

                </div>
            </form>
        </div>

    </main>
    <br>
    <br>
    <br>
    <br>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>
    <script>
        let password = document.getElementById('password');
        let characterMin = document.getElementById('character-min');
        let numberMin = document.getElementById('number-min');
        let characterLetterCapital = document.getElementById('character-letter-capital');
        let characterSpecial = document.getElementById('character-special');
        password.addEventListener('keyup', function(){
            let pass = password.value;
            let passLength = pass.length;
            let number = pass.match(/[0-9]/g);
            let numberLength = number != null ? number.length : 0;
            let capital = pass.match(/[A-Z]/g);
            let capitalLength = capital!=null ? capital.length : 0;
            let special = pass.match(/[#,$,%,&,/,?]/g);
            let specialLength = special !=null ? special.length : 0;
            
            if(passLength < 8){
                characterMin.classList.add('set-color-active-error');
            }else{
                characterMin.classList.remove('set-color-active-error');
            }

            if(numberLength < 2){
                numberMin.classList.add('set-color-active-error');
            }else{
                numberMin.classList.remove('set-color-active-error');
            }

            if(capitalLength < 1){
                characterLetterCapital.classList.add('set-color-active-error');
            }else{
                characterLetterCapital.classList.remove('set-color-active-error');
            }

            if(specialLength < 2){
                characterSpecial.classList.add('set-color-active-error');
            }else{
                characterSpecial.classList.remove('set-color-active-error');
            }

            if(passLength >= 8 && numberLength >= 2 && capitalLength >= 1 && specialLength >= 2){
                document.getElementById('button-submit-register').classList.remove('disabled');
            }
        });
    </script>
</body>
</html>