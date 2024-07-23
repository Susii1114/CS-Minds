<?php

$conex = mysqli_connect("localhost", "root", "", "iniciosesiondb");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src=""></script>
    <script nomodule src=""></script>
    <link rel="stylesheet" href="style.css">
    <title>Login - CSMinds</title>
</head>
    <body>
        <section>
            <form method="post">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="Username"></ion-icon>
                <i class=""fa-solid fa-user></i>
                <input type="text" name="Usuario" placeholder="">
                <label for="Usuario">Usuario</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class=""fa-solid fa-unlock></i>
                <input type="password" name="Clave" placeholder="">
                <label for="Clave">Contraseña</label>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Recordarme</label>
                <a href="#">Olvide la Contraseña</a>
            </div>
            <input type="submit" value="Log in" name="Entrar">
            <div class="register">
                <p>No tiene cuenta aun? <a href="./Registro.html">Registro</a></p>
            </div>
        </form>
    </section>
</body>

<?php

if (!empty($_POST['Entrar'])) {
    if (empty($_POST['Usuario']) and empty($_POST['Clave'])) {
        echo "Los campos estan vacios";
    } else {
        $Usuario = $_POST['Usuario'];
        $Clave = $_POST['Clave'];

        $sql = $conex -> query("SELECT * FROM usuarios WHERE Usuario='$Usuario' and Clave ='$Clave' ");

        if ($datos = $sql->fetch_object()) {
            header("Location: home.php");
        } else {
            echo "Acceso Denegado";
        }
 
    }
}
?>

</html>