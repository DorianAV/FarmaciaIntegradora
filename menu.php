<?php
session_start();
require_once('p-superior.php'); ?>
<main class="container">
    <div class="row">
        <div class="p-5"></div>
        <div class="col-12 Mensaje text-center">
            <h1>Menu</h1>
            <p>Contamos con una amplia gama de productos como los siguientes</p>
        </div>
        <div class="row justify-content-center text-center mb-5">
            <a class="col-10 col-md-4 col-lg-3 m-3 btn btn-primary" href="menu.php?categoria=Entrada" style="text-decoration: none;color: white;"> Entradas</a>
            <a class="col-10 col-md-4 col-lg-3 m-3 btn btn-primary" href="menu.php?categoria=Platillo" style="text-decoration: none;color: white;"> Platillos</a>
            <a class="col-10 col-md-4 col-lg-3 m-3 btn btn-primary" href="menu.php?categoria=Postre" style="text-decoration: none;color: white;"> Postres</a>

            <?php
            // Verificar si el parámetro 'categoria' está presente en la URL
            if (isset($_GET['categoria'])) {
                $categoria = $_GET['categoria'];
            } else {
                $categoria = 'Postre';
            }

            include('conexion.php');
            if (!$con) {
                echo "Error de conexión en la base de datos";
                exit;
            }

            // Configuración de paginado
            $resultados_por_pagina = 6; // Número de resultados a mostrar por página
            $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $inicio = ($pagina_actual - 1) * $resultados_por_pagina;

            if ($categoria !== '') {
                $query = "SELECT * FROM platillos WHERE categoria='$categoria' LIMIT $inicio, $resultados_por_pagina";
            } else {
                $query = "SELECT * FROM platillos LIMIT $inicio, $resultados_por_pagina";
            }

            $platillos = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($platillos)) {
                echo '<div class="col-10 col-md-4 col-lg-3 con-menus m-3">';
                echo '<img src="' . $row['imagen'] . '" class="img-fluid img-menus" alt="">';
                echo '<h4>' . $row['nombre'] . '</h4>';
                echo '<p>' . $row['descripcion'] . '</p>';
                echo '<p>$' . $row['precio'] . '</p>';
                echo '</div>';
            }

            // Obtener el número total de resultados
            $total_resultados = mysqli_num_rows(mysqli_query($con, "SELECT * FROM platillos WHERE categoria='$categoria'"));

            // Calcular el número total de páginas
            $total_paginas = ceil($total_resultados / $resultados_por_pagina);

            // Mostrar los controles de navegación para las páginas
            echo '<div class="col-12">';
            echo '<ul class="pagination justify-content-center">';
            for ($i = 1; $i <= $total_paginas; $i++) {
                echo '<li class="page-item"><a class="page-link" href="menu.php?categoria=' . $categoria . '&pagina=' . $i . '">' . $i . '</a></li>';
            }
            echo '</ul>';
            echo '</div>';
            ?>

        </div>
    </div>
    <?php require_once('p-inferior.php'); ?>
