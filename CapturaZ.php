<?php

require 'Conexion.php';


mysqli_query($Conected, "INSERT INTO zonas(id_zona, empleado, nombre_zona, vehiculo, estado) VALUES ('{$_REQUEST['idZona']}', '{$_REQUEST['empleado']}', '{$_REQUEST['nombreZona']}', '{$_REQUEST['vehiculo']}', '{$_REQUEST['estado']}')")
or die ("No se han recibido los datos intentalo mas tarde" . mysqli_error($Conected));

mysqli_close($Conected);

echo "<br> Datos guardados";
header("location: Menu.php");



?>