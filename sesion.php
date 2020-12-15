<?php
require("cn.php");

  //iniciar sesion
  session_start();
   $nombre = $_POST['nombre'];
   $correo = $_POST['email'];

   $con = "SELECT * FROM usuarios WHERE nombre = '$nombre' and correo = '$correo'";

   $x = mysqli_query($conec, $con);

	if($y = mysqli_fetch_assoc($x)) {
		$_SESSION['nombre'] = $y['nombre'];

	header("location: dos.php");
 }
 else{
 	echo " 
   <h1 class='title is-4' style='margin-left: 19%'>usuario no encontrado</h1>
   <a href='index.php'><button class='button is-link' style='margin-left: 29%'>Regresar</button></a>";
 	header("location: dos.php");
 }
?>