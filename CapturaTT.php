<?php

require 'Conexion.php';

mysqli_query($Conected, "INSERT INTO tipo_de_trabajo(idtrabajo, nombre_trabajo) VALUES ('{$_REQUEST['tipo']}', 
'{$_REQUEST['nombre']}')")

    or die("Error al cargar los datos " . mysqli_error($Conected));

mysqli_close($Conected);

echo "<br> Datos guardados con exito.";
header("location: Menu.php");

?>