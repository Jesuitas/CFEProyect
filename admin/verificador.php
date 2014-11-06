<?php
session_start();
$_session["usuario"]=$_POST["usuario"];
$_session["pass"]=$_POST["password"];

$usuario = $_session["usuario"];

mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');
$result = mysql_query("SELECT * FROM administradores where nickname = '$usuario'");

$data = mysql_fetch_array($result);
$id = $data['0'];
$nickname = $data['1'];
$password = $data['5'];


if(isset($_session["usuario"])){
	if($_session["usuario"] == $nickname && $_session["pass"] == $password){
		$_SESSION['estado'] = 'ok'; 
		echo "<h2> Bienvenido </h2>";
		header('location: home.php');
	}else{
		echo "<h2> usuario o contraseña incorrecta </h2>";
		header('location: index.php');
	}
}
?>