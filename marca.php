<?php require_once('p-superioradmin.php');?>
<body>
<div class="container mt-5">
    <h2>Registro de Marca</h2>
    <form method="POST" action="registrar_marca.php">
        <div class="form-group">
            <label for="nombre">Nombre de la Marca:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Marca</button>
    </form>
</div>
</body>
