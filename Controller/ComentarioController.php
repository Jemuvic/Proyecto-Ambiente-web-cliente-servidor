<?php

include_once '../Model/ComentarioModel.php';


if(isset($_POST['btnGuardarComentario']))
{
    $comentario = $_POST["txtComentario"];
   

    RegistrarComentarioModel($comentario);
    Header("Location: ../View/Noticia.php");
}

//para jalar comentario 

function ConsultarComentarioController()
{ 
    $ListaComentario = ConsultarComentarioModel();
    while ($item = mysqli_fetch_array($ListaComentario)) 
    {
        echo "<tr>";
        echo "<td>" . $item["comentario"] . "</td>";
        echo '<td></td>';
        echo "</tr>";
    }
}


?>