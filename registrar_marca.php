<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    // Evitar inyección de SQL usando consultas preparadas
    $query = "INSERT INTO marca (NomMarc, DescMarc) VALUES (?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $nombre, $descripcion);

    if ($stmt->execute()) {
        echo "Marca registrada exitosamente.";
        header('location: marca.php');
    } else {
        echo "Error al registrar la marca: " . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
