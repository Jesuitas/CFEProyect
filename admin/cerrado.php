<?php

$id = $_POST["ids"]; 
$fechacerrado = date("d/m/Y") . date("h:i:s a");
$coneccion = mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');

mysql_query("UPDATE reportes SET status = 'Cerrado' , fechafin = '$fechacerrado' WHERE id = '$id' LIMIT 1 ;");

mysql_close();

header ('location: home.php');
?>





					