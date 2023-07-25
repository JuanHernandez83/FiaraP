<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <form action="EditarEmpleado.php" method="post">

        <p> Escribe el id del empleado que deseas editar <input type="text" name="idE" value=""> </p>
        <br>
        <br>
        <p>Nombre del Empleado: <input type="text" name="nombreE" value=""> </p>
        <p>Apellido del Empleado: <input type="text" name="apellidoE" value=""> </p>
        <p>Numero del Empleado: <input type="text" name="numeroE" value=""> </p>
        <p>Estado: <input type="text" name="estado" value=""> </p>
        <p> <input type="submit" name="" value="Actualizar"> </p>
    </form>



    <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
    <input type="button" value="Insertar Datos" onclick="location.href = 'FiaraEmpleados.php'">
    <input type="button" value="Ver Empleados" onclick="location.href = 'FiaraVerEmpleado.php'">


</body>

</html>