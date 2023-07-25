<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <form action="EditarCLiente.php" method="post">

        <p> Escribe el ID del cliente que quieras editar: <input type="text" name="idC" value=""> </p>
        <br>
        <br>
        <p> Nombre del cliente <input type="text" name="nombre" value=""> </p>
        <p> Apellido del cliente <input type="text" name="apellido" value=""> </p>
        <p> Telefono del cliente <input type="text" name="telefono" value=""> </p>
        <p> Correo del cliente <input type="text" name="correo" value=""> </p>
        <p> Placa del cliente <input type="text" name="placa" value=""> </p>
        <p> <input type="submit" name="" value="Actualizar"> </p>

    </form>



    <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
    <input type="button" value="Insertar Datos" onclick="location.href = 'FiaraClientes.php'">
    <input type="button" value="Ver Empleados" onclick="location.href = 'FiaraVerClientes.php'">



</body>

</html>