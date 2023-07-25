<?php

require 'Conexion.php';

$data = "SELECT * FROM tipo_de_trabajo";

$ShowDatos = mysqli_query($Conected, $data);

while ($Muestra = mysqli_fetch_array($ShowDatos)) {
    echo "<br> Id del trabajo: " . $Muestra['idtrabajo'] . "<br>";
    echo "<br> Nombre del Trabajo: " . $Muestra['nombre_trabajo'] . "<br>";
    echo "<br>";
    echo "<hr>";
    echo "<br>";
}


?>


<html>

<input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
<input type="button" value="Insertar Datos" onclick="location.href = 'FiaraTipoTrabajo.php'">
<input type="button" value="Editar Empleados" onclick="location.href = 'TrabajosEditar.php'">

</html>