<!DOCTYPE HTML>
<html>
<head>
  <title>Envio de informaci&oacute;n</title>
  
</head>
<body>
  <?php
  require("uno.php");
  require("cn.php");
  $el_id = $_GET["id"];

  $datos = "SELECT nombre,correo,login,password FROM usuarios WHERE ID='$el_id' ";
  $uno = mysqli_query($conec,$datos);
  while ($resul = mysqli_fetch_array($uno)) {
               
           
  ?>
    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2" style="margin-left: 15%">Control de usuario</h1>
                <h1 class="title is-5">Editar usuario</h1>
                <form name="frmdatos"  <?php echo "action='editar.php?id=".$el_id."'"?> method="POST">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <div class="columns">
                    <div class="column is-three-fifths"><input class="input" type="text" id="n" name="n" value="<?php echo $resul['nombre'];?>"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                 <label class="label">Login</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="text" id="l" name="l" placeholder="e.g. miusuario" value="<?php echo $resul['login'];?>"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                 <label class="label">Contraseña</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="text" id="c" name="c" placeholder="e.g. Password" value="<?php echo $resul['password'];?>"></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                 <label class="label">Correo electronico</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="email" id="e" name="e" placeholder="e.g. alexsmith@gmail.com" value="<?php echo $resul['correo'];}?>"></div>
                    </div>
                  </div>
                </div>

                <div class="control">
                  <button id="guardar" name="guardar" class="button is-primary" type="submit">&nbsp;Guardar&nbsp;</button>
                  <button class='button is-danger' >Cancelar</button>
                </div>
                </form>
        </div>
        </div>
    </div>

    <!-- pié de página -->
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Gustavo Estudillo</a>. 
        </p>
      </div>
    </footer>
</body>
</html>