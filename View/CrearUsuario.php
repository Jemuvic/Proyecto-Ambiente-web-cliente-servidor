<?php include_once 'header.php'; 
include_once '../Controller/ClientesController.php';
?>
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>Nueva partida</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/simple-sidebar.css" rel="stylesheet">
    </head>

    <body class="body">
        <section class="formulario">
           <form method="POST" enctype="multipart/form-data">
              <h2 class="tituloForm">Nueva Partida</h2>
              <input type="hidden" name="idcliente"/>
              <input type="hidden" name="estado" value="true"/>
              <label for="nombre">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" required minlength="4" maxlength="30" placeholder="Escriba aquí su nombre" />
              <br>
              <label for="correo">Correo:</label>
              <input type="text" id="txtCorreo" name="txtCorreo" required minlength="4" maxlength="20" placeholder="ejemplo@ejemplo.com"/>
              <br>
              <label for="password">Contraseña: </label>
              <input type="text" id="txtPassword" name="txtPassword" required minlength="6" maxlength="20" placeholder="Escriba aquí su contraseña"/>
              <br>   
              <input type="hidden" id="txtRol" name="txtRol" value="2"> <!-- Rol predeterminado para un usuario común, es tipo hidden, no se puede ver -->
            <br>    
            <input type="submit" class="linkeo" id="btnCrearUsuario" name="btnCrearUsuario" value="CrearUsuario"> 
            </form>
        <a class="linkeo" href="IniciarSesion.php"> Regresar </a>
        </section>
        <?php include('footer.php'); ?>
    </body>
</html>