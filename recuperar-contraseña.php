<?php
session_start();
require_once('p-superior.php'); ?>
<body class="bg-gradient-primary">

    <div class=" mt-5 container">

        <!-- Outer Row -->
        <div class="row mt-5 justify-content-center">

            <div class="col-xl-10 mt-5 col-lg-12 col-md-9">

                <div class="card mt-5 o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Olvidaste tu contraseña?</h1>
                                        <p class="mb-4">Lo entendemos, las cosas pasan. Simplemente ingrese su dirección de correo electrónico a continuación
                                            ¡Y le enviaremos un enlace para restablecer su contraseña!</p>
                                    </div>
                                    <form class="user" action="correo.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingrese su correo..." name="email">

                                        </div>
                                        <div class="text-center mb-5">
                                            <input type="submit" name="submit" value="Recuperar contraseña" class="btn btn-primary btn-user btn-block">
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="registrar.php">Crear una cuenta!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Ya tienes una cuenta? Inicia sesion!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<?php require_once('p-inferior.php'); ?>