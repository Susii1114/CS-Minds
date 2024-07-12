<?php

session_start();
include('conexion.php');

    include('conexion.php');

if (isset($_POST['Username']) && isset($_POST['Clave']) ) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
}

    $Username = validate($_POST['Username']);
    $Clave = validate($_POST['Clave']);

    if (empty($Username)) {
        header("Location: index.php?error-El Usuario Es Requerido");
        exit();
        }else if (empty($Clave)) {
        header("Location: index.php?error-La Contraseña es Requerida");
        exit();
    } else {
       //  $Clave = md5($Clave);

        $Sql = "SELECT * FROM /* Aqui va el nombre de la tabla creada en la base ->*/  usuarios WHERE Username = '$Username' AND Clave ='$Clave'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $Username && $row['$Clave'] === $Clave) {
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Clave'] = $row['Clave'];
                $_SESSION['ID'] = $row['ID'];
                header("Location: Inicio.php");
                exit();
            }else {
                header("Location: index.php?error-El Usuario O la Contraseña Son Incorrectas");
                exit();
            } header("Location: index.php?error-El Usuario O la Contraseña Son Incorrectas");
            exit();

        } else {
            header("Location: index.php");
             exit();
        }

}


?>