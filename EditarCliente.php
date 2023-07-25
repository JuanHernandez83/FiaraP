<?php

require "Conexion.php";

mysqli_query($Conected, "UPDATE clientes SET nombres = '{$_REQUEST['nombre']}', apellidos = '{$_REQUEST['apellido']}', telefono = '{$_REQUEST['telefono']}', 
correo = '{$_REQUEST['correo']}', Placa = '{$_REQUEST['placa']}'
WHERE id_cliente = '{$_REQUEST['idC']}'");

mysqli_close($Conected);

echo "<br> Datos Actualizados exitosamente";

?>