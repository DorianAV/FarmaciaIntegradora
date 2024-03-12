<?php
require_once('p-superior.php');
include ('conexion.php');
$email = $_POST['email'];
$bytes = random_bytes(5);
$token=bin2hex($bytes);
$tiempoEspera=10;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$to = $email; // note the comma
$query=("SELECT usuarios.user, usuarios.password from usuarios WHERE usuarios.correo='$email';");
$resultado = mysqli_query($con, $query);

if (mysqli_num_rows($resultado) ==1) {
    $user= mysqli_fetch_assoc($resultado);


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output. Set to 0 to disable debugging.
        $mail->isSMTP();                           // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                  // Enable SMTP authentication
        $mail->Username   = 'b85049184@gmail.com'; // SMTP username (tu dirección de correo de Gmail)
        $mail->Password   = 'cdjoaxkpngohbpos';       // SMTP password (tu contraseña de Gmail o la contraseña de aplicación si utilizas autenticación de doble factor)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption. Change to PHPMailer::ENCRYPTION_STARTTLS if your server requires STARTTLS.
        $mail->Port       = 465;                  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('b85049184@gmail.com', 'SABORES-EXQUISITOS');  // Establecer el remitente
        $mail->addAddress($email);      // Agregar un destinatario

        //Content
        $mail->isHTML(true);                   // Set email format to HTML
        $mail->Subject = 'Recuperacion';             // Asunto del correo
        $mail->Body    ='
<html>
<body>
<h1>Sabores Exquisitos</h1>
<div style="text-align:center;">
<p class="">usuario:'.$user['user'].'</p>
<p class="">Password:'.$user['password'].'</p>
</div>
</body>
</html>
';              // Cuerpo del correo

        $mail->send(); // Enviamos el correo
        echo 'Mensaje enviado correctamente, verifique su gmail';
        header("refresh: $tiempoEspera; url='login.php'");
    } catch (Exception $e) {
        echo "Hubo un error en el envío: {$mail->ErrorInfo}";
    }
}
else{
    echo "no se pudo";
}