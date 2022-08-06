<?php

include_once '../Model/LoginModel.php';
include_once 'PlantillaController.php';

if(isset($_POST['btnLogin']))

{

$correo =  $_POST["txtCorreo"];   
$password = $_POST["txtPassword"];
$result="";
$usuario = Consulta_Usuario_Model($correo, $password);

if($usuario -> num_rows > 0)

{   
session_start();
   
    $item = mysqli_fetch_array($usuario);
  
   $_SESSION["NombreUsuario"] = $item["Nombre"];
   $_SESSION["RolUsuario"] = $item["IdRol"];

    Header("Location: ../View/Inicio.php");    
}
else
{
$result="Correo o contraseña incorrectos";
}
}

if(isset($_POST['btnCerrarSesion']))
    {
        session_start();
        session_destroy();
        Header("Location: ../View/Inicio.php");
        
    }

    
?>
