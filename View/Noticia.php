<?php include_once 'header.php'; ?>
<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Noticia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">>
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        <body class="body">
            <section class="banner--noticia">
            <h2 class="titulo--noticia">Noticia</h2>
            <p class="contenido--noticia"><img src="../Imagenes/alien.png" alt="" class="imagen--noticia"/>Lorem ipsum dolor sit amet consectetur adipiscing elit libero, est ac donec litora euismod natoque lobortis consequat, rutrum nunc ultrices taciti luctus neque tristique. Aenean lobortis morbi natoque faucibus libero facilisi montes nisi consequat, nostra hac ad volutpat quisque accumsan ac netus vel, ligula eleifend in vehicula pharetra nec sed auctor. Mollis nullam gravida orci vestibulum blandit ligula fringilla duis eleifend, neque per felis commodo nunc dapibus eget tincidunt metus interdum, purus mattis cum nostra sodales litora curae lacinia. Urna mattis eu ligula ultrices parturient inceptos dui netus laoreet nunc fermentum, sociosqu tempor eget torquent per volutpat placerat proin nisl pharetra. Rhoncus aliquet nisi vel curabitur quisque diam cras, magna vestibulum cubilia ultricies est facilisis nam, habitant vivamus nulla porttitor auctor dui. Est volutpat felis orci vivamus posuere metus mus, ridiculus nascetur litora pulvinar sodales nisl.</p>                      
                   <br>
                      <br>
                       <br>
                        <br>
                       <div>
                          <h1 class="tituloComentario">Comentarios
                       <br>
                      <br>
                     <a class="newnew" href="Comentario.php"> Agregar comentario </a></h1>
                    </div>  
                      <div>
                     <br>
                     <br>
                       <p class="tituloComentario">No puedes comentar sin iniciar sesión</p>
                        </div>
                        <div class="tbl-content">
                       <table cellpadding="0" cellspacing="0" style="border-radius: 25px">
                     <thead class="tbl-header">
                        <tr>
                      <th>Usuario</th>
                     <th>Comentario</th>
                     </tr>
                         </thead>
                <tbody>
                <tr>                  
                <td></td>  <!-- espacio para aplicar estrategia CRUD más adelante (por si las dudas) -->
                <td></td>
                 </tr>  
                 </tbody>
                 </table> 
                 </div>                       
                 </section>
                 <?php include('footer.php'); ?> 
                </body>
                </html>