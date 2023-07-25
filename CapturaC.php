<?php


require "Conexion.php";


mysqli_query($Conected, "INSERT INTO clientes(id_cliente, nombres, apellidos, telefono, correo, Placa) VALUES 
('{$_REQUEST['idcliente']}', '{$_REQUEST['nombres']}', '{$_REQUEST['apellidos']}', '{$_REQUEST['telefono']}', '{$_REQUEST['correo']}', '{$_REQUEST['placa']}')")
    or die("Error al registrar los datos" . mysqli_error($Conected));

mysqli_close($Conected);




echo "<br>Datos regitrados con exito";
header("location: Menu.php");


?>