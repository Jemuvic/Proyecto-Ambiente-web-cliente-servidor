<?php include('header.php'); ?>
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
            <input type="text" name="nombre" required minlength="4" maxlength="10" placeholder="Escriba aqui el nombre"/>
              <br>
              <label for="apellidos">Apellido:</label>
              <input type="text" name="apellidos" required minlength="4" maxlength="20" placeholder="Escriba aquí el apellido completo"/>
              <br>
              <label for="correo">Correo:</label>
              <input type="email" name="correo" required minlength="6" maxlength="15" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
              <br>
              <label for="password">Contraseña: </label>
              <input type="password" name="password" id="pwd" required minlength="4" maxlength="20" placeholder="Escriba aqui su contraseña"/>
              <br>       
              <button type="submit" name="guardar" value="Guardar registro">Crear cuenta</button>
            </form>
        </section>
        <?php include('footer.php'); ?>
    </body>
</html>