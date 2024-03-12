<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION['usuario'])) {
    // Si el usuario ha iniciado sesión, redirigir a la página de bienvenida
    header("Location: bienvenido.php");
    exit();
} else {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
