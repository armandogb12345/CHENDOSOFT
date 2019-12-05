<?php

	$Titulo = $_GET['Titulo'];
	$servidor = "localhost";
    $usuario = "root";
    $clave = "root";
    $bd ="bd_tsp";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

 	$ConsultaExp = "SELECT documento.Contenido, documento.Tipo, documento.Titulo FROM documento WHERE Titulo = '".$Titulo."';";
 	$resul = mysqli_query($conexion, $ConsultaExp);
 
 	$row = mysqli_fetch_array($resul);

	header("Content-length: ".strlen($row['Contenido']));
	header("Content-type: pdf");
	header('Content-type: application/pdf');
    header("Content-disposition: download; filename=".$Titulo.".pdf"); //
	echo ($row['Contenido']);
	mysqli_close($conexion);
?>         

