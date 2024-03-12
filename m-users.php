<?php
session_start();
require_once('p-superiosdasboard.php');
if ($_SESSION['rol'] != 'admin') {
    header("Location: index.php");
    exit();
}
?>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        function confirmDelete() {
            var confirmar = confirm("¿Realmente desea eliminarlo? ");
            if (confirmar) {
                return true;
            } else {
                return false;
            }
        }
        $(document).ready(function() {
            $('#miTabla').DataTable({
                paging: true,  // Habilita la paginación
                lengthMenu: [5, 10, 20],  // Opciones para seleccionar cantidad de filas a mostrar
                searching: true  // Habilita el buscador
            });
        });

    </script>

    <main class="container">
        <div class="row">
            <div class="col-12 Mensaje text-center">
                <h1>Usuarios</h1>
                <p>Centro de control de los usuarios</p>
            </div>
            <div class="col"><a href="registrar.php" class="btn btn-primary">Nuevo Usuario</a></div>

            <div class="row justify-content-center text-center mb-5">
                <div class="row">
                    <table class="table" id="miTabla">
                        <thead class="table table-secondary table-striped">
                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Password</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Rol</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('conexion.php');
                        $query=" select * from usuarios";
                        $resultados= mysqli_query($con,$query);
                        while($row=mysqli_fetch_array($resultados)){
                            ?>
                            <tr>
                                <th><?php echo $row ['id_user'] ?></th>
                                <th><?php echo $row ['user'] ?></th>
                                <th><?php echo $row ['password'] ?></th>
                                <th><?php echo $row ['correo'] ?></th>
                                <th><?php echo $row ['telefono'] ?></th>
                                <th><?php echo $row ['rol'] ?></th>
                                <th><a href="actualizar-user.php?id_user=<?php echo $row ['id_user'] ?>" class="btn btn-danger">Actualizar</a></th>
                                <th><a onclick="return confirmDelete()" href="eliminar-user.php?id_user=<?php echo $row ['id_user']?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="mb-5"></div>
        </div>
    </main>
<?php require_once('p-inferior.php');?>