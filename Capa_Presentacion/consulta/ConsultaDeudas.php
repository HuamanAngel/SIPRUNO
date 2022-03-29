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
        <h4 class="custom-title">Mis consultas</h4>
        <p class="text-center bg-danger text-white"></p>

        <div class="row ">
            <div class="col-sm-12">
            <table class="class-table">
                <thead>
                    <tr>
                        <th scope="">DNI</th>
                        <th scope="">Perrunombre</th>
                        <th scope="">Fecha consulta</th>
                        <th scope="">Costo</th>
                        <th scope="">Estado</th>
                        <th scope="">Consultas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $consult): ?>
                    <tr>
                        <td><?php echo $consult['DNI']; ?></td>
                        <td><?php echo $consult['Nombre']; ?></td>
                        <td><?php echo $consult['detail_fecha']; ?></td>
                        <td><?php echo $consult['detail_cost_consultation']; ?></td>
                        <td>
                            <?php if($consult['detail_payment'] == 0): ?>
                                <span style="background-color: red;" class="badge badge-danger">Pendiente</span>
                            <?php else: ?>
                                <span style="background-color: green;" class="badge badge-success">Pagado</span>
                            <?php endif ?>
                        </td>
                        <td>
                            <a style="color: white; background-color:darkkhaki; border-radius:15%; text-decoration:none; " class="p-1" href="<?php echo 'http://localhost:8087/tarea1/Capa_Logica/FormHistoricConsulta.php?code='.$consult['DNI']; ?>">Ver consulta </a>
                        </td>
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
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/tarea1/Capa_Presentacion/includes/footer.php') ?>

</body>
</html>