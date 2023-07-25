<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="Facturas.css">
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="img/Fiara.png" alt="Logo de fiara">
        </div>
        <nav>
            <ul class="nav-links">
            </ul>
        </nav>
        <a href="#" class="menu"><button>FACTURAS</button></a>
    </header>
    <div class="container">
        <div class="row flex-column flex-md-row justify-content-evenly">

            <form action="" method="post">
                <center>
                    <p>Escriba el id de la orden para consultar facturas: </p>
                    <p><input type="text" name="idorden" class="cuadro-txt"> </p>
                    <p> <input type="submit" name="Generar" value="Generar" action="factura.php" id="boton1"> </p>
                </center>
                <br>
                <form action="" method='post'>
                    <?php
                    require "Conexion.php";
                    $base = "SELECT * FROM fiara.ordenes
            INNER JOIN tipo_de_trabajo
            ON ordenes.Trabajo_a_realizar = tipo_de_trabajo.idtrabajo
            INNER JOIN vehiculos
            ON ordenes.Placa = vehiculos.Placa
            INNER JOIN clientes
            ON ordenes.ClienteAtendido = clientes.id_cliente
            WHERE id_orden = '{$_REQUEST['idorden']}';";
                    $ShowData = mysqli_query($Conected, $base);
                    while ($mostrar = mysqli_fetch_array($ShowData)) {
                        echo "<p>Trabajo Realizado:</p>
                        <p> <input type='text' name='trabajo' value= '{$mostrar['nombre_trabajo']}' class = 'cuadro-txt'> </p>";
                        echo "<p>Placa del vehiculo:</p>
                        <p> <input type='text' name='trabajo' value= '{$mostrar['Placa']}' class = 'cuadro-txt'> </p>";
                        echo "<p>Cliente:</p>
                        <p> <input type='text' name='trabajo' value= '{$mostrar['nombres']}' class = 'cuadro-txt'> </p>";
                    }
                    ?>
                </form>
            </form>

            <div class="row flex-column flex-md-row justify-content-evenly">
                <form action="CapturarFacturas.php" method="POST">
                    <div class="col-md-6">
                        <center>
                            <h3 style="padding-bottom: 50px;">SI LOS DATOS COINCIDEN RELLENE EL
                                FORMULARIO:
                            </h3>
                        </center>

                        <p>Id de la Factura</p>
                        <p> <input type="text" name="factura" value="" class='cuadro-txt'> </p>
                        <p>Id de la orden </p>
                        <p><input type="text" name="idorden" value="" class='cuadro-txt'> </p>
                        <p>Nombre del taller</p>
                        <p><input type="text" name="nombre" class='cuadro-txt'> </p>
                        <p>Precio del trabajo</p>
                        <p><input type="number" name="precio" id="" class='cuadro-txt'> </p>
                    </div>
                    <div class="col-md-6">
                        <p>IVA</p>
                        <p><input type="number" name="iva" id="" class="cuadro-txt"> </p>
                        <p>Garantia</p>
                        <p><input type="text" name="garantia" id="" class='cuadro-txt'> </p>
                        <p>Fecha y hora</p>
                        <p><input type="date" name="fecha" id="" class='cuadro-txt'> </p>
                    </div>
                    <center>
                        <p><input type="submit" value="Generar Factura" name="Generar" id="boton1"></p>
                    </center>

                </form>
            </div>
            <form action="" method="post">
                <h1>CONSULTE LA FACTURA DE LA ORDEN AQUI: </h1>
                <p>Id de la orden <input type="text" name="idorden" value="" class='cuadro-txt'> </p>
                <p> <input type="submit" value="Ver Factura Generada" onclick="location.href = 'FacturaGenerada.php'">
                </p>

                <?php

                require "Conexion.php";


                $data = "SELECT *
            FROM facturas
            INNER JOIN tipo_de_trabajo
            ON facturas.trabajo_realizado=tipo_de_trabajo.idtrabajo
            INNER JOIN vehiculos
            ON facturas.Placa =vehiculos.Placa
            INNER JOIN clientes 
            ON facturas.id_cliente =clientes.id_cliente
            INNER JOIN ordenes 
            ON facturas.idorden = ordenes.id_orden
            WHERE id_orden = '{$_REQUEST['idorden']}';";

                $ShowData = mysqli_query($Conected, $data);




                while ($mostrar = mysqli_fetch_array($ShowData)) {

                    echo "Id de la Factura: " . $mostrar['idFacturas'] . "<br>";
                    echo "Id de la orden hecha: " . $mostrar['id_orden'] . "<br>";
                    echo "Nombre del taller: " . $mostrar['nombre_taller'] . "<br>";
                    echo "Precio del trabajo" . $mostrar['Precio_de_trabajo'] . "<br>";
                    echo "IVA: " . $mostrar['IVA'] . "%" . "<br>";
                    echo "Total: " . $mostrar['Valor_total'] . "<br>";
                    echo "Garantia del trabajo: " . $mostrar['Garantia'] . "<br>";
                    echo "Fecha y hora de emision factura: " . $mostrar['fecha_hora'] . "<br>";
                    echo "Nombres del cliente: " . $mostrar['nombres'] . "<br>";
                    echo "Apellidos del clientes: " . $mostrar['apellidos'] . "<br>";
                    echo "Telefono del cliente: " . $mostrar['telefono'] . "<br>";
                    echo "Falla del vehiculo: " . $mostrar['Falla'] . "<br>";
                    echo "Trabajo realizado: " . $mostrar['Trabajo_a_realizar'] . "<br>";
                    echo "Placa del vehiculo trabajado: " . $mostrar['Placa'] . "<br>";
                    echo "Modelo del vehiculo: " . $mostrar['Modelo'] . "<br>";
                    echo "Tipo de trabajo: " . $mostrar['Tipo'] . "<br>";
                    echo "Marca del vehiculo: " . $mostrar['Marca'] . "<br>";
                    echo "Fecha de entrada del vehiculo: " . $mostrar['fecha_de_entrada'] . "<br>";
                    echo "Observaciones del trabajo: " . $mostrar['Observaciones'] . "<br>";
                    echo "Grado de daño vehicular: " . $mostrar['Grado_daño'] . "<br>";
                    echo "Zona del trabajo: " . $mostrar['nombre_trabajo'] . "<br>";
                    echo "<br>";
                    echo "<hr>";
                    echo "<br>";
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>