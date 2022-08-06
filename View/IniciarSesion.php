<?php include_once 'header.php'; ?>
<?php MostrarHeader(); ?>
<?php $result=""; include '../Controller/LoginController.php'; ?>

<!DOCTYPE html>
<html lang="en">

     <head>
        <title>Iniciar partida</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/simple-sidebar.css" rel="stylesheet">
    </head>

    <body class="body">
        <section class="formulario">
           <form  method ="POST"> 
              <h2 class="tituloForm">Iniciar Sesión</h2>
              <label for="correo">Correo:</label>
              <input type="correo" name="txtCorreo" required placeholder="ejemplo@ejemplo.com"/>
              <br>
              <label for="password">Contraseña: </label>
              <input type="password" name="txtPassword" required  placeholder="Escriba aqui su contraseña"/>
              <button type="submit" name="btnLogin" value="Iniciar Sesión">Iniciar Sesión</button>
              <h5> <br> <?= $result; ?> </h5>
            </form>
            <br>
            <a class="link" href="CrearUsuario.php">No tiene cuenta? Cree una aquí</a>
        </section>
    <?php include('footer.php'); ?>
    </body>
    

</html>

