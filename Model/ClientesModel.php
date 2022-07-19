<?php

include_once 'Conexion.php';
        
function ConsultarClientesModel()
{ 
    $instancia = AbrirBD();
    $ListaClientes = $instancia -> query("CALL Consultar_Usuarios()");
    CerrarBD($instancia);  

    return $ListaClientes;
}

?>