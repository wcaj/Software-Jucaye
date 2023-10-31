<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistema de Riego Automatizado</title>
  <link rel="stylesheet" href="src/assets/css/login.css" type="text/css" />
</head>

<body>
  <div class="containerlogin">

    <div class="contenedorlogin">
      <div class="imagen">
        <img src="src/assets/img/SRA-logo.png" alt="" />
      </div>
      <h2>Bienvenido</h2>
      <?php
      session_start();
      if (isset($_SESSION["Error"])) {
        echo "<h3> {$_SESSION["Error"]}</h3>";
        unset($_SESSION["Error"]);
      }
      ?>

      <form name="form" action="admin/validacion.php" method="post">
        <input class="usuario" type="text" name="usuario" placeholder="Usuario" />
        <br />

        <input class="pass" type="Password" name="password" placeholder="Contraseña" />
        <br />
        
        <button class="acceder">Acceder</button>
        <br /><br />

        <a class="registrar" href="src/registros/Registro_usuario.php">Registrar</a>
      </form>
      <br />
      
      <a class="olvido" href="src/registros/Recuperar_Contraseña.php">¿Olvidaste tu contraseña?</a>
      <a class="olvido" href="Index.php">Volver</a>
    </div>
  </div>
</body>

</html>