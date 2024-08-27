<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src=""></script>
    <script nomodule src=""></script>
    <script>
      </script>
    <link rel="stylesheet" href="recovery_style.css">
    <title>Recuperar Contraseña - CSMinds</title>
</head>
<body>
    <section>
        <form action="InicioDeSesion/recovery.php" method="post">
            <h1>Recuperar Contraseña</h1>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <i class="fa-solid fa-user"></i>
                <input type="email" name="Correo" placeholder="">
                <label for="Correo">Email</label>
            </div> 
            <div> 
                <input type="submit" value="Restablecer Contraseña" name="Entrar">
            </div>
            <a href="iniciosesion.php" class="btn btn-danger">Regresar</a>
        </form>
    </section>
</body>
</html>   