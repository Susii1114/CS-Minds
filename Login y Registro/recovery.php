<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once 'conexion.php';
$Correo = $_POST['Correo'];

// Insertamos los datos en la base de datos
    $sql =  $conexion->query("SELECT * FROM usuarios WHERE Correo ='$Correo' AND status = 1");
    $resultado = mysqli_query($conexion, $sql);
    $row = $resultado->fetch_assoc();

if($resultado->num_rows > 0) { 
    $mail = new PHPMailer(true);

try {
    //Configuraciones del servidor
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                 
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'csminds0@gmail.com';                   
    $mail->Password   = 'johnnydonovan1986';                              
    $mail->Port       = 587;                                   

    $mail->setFrom('csminds0@gmail.com', 'CSMINDs');
    $mail->addAddress('nancy.deraz.st@gmail.com', 'Usuario de Prueba');     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperacion de contraseña, por favor visita la pagina de <a href="localhost/IniciodeSesion/change_password.php?id='.$row['id']."'>Recuperacion de contraseña</a>'";

    $mail->send();
    header("Location: iniciosesion.php?message=ok");
} catch (Exception $e) {
   header("Location: iniciosesion.php?message=error");
}

} else {
    header("Location: iniciosesion.php?message=not_found");
    }
?>