<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    include('conexion.php');

    $query = "SELECT * FROM usuarios WHERE CorreoUsu='$usuario' AND ContraUsu='$contrasena'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['usuario'] = $row['CorreoUsu'];
        $_SESSION['loggedin'] = true;
        $_SESSION['rol'] = trim($row['RolUsu']);

        header('location: admin-menu.php');

        exit();
    } else {
        // Si las credenciales son incorrectas, puedes redirigir al usuario a la página de inicio de sesión con un mensaje de error
        $_SESSION['error'] = "Usuario o contraseña incorrectos.";
        header("Location: login.php");
        exit();
    }
} else {
    // Si no se reciben los datos esperados, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
