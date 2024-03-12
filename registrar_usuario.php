<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de Dirección
    $colonia = $_POST["colonia"];
    $calle = $_POST["calle"];
    $num_ext = $_POST["num_ext"];
    $num_int = $_POST["num_int"];
    $cp = $_POST["cp"];

    // Insertar dirección
    $query_dir = "INSERT INTO direccion (ColDir, CalleDir, NumExtDir, NumIntDir, CPDir) VALUES (?, ?, ?, ?, ?)";
    $stmt_dir = $con->prepare($query_dir);
    $stmt_dir->bind_param("ssisi", $colonia, $calle, $num_ext, $num_int, $cp);
    $stmt_dir->execute();
    $idDir = $stmt_dir->insert_id;
    $stmt_dir->close();

    // Datos de Persona
    $nombre = $_POST["nombre"];
    $ape_pat = $_POST["ape_pat"];
    $ape_mat = $_POST["ape_mat"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];

    // Insertar persona
    $query_per = "INSERT INTO persona (NomPer, ApePatPer, ApeMatPer, SexoPer, EdadPer, idDir) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_per = $con->prepare($query_per);
    $stmt_per->bind_param("ssssii", $nombre, $ape_pat, $ape_mat, $sexo, $edad, $idDir);
    $stmt_per->execute();
    $idPer = $stmt_per->insert_id;
    $stmt_per->close();

    // Datos de Usuario
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];
    $rol = $_POST["rol"];

    // Insertar usuario
    $query_usu = "INSERT INTO usuarios (CorreoUsu, ContraUsu, RolUsu, idPer) VALUES (?, ?, ?, ?)";
    $stmt_usu = $con->prepare($query_usu);
    $stmt_usu->bind_param("sssi", $correo, $contra, $rol, $idPer);

    if ($stmt_usu->execute()) {
        echo "Usuario registrado exitosamente.";
        header('location: usuario.php');

    } else {
        echo "Error al registrar el usuario: " . $con->error;
    }

    $stmt_usu->close();
    $con->close();
}
?>
