<?php

    function AbrirBD()
    {
        $server = "localhost";
        $user = "root";
        $password = "Missi1430.";
        $database = "practica_vn";
        return mysqli_connect($server, $user, $password, $database);
    }
    function CerrarBD($instancia)
    {
        mysqli_close($instancia);
    }

?>