<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reportes</title>
<link href="css/cfe.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table border="1">
<tr> CFE </tr></br>
<tr> Usuarios</tr>
</br>
<?php
mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
mysql_select_db('a9962371_reporte');
$reporte = mysql_query("SELECT id,nombre,email,twitter FROM usuario");
while ($registro = mysql_fetch_array($reporte)) {
echo '<tr>';
echo '<td width="25%" height="50%">' . $registro['id'] .'';
echo '<td width="25%" height="50%">' . $registro['nombre'] .'';
echo '<td width="25%" height="50%">' . $registro['email'] . '';
echo '<td width="25%" height="50%">' . $registro['twitter'] . '</tr>';
echo '<tr><td width="25%" height="50%">' . $registro['Nombre3'] . '';
echo '<td width="25%" height="50%">' . $registro['parcial3'] .'</tr>';
}
mysql_free_result($reporte);
?>
 
 
</table
?>
</body>
</html>