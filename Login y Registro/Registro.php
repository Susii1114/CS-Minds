<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Registro - CSMinds</title>
  <script type="module" src=""></script>
  <script nomodule src=""></script>
  <link rel="stylesheet" href="register_style.css"> 
</head>
<body>
    <section>
        <form method="POST">
            <h1>Registro</h1>
            <div class="inputbox">
                <ion-icon name="Username"></ion-icon>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="Usuario" placeholder="">
                <label for="Usuario">Nombre de Usuario</label>
            </div>  
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class="fa-solid fa-user"></i>
                <input type="password" name="Clave" placeholder="">
                <label for="Clave">Contraseña</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class="fa-solid fa-user"></i>
                <input type="email" name="Correo" placeholder="">
                <label for="Correo">Email</label>
            </div> 
            <div> 
                <input type="submit" value="Registrarse" name="Entrar">
            </div>
            <div class="register">
                <p>Ya tienes cuenta? <a href="./iniciosesion.php">Login</a></p>
            </div>
        </form>
    </section>
</body>



<?php
require_once 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if (isset($_POST['Entrar'])) {
    // Obtener los valores enviados por el formulario
    $Usuario = $_POST['Usuario'];
    $Clave = $_POST['Clave'];
    $Correo = $_POST['Correo'];

    // Insertamos los datos en la base de datos
    $sql = "INSERT INTO usuarios (Usuario, Clave, Correo) VALUES ('$Usuario', '$Clave', '$Correo')";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        // Inserción correcta
        echo "<script>alert('¡Se ha registrado correctamente!');</script>";
    } else {
        // Inserción fallida
        $error = "¡No se pudo hacer el registro!" . "\n" . "Error: " . $sql . "\n" . mysqli_error($conexion);
        echo "<script>alert('".$error."');</script>";
        
    } 
}
?>
</html>