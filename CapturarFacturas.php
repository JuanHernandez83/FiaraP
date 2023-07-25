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

    $precio = $_REQUEST['precio'];
    $iva = $_REQUEST['iva'];
   
$valor = $precio + ($precio * ($iva / 100));

mysqli_query($Conected, "INSERT INTO facturas (nombre_taller, Precio_de_trabajo, IVA, Valor_total, Garantia, fecha_hora, trabajo_realizado, Placa, id_cliente, idorden )
 VALUES ('{$_REQUEST['nombre']}', '{$_REQUEST['precio']}', '{$_REQUEST['iva']}', '{$valor}', '{$_REQUEST['garantia']}', '{$_REQUEST['fecha']}', '{$mostrar['Trabajo_a_realizar']}', 
 '{$mostrar['Placa']}', '{$mostrar['ClienteAtendido']}', '{$_REQUEST['idorden']}')")
 or die ("Fallo al conectar" . mysqli_error($Conected));
}

if (isset($_POST['Generar'])) {
    header("location: Facturas.php");
} 

 mysqli_close($Conected);

 echo "<br> Datos ingresados correctamente";

?>