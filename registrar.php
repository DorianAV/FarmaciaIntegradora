<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if ($_SESSION['rol'] == 'admin') {
        require_once('p-superiosdasboard.php');
    }
    else{
        require_once('p-superior.php');
    }
} else {
    require_once('p-superior.php');
}

?>


<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrar usuarios!</h1>
                                </div>
                                <form class="needs-validation was-validated" action="verificar-registrar.php" method="post">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control form-control-user"
                                               placeholder="Usuario" name="user" required>
                                        <div class="invalid-feedback">
                                            Inserte un usuario valido
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control form-control-user"
                                               placeholder="Contraseña" name="password" required="">
                                        <div class="invalid-feedback">
                                            Inserte una contraseña
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0 mb-4">
                                            <input type="email" class="form-control form-control-user"
                                                   placeholder="Correo" name="email" required>
                                            <div class="invalid-feedback">
                                                Inserte un correo valido
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                   placeholder="Numero Telefonico" name="phone" required
                                                   pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                            <div class="invalid-feedback">
                                                Inserte un número válido.
                                            </div>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                            if ($_SESSION['rol'] === 'admin') {

                                                echo "<div class='col-sm-6 mb-3 mb-sm-0 mb-4'>";
                                                echo "<select class='form-control mb-3' name='rol'>";
                                                echo "<option value='admin'>admin</option>";
                                                echo "<option value='user'>user</option>";
                                                echo "</select>";
                                                echo "<div class='invalid-feedback'>
                                                Inserte un correo valido
                                            </div></div>";
                                            }
                                            else{
                                            }
                                        }
                                        ?>
                                    </div>
                                    <input type="submit" name="submit" value="Registrar" class="text-center btn btn-primary btn-user btn-block">
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>