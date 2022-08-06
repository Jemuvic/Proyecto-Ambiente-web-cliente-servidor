<?php

include_once 'Conexion.php';
        
function ConsultarClientesModel()
{ 
    $instancia = AbrirBD();
    $ListaClientes = $instancia -> query("CALL Consultar_Usuarios()");
    CerrarBD($instancia);  

    return $ListaClientes;
}

function EliminarUsuarioModel($correo)
{ 
    $instancia = AbrirBD();
    $instancia -> query("CALL EliminarUsuario('$correo')");
    CerrarBD($instancia);
}

function ActualizarUsuarioModel($password, $nombre, $correo, $rol)
{ 
    $instancia = AbrirBD();
    $instancia -> query("CALL ActualizarUsuario('$password', '$nombre', '$correo', $rol)");
    CerrarBD($instancia);
}

function TraerUsuarioModel($correo)
{ 
    $instancia = AbrirBD();
    $Usuario = $instancia -> query("CALL TraerUsuario('$correo')");
    CerrarBD($instancia);  

    return $Usuario;
}

function ConsultarRolesModel()
{ 
    $instancia = AbrirBD();
    $listaRoles = $instancia -> query("CALL TraerRoles()");
    CerrarBD($instancia);  

    return $listaRoles;
}

function RegistrarUsuarioModel($password, $nombre, $correo, $rol)
{ 
    $instancia = AbrirBD();
    $instancia -> query("CALL RegistrarUsuarios('$password', '$nombre', '$correo', $rol)");
    CerrarBD($instancia);
}
?>