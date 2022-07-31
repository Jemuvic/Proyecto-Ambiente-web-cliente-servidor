<?php include_once 'header.php'; ?>
<?php 
$result="";
if(isset($_POST['submit'])){
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail=new PHPMailer;
    $mail -> CharSet = 'UTF-8';
    $mail->IsSMTP();

    $mail->Host='smtp.office365.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='proyectojmw023@hotmail.com';
    $mail->Password='Jjmv010203';

    $mail->setFrom('proyectojmw023@hotmail.com',$_POST['nombre']);
    $mail->addAddress('proyectojmw023@hotmail.com');

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: ' .$_POST['nombre'].'<br> Email: '.$_POST['email'].'<br> Mensaje: '
    .$_POST['mensaje'].'</h1>';

    if(!$mail->send()){
    $result="Algo salió mal,inténtelo de nuevo";
}
else
{
$result="Gracias ".$_POST['nombre']." por contactarnos, atenderemos tu inconveniente y nos pondremos en contacto muy pronto!";
}
}
?>

<?php MostrarHeader(); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <script src="https://kit.fontawesome.com/3e6c3412fc.js" crossorigin="anonymous"></script>
        <title>Contáctenos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
        </head>
        <br>
        <br>
    <body class="body">
     <section class="Registro">
    <form action="" name="Formulario-Contacto" method="post">
    <h2 class="tituloForm">Contáctenos</h2>
    <label for="nombreUSU"><i class="fa-solid fa-user"></i> Nombre:</label>
     <input type="text" name="nombre" id="nombre" required minlength="4" maxlength="20" placeholder="Escriba aquí su nombre"/>
    <br>
    <label for="correo"> <i class="fa-solid fa-envelope"></i> Correo:</label>
     <input type="email" name="email" id="email" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="ejemplo@ejemplo.com"/>
      <br>
      <label for="descripcion">Descripción: </label>
      <textarea type="text" name="mensaje" id="mensaje" required minlength="8" placeholder="Escriba aqui una descripción de la necesidad"></textarea>
       <br>
       <button type="submit" name="submit">Enviar Mensaje</button>
       <h5> <br> <?= $result; ?> </h5>
      </form>
      </section>
      <br>
      <br>
      <br>
      <br>
      <?php include('footer.php'); ?> 
      </body>
     </html>