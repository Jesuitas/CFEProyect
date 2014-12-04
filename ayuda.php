<html>
	<head>
		<title>Incidentes</title>
	</head>
	<body>
		<center>
		<fieldset style="text-align: center;width:400; height:1100; ">
		<h1> INCIDENTES </h1>
		<h3> Falla </h3>
			<select id="falla" name="falla">
                         <option value="-1"></option>
                         <option value="1">El mapa no carga</option>
                         <option value="2">La aplicacion tarda mucho en cargar</option>
                         <option value="3">No envia el reporte</option>
                         <option value="4">No he tenido respuesta del reporte</option>
                     </select>
		<h3> Prioridad </h3>
			<select id="prioridad" name="prioridad">
                         <option value="-1"></option>
                         <option value="1">Alta</option>
                         <option value="2">Media</option>
                         <option value="3">Baja</option>
                     </select>
		<h3> Tiempo de Respuesta </h3>
			<select id="tresp" name="tresp">
                         <option value="-1"></option>
                         <option value="1">1 hora aprox.</option>
                         <option value="2">8 horas aprox.</option>
                         <option value="3">24 horas aprox.</option>
						 <option value="4">48 horas aprox.</option>
                     </select>
		<h3> C. I. Relacionado </h3>
			<input type="text"  size="20" id="i2" name="CI"/> 
		<h3> Contacto 1 </h3>   
			<input type="text"  size="20" id="i2" name="contacto1"/> 
		<h3> Contacto 2 </h3>	
			<input type="text"  size="20" id="i2" name="contacto2"/>
		<h3> Estado </h3>
			<select id="estado" name="estado">
                         <option value="-1"></option>
                         <option value="1">Activo</option>
                         <option value="2">Inactivo</option>
                         <option value="3">En proceso</option>
                     </select>
		<h3> Nombre del Cliente </h3>
			<input type="text"  size="20" id="i2" name="cliente"/>
		<h3> Cierre </h3>
			<input type="text"  size="20" id="i2" name="cliente"/>
		<h3> Comentarios </h3>
			<textarea name="mensaje" cols="30" rows="10">  </textarea>
		</br> </br>
		<input  type="submit" style="color: #0000FF;height:40px; width:100px; background:" name="Enviar" value="Enviar"/>
		</center>
	</body>
</html>
