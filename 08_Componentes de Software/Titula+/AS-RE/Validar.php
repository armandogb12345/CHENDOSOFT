<script>
	function habilitar(obj) 
	{
		var hab;
		frm=obj.form;
		num=obj.selectedIndex;
		if (num==1) 
		{
			hab=true;
		}
		else
		{
			if (num==2)
			{
				hab=true;
			}
			else
			{
				if (num==3)
				{
					hab=false;
				}
			}
		}
		frm.correcciones.disabled=hab;
	}
</script>

<!doctype html>
<html lang="en">

	<head>
		<title> VALIDACION DE PROYECTO </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="Funciones.js"> </script>
	</head>

	<body>

        <form method="POST" action="Evaluar.php" name="formulario" enctype="multipart/form-data" onsubmit="return ValidarCampo();">

            <?php $ID = $_POST['ID']; $Type = $_POST['Type'];?>
            <input type="hidden" name="ID" value="<?php echo $ID; ?>" id="ID">
			<input type="hidden" name="Type" value="<?php echo $Type; ?>" id="Type">

        	<?php

        		$TituloProyecto = $_POST['TituloProyecto'];

				$servidor = "localhost";
			    $usuario = "root";
			    $clave = "";
			    $bd ="bd_tsp";
			    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

			 	$ConsultaExp = "SELECT documento.Expediente_idExpediente FROM documento WHERE documento.Titulo = '".$TituloProyecto."';";
			 	$Resul = mysqli_query($conexion, $ConsultaExp);
			 
	 			$Row = mysqli_fetch_array($Resul); //	$Row['Expediente_idExpediente'];
	 			mysqli_close($conexion);
		 	?>      	
            
            <br> <br> <br> <br>

            <h2 style="font-size: 24px; color: rgb(255, 249, 228);" align="right"> 
            	TITULO:	<?php echo $TituloProyecto; ?> 
            	<a href="verINF.php?Titulo=<?php echo $TituloProyecto;?>"> 
            		<img src="download.jpg" style='width: 20px; font-size:20px'> 
            	</a> 
            </h2> 

			<p style="color: rgb(255, 249, 228);"> Estatus: </p>
			<br> <br>

			<select name="Puntaje" onchange="habilitar(this)" style='width: 600px; font-size:20px'>
				<option value="1"> CORRECCION </option>
				<option value="2"> RECHAZADO </option>
				<option value="3"> APROBADO </option>
			</select>

			<br> <br> <br> <br>

			<p style="color: rgb(255, 249, 228);"> Correcciones: </p>
			<br> <br>

			<textarea name="correcciones" id="correcciones" rows="15" cols="98" style="resize: none;" placeholder="Menciona cu&aacute;les correciones hay que atender en el documento"></textarea>
			<br>

			<input type="hidden" name="idExp" value="<?php echo $Row['Expediente_idExpediente']; ?>" id="idExp">
			<input type="hidden" name="TituloProyecto" value="<?php echo $TituloProyecto; ?>" id="TituloProyecto">
            
            <input type="submit" value="Enviar">
        </form>

	</body>

</html>