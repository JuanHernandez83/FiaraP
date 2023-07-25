<?php


require 'Conexion.php';


mysqli_query($Conected, "UPDATE vehiculos 
SET vehiculo = '{$_REQUEST['Vehiculo']}', EstadoVehiculo = '{$_REQUEST['Estado']}', Motor = '{$_REQUEST['Motor']}', 
Marca= '{$_REQUEST['Marca']}', Modelo= '{$_REQUEST['Modelo']}', Tipo= '{$_REQUEST['Tipo']}', 
Kilometraje= '{$_REQUEST['Kilometraje']}' 
WHERE Placa = '{$_REQUEST['placa']}'");


if ($ShowData) {
    echo "<script language = 'Javascript'> alert('Los datos se actualizaron de forma correcta');
    location.assign('FiaraVerVehiculos.php'); </script>";
} else {
    echo "<script language = 'Javascript'> alert('Los datos NO se actualizaron de forma correcta');</script>";
}


mysqli_close($Conected);

echo "<br> Datos actualizados exitosamente";



?>