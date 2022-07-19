<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creando comentario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        
    <body class="body"> 
        <section class="DCLIENTE">
            <h2 class="titular">Añada su comentario</h2>
            <br>
            <article class="descripcionformulario">      
                   <textarea type="text" placeholder="Escriba aquí"></textarea>
                    <button class="colorPrimario" type="submit" name="guardar"> Guardar comentario </button> 
            </article>
        </section>
        <?php include('footer.php'); ?> 
    </body>
</html>

