<?php include('header.php'); ?>
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
        <header th:replace="layout/plantillaProyecto :: header">

        <section class="formulario">
            <form  method ="POST" enctype="multipart/form-data">
              <h2 class="tituloForm">Iniciar Sesión</h2>
              <label for="correo">Correo:</label>
              <input type="email" name="correo" required minlength="6"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
              <br>
              <label for="password">Contraseña: </label>
              <input type="password" name="password" required minlength="4" maxlength="20" placeholder="Escriba aqui su contraseña"/>
              <br>
              <button type="submit" name="guardar" value="Guardar registro">Iniciar Sesión</button>
            </form>
            <a class="link">No tiene cuenta? Cree una aquí</a>
        </section>

    <?php include('footer.php'); ?>
    </body>
    

</html>