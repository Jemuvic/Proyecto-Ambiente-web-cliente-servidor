<?php

include 'Conexion.php';
        
function Consulta_Usuario_Model($cedula, $password)
{ 
    $instancia = AbrirBD();
    $usuario = $instancia -> query("CALL Consulta_Usuario('$cedula', '$password')");
    CerrarBD($instancia);  

    return $usuario;
}

?>