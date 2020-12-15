<?php
  $ID = $_GET["id"];

  
?> 
<?php
include("cn.php");

    // verificar conexión
    if (!$conec)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    //////////////////////

$consulta = "DELETE FROM `usuarios` WHERE ID='$ID'";
$sql = mysqli_query($conec, $consulta);
if(mysqli_query($conec,$consulta)){
        header('Location: dos.php');
    }else{
         echo 'Error'.mysqli_error($conec);
         
    }
?>