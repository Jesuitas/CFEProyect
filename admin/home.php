<?php
if(isset($_session["usuario"])){

echo "<a href='logout.php'> Salir </a>";
}else{
	echo "inicia sesion porfavor ";
	echo "<a href='index.php'>aqui</a>";
}
?>