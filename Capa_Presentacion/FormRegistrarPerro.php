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

        <div class="row ">
            <div class="col-sm-6 text-center">
                <img class="img-thumbnail" src="https://i.pinimg.com/564x/60/d8/f4/60d8f4bea703ad719167b03d2bfffad4.jpg" alt="">
            </div>
            <div class="col-sm-6">


                <h4 class="custom-title custom-size">Registre su perruno amigo aqui</h4>

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
                        <button type="submit" class="btn btn-success ">Registrar</button>
                    </div>                        
                        
                </form>    
            </div>
            <div for="" class="d-flex justify-content-center p-4">
                <a class="custom-link-to" href="http://localhost:8087/tarea1/Capa_Presentacion/FormConsultarPerro.php">Consulta Perruna &#10140;</a>
            </div>

        </div>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>
</body>
</html>
