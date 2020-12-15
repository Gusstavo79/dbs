<?php
  $nom = $_POST["n"];
  $log = $_POST["l"];
  $con = $_POST["c"];
  $cor = $_POST["e"];
  //$SQL_ = "DELETE FROM `usuarios` WHERE id='$id'";
  echo $nom. $log. $con. $cor;
?> 
<?php
include("cn.php");

    // verificar conexión
    if (!$conec)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    //////////////////////

$consulta = "INSERT INTO usuarios(nombre,correo,login,password) VALUES('$nom','$cor','$log','$con')";
//$sql = mysqli_query($conec, $consulta);
if(mysqli_query($conec,$consulta)){
        header('Location: dos.php');
    }else{
         echo "'Error'.mysqli_error($conec)";
         
    }

?>
