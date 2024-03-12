<?php require_once('p-superioradmin.php');?>

<body>
<div class="container mt-5">
    <h2>Registro de Usuario</h2>
    <form method="POST" action="registrar_usuario.php">
        <h3>Datos de Dirección</h3>
        <div class="form-group">
            <label for="colonia">Colonia:</label>
            <input type="text" class="form-control" id="colonia" name="colonia" required>
        </div>
        <div class="form-group">
            <label for="calle">Calle:</label>
            <input type="text" class="form-control" id="calle" name="calle" required>
        </div>
        <div class="form-group">
            <label for="num_ext">Número Exterior:</label>
            <input type="text" class="form-control" id="num_ext" name="num_ext" required>
        </div>
        <div class="form-group">
            <label for="num_int">Número Interior:</label>
            <input type="text" class="form-control" id="num_int" name="num_int">
        </div>
        <div class="form-group">
            <label for="cp">Código Postal:</label>
            <input type="text" class="form-control" id="cp" name="cp" required>
        </div>
        <h3>Datos de Persona</h3>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="ape_pat" name="ape_pat" placeholder="Paterno" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="ape_mat" name="ape_mat" placeholder="Materno">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select class="form-control" id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
        </div>
        <h3>Datos de Usuario</h3>
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label for="contra">Contraseña:</label>
            <input type="password" class="form-control" id="contra" name="contra" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol:</label>
            <select class="form-control" id="rol" name="rol" required>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
                <option value="Doctor">Doctor</option>
            </select>        </div>
        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
    </form>
</div>
</body>

