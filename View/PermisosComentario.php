<?php
include_once '../Controller/LoginController.php';
include_once '../Controller/PlantillaController.php';
function MostrarPermiso()
    {   


       if(!isset($_SESSION["RolUsuario"]))
       {
        $RolUsuario = null;
       }
       else
       {
        $RolUsuario = $_SESSION["RolUsuario"];
       }     
        if( $RolUsuario == null)
        {
            echo 
       '
       <br>
       <br>
    <p class="tituloComentario">No puedes comentar sin iniciar sesión</p>                              
 ';     
        } else
        if($RolUsuario == 1)
        {
            ValidarSesion();
            $Permiso = '<a class="newnew" href="Comentario.php"> Agregar comentario </a>';
        
        echo 
       '
       <div>
       <br>
       <br>
        '.
        $Permiso
         .'
        </div>      
 ';
        }else 
    if($RolUsuario == 2)
    {
      ValidarSesion();
    $Permiso = '<a class="newnew" href="Comentario.php"> Agregar comentario </a>';
        
        echo 
       '
       <div>
       <br>
       <br>
     '.
     $Permiso
     .'
    </div>      
 ';
}
    }
?>