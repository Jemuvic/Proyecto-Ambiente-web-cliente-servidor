<?php

include '../Model/LoginModel.php';

if(isset($_POST['btnLogin']))

{

$correo =  $_POST["txtCorreo"];   
$password = $_POST["txtPassword"];

$usuario = Consulta_Usuario_Model($correo, $password);



if($usuario -> num_rows > 0)

{   
session_start();
   
   

    $item = mysqli_fetch_array($usuario);
  

   $_SESSION["NombreUsuario"] = $item["Nombre"];
   $_SESSION["RolUsuario"] = $item["IdRol"];

   echo '<script>alert("Password correcto")</script>';
    Header("Location: ../View/Inicio.php");
    
    
}

}
