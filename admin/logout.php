<?php
session_start();
unset ( $_sesion['usuario'] );
session_destroy();
header ('location: index.php');
?>