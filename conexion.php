<?php

$con=mysqli_connect('localhost','root','','farcaciaintegradora' );
if(!$con){
    echo"Error en la conexion de la base de datos";
    exit;
}
echo "Hola imanoil";

?>