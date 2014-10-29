<?php

/* Extrae los valores enviados desde la aplicacion movil */
$usuario = $_GET['usuario'];
$twitter = $_GET['twitter'];
$correo = $_GET['correo'];
$valor = "@dani_mc";
$resultados = array();

$coneccion = mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');

mysql_query("UPDATE usuario SET email = '$correo' , twitter = '$twitter' WHERE nombre = '$usuario' LIMIT 1 ;");

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

//$resultados["hora"] = date("F j, Y, g:i a");*/
$resultados["correo"] = $correobd;
 
 

 
/*convierte los resultados a formato json*/
$resultadosJson = json_encode($resultados);
 
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
 
?>