<?php

$Host = "LocalHost";
$User = "root";
$Pass = "";

$db =  "http://localhost/phpmyadmin/index.php?route=/database/structure&db=iniciodesesion";

$conexion = mysqli_connect($host, $User, $pass, $db);

if ($con) {
    echo "Conexion Fallida";
}

?>