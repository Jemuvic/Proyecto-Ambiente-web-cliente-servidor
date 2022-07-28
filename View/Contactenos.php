<?php include_once 'header.php'; ?>
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <script src="https://kit.fontawesome.com/3e6c3412fc.js" crossorigin="anonymous"></script>

        <title>Contáctenos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        
        </head>

    <body class="body">
     <section class="Registro">
    <form name="Formulario-Contacto">
    <h2 class="tituloForm">Contáctenos</h2>
    <input type="hidden" name="idContacto"/>
    <label for="nombre"><i class="fa-solid fa-user"></i> Nombre:</label>
     <input type="text" name="nombre" required minlength="4" maxlength="20" placeholder="Escriba aquí el nombre"/>
    <br>
     <label for="apellidos"><i class="fa-solid fa-user"></i> Apellido:</label>
     <input type="text" name="apellidos" required minlength="4" maxlength="20" placeholder="Escriba aquí el apellido completo"/>
     <br>
    <label for="correo"> <i class="fa-solid fa-envelope"></i> Correo:</label>
     <input type="email" name="correo"  maxlength="20" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
      <br>
     <label for="telefono"><i class="fa-solid fa-phone"></i> Telefono: </label>
     <input type="tel" name="telefono" required minlength="8" maxlength="8" pattern="[0-9]{8}"placeholder="########"/>
      <br>
      <label for="descripcion">Descripción: </label>
      <textarea type="text" name="descripcion" required minlength="8" placeholder="Escriba aqui una descripción de la necesidad"></textarea>
       <br>
       <button type="submit" name="guardar" value="Enviar" id="Enviar">Enviar Mensaje</button>
      </form>
      </section>
      <?php include('footer.php'); ?> 
      </body>
     </html>