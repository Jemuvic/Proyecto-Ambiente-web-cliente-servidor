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
        echo '<td></td>';
        echo "</tr>";
    }
}

?>