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
  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="brand" width="25"></a></li>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Inicio</a></li>
        <li><a href="#">Reportador</a></li>
        <li class="active"><a href="#">Información de los usuarios</a></li>
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
		 
 
		echo '<h2> Información de los Usuarios:';
		echo '</h2>
		<div class="container">
		<div class="table-responsive">
 			  <table class="table table-bordered">
			  <tr>
			  	<th>Id</th><th>Servicio</th><th>Nombre</th><th>Email</th><th>Twitter</th><th>Acciones</th>
			  </tr>';
			  	mysql_connect('mysql6.000webhost.com', 'a9962371_dany', 'abogral90');
				mysql_select_db('a9962371_reporte');
				$result = mysql_query("SELECT * FROM usuario") or die ($Sql .mysql_error()."" ) ; 
			  	while ($registro = mysql_fetch_array($result)) {
			  	echo '<tr>';
				echo '<td>' . $registro['Id_usuario'] . '</td>'; 
				echo '<td>' . $registro['servicio'] . '</td>';
				echo '<td>' . $registro['nombre'] .'</td>';	
				echo '<td>' . $registro["email"] . '</td>';	
				echo '<td>' . $registro['twitter'] . '</td>';
				echo '<td><form name="estados" id="estados" method="POST" action="correo.php">
					<input type="hidden" value="'.$registro['Id_usuario'].'" id ="ids" name="ids" />
					<input type="hidden" value="'.$registro['email'].'" id ="email" name="email" />
					<button type="submit" class="btn btn-default btn-sh" title="Editar Correo">
  					<span class="glyphicon glyphicon-envelope"></span> 
</button>			</form>

<form name="estados" id="estados" method="POST" action="twitter.php">
					<input type="hidden" value="'.$registro['Id_usuario'].'" id ="ids" name="ids" />
<input type="hidden" value="'.$registro['twitter'].'" id ="twitter" name="twitter" />
					<button type="submit" class="btn btn-default btn-sh" title="Editar Twitter">
  					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAA3ElEQVR4AYXRMSt9cRzH8dfvdhdFSddqkM4gpqvUUTwDi82TcMqiWyKrYvcAZNXtPoH/ppyyKE7pv92Qze1Ihq/FKWU4fbZP7+n9TgAyu/r6KJUuVQCQFGrxa7VCAkhGwt+NJKAQJpp74sK+yqNnBWRqd1Y9/QA7IFlxo5ZxLDxgzpl7b7qA3KdwxFB4sQGYB3AihCFj4d0UAIBrIYw7YNqVBQAwIwc6SrDkFQAc6oGyAZb9kwPYtAe4JVP779Q2IDnwpfGZdVUGzm35MKtnzbpFAANVm+r2WK25vwFtdW1iRQkkwwAAAABJRU5ErkJggg7cb306daaba77f4fc8fed77dec726849"/> 
</button>			</form>
 </td>';
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
       echo "No tienes permiso para entrar a esta pagina ";
      echo "inicia sesion porfavor ";
	echo "<a href='index.php'>aqui</a>";
}  
?>
</body>
</html>