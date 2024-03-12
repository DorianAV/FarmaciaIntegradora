<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    // Evitar inyección de SQL usando consultas preparadas
    $query = "INSERT INTO categoria (NomCat, DescCat) VALUES (?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $nombre, $descripcion);

    if ($stmt->execute()) {
        echo "Categoría registrada exitosamente.";
        header('location: categoria.php');

    } else {
        echo "Error al registrar la categoría: " . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
