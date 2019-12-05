<!doctype html>
<html lang="en">

	<head>
		<title> EVALUACION DE PROYECTO </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="Funciones.js"> </script>
	</head>

	<body>

		<?php
			$TituloProyecto = $_POST['TituloProyecto'];
			$idExp = $_POST['idExp'];
			$Observaciones = $_POST['correcciones'];
			$Puntaje = $_POST['Puntaje'];

			$servidor = "localhost";
		    $usuario = "root";
		    $clave = "";
		    $bd ="bd_tsp";
		    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

		    if ($Puntaje == 1)
		    {
		    	$consulta = "INSERT INTO evaluacion (idEvaluacion, Criterios, Puntaje, Expediente_idExpediente) VALUES (0,'". $Observaciones ."', '". $Puntaje ."','". $idExp ."');";
		    }
		    else
		    {
		    	if ($Puntaje == 2)
		    	{
		    		$Observaciones = "El informe ". $TituloProyecto. " fue rechazado.";
		    		$consulta = "INSERT INTO evaluacion (idEvaluacion, Criterios, Puntaje, Expediente_idExpediente) VALUES (0,'". $Observaciones ."', '". $Puntaje ."','". $idExp ."');";
		    	}
		    	else
		    	{
		    		if ($Puntaje == 3)
			    	{
			    		$Observaciones = "El informe ". $TituloProyecto. " fue aprobado.";
			    		$consulta = "INSERT INTO evaluacion (idEvaluacion, Criterios, Puntaje, Expediente_idExpediente) VALUES (0,'". $Observaciones ."', '". $Puntaje ."','". $idExp ."');";
			    	}
			    	else
			    	{

			    	}
		    	}  	
		    }

		 	$resul = mysqli_query($conexion, $consulta);
		 	mysqli_close($conexion);

		?>

		<?php $ID = $_POST['ID']; $Type = $_POST['Type'];?>

		<script type="text/javascript">
		    alert("Evaluacion guardada");
		</script>

		<a href="Seleccion.php?id=<?php echo $ID;?>&type=<?php echo $Type;?>"> 
            		<img src="salir.png" style='width: 60px; font-size:60px'> 
    	</a> 
	</body>
</html>

