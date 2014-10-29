
    <?php
	
    $avido="";
	$resultados = array();
    if($_GET['email']!=""){
    // e mail de destino
    $email="daniel_k310a@hotmail.com";
     
    //asunto del email
    $subject="App CfeReports";
     
    //cuerpo del mensaje
    $mensaje="____________________\n";
    $mensaje.=" Mi comentario: \n";
    $mensaje.="___________________\n";
    $mensaje.="NOMBRE: ".$_get['usuario']."\n";
    $mensaje.="EMAIL: ".$_get['email']."\n";
    $mensaje.="FECHA: ".date("d/m/Y")."\n";
    $mensaje.="HORA: ".date("h:i:s a")."\n";
    $mensaje.="IP: ".$_SERVER['REMOTE_ADDR']."\n\n";
    $mensaje.="____________________\n\n";
    $mensaje.=$_get['mensaje']."\n\n";
    $mensaje.="____________________\n";
    $mensaje.="Enviado desde CFEReports App/\n";echo
     
    //headers del email
    $headers="From:".$_get['email']."\r\n";
     
    //Enviamos el mensaje
    if(mail($email,$subject,$mensaje,$headers)){
    $resultados["mensaje"] = "Su mensaje ha sido enviado";
	$resultados["validacion"] = "ok";
 }else{
$resultados["mensaje"]="Error de envio.";	 
$resultados["validacion"] = "error";
  }
    }
	
	$resultadosJson = json_encode($resultados);
 
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
    ?>