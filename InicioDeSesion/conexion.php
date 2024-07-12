<?php

$Host = "localhost";
$User = "root";
$Pass = "";

$db =  /* Aqui va el nombre de la base de datos ->*/ "iniciodesesion";

$conexion = mysqli_connect($Host, $User, $Pass, $db);

if ($conexion) {
    echo "Conexion Fallida";
}

?>