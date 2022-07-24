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

?>