<?php

include_once '../Model/ClientesModel.php';
        
function ConsultarClientesController()
{ 
    $ListaClientes = ConsultarClientesModel();
    while ($item = mysqli_fetch_array($ListaClientes)) 
    {
        echo "<tr>";
        echo "<td>" . $item["Nombre"] . "</td>";
        echo "<td>" . $item["Correo"] . "</td>";
        echo "<td>" . $item["NombreRol"] . "</td>";
        echo "<td>" . $item["IdRol"] . "</td>";
        echo "<td>" . $item["Password"] . "</td>";
        echo '<td><a class="btn" href="../View/ModificarCliente.php?q=' . $item["Correo"] .'">Actualizar</a> // ' ;
        echo '    <input type="button" onclick="Eliminar(' . "'" . $item["Correo"] . "'" . ');" value="Eliminar" class="btn"></input></td>';
        echo "</tr>";        
    }
}

if(isset($_POST['Funcion']) == "EliminarUsuario")
{
    $correo = $_POST["Correo"];
    EliminarUsuarioModel($correo);
}


if(isset($_POST['btnActualizarUsuario']))
{
    $password = $_POST["txtPassword"];
    $correo = $_POST["txtCorreo"];
    $nombre = $_POST["txtNombre"];
    $rol = $_POST["txtRol"];

    ActualizarUsuarioModel($password, $nombre, $correo, $rol);
    Header("Location: ../View/Usuarios.php");
}

function TraerClienteController($cedula)
{ 
    $Usuario = TraerUsuarioModel($cedula);
    $item = mysqli_fetch_array($Usuario);

    return $item;
}

function ConsultarRolesController()
{ 
    $listaRoles = ConsultarRolesModel();
    while ($item = mysqli_fetch_array($listaRoles)) 
    {
        echo "<option value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
    }
}

function CargarRolesClienteController($rolActual)
{ 
    $listaRoles = ConsultarRolesModel();
    while ($item = mysqli_fetch_array($listaRoles)) 
    {
        if($rolActual == $item["IdRol"])
        {
            echo "<option selected value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
        }
        else
        {
            echo "<option value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
        }
    }
}

if(isset($_POST['btnRegistrarCliente']))
{
    $password = $_POST["txtPassword"];
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $rol = $_POST["txtRol"];
 
    
    RegistrarUsuarioModel($password, $nombre, $correo, $rol);
    Header("Location: ../View/Usuarios.php");

}

if(isset($_POST['btnCrearUsuario']))
{
    $password = $_POST["txtPassword"];
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $rol = $_POST["txtRol"];
    
    RegistrarUsuarioModel($password, $nombre, $correo, $rol);
    Header("Location: ../View/IniciarSesion.php");
  }

?>