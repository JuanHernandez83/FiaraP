<?php
require 'Conexion.php';

$base = "SELECT * FROM fiara.ordenes
INNER JOIN tipo_de_trabajo 
ON ordenes.Trabajo_a_realizar = tipo_de_trabajo.idtrabajo
INNER JOIN vehiculos 
ON ordenes.Placa = vehiculos.Placa
INNER JOIN clientes 
ON ordenes.ClienteAtendido = clientes.id_cliente
INNER JOIN zonas
ON ordenes.Zona_de_trabajo = zonas.id_zona;";

$MostrarData = mysqli_query($Conected, $base);

mysqli_close($Conected);


?>


<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Mostrar.css">
</head>

<body>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@100&display=swap" rel="stylesheet">

    <header class="header">
        <div class="logo">
            <img src="img/Fiara.png" alt="Logo de fiara">
        </div>
        <nav>
            <ul class="nav-links">
            </ul>
        </nav>
        <a href="#" class="menu"><button>REGISTRO</button></a>

    </header>

    <center>
        <h3 id="txt-R">REGISTO DE USUARIOS</h3>
    </center>

    <?php



    ?>

    <div class="table-container">
        <table class="table" id="letra-t">
            <thead id="letra-t">
                <tr id="letra-t">
                    <th scope="col" id="letra-t">Id Orden</th>
                    <th scope="col" id="letra-t">Zona</th>
                    <th scope="col" id="letra-t">Fecha</th>
                    <th scope="col" id="letra-t">Observaciones</th>
                    <th scope="col" id="letra-t">Placa</th>
                    <th scope="col" id="letra-t">Cliente Atendido</th>
                    <th scope="col" id="letra-t">#</th>
                </tr>
            </thead>


            <?php

            require 'Conexion.php';

            $base = "SELECT * FROM fiara.ordenes
INNER JOIN tipo_de_trabajo 
ON ordenes.Trabajo_a_realizar = tipo_de_trabajo.idtrabajo
INNER JOIN vehiculos 
ON ordenes.Placa = vehiculos.Placa
INNER JOIN clientes 
ON ordenes.ClienteAtendido = clientes.id_cliente
INNER JOIN zonas
ON ordenes.Zona_de_trabajo = zonas.id_zona;";

            $MostrarData = mysqli_query($Conected, $base);


            while ($fila = mysqli_fetch_array($MostrarData)) {

            ?>

                <tbody id="letra-t">
                    <tr>
                        <td data-label="id_orden" scope="row">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $fila['id_orden'] . "</p>" ?>
                        </td>
                        <td data-label="zona">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $fila['Zona_de_trabajo'] . "</p>" ?>
                        </td>
                        <td data-label="fecha"><img height="80" style="border-radius: 8px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['Observaciones']); ?>" />
                        </td>
                        <td data-label="observaciones">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $fila['fecha_de_entrada'] . "</p>" ?>
                        </td>
                        <td data-label="placa">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $fila['Placa'] . "</p>" ?>
                        </td>
                        <td data-label="clienteAtendido">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $fila['ClienteAtendido'] . "</p>" ?>
                        </td>
                        <td data-label="#">
                            <!--<a href="Mostrar.php?bnick=<?php /*  echo $fila["id_orden"];  */ ?>" target="izq">Borrar</a>Variable que le paso para borrar el usuario>-->
                            <a class="letras" href="Mostrar.php?bnick=<?php echo $fila["id_orden"]; ?>" target="izq">ELIMINAR</a><!--Variable que le paso para borrar el usuario-->
                        </td>
                    </tr>
                </tbody>

                <style>
                    .table tbody tr td .letras {
                        width: 130px;
                        text-decoration: none;
                        line-height: 35px;
                        display: inline-block;
                        background-color: red;
                        font-weight: medium;
                        text-align: center;
                        color: white;
                        vertical-align: middle;
                        user-select: none;
                        border: 1px solid transparent;
                        font-size: 14px;
                        opacity: 1;
                        border-radius: 8px;
                    }
                </style>

            <?php
            }

            if (isset($_GET['bnick'])) {

                $id = $_GET['bnick'];
                $sql = "DELETE FROM ordenes WHERE id_orden = '$id'";
                mysqli_query($Conected, $sql) or die("Error: " . mysqli_error($Conected));
            }

            ?>

        </table>
    </div>

</body>

</html>