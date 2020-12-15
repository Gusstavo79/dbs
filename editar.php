<?php
  $ID = $_GET["id"];
  $nom = $_POST["n"];
  $log = $_POST["l"];
  $con = $_POST["c"];
  $cor = $_POST["e"];
  echo $nom. $log. $con. $cor;
?> 
<?php
include("cn.php");

    // verificar conexión
    if (!$conec)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
            
//actualizar datos
$consulta = "UPDATE usuarios SET nombre='$nom', login='$log', password='$con',correo='$cor' WHERE ID='$ID' ";

$sql = mysqli_query($conec, $consulta);

if(mysqli_query($conec,$consulta)){
       header('Location: dos.php');
    }else{
         echo 'Error'.mysqli_error($conec);
         
    }
?>