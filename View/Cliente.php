<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Modificando_Creando Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
    <body class="body">
        <section class="Registro">
        <h2 class="titular">Datos del cliente</h2>
        <br>
        <article class="descripcionformulario">
        <a class="newnew">Regresar</a>
        <br>
            <br>
        <form>
            <input type="hidden" name="idcliente"/>
            <input type="hidden" name="estado"/>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" required minlength="4" maxlength="10" placeholder="Escriba aqui el nombre"/>
            <br>
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" required minlength="4" maxlength="20" placeholder="Escriba aqui el apellido completo"/>
            <br>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" required minlength="6" maxlength="15" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
            <br>
            <label for="password">Contraseña: </label>
            <input type="text" name="password" required minlength="4" maxlength="20" placeholder="Escriba aqui su contraseña"/>
           <br>
                <select>
                    <option value="ADMIN">ADMIN</option>
                    <option value="USER">USER</option>
                </select>
            <br>
                
            <button type="submit" name="guardar" value="Guardar Registro"> Guardar </button>
        </form>
        </article>
            </section>
      </body>
      <?php include('footer.php'); ?> 
</html>