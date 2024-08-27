<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src=""></script>
    <script nomodule src=""></script>
    <script>
        function showSuccessAlert() {
            var alert = document.getElementById("success-alert");
            alert.style.display = "block";
            alert.style.opacity = "1";
            setTimeout(function() {
                alert.style.opacity = "0";
                setTimeout(function() {
                    alert.style.display = "none";
                }, 600);
            }, 3000);
        }

        function showErrorAlert() {
            var alert = document.getElementById("error-alert");
            alert.style.display = "block";
            alert.style.opacity = "1";
            setTimeout(function() {
                alert.style.opacity = "0";
                setTimeout(function() {
                    alert.style.display = "none";
                }, 600);
            }, 3000);
        }

        function closeAlert(alertId) {
            var alert = document.getElementById(alertId);
            alert.style.opacity = "0";
            setTimeout(function() {
                alert.style.display = "none";
            }, 600);
        }
    </script>
    <link rel="stylesheet" href="login_style.css">
    <title>Login - CSMinds</title>
</head>
<body>
    <section>
        <form method="post">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="Username"></ion-icon>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="Usuario" placeholder="">
                <label for="Usuario">Usuario</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class="fa-solid fa-unlock"></i>
                <input type="password" name="Clave" placeholder="">
                <label for="Clave">Contraseña</label>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Recordarme</label>
                <a href="recuperar_contraseña.php">Olvide la Contraseña</a>
            </div>
            <div class="btnlo">
                <input type="submit" value="Log in" name="Entrar" id="btns">
            </div>
            <div class="register">
                <p>No tiene cuenta aun? <a href="./Registro.php">Registro</a></p>
            </div>
        </form>
    </section>
    
    <div id="success-alert" class="alert success">
        <span class="closebtn" onclick="closeAlert('success-alert')">&times;</span>
        ¡Inicio de sesión exitoso!
    </div>

    <div id="error-alert" class="alert error">
        <span class="closebtn" onclick="closeAlert('error-alert')">&times;</span>
        ¡Usuario o contraseña incorrectos!
    </div>

</body>

<?php

require "conexion.php";

if (!empty($_POST['Entrar'])) {
    if (empty($_POST['Usuario']) and empty($_POST['Clave'])) {
        echo "<script>showErrorAlert();</script>";
    } else {
        $Usuario = $_POST['Usuario'];
        $Clave = $_POST['Clave'];

        $sql =  $conexion->query("SELECT * FROM usuarios WHERE Usuario='$Usuario' and Clave ='$Clave' ");

        if ($datos = $sql->fetch_object()) {
            header("Location: home.php");
            echo "<script>showSuccessAlert();</script>";
        } else {
            echo "<script>showErrorAlert();</script>";
        }
    }
}

?>
</html>
