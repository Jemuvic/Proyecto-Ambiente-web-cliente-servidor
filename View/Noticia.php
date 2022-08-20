<?php include_once 'header.php'; ?>
<?php include_once '../Controller/ComentarioController.php'; ?>
<!-- <?php include_once 'PermisosComentario.php'; ?> -->
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Noticias</title>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/3e6c3412fc.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        <body class="body">
            <section class="banner--noticia">
            <h2 class="titulo--noticia">Noticia</h2>
            <img src="../Imagenes/alien.png" alt="" class="imagen--noticia"/>Lorem ipsum dolor sit amet consectetur adipiscing elit libero, est ac donec litora euismod natoque lobortis consequat, rutrum nunc ultrices taciti luctus neque tristique. Aenean lobortis morbi natoque faucibus libero facilisi montes nisi consequat, nostra hac ad volutpat quisque accumsan ac netus vel, ligula eleifend in vehicula pharetra nec sed auctor. Mollis nullam gravida orci vestibulum blandit ligula fringilla duis eleifend, neque per felis commodo nunc dapibus eget tincidunt metus interdum, purus mattis cum nostra sodales litora curae lacinia. Urna mattis eu ligula ultrices parturient inceptos dui netus laoreet nunc fermentum, sociosqu tempor eget torquent per volutpat placerat proin nisl pharetra. Rhoncus aliquet nisi vel curabitur quisque diam cras, magna vestibulum cubilia ultricies est facilisis nam, habitant vivamus nulla porttitor auctor dui. Est volutpat felis orci vivamus posuere metus mus, ridiculus nascetur litora pulvinar sodales nisl. ridiculus nascetur litora pulvinar sodales nisl. ridiculus nascetur litora pulvinar sodales nisl.</p>                      
            
            <div class="caja-comentarios">
                          <h1 class="tituloComentario"> Sección de comentarios
                          <?php
              MostrarPermiso();
                      ?>
                      <div>
                     <br>
                     <br>                     
                        <div class="tbl-content">
                       <table cellpadding="0" cellspacing="0" style="border-radius: 25px">
                     <thead class="tbl-header">
                     <?php
              ConsultarComentarioController();
                      ?>
                 </table> 
                 </div>   
                 </section>
                 <?php include('footer.php'); ?> 
                </body>
                </html>