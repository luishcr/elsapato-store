<?php
// Estilos del menú de navegación para indicar la página actual
(substr($_SERVER["REQUEST_URI"], -9) == "index.php") ? $linkActivo1 = "active fs-4" : $linkActivo1 = "";
(substr($_SERVER["REQUEST_URI"], -9) == "mujer.php") ? $linkActivo2 = "active fs-4" : $linkActivo2 = "";
(substr($_SERVER["REQUEST_URI"], -10) == "hombre.php") ? $linkActivo3 = "active fs-4" : $linkActivo3 = "";
(substr($_SERVER["REQUEST_URI"], -10) == "verano.php") ? $linkActivo5 = "active fs-4" : $linkActivo5 = "";
(substr($_SERVER["REQUEST_URI"], -12) == "contacto.php") ? $linkActivo8 = "active fs-4" : $linkActivo8 = "";
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light.bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/elsa_pato_logo.png" alt="" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-content-center align-items-center flex-wrap">
                <li class="nav-item">
                    <a class="nav-link <?= $linkActivo1; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $linkActivo2; ?>" href="mujer.php">Mujer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $linkActivo3; ?>" href="hombre.php">Hombre</a>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $linkActivo5; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ofertas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="verano.php">Primavera</a></li>
                        <li><a class="dropdown-item" href="verano.php">Verano</a></li>
                        <li><a class="dropdown-item" href="verano.php">Otoño</a></li>
                        <li><a class="dropdown-item" href="verano.php">Invierno</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $linkActivo8; ?>" href="contacto.php">Contacto</a>
                </li>


                <!-- Botón de inicio de sesión en el menú de navegación cuando existe sesión (admin) y cuando no (invitado) -->
                <?php if (isset($_SESSION["username"]) && isset($_SESSION["password"])) : ?>

                    <div class="btn-group ps-2">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user pe-2"></i> <?= $_SESSION["username"] ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item btn btn-secondary" role="button" href="logout.php">Cerrar sesión</a></li>
                        </ul>
                    </div>

                <?php else : ?>

                    <div class="btn-group ps-2">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user pe-2"></i> Invitado
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item btn btn-secondary" role="button" href="login.php">Iniciar sesión</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item btn btn-secondary" role="button" href="registro.php">Registrarse</a> </li>
                        </ul>
                    </div>

                <?php endif ?>


            </ul>
        </div>
    </div>
</nav>