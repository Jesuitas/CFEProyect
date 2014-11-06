<!doctype html lang="en">
<html>
<head>
 <meta charset="utf-8">
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
 <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
 <script src="js/jQuery.js"></script> 
 <script src="js/bootstrap.js"></script>
 <script src="js/dropdown.js" ></script>
<title>Home</title>
    </head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="brand" width="150"></a></li>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Reportador</a></li>
        <li><a href="#">Información de los usuarios</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Contacto</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <script type="text/javascript">
 $('.dropdown-toggle').dropdown();
 </script>

 	<?php
session_start();
if(isset($_SESSION['estado']) == 'Autenticado')
{
		 
 
		echo '<h2> Reportes Registrados:';
		echo $_SESSION["usuario"];
		echo '</h2>
		<div class="container">
		<div class="table-responsive">
 			  <table class="table table-bordered">
			  <tr>
			  	<th>Id</th><th>Incidente</th><th>Status</th><th>Zona Reportada</th><th>Reportante</th>
			  </tr>';
			  	mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
				mysql_select_db('a9962371_reporte');
				$result = mysql_query("SELECT reportes.id, incidencias.incidencia, reportes.status, reportes.locacion, usuario.nombre
				FROM reportes
				INNER JOIN usuario
				INNER JOIN incidencias
				WHERE usuario.id_usuario = reportes.idcliente
				AND incidencias.idrepo = reportes.idIncidente
				AND reportes.status = 'activo'
				ORDER BY 'reportes.id' ASC") or die ($Sql .mysql_error()."" ) ; 
			  	while ($registro = mysql_fetch_array($result)) {
			  	echo '<tr>';
				echo '<td>' . $registro['id'] . '</td>'; 
				echo '<td>' . $registro['incidencia'] . '</td>';
				echo '<td><form name="estados" id="estados" method="POST" action="cerrado.php">' .
					$registro['status'] .'
					<input type="hidden" value="'.$registro['id'].'" id ="ids" name="ids" />
					<button type="submit" class="btn btn-default btn-sh">
  					<span class="glyphicon glyphicon-ok-circle"></span> 
</button>			</form></td>';	
				echo '<td>' . $registro['locacion'] . '</td>';
				echo '<td>' . $registro['nombre'] . '</td>';
				echo "</tr>";
			}
			mysql_free_result($result);

echo '</table>
	  </div>
	  </div>
	  </div>';

	   echo "<a href='logout.php'> Salir </a>";
	}
else
{  
       // Usuario que no se ha logueado
       echo "No tienes permiso para entrar a esta pagina";
      echo "inicia sesion porfavor ";
	echo "<a href='index.php'>aqui</a>";
}  
?>
</body>
</html>