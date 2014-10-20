<?php

/* Extrae los valores enviados desde la aplicacion movil */
$service = $_GET['usuario'];

$resultados = array();

mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');
$result = mysql_query("SELECT * FROM usuario where servicio='$service'");

$cfe = mysql_fetch_array($result);
$usuarioServicio = $cfe['1'];
$usuarioNombre = $cfe['2'];

/* verifica que el usuario y password concuerden correctamente */
if( $usuarioServicio == $service  ){
/*esta informacion se envia solo si la validacion es correcta */
$resultados["mensaje"] = "Validacion Correcta";
$resultados["validacion"] = "ok";
 
}else{
/*esta informacion se envia si la validacion falla */
$resultados["mensaje"] = "El numero de servicio es incorrecto.";
$resultados["validacion"] = "error";
}
  mysql_close();
//$resultados["hora"] = date("F j, Y, g:i a");
$resultados["generador"] = $usuarioNombre ;
 
 

 
/*convierte los resultados a formato json*/
$resultadosJson = json_encode($resultados);
 
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
 
?>