<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header('Location: login.php');
    exit;

}
if ($_SESSION['rol'] != 'admin') {
    require_once('p-superior.php');
}
else{
    require_once('p-superiosdasboard.php');
}
?>

<main class="row justify-content-around">
    <div class="m-5"></div>
    <div class="col-12 Mensaje text-center">
        <h1>Reservaciones</h1>
        <p>En esta pagin austed podra hacer sus reservaciones</p>
    </div>
    <div class="form m-5">
        <div>
            <form action="sres.php" method="post" class="row g-3 needs-validation was-validated justify-content-center align-items-center">
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Nombre" required="" name="nombre">
                </div>
                <div class="col-md-3">
                    <label for="validationCustom02" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required="" placeholder="Apellido" name="apellido">
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Mesa</label>
                    <select class="form-control mb-3 form-label" name="mesa">
                        <option value="1" >1</option>";
                        <option value="2" >2</option>";
                        <option value="3" >3</option>";
                        <option value="4" >4</option>";
                    </select>
                    <div class="invalid-feedback">
                        Seleccione una Mesa
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col-md-3">
                    <label for="validationCustomUsername" class="form-label">Fecha</label>
                    <div class="input-group has-validation">
                        <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="" name="fecha">
                        <div class="invalid-feedback">
                            Seleccione una fecha
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Hora</label>
                    <select class="form-control mb-3 form-label" name="hora">
                        <?php
                        date_default_timezone_set('America/Mexico_City');
                        $hora_actual = strtotime('08:40:00');
                        $formato_hora = 'H:i:s';
                        echo "Hora actual: " . date($formato_hora, $hora_actual) . "<br>";
                        $incremento_minutos = 20;
                        $numero_iteraciones = 37;
                        $contador = 1;
                        while ($contador <= $numero_iteraciones) {
                            $hora_actual += $incremento_minutos * 60;
                            $hora_mostrar=date($formato_hora, $hora_actual);
                            echo "<option value='$hora_mostrar' >$hora_mostrar</option>";
                            $contador++;
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        Seleccione una Hora
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Numero de telefono</label>
                    <input type="tel" class="form-control" id="validationCustom05" required="" placeholder="Numero celular" name="telefono" pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    <div class="invalid-feedback">
                        Inserte un telefono Valido
                    </div>
                </div>

                <div class="col-8 text-center mt-3">
                    <input type="submit" value="Reservar" class="btn btn-primary col-12 col-md-4" role="button">
                </div>
            </form>
        </div>
    </div>
</main>

<?php require_once('p-inferior.php');?>
