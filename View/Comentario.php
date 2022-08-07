<?php include_once 'header.php'; ?>
<?php include_once '../Controller/ComentarioController.php'; ?>
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creando comentario</title>
        <script src="https://kit.fontawesome.com/3e6c3412fc.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        
    <body class="body"> 
    <form action="" method="POST">
        <section class="DCLIENTE">
            <h2 class="titular">Añada su comentario</h2>
            <br>
            <article class="descripcionformulario">      
            <textarea type="text" name="txtComentario" id="txtComentario" placeholder="Escriba aquí"></textarea>
                    <button class="colorPrimario" type="submit" name="btnGuardarComentario" id="btnGuardarComentario" > Guardar comentario </button>
            </article>
        </section>
        <?php include('footer.php'); ?> 
        </form>
    </body>
</html>

