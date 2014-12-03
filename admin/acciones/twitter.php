<?php

$id = $_POST["ids"];
$correo = $_POST["email"]; 

$coneccion = mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');

mysql_query("UPDATE usuario SET twitter = '$correo' WHERE Id_usuario = '$id' LIMIT 1 ;");

mysql_close();

header ('location: ../usuarios.php');
?>					