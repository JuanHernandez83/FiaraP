<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    /*   require 'Mostrar.php';
      require 'Conexion.php'; */

    ?>
</head>

<body>


    <h1>LAS ORDENES SON: </h1>
    <table>
        <tr>
            <td>Id orden: </td>
            <td>Falla: </td>
            <td>Zona de Trabajo: </td>
            <td>Grado de daño: </td>
            <td>Trabajo a realizar: </td>
            <td>Observaciones: </td>
            <td>Modelo: </td>
            <td>Año: </td>
            <td>Tipo: </td>
            <td>Marca: </td>
            <td>Fecha de entrada: </td>
            <td>Placa: </td>

            <?php


            while ($fila = mysqli_fetch_array($MostrarData)) {

                ?>

            </tr>
            <td>
                <?php echo $fila['id_orden'] ?>
            </td>
            <td>
                <?php echo $fila['Falla'] ?>
            </td>
            <td>
                <?php echo $fila['Zona_de_trabajo'] ?>
            </td>
            <td>
                <?php echo $fila['Grado_daño'] ?>
            </td>
            <td>
                <?php echo $fila['Trabajo_a_realizar'] ?>
            </td>
            <td>
                <?php echo $fila['Observaciones'] ?>
            </td>
            <td>
                <?php echo $fila['modelo'] ?>
            </td>
            <td>
                <?php echo $fila['año'] ?>
            </td>
            <td>
                <?php echo $fila['Tipo'] ?>
            </td>
            <td>
                <?php echo $fila['Marca'] ?>
            </td>
            <td>
                <?php echo $fila['fecha_de_entrada'] ?>
            </td>
            <td>
                <?php echo $fila['Placa'] ?>
            </td>
            <tr>

            </tr>
            <?php
            }

            ?>
    </table>

</body>

</html>