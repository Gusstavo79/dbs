<?php
$server = "localhost";
$dbs = "prograweb";
$contra = "";
$user = "root";
$conec = mysqli_connect($server,$user,$contra,$dbs);

$email = "correo";
//alerta cuando la conexion no se logra
if (!$conec) {
    die ("Error al conectarse con la Base de Datos".mysqli_error());
    exit;
}


?>