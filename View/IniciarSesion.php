<?php include('header.php'); ?>
<?php include '../Controller/LoginController.php'; ?>

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
              <label for="cedula">Cedula:</label>
              <input type="cedula" name="txtCedula"/> 
              <br>
              <label for="password">Contraseña: </label>
              <input type="password" name="txtPassword" required minlength="4" maxlength="20" placeholder="Escriba aqui su contraseña"/>
              <input type="submit" name="btnLogin" value="Login">Iniciar Sesión</button>
            </form>
            <br>
            <a class="link" href="CrearUsuario.php">No tiene cuenta? Cree una aquí</a>
        </section>
    <?php include('footer.php'); ?>
    </body>
    

</html>