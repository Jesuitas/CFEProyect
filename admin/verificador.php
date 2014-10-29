<?php
session_start();
$_session["usuario"]=$_POST["usuario"];
$_session["pass"]=$_POST["password"];

$usercorrect = "dany";
$passcorrect = "123";

if(isset($_session["usuario"])){
	if($_session["usuario"] == $usercorrect && $_session["pass"] == $passcorrect){
		echo "<h2> Bienvenido </h2>";
		header('location: home.php');
	}else{
		echo "<h2> usuario o contraseña incorrecta </h2>";
		header('location: index.php');
	}
}
?>