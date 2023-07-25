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
        

       
         if (isset($_POST['Generar'])) {
            header("location: Facturas.php");
        } 

        echo $_POST['idorden'];
?>