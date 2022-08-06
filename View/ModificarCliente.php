<?php 
include_once 'header.php'; 
include_once '../Controller/ClientesController.php';

$correo = $_GET["q"];
$Usuario = TraerClienteController($correo)
?>

<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Modificando Cliente</title>
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
        <label for="correo">Correo: </label>
            <input type="text" readonly="readonly" style="color:gray" id="txtCorreo" name="txtCorreo"  required  Value="<?php echo $Usuario["Correo"] ?>">
            <br>
            <label for="password">Contraseña: </label>
            <input type="text" id="txtPassword" name="txtPassword" required Value="<?php echo $Usuario["Password"] ?>">
            <br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="txtNombre" name="txtNombre" required Value="<?php echo $Usuario["Nombre"] ?>">
            <br>
            <br>
            <label for="rol">Rol: </label>
            <select id="txtRol" name="txtRol" class="form-control" required>
            <?php
                CargarRolesClienteController($Usuario["IdRol"]);
            ?>
            </select>
            <br>    
            <input type="submit" class="linkeo" id="btnActualizarUsuario" name="btnActualizarUsuario" value="Actualizar"> 
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