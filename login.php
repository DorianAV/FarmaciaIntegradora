
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Restaurant</title>
</head>
<body>
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                <img src="img/logo.png" alt="Logo" width="60" height="60">
            </a>
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservaciones.php">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="p-5 mt-5">
        <div class="row justify-content-center">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <div class="col-5" style="max-width: 100%;">
                <img src="img/reservation-log.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <form class="col-10" action="verificar-login.php" method="post">
                    <br>
                    <h1>Usuario</h1>
                    <div class="form-group mb-5">
                        <input type="text" class="form-control form-control-user" placeholder="Usuario" name="user">
                    </div>
                    <h1>Contraseña</h1>
                    <div class="form-group mb-5">
                        <input type="password" class="form-control form-control-user" placeholder="Contraseña" name="password">
                    </div>
                    <div class="text-center mb-5">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                    </div>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="registrar.php">Crear una cuenta!</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="logout.php">Cerrar Sesion!</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="recuperar-contraseña.php">Recuperar contraseña!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once('p-inferior.php');?>