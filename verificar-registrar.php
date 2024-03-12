<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if ($_SESSION['rol'] != 'admin') {
        require_once('p-superior.php');
    }
    else{
        require_once('p-superiosdasboard.php');
    }
}
else{
    require_once('p-superior.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('conexion.php');
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $comprobar = "SELECT * FROM usuarios WHERE user='$user' OR correo='$email' ";
    $usuarios = mysqli_query($con, $comprobar);

    if ($usuarios) {
        $num_rows = mysqli_num_rows($usuarios);

        if ($num_rows > 0) {
            // La consulta devolvió datos, entonces el usuario ya existe
            $msg="El usuario o correo ya estan registrados.";
        } else {
            if ($_SESSION['rol'] != 'admin') {
                // La consulta no devolvió datos, el usuario no existe
                $sql = "INSERT INTO usuarios (user, password, correo, telefono,rol) VALUES ('$user', '$password', '$email', '$phone','user')";
            }
            else{
                $rol=$_POST["rol"];
                $sql = "INSERT INTO usuarios (user, password, correo, telefono,rol) VALUES ('$user', '$password', '$email', '$phone','$rol')";
            }

            if ($con->query($sql) === TRUE) {
                $msg= "Registro exitoso.";
                if ($_SESSION['rol'] != 'admin') {
                    header("Location: login.php");
                   }
                else{
                    header("Location: m-users.php");
                }

            } else {
                $msg= "Error al registrar: " . $con->error;
            }
            // Cerrar la conexión a la base de datos
            $con->close();
        }
    } else {
        // Ocurrió un error en la consulta
        $msg= "Error en la consulta: " . mysqli_error($con);
    }
}
?>

<div class="col-12 text-center mt-5 p-5">
    <h1 class="mb-5"><?php echo ''.$msg;?></h1>
    <a href="registrar.php" class="btn btn-primary mt-5">Regresar</a>
</div>
<?php
require_once('p-inferior.php');
?>
