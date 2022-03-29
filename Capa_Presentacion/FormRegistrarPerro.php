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

        <div class="class-grid-now-6">
            <div class=" text-center">
                <img class="img-thumbnail" src="https://i.pinimg.com/564x/60/d8/f4/60d8f4bea703ad719167b03d2bfffad4.jpg" alt="">
            </div>
            <div class="">


                <h4 class="custom-title custom-size">Registro canino</h4>

                <form action="../Capa_Logica/Registrar_perro.php" method="POST" enctype="multipart/form-data">
                    <label for="" class="p-1">Ingresar Codigo</label> 
                    <Input name = "Codigo" type="text" class="form-control p-2">
                    <br>
                    <label for="" class="p-1">Ingresar Nombre</label> 
                    <Input name = "Nombre" type="text" class="form-control p-2">
                    <br>
                    <label for="" class="p-1">Fecha de Nacimiento</label> 
                    <Input name= "FechNac" type="Date" class="form-control p-2">
                    
                    <br>

                    <label for="" class="p-1">Genero</label>
                    <div class="form-check">
                    <input value="1" class="form-check-input" type="radio" name="Genero" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Hembra
                    </label>
                    </div>
                    <div class="form-check">
                    <input value="2" class="form-check-input" type="radio" name="Genero" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Macho
                    </label>
                    </div>                    
                    <br>

                    <label for="" class="p-1">Seleccione Raza</label> 
                    <Select name = "Raza" class="form-control p-2">
                     <Option value = "Pitbull"> Pitbull
                     <Option value = "Bulldog"> Bulldog
                     <Option value = "Shichu"> Shichu
                     <Option value = "Pequines"> Pequines
                     <Option value = "San Bernardo"> San Bernardo
                     <Option value = "Chiguahua"> Chiguahua
                    </Select>
                    <br>
                    <label for="" class="p-1">Subir Foto</label> 
                    <br>
                    <div class="custom-file">
                        <input name="Foto" type="file" class="custom-file-input" id="validatedCustomFile" required>
                    </div>                        
                    <div class="d-flex justify-content-center p-4">
                        <button type="submit" class="btn-verde ">Registrar</button>
                    </div>                        
                        
                </form>    
            </div>
            <!-- <div for="" class="d-flex justify-content-center p-4">
                <a class="custom-link-to" href="http://localhost:8087/tarea1/Capa_Presentacion/FormConsultarPerro.php">Consulta Perruna &#10140;</a>
            </div> -->

        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>
</body>
</html>
