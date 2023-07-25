<?php

require "Conexion.php";

$data = "SELECT * FROM zonas";

$ShowData = mysqli_query($Conected, $data);


while ($Sz = mysqli_fetch_array($ShowData)) {

    echo "<br> Id Zona : " . $Sz['id_zona'] . "<br>";
    echo "<br> Empleado: " . $Sz['empleado'] . "<br>";
    echo "<br> Nombre de la zona: " . $Sz['nombre_zona'] . "<br>";
    echo "<br> Vehiculo: " . $Sz['vehiculo'] . "<br>";
    echo "<br> Estado: " . $Sz['estado'] . "<br>";

    echo "<br>";
    echo "<hr>";
    echo "<br>";

}

?>

<html>

<input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
<input type="button" value="Insertar Datos" onclick="location.href = 'FiaraZonas.php'">
<input type="button" value="Editar Zonas" onclick="location.href = 'ZonasEditar.php'">


</html>