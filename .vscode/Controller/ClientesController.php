<?php

include '../Model/ClientesModel.php';
        
function ConsultarClientesController()
{ 
    $ListaClientes = ConsultarClientesModel();
    while ($item = mysqli_fetch_array($ListaClientes)) 
    {
        echo "<tr>";
        echo "<td>" . $item["idcliente"] . "</td>";
        echo "<td>" . $item["nombre"] . "</td>";
        echo "<td>" . $item["apellidos"] . "</td>";
        echo "<td>" . $item["correo"] . "</td>";
        echo "<td>" . $item["password"] . "</td>";
        echo "<td>" . $item["estado"] . "</td>";
        echo "<td>" . $item["tipo"] . "</td>";
        /*echo '<td><input type="button" class="btn btn-primary" value="ToBeDefined" onclick="ToBeDefined(this);"></td>';*/
        echo "</tr>";
    }
}

?>