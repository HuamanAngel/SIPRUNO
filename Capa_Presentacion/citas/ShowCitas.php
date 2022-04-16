<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta perruna</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/css.php') ?>   
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/js.php') ?>   
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/nav.php') ?>   
    
    <main class="container custom-content-central">
        <h4 class="custom-title">Mis consultas</h4>
        <p class="text-center bg-danger text-white"></p>
        <div class="row ">
            <div class="col-sm-12">
            <table class="class-table">
                <thead>
                    <tr style="width: 100%;">
                        <th scope="th-custom" >Costo</th>
                        <th scope="th-custom">Veterinario</th>
                        <th scope="th-custom">Fecha</th>
                        <th scope="th-custom">Hora</th>
                        <th scope="th-custom">Cita generada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $consult): ?>
                    <tr>
                        <td><?php echo 'Consulta Gratis'; ?></td>
                        <td><?php echo $consult['user_name'].' '.$consult['user_lastname']; ?></td>
                        <td><?php echo $consult['cita_day']; ?></td>
                        <td><?php echo $consult['cita_hour']; ?></td>
                        <td><?php echo $consult['cita_create']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>                
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
    <br>
    <br>
    <br>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/Capa_Presentacion/includes/footer.php') ?>

</body>
</html>