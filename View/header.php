
<?php
include_once '../Controller/LoginController.php';
include_once '../Controller/PlantillaController.php';


function MostrarHeader()
    {   
        session_start();
       if(!isset($_SESSION["RolUsuario"]))
       {
        $RolUsuario = null;
       }
       else
       {
        $RolUsuario = $_SESSION["RolUsuario"];
       }
        $Opciones = "";       
        if( $RolUsuario == null)
        {
            echo 
       '
            <nav id="main-header" class="navbar navbar-expand-sm py-2  text-white" style="background-color: rgba(105, 220, 255);">
                <div class="container">
                <a class="link" href="Inicio.php">
                <figure class="imagenTitulo"><img src="../Imagenes/icono.png" alt="" width="70" /></figure>
                </a>
                <div class="col-md-7">
                            <h1 class= "text-dark">                               
                              Daily 8-bits
                            </h1>
                            </div> 
                 <div class="collapse navbar-collapse" id="navbarCollapse">        
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark" href="Inicio.php">Inicio</a>
                            </li> 
                        <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark" href="Contactenos.php">Contáctenos</a>
                            </li>   

                            <li class="nav-item px-2">
                             <form action="" method="POST">
                             <input type="submit" class="nav-menu-link nav-link text-dark" value="Iniciar sesión" id="btnIniciarSesion" name="btnIniciarSesion">
                             </form>
                             </li>

                        </ul>                        
                    </div>                    
                 </div>  
            </nav>        
               
 </header> 
 ';     
        } else
        if($RolUsuario == 1)
        {
            ValidarSesion();
            $NombreUsuario = $_SESSION["NombreUsuario"];
            $Opciones = '<a class="nav-menu-link nav-link text-white" href="Usuarios.php">Usuarios</a>';
        
        echo 
       '
            <nav id="main-header" class="navbar navbar-expand-sm py-2  text-white" style="background-color: rgba(105, 220, 255);">
                <div class="container">
                <a class="link" href="Inicio.php">
                <figure class="imagenTitulo"><img src="../Imagenes/icono.png" alt="" width="70" /></figure>
                </a>
                <div class="col-md-7">
                            <h1 class= "text-dark">                               
                            Daily 8-bits
                            </h1>
                            </div> 
                 <div class="collapse navbar-collapse" id="navbarCollapse">        
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-2"> '.
                             $Opciones
                          .'  </li>
                            <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark" href="Inicio.php">Inicio</a>
                            </li> 
                        <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark" href="Contactenos.php">Contáctenos</a>
                            </li>   
                            
                             <li class="nav-item px-2">
                             <form action="" method="POST">
                             <input type="submit" class="nav-menu-link nav-link text-dark" value="Cerrar Sesión" id="btnCerrarSesion" name="btnCerrarSesion">
                             </form>
                             </li>

                             <dt class="nav-item px-4"> <i class="fa-solid fa-user-check"></i>'  .
                                 $NombreUsuario  
                                 .    '  </dt>

                        </ul>                        
                    </div>                    
                 </div>  
            </nav>        
               
 </header> 
 ';
        }else 
    if($RolUsuario == 2)
    {
        ValidarSesion();
            $NombreUsuario = $_SESSION["NombreUsuario"];
            $Opciones = '<a class="nav-menu-link nav-link text-white" href="Usuarios.php">Usuarios</a>';
    
    echo 
   '
        <nav id="main-header" class="navbar navbar-expand-sm py-2  text-white" style="background-color: rgba(105, 220, 255);">
            <div class="container">
            <a class="link" href="Inicio.php">
            <figure class="imagenTitulo"><img src="../Imagenes/icono.png" alt="" width="70" /></figure>
            </a>
            <div class="col-md-7">
                        <h1 class= "text-dark">                               
                        Daily 8-bits
                        </h1>
                        </div> 
             <div class="collapse navbar-collapse" id="navbarCollapse">        
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-2">
                            <a class="nav-menu-link nav-link text-dark" href="Inicio.php">Inicio</a>
                        </li> 
                    <li class="nav-item px-2">
                            <a class="nav-menu-link nav-link text-dark" href="Contactenos.php">Contáctenos</a>
                        </li>   
                        
                         <li class="nav-item px-2">
                         <form action="" method="POST">
                         <input type="submit" class="nav-menu-link nav-link text-dark" value="Cerrar Sesión" id="btnCerrarSesion" name="btnCerrarSesion">
                         </form>
                         </li>
                         <dt class="nav-item px-4"> <i class="fa-solid fa-user-check"></i>'  .
                         $NombreUsuario  
                         .    '  </dt>
                    </ul>                        
                </div>                    
             </div>  
        </nav>                   
</header> 
';

}
    }
?>