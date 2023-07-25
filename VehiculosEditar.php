<?php 
require "Conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php

require "Conexion.php";


if (!isset($_POST['actu'])) {

    $id = $_GET['bnick'];
    $Data = "SELECT * FROM vehiculos WHERE Placa = '$id';";
    $ShowData = mysqli_query($Conected, $Data);
    while ($fila = mysqli_fetch_array($ShowData)) {
        $placa = $fila['Placa'];
        $estado = $fila['EstadoVehiculo'];
        $vehiculo = $fila['Vehiculo'];
        $motor = $fila['Motor'];
        $marca = $fila['Marca'];
        $tipo = $fila['Tipo'];
        $kilo = $fila['Kilometraje'];
        $modelo = $fila['Modelo'];

        mysqli_close($Conected);
    }



}

?>

    <form action="EditarVehiculos.php" method="post">

        <p>Escriba la placa del vehiculo que desea editar: <input type="text" name="placa" id="" value = <?php echo $placa ?>></p>
        <br>
        <br>
        <p> Vehiculo: <input type="text" name="Vehiculo" id="" value="<?php echo $vehiculo; ?>"> </p>
        <p> Estado: <input type="text" name="Estado" id="" value = "<?php echo $estado ?>"> </p>
        <p> Motor: <input type="text" name="Motor" id="" value = "<?php echo $motor ?>"> </p>
        <p> Marca: <input type="text" name="Marca" id="" value = "<?php echo $marca ?>"> </p>
        <p> Modelo: <input type="text" name="Modelo" id="" value = "<?php echo $modelo ?>"> </p>
        <p>Tipo: <select name="Tipo" id="ti" value = "<?php echo $tipo ?>">
                <option value="Micro">Micro</option>
                <option value="Hatchback">Hatchback</option>
                <option value="Sedan">Sedan</option>
                <option value="SUV">SUV</option>
                <option value="MPV">MPV</option>
                <option value="Convertible">Convertible</option>
                <option value="Wagon">Wagon</option>
                <option value="Lujo">Lujo</option>
                <option value="Antiguo">Antiguo</option>
                <option value="Coupe">Coupe</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Super">Super</option>
                <option value="Muscle">Muscle</option>
                <option value="Limusina">Limusina</option>
                <option value="Hibrido">Hibrido</option>
                <option value="Electrico">Electrico</option>
                <option value="Diesel">Diesel</option>
            </select> </p>
        <p> Kilometraje: <input type="text" name="Kilometraje" id="" value = "<?php echo $kilo ?>"> </p>
        <p> <input type="submit" name="actu" value="Actualizar"> </p>

    </form>

    <html>

    <input type="button" value="Volver al menu" onclick="location.href = 'Menu.php'">
    <input type="button" value="Insertar Datos" onclick="location.href = 'FiaraVehiculos.php'">
    <input type="button" value="Ver datos" onclick="location.href = 'FiaraVerVehiculos.php'">

    </html>

</body>

</html>