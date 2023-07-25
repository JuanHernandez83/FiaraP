<?php

require 'Conexion.php';

mysqli_query($Conected, "INSERT INTO empleados 
(idempleado, nombre_empleado, apellido_empleado, numero_empleado, estado) 
VALUES ('{$_REQUEST['idE']}' ,'{$_REQUEST['nomE']}' ,
'{$_REQUEST['apE']}' ,'{$_REQUEST['numE']}',' {$_REQUEST['Es']}')")
    or die("Fallo al insertar" . mysqli_error($Conected));


mysqli_close($Conected);

echo "<br>Datos ingresados correctamente";
header("location: Menu.php");
