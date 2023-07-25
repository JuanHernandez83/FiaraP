<?php


require "Conexion.php";


mysqli_query($Conected, "UPDATE zonas SET empleado = '{$_REQUEST['Empleado']}', nombre_zona = '{$_REQUEST['Zona']}', vehiculo = '{$_REQUEST['Vehiculo']}', estado = '{$_REQUEST['Estado']}' 
WHERE id_zona = '{$_REQUEST['Id']}'");

mysqli_close($Conected);

echo "<br> Los datos se han actualizado exitosamente";



?>