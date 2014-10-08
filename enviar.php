<?php 
$server = "mysql6.000webhost.com";
$username = "a9962371_dany"; 
$password = "abogral90";
$database = "a9962371_reporte";

 $con = mysql_connect($server, $username, $password) or die ("No se conecto: " . mysql_error());
 mysql_select_db($database, $con);
  $lID = $_POST["lid"]; 
  $combo = mysql_real_escape_string($_POST["combo"]); 
  $ubicacion = mysql_real_escape_string($_POST["nombre"]);
   $sql .= "INSERT INTO reportes (idcliente, idIncidente) ";
   $sql .= "VALUES ($nombre, '$combo')"; 
   if (!mysql_query($sql, $con))
    {
		  die('Error: ' . mysql_error()); 
		  }
		   else
		    {   
		 echo "Comentario agregado"; } mysql_close($con); 
		 ?>