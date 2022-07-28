<?php

include_once 'Conexion.php';
        
function Consulta_Usuario_Model($correo, $password)
{ 
    $instancia = AbrirBD();
    $usuario = $instancia -> query("CALL Consulta_Usuario('$correo', '$password')");
    CerrarBD($instancia);  

    return $usuario;
}

?>