<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="EditarTrabajos.php" method="post">

        <p>Escriba el id del trabajo que quiere editar: <input type="text" name="idT" id=""></p>
        <br>
        <br>
        <p> Nombre del trabajo: <input type="text" name="Nombre" id=""> </p>

        <p> <input type="submit" value="Actualizar"> </p>


    </form>

    <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
    <input type="button" value="Insertar Datos" onclick="location.href = 'FiaraTipoTrabajo.php'">
    <input type="button" value="Ver Zonas" onclick="location.href = 'FiaraVerTipoDeTrabajo.php'">


</body>

</html>