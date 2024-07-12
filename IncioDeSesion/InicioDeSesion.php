<?php

session_start();
include('conexion.php');

    include('conexion.php');

if (isset($_POST['Username'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
}

    $Username = validate($_POST['Username']);
    $Password = validate($_POST['Password']);

    if (empty($Username)) {
        header("Location: login.html?error-El Usuario Es Requerido");
        exit();
        }else if (empty($Password)) {
        header("Location: login.html?error-La Clave es Requerida");
        exit();
    } else {
       // $Password = md5($Password);

        $Sql = "SELECT * FROM Username WHERE Username = '$Username' AND Password='$Password'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $Username && $row['$Password'] === $Password) {
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Password'] = $row['Password'];
                $_SESSION['ID'] = $row['ID'];
                header("Location: Inicio.php");
                exit();
            }else {
                header("Location: login.html?error-El Usuario O la Contraseña Son Incorrectas");
                exit();
            }
        } else {
            header("Location: login.html");
             exit();
        }

}


?>