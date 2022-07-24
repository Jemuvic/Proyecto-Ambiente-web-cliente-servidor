<?php include_once 'header.php'; ?>
<?php MostrarHeader(); ?>
<?php  
include_once '../Controller/ClientesController.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro de usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        <body class="body">
       <section class="contenido">
        <br>
          <h1 class="titular">Clientes desde una lista de base de datos</h1>
        <br>
            <article class="descripcion">
        <a class="newnew" href="Cliente.php">Crear un usuario</a>
        <br>
            <br>
                <br>
        <div class="div-users">
            <table class="tbl-users">
                <thead id="TablaClientes"  class="tbl-header">
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>ROL</th>
                <th>IDROL</th>
                <th>CONTRASEÑA</th>
            </thead>

          <tbody>
            <?php
              ConsultarClientesController();
            ?>
          </tbody>
        </table>
        
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
                                   
    </body>
            </article>
            </section>
            <?php include('footer.php'); ?> 
</html>