<?php

    function AbrirBD()
    {
        $server = "127.0.0.1:3307";
        $user = "root";
        $password = "";
        $database = "DAILY8BITS";
        return mysqli_connect($server, $user, $password, $database);
    }
    function CerrarBD($instancia)
    {
        mysqli_close($instancia);
    }

?>