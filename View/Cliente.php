<?php include_once 'header.php'; 
      include_once '../Controller/ClientesController.php';

$correo = $_GET["q"];

echo $correo;

?>
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Modificando_Creando Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
    <body class="body">
        <section class="Registro">
        <h2 class="titular">Datos del cliente</h2>
        <br>
        <article class="descripcionformulario">

        <form action="" method="POST">

            <label for="password">Contraseña: </label>
            <input type="text" id="txtPassword" name="txtPassword" required minlength="4" maxlength="20" placeholder="Escriba aqui su contraseña"/>
            <label for="correo">Correo: </label>
            <input type="email" id="txtCorreo" name="txtCorreo"  placeholder="ejemplo@ejemplo.com"/>
            <br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="txtNombre" name="txtNombre" required minlength="4" maxlength="90" placeholder="Escriba aqui el nombre completo"/>
            <br>
            <br>
            <label for="rol">Rol: </label>
            <input type="number" id="txtRol" name="txtRol" />
            <br>    
            <button type="submit" id="btnActualizarUsuario" name="btnActualizarUsuario" value = "Actualizar"> Guardar </button>  
    
        
        </form>
        <br>
        <a class="linkeo" href="Usuarios.php"> Regresar </a>
        </article>
            </section>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/Funciones.js"></script>

      </body>
      <?php include('footer.php'); ?> 
</html>