<?php


//En windows
/* 
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fiara";
$port = 3304;

$Conected = mysqli_connect($hostname, $username, $password, $dbname, $port) or die("Problemas de coneccion intentalo mas tarde");
if ($Conected->connect_errno) {
    die("Coneccion fallida" . $Conected->connect_errno);
} else {
    echo "";
} 
  */

//$con->close();



//en mac



 $host="127.0.0.1";
$port=3307;
$socket="";
$user="root";
$password="";
$dbname="fiara";

$Conected = mysqli_connect($host, $user, $password, $dbname, $port, $socket)
	or die ('Imposible conectar a la base de datos' . mysqli_connect_error($Conected));
    if ($Conected->connect_errno) {
        die("Coneccion fallida" . $Conected->connect_errno);
    } else {
        echo "";
    }
 


//$con->close();




?>