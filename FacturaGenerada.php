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
ON facturas.idorden = '{$_REQUEST['idorden']}';";

$ShowData = mysqli_query($Conected, $data);


while ($mostrar = mysqli_fetch_array($ShowData)) {

    echo "Id de la Factura: " . $mostrar['idFacturas'] . "<br>";
    echo "Id de la orden hecha: " . $mostrar['id_orden'] . "<br>";
    echo "Nombre del taller: " . $mostrar['nombre_taller'] . "<br>";
    echo "Precio del trabajo" . $mostrar['Precio_de_trabajo'] . "<br>";
    echo "IVA: " . $mostrar['IVA'] . "<br>";
    echo "Total: " . $mostrar['Valor_total'] . "<br>";
    echo "Garantia del trabajo: " . $mostrar['Garantia'] . "<br>";
    echo "Fecha y hora de emision factura: " . $mostrar['fecha_hora'] . "<br>";
    echo "Nombres del cliente: " . $mostrar['nombres'] . "<br>";
    echo "Apellidos del clientes: " . $mostrar['apellidos'] . "<br>";
    echo "Telefono del cliente: " . $mostrar['telefono'] . "<br>";
    echo "Falla del vehiculo: " . $mostrar['Falla'] . "<br>";
    echo "Trabajo realizado: " . $mostrar['Trabajo_a_realizar'] . "<br>";
    echo "Placa del vehiculo trabajado: " . $mostrar['Placa'] . "<br>";
    echo "Modelo del vehiculo: " . $mostrar['modelo'] . "<br>";
    echo "Año del vehiculo: " . $mostrar['año'] . "<br>";
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