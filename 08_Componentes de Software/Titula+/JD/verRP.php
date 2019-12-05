<script>
	var cajas=0;
	function agregar_caja()
	{
		document.getElementById("cajas").innerHTML+=
		"<tr> " + 
			"<td> <textarea name='NC["+ cajas +"]' id='NC' style='resize: none;' rows='2' cols='25'></textarea> " + 
			"<td> <textarea name='NomAlumno["+ cajas +"]' id='NomAlumno' style='resize: none;' rows='2' cols='35'></textarea> " + 
			"<td> <textarea name='Carrera["+ cajas +"]' id='Carrera' style='resize: none;' rows='2' cols='35'></textarea> " + 
			"<td> <textarea name='Semestre["+ cajas +"]' id='Semestre' style='resize: none;' rows='2' cols='35'></textarea> " + 
		"</tr>"
		cajas=cajas+1
	}

	var cajasAs=0;
	function agregar_cajaAs()
	{
		document.getElementById("cajasAs").innerHTML+=
		"<tr> " +
			"<select name='Asesores["+ cajasAs +"]' style='width: 600px; font-size:20px' >" +
			"<?php

				$servidor = 'localhost';
		        $usuario = 'root';
		        $clave = '';
		        $bd ='bd_tsp';
		        $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

		        $consulta =  'SELECT docente.NombreDocente FROM docente';
		        $resultado = mysqli_query($conexion, $consulta);
		        if(mysqli_num_rows($resultado)>0)
		        {
		            while($renglon = mysqli_fetch_array($resultado))
		            {
		                ?> <option value= <?php echo str_replace(" ", "-", $renglon['NombreDocente']) ?> > <?php echo $renglon['NombreDocente'] ?> </option> <?php
		            }
				}
				mysqli_close($conexion);
				?>" + 
			"</select>" + 
		"</tr>"
		cajasAs=cajasAs+1
	}
</script>

<!doctype html>
<html lang="en">

	<head>
		<title> REGISTRO DE PROYECTO </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="Funciones.js"> </script>
	</head>

	<body>

        <form method="POST" action="MandarInfoRP.php" name="formulario" onsubmit="return ValidarCamposRP();" enctype="multipart/form-data">
            
            <h2> Llenado de formato de registro de proyecto ANEXO XXXII </h2>

            <?php

            $ID = $_GET['id'];

            $servidor = "localhost";
            $usuario = "root";
            $clave = "";
            $bd ="bd_tsp";

            $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

            $consultaNom = "SELECT login.Nombre from login where login.idLogin= '" .$ID. "';";
            $resultadoNom = mysqli_query($conexion, $consultaNom);
            $renglonNom = mysqli_fetch_array($resultadoNom);	//$renglonNom['Nombre'];

            mysqli_close($conexion);

            ?>
            <input type="hidden" name="NombreJefe" value="<?php echo $renglonNom['Nombre']; ?>" id="NombreJefe">

            Nombre del Proyecto: <input type="text" name="NomProy" id="NomProy" style="width:1070px; height:40px;">

            Nombre del Departamento: <input type="text" name="NomDep" id="NomDep" style="width:1070px; height:40px;">

            Lugar: <input type="text" name="Lugar" id="Lugar" style="width:1070px; height:40px;">

			Carrera: <br> <br>
			<select name="Carrera" style="width: 600px; font-size:20px" >
				<option value="0"> Selecciona Carrera </option>
				<option value="Ingenieria en Administracion"> Ingenieria en Administracion </option>
				<option value="Ingenieria en Gestion Empresarial"> Ingenieria en Gestion Empresarial </option>
				<option value="Contador Publico"> Contador Publico </option>
				<option value="Ingenieria en Tecnologias de la Informacion y Comunicacion"> Ingenieria en Tecnologias de la Informacion y Comunicacion </option>
				<option value="Ingenieria en Sistemas Computacionales"> Ingenieria en Sistemas Computacionales </option>
				<option value="Ingenieria en Industrias Alimentarias"> Ingenieria en Industrias Alimentarias </option>
				<option value="Ingenieria en Electromecanica"> Ingenieria en Electromecanica </option>
			</select>

			<br> <br>

			Selecciona Asesor (es): <br> <br>

			<table border="1" align="center" id="cajasAs">
				<tr>
					<th> Asesor (es) </th>
					<th> <input type="image" src="47768.svg" width="50" height="50" onclick="agregar_cajaAs()"> </th>					
		        </tr>
		        <tr>
		        	<script> agregar_cajaAs(); </script>
		        </tr>
	    	</table>
	    	<br> <br> <br>

	    	Ingresa Alumnos (s): <br> <br>

			<table border="1" align="center" id="cajas">
				<tr>
					<th> NC </th>
					<th> Nombre del alumno </th>
					<th> Carrera </th>
					<th> Semestre </th>
					<th> <input type="image" src="47768.svg" width="50" height="50" onclick="agregar_caja()"> </th>					
		        </tr>
		        <tr>
		        	<script> agregar_caja(); </script>
		        </tr>
	    	</table>
	    	<br> <br> <br>

	    	Observaciones: <br> <br>
				<textarea name="Observaciones" rows="15" cols="175" style="resize: none;" placeholder="Menciona cu&aacute;les observaciones hay que aclarar en el documento"></textarea>
				<br>

	    	<?php
	    		$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
   				'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
 
   				$arrayDias = array( 'Domingo', 'Lunes', 'Martes',
       			'Miercoles', 'Jueves', 'Viernes', 'Sabado');
     
     			$fecha = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');  
			?>

			<input type="hidden" name="FechaActual" value="<?php echo $fecha; ?>" id="FechaActual">
            
            <input type="submit" value="Enviar">
        </form>

	</body>

</html>