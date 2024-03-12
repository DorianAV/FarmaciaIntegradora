<?php
session_start();
?>
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
<?php

include('conexion.php');

if (!$con) {
    echo "Error en la conexión de la base de datos";
    exit;
}

$username = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE user = '$username' and password='$password'";
echo $sql;

$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['rol'] = $usuario['rol'];

    if ($usuario['rol'] == 'admin') {
        header('location: editar-menu.php');
    } else {
        header('location: index.php');
    }
} else {
    echo "Username o Password incorrectos.";
    echo "<br><a href='login.php'>Volver a Intentarlo</a>";
}

mysqli_close($con);
?>
