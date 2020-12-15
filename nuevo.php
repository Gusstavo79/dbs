<!DOCTYPE HTML>
<html>
<head>
  <title>Envio de informaci&oacute;n</title>
  
</head>
<body>
  <?php
  require("uno.php");
  require("cn.php");
  ?>
    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2" style="margin-left: 15%">Control de usuario</h1>
                <h1 class="title is-5">Agregar usuario</h1>
                <form name="frmdatos" action="guardar.php" method="post">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <div class="columns">
                        <div class="column is-three-fifths"><input class="input" type="text" id="n" name="n" placeholder="e.g Alex Smith"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                 <label class="label">Login</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="text" id="l" name="l" placeholder="e.g. miusuario"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                 <label class="label">Contraseña</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="text" id="c" name="c" placeholder="e.g. Password"></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                 <label class="label">Correo electronico</label>
                <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
                <input class="input" type="email" id="e" name="e" placeholder="e.g. alexsmith@gmail.com"></div>
                    </div>
                  </div>
                </div>

                <div class="control">
                  <button id="guardar" name="guardar" class="button is-primary" >&nbsp;Guardar&nbsp;</button>
                  <button class='button is-danger'>Cancelar</button>
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