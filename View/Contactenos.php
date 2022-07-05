<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contactenos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>

    <body class="body">

     <section class="Registro">
    <form name="Formulario-Contacto">
    <h2 class="tituloForm">Contactenos</h2>
    <input type="hidden" name="idContacto"/>
    <label for="nombre">Nombre:</label>
     <input type="text" name="nombre" required minlength="4" maxlength="10" placeholder="Escriba aqui el nombre"/>
    <br>
     <label for="apellidos">Apellido:</label>
     <input type="text" name="apellidos" required minlength="4" maxlength="20" placeholder="Escriba aqui el apellido completo"/>
     <br>
    <label for="correo">Correo:</label>
     <input type="email" name="correo" required minlength="6" maxlength="15" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
      <br>
     <label for="telefono">Telefono: </label>
     <input type="tel" name="telefono" required minlength="8" maxlength="8" pattern="[0-9]{8}"placeholder="########"/>
      <br>
      <label for="descripcion">Descripcion: </label>
      <textarea type="text" name="descripcion" required minlength="5" placeholder="Escriba aqui una descripcion de la necesidad"></textarea>
       <br>
       <button type="submit" name="guardar" value="Guardar registro">Enviar Mensaje</button>
      </form>
      </section>
      <?php include('footer.php'); ?> 
      </body>
     </html>