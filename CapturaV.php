<?php

require 'Conexion.php';


mysqli_query($Conected, "INSERT INTO vehiculos(Placa, Vehiculo, EstadoVehiculo, Motor, Marca, Modelo, Tipo, Kilometraje)
 VALUES ('{$_REQUEST['Placa']}', '{$_REQUEST['Vehiculo']}' , 
 '{$_REQUEST['Estado']}' , '{$_REQUEST['Motor']}', '{$_REQUEST['Marca']}', 
 '{$_REQUEST['Modelo']}', '{$_REQUEST['Tipo']}', '{$_REQUEST['Kilometraje']}')")
    or die("Problemas al insertar datos" . mysqli_error($Conected));

mysqli_close($Conected);

echo "<br>Datos ingresados correctamente";
header("location: Menu.php");


?>