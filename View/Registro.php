<?php include('header.php'); ?>
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
                <thead class="tbl-header">
                <tr>
                    <th >Nombre</th>
                    <th >Apellidos</th>
                    <th >Correo</th>
                    <th >Contraseña</th>
                    <th >Estado</th>
                    <th >Tipo Usuario</th>
                    <th >Modificar</th>
                    <th >Eliminar</th>          
                </tr>
                </thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>   <!-- espacio para aplicar estrategia de listado CRUD más adelante (por si las dudas) -->
                    <td></td>  
                    <td></td>  
                    <td><a>Modificar</a></td>
                    <td><a>Eliminar</a></td>
                </tr>
            </table>
            </div>
             <div>
            La lista de clientes está vacia
        </div>            
                                   
    </body>
            </article>
            </section>
            <?php include('footer.php'); ?> 
</html>