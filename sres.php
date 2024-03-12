
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header('Location: login.php');
    exit;
}?>
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
</header>
<main class="row justify-content-around">
    <div class="m-5"></div>
    <div class="form m-5">
        <?php
        include('conexion.php');
        if (!$con) {
            echo "error coneccion de base de datos";
            exit;
        }
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $nombre = $_POST['nombre'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $mesa=$_POST['mesa'];

        $verificar="select * from reservacion where fecha='$fecha' and hora='$hora' and mesa='$mesa'";
        $verificarcon=mysqli_query($con,$verificar);

        if ($verificarcon) {
            $num_rows = mysqli_num_rows($verificarcon);
            if ($num_rows > 0) {
                $msg="Ya hay una reservacion a esa hora en esa fecha, seleccione otra opcion";
            } else {
                $Insertar = "INSERT INTO reservacion VALUES ('', '$nombre', '$apellido', '$fecha', '$hora','$telefono','$mesa')";
                $insert=mysqli_query($con,$Insertar);
                if (!$insert) {
                    $msg="Registro Fallido";
                } else {
                    $msg="Registro Exitoso";
                }
            }
        } else {
            // Hubo un error en la consulta.
            // Aquí puedes mostrar un mensaje de error o realizar alguna otra acción.
            echo "Error al ejecutar la consulta: " . mysqli_error($con);
        }
        ?>
        <div class="col-12 text-center mt-5 p-5">
            <h1 class="mb-5"><?php echo ''.$msg;?></h1>
            <a href="reservaciones.php" class="btn btn-primary mt-5">Regresar</a>
        </div>



    </div>
</main>

<?php require_once('p-inferior.php');?>

