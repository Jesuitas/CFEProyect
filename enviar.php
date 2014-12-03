<?php

/* Extrae los valores enviados desde la aplicacion movil */
$usuario = $_GET['usuario'];
$geolocalizacion = $_GET['geo'];
$reporte = $_GET['reporte'];
$status = $_GET['status'];
$resultados = array();

$coneccion = mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');
$result = mysql_query("SELECT * FROM usuario where nombre='$usuario'");
  
$data = mysql_fetch_array($result);
$idUsuario = $data['0'];
//$usuarioNombre = $cfe['2'];
mysql_close();

mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');

$fechaIni = date("d/m/Y");
$horaIni = date("h:i:s");

mysql_query("INSERT INTO reportes (idcliente,idIncidente,status,locacion,fechaini,horaini)
VALUES('$idUsuario','$reporte','$status','$geolocalizacion','$fechaIni','$horaIni')", $coneccion);

mysql_close();

/* verifica que el usuario y password concuerden correctamente 
if( $usuarioServicio == $service  ){
/*esta informacion se envia solo si la validacion es correcta 
$resultados["mensaje"] = "Validacion Correcta";
$resultados["validacion"] = "ok";
 
}else{
/*esta informacion se envia si la validacion falla 
$resultados["mensaje"] = "El numero de servicio es incorrecto.";
$resultados["validacion"] = "error";
}

//$resultados["hora"] = date("F j, Y, g:i a");
$resultados["generador"] = $usuarioNombre ;
 
 

 
/*convierte los resultados a formato json*/
$resultadosJson = json_encode($resultados);
 
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
 
?>