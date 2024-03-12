<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header('Location: login.php');
    exit;
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard Administrador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="editar-menu.php">Modificar Platillos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="m-reserv.php">Modificar Reservaciones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="m-users.php">Modificar Usuarios</a></li>
                        <li><a class="dropdown-item" href="registrar.php">Registrar Usuarios</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <a class="navbar-brand ml-auto text-right" href="login.php">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo "Bienvenido: " . $_SESSION['username'];}
            else{

                echo "Iniciar Sesion";
            }
            ?>
        </a>
    </div>
</nav>
</body>
</html>