<!DOCTYPE html>
<html lang="en">

<head>
<title>Daily 8-bits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/simple-sidebar.css" rel="stylesheet">
</head>
<header th:fragment="header" class="header">

            <nav id="main-header" class="navbar navbar-expand-sm py-2  text-white" style="background-color: rgba(105, 220, 255);">
                <div class="container">
                <figure class="imagenTitulo"><img src="../Imagenes/icono.png" alt="" width="70" /></figure>
                <div class="col-md-6">
                            <h1 class= "text-dark">                               
                            <i class="fas fa-cog"></i> Daily 8-bits
                            </h1>
                            </div> 
                 <div class="collapse navbar-collapse" id="navbarCollapse">        
                        <ul sec:authorize="isAuthenticated()" class="navbar-nav ml-auto">
                        <li class="nav-item px-2">
                               <a class="nav-menu-link nav-link">Usuarios</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark">Inicio</a>
                            </li> 
                        <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark">Contactenos</a>
                            </li>   
                            <li class="nav-item px-2">
                                <a class="nav-menu-link nav-link text-dark" href="IniciarSesion.php">Iniciar sesión</a>
                            </li>                                   
                        </ul>                        
                    </div>                    
                 </div>  
            </nav>        
               
 </header> 