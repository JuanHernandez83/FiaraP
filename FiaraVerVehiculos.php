<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="FiaraVerVehiculos.css">
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


    <div class="table-container">
        <table class="table" id="letra-t">
            <thead id="letra-t">
                <tr id="letra-t">
                    <th scope="col" id="letra-t">Placa</th>
                    <th scope="col" id="letra-t">Vehiculo</th>
                    <th scope="col" id="letra-t">Estado</th>
                    <th scope="col" id="letra-t">Motor</th>
                    <th scope="col" id="letra-t">Marca</th>
                    <th scope="col" id="letra-t">Kilometraje</th>
                    <th scope="col" id="letra-t">#</th>
                </tr>
            </thead>


            <?php

            require 'Conexion.php';

            $base = "SELECT * FROM vehiculos;";

            $ShowData = mysqli_query($Conected, $base);

            while ($Datos = mysqli_fetch_array($ShowData)) {


                ?>

                <tbody id="letra-t">
                    <tr>
                        <td data-label="Placa" scope="row">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['Placa'] . "</p>" ?>
                        </td>
                        <td data-label="Vehiculo">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['Vehiculo'] . "</p>" ?>
                        </td>
                        <td data-label="Estado">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['EstadoVehiculo'] . "</p>" ?>
                        </td>
                        <td data-label="Motor">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['Motor'] . "</p>" ?>
                        </td>
                        <td data-label="Marca">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['Marca'] . "</p>" ?>
                        </td>
                        <td data-label="Kilometraje">
                            <?php echo "<p style = 'font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'>" . $Datos['Kilometraje'] . "</p>" ?>
                        </td>
                        <td data-label="#">
                            <a class="letras" href="VehiculosEditar.php?bnick=<?php echo $Datos['Placa']; ?>"
                                target="izq">EDITAR</a>
                            <a class="letras" href="FiaraVerVehiculos.php?bnick=<?php echo $Datos['Placa']; ?>"
                                target="izq">ELIMINAR</a>
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
                $sql = "DELETE FROM vehiculos WHERE Placa = '$id';";
                mysqli_query($Conected, $sql) or die("Error: " . mysqli_error($Conected));
            }

            ?>

        </table>
    </div>

</body>

</html>