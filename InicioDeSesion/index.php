
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src=""></script>
    <script nomodule src=""></script>
    <link rel="stylesheet" href="./style.css">
    <title>Login - CSMinds</title>
</head>
    <body>
        <section>
        <form action="InicioDeSesion.php" method="post">
            <h1>Login</h1>
            <hr>
            <?php
            if (isset($_GET['error'])) {
                ?>
              <p class="error"></p>
              <?php
              echo $_GET ['error'];
              ?>
            <?php
            }
            ?>
            </hr>
            <div class="inputbox">
                <ion-icon name="username"></ion-icon>
                <i class=""fa-solid fa-user></i>
                <input type="text" name="Usuario" required placeholder="">
                <label for="Usuario">Usuario</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class=""fa-solid fa-unlock></i>
                <input type="password" name="Clave"required placeholder="">
                <label for="Clave">Contraseña</label>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Recordarme</label>
                <a href="#">Olvide la Contraseña</a>
            </div>
            <button type="submit">Log in</button>
            <div class="register">
                <p>No tiene cuenta aun? <a href="./Registro.html">Registro</a></p>
            </div>
        </form>
    </section>
</body>
</html>