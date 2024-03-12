<?php
session_start();
require_once('p-superiosdasboard.php');
if ($_SESSION['rol'] != 'admin') {
    header("Location: index.php");
    exit();
}
?>

<main class="container">
    <div class="row">
        <div class="mb-5">
            <div class="container mt-5">
                <form action="subir-platillo.php" method="post" enctype="multipart/form-data" class="mt-5 needs-validation was-validated">
                    <input type="hidden" name="clv_plat" value="" required>
                    <h2>Nombre</h2>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="" required>
                    <h2>Imagen</h2>
                    <input type="file" class="form-control mb-3" name="imagen" accept="image/*" required>
                    <h2>Descripcion</h2>
                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="" required>
                    <h2>Precio</h2>
                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="" step="0.01" required>
                    <select class="form-control mb-3" name="categoria" required>
                        <option value="Entrada" >Entrada</option>
                        <option value="Platillo" >Platillo</option>
                        <option value="Postre" >Postre</option>
                    </select>
                    <input type="submit" class="btn btn-primary btn-block" value="Subir">
                </form>
            </div>
        </div>
        <div class="mb-5"></div>
    </div>
</main>
<?php require_once('p-inferior.php'); ?>
