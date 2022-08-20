<?php
include_once 'Conexion.php';



function RegistrarComentarioModel($comentario)
{ 
    $instancia = AbrirBD();
    $instancia -> query("CALL RegistrarComentario('$comentario')");
    CerrarBD($instancia);

 
}

function ConsultarComentarioModel()
{ 
    $instancia = AbrirBD();
    $ListaComentario = $instancia -> query("CALL ConsultarComentario()");
    CerrarBD($instancia);  

    return $ListaComentario;
}

function EliminarComentarioModel($comentario)
{ 
    $instancia = AbrirBD();
    $instancia -> query("CALL EliminarComentario('$comentario')");
    CerrarBD($instancia);
}

?>

