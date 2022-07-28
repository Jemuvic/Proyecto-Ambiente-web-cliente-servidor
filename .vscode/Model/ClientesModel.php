<?php

include 'Conexion.php';
        
function ConsultarClientesModel()
{ 
    $instancia = AbrirBD();
    $ListaClientes = $instancia -> query("CALL ConsultarCliente()");
    CerrarBD($instancia);  

    return $ListaClientes;
}

?>