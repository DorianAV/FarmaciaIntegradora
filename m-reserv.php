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
                <h1>Reservaciones</h1>
                <p>Centro de control de las reservaciones</p>
            </div>
            <div class="col ml-2"><a href="reservaciones.php" class="btn btn-primary">Nueva Reservacion</a></div>
            <div class="row justify-content-center text-center mb-5">
                <div class="row">
                    <table class="table" id="miTabla">
                        <thead class="table table-secondary table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Telefono</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('conexion.php');
                        $query=" select * from reservacion";
                        $resultados= mysqli_query($con,$query);
                        while($row=mysqli_fetch_array($resultados)){
                            ?>
                            <tr>
                                <th><?php echo $row ['id_reserv'] ?></th>
                                <th><?php echo $row ['nombre'] ?></th>
                                <th><?php echo $row ['apellido'] ?></th>
                                <th><?php echo $row ['fecha'] ?></th>
                                <th><?php echo $row ['hora'] ?></th>
                                <th><?php echo $row ['telefono'] ?></th>
                                <th><a href="actualizar-res.php?id_reserv=<?php echo $row ['id_reserv'] ?>" class="btn btn-danger">Actualizar</a></th>
                                <th><a onclick="return confirmDelete()" href="eliminar-reserv.php?id_reserv=<?php echo $row ['id_reserv']?>" class="btn btn-danger">Eliminar</a></th>
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