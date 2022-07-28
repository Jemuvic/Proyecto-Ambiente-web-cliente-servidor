<?php
include_once '../Controller/LoginController.php';
include_once '../Controller/PlantillaController.php';
function MostrarComentarios()
    {   
        $RolUsuario = $_SESSION["RolUsuario"];
        $Permiso = "";
        if( $RolUsuario == NULL)
        {
            echo 
       '
       <div class="caja-comentarios">
                          <h1 class="tituloComentario">Comentarios
                       <br>
                      <br>
                      <div>
                     <br>
                     <br>
                       <p class="tituloComentario">No puedes comentar sin iniciar sesión</p>                       
                        <div class="tbl-content">
                       <table cellpadding="0" cellspacing="0" style="border-radius: 25px">
                     <thead class="tbl-header">
                        <tr>
                      <th>Usuario</th>
                     <th>Comentario</th>
                     </tr>
                         </thead>
                <tbody>
                <tr>                  
                <td></td>  <!-- espacio para aplicar estrategia CRUD más adelante (por si las dudas) -->
                <td></td>
                 </tr>  
                 </tbody>
                 </table> 
                 </div>             
 ';     
        } else
        if($RolUsuario == 1)
        {
            ValidarSesion();
            $Permiso = '<a class="newnew" href="Comentario.php"> Agregar comentario </a></h1>';
        
        echo 
       '
       <div class="caja-comentarios">
                          <h1 class="tituloComentario">Comentarios
                       <br>
                      <br>
                      '.
                      $Permiso
                     .'
                      <div>
                     <br>
                     <br>                     
                        <div class="tbl-content">
                       <table cellpadding="0" cellspacing="0" style="border-radius: 25px">
                     <thead class="tbl-header">
                        <tr>
                      <th>Usuario</th>
                     <th>Comentario</th>
                     <th>Acción</th> <!-- En esta fila van los "Eliminar" que el usuario administrador va a visualizar -->
                     </tr>
                         </thead>
                <tbody>
                <tr>                  
                <td></td>  <!-- espacio para aplicar estrategia CRUD más adelante (por si las dudas) -->
                <td></td>
                 </tr>  
                 </tbody>
                 </table> 
                 </div>       
 ';
        }else 
    if($RolUsuario == 2)
    {
        ValidarSesion();
        $Permiso = "";
    
    echo 
    '
    <div class="caja-comentarios">
                       <h1 class="tituloComentario">Comentarios
                    <br>
                   <br>
                   '.
                   $Permiso
                  .'
                   <div>
                  <br>
                  <br>                     
                     <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" style="border-radius: 25px">
                  <thead class="tbl-header">
                     <tr>
                   <th>Usuario</th>
                  <th>Comentario</th>
                  </tr>
                      </thead>
             <tbody>
             <tr>                  
             <td></td>  <!-- espacio para aplicar estrategia CRUD más adelante (por si las dudas) -->
             <td></td>
              </tr>  
              </tbody>
              </table> 
              </div>    
';

}
    }
?>