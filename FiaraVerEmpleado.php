<?php

require 'Conexion.php';

$base = "SELECT * FROM empleados";

$ShowData = mysqli_query($Conected, $base);

while ($Muestra = mysqli_fetch_array($ShowData)) {
    echo "<br> Id Empleado: " . $Muestra['idempleado'] . "<br>";
    echo "Nombre del empleado: " . $Muestra['nombre_empleado'] . "<br>";
    echo "Apellido del empleado: " . $Muestra['apellido_empleado'] . "<br>";
    echo "Numero del empleado: " . $Muestra['numero_empleado'] . "<br>";
    echo "Estado: " . $Muestra['estado'] . "<br>";

    echo "<br>";
    echo "<hr>";

}

?>

<html>

<input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
<input type="button" value="Insertar Datos" onclick="location.href = 'FiaraEmpleados.php'">
<input type="button" value="Editar Empleados" onclick="location.href = 'EmpleadoEditar.php'">

</html>