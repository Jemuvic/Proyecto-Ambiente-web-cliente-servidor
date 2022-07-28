<!-- PLANTILLA= header.php y footer.php -->
<!-- Esta sección es como componentesController del profe-->
<?php

    function ValidarSesion()
    {
        if($_SESSION["NombreUsuario"] == null)
        {
            session_destroy();
            Header("Location: ../View/Inicio.php");
        }
    }


    function Notificar($destinatario, $asunto, $cuerpo)
    {
        require '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';
        $mail -> IsSMTP();
        $mail -> Host = 'smtp.office365.com'; // smtp.gmail.com
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587; // 465
        $mail -> SMTPAuth = true;
        $mail -> Username = 'claseProgra3.5@outlook.com';
        $mail -> Password = 'progra3.5';
        $mail -> SetFrom('claseProgra3.5@outlook.com', "PROFE");
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($cuerpo);
        $mail -> AddAddress($destinatario, 'USER');
        $mail -> send();
    }

    function EnviarMenasje()
    {
        include_once 'Contactenos.php';
    if(isset($_POST['Enviar']))
    {
       Notificar($item["correo"], 'ENVIADO', 'ALERTA, FUNCIONÓ'); 

    }
    }
?>