<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="EditarZonas.php" method="post">

        <p>Escriba el id de la zona que desea editar: <input type="text" name="Id" id=""></p>
        <br>
        <br>
        <p> Empleado en la Zona: <input type="text" name="Empleado" id=""> </p>
        <p> Nombre de la Zona: <input type="text" name="Zona" id=""> </p>
        <p> Vehiculo Actual en la Zona: <input type="text" name="Vehiculo" id=""> </p>
        <p> Estado de la Zona: <input type="text" name="Estado" id=""> </p>

        <p> <input type="submit" value="Actualizar"> </p>

    </form>

    <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
    <input type="button" value="Insertar Datos" onclick="location.href = 'FiaraZonas.php'">
    <input type="button" value="Ver Zonas" onclick="location.href = 'FiaraVerZonas.php'">


</body>

</html>