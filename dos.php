<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8"> 
    <title></title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
   </head> 

<body>
  <?php 
  require("cn.php");
  ?> 
<section class="hero is-primary" >
  <div class="hero-body">
      <div class="container">
        <h1 class="title">Universidad de Colima</h1>
        <h2 class="subtitle">Facultad de Telemática</h2>
      </div>
    </div>

<p style="margin-left: 85%;"><?php if(isset($_SESSION["nombre"])){?>Bienvenido: <?php echo $_SESSION["nombre"];?> | <a href="cerrar.php">Salir</a><?php }else{echo "";}?></p>
</section>
  <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2" style="margin-left: 15%">Control de usuario</h1>
                <a href='nuevo.php'><button class='button is-success' style="margin-left: 80%;">Agregar usuario</button></a>
                
              <?php 
              
              if(isset($_SESSION['nombre'])) {

              //obtención de los datos 
              $usua = mysqli_query($conec,"SELECT * FROM usuarios");
              
              echo"<table class='table'>
              <thead>
                <tr>
                  <th><abbr title='Position'>#</abbr></th>
                  <th>Nombre</th>
                  <th><abbr title='Played'>Correo electronico</abbr></th>
                  <th><abbr title='Won'>login</abbr></th>
                  <th><abbr title='Drawn'>Acciones</abbr></th>
                </tr>
              </thead>";
              while ($resul = mysqli_fetch_array($usua)) {
               echo "<tr>";
               echo "<th>".$resul["ID"]."</th>";
               echo "<th>".$resul["nombre"]."</th>";
               echo "<th>".$resul["correo"]."</th>";
               echo "<th>".$resul["login"]."</th>";
               echo"<th><abbr title='Drawn'>
               <a href='edit_user.php?id=".$resul["ID"]."'><button class='button is-link'>Editar</button></a>
               <a href='borrar.php?id=".$resul["ID"]."'><button class='button is-danger' onclick='return confirmacio(); '>borrar</button></a> 
               </abbr></th> </tr>"; 
              }
              echo "</table>";
             }
             else{
              echo " 
              <h1 class='title is-4' style='margin-left: 19%'>usuario no encontrado</h1>
               <a href='index.php'><button class='button is-link' style='margin-left: 29%'>Regresar</button></a>";
             }
            ?>
           </div>
        </div>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Gustavo Estudillo</a>. 
        </p>
      </div>
    </footer>
    
<!--confirmacio para eliminar registro -->
    <script src="confirmacion.js"></script>
</body> 
</html>