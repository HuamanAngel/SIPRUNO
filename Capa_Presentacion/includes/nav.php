<?php
    session_start();
?>
<header>
        <nav class="index__header__nav index__header__nav-container">
            <div>
                <h1 class="index__title element__appear text-white">
                    SIPRUNO
                </h1>
            </div>
            <div>
                <ul class="index__header__ul">
                    <li><a href="<?php echo "http://localhost:8087/tarea1/Capa_Presentacion/FormConsultarPerro.php" ?>">Consulta Canina</a></li>
                    <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_admin']) ): ?>
                        <?php if ($_SESSION['user_is_admin'] ==  '1' ): ?>
                            <li><a href="<?php echo "http://localhost:8087/tarea1/Capa_Logica/Show_All_dog.php" ?>">Listar Canes</a></li>
                            <li><a href="<?php echo "http://localhost:8087/tarea1/Capa_Presentacion/FormRegistrarPerro.php" ?>">Registro Canino</a></li>
                        <?php endif ?>
                        <li><a href="#"> <?php echo $_SESSION['user_name']; ?></a></li>
                        <a class="btn btn-danger" href="<?php echo "http://localhost:8087/tarea1/Capa_Logica/Out_User.php" ?>">Salir</a>
                    <?php else : ?>
                        <li><a href="<?php echo "http://localhost:8087/tarea1/Capa_Presentacion/user/Registro.php" ?>">Registro</a></li>
                        <li><a href="<?php echo "http://localhost:8087/tarea1/Capa_Presentacion/user/login.php" ?>">Login</a></li>
                    <?php endif ?>

                </ul>
            </div>
        </nav>
    </header>