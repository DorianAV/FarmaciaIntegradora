<?php
session_start();
require_once('p-superioradmin.php');
if ($_SESSION['rol'] != 'Administrador') {
    header("Location: index.php");
    exit();
}
?>

