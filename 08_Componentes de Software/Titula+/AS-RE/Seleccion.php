<script>
	
</script>

<!doctype html>
<html lang="en">

	<head>
		<title> SELECCION DE PROYECTO </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="Funciones.js"> </script>
	</head>

	<body>

        <form method="POST" action="Validar.php" name="formulario" enctype="multipart/form-data">
            
            <br> <br> <br> <br>

            <h2 style="font-size: 44px; color: rgb(255, 249, 228);" align="center" > Selecciona un proyecto </h2>


            <?php $ID = $_GET['id']; $Type = $_GET['type'];?>
            <input type="hidden" name="ID" value="<?php echo $ID; ?>" id="ID">
			<input type="hidden" name="Type" value="<?php echo $Type; ?>" id="Type">

            <table border="1" align="center" id="cajasAs">

				<tr align="center">
					<select name='TituloProyecto' style='width: 600px; font-size:20px'>
						<option value= 0 > Selecciona un proyecto </option> 
						<?php

							$servidor = 'localhost';
							$usuario = 'root';
							$clave = '';
							$bd ='bd_tsp';
							$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

							$consultaTitulo = "SELECT documento.Titulo FROM documento WHERE SUBSTR(documento.Titulo, 1,4) = 'INF-'";
		            		$resultadoTitulo = mysqli_query($conexion, $consultaTitulo);
							if(mysqli_num_rows($resultadoTitulo)>0)
							{
							    while($renglon = mysqli_fetch_array($resultadoTitulo))
							    {
							        ?> <option value= <?php echo $renglon['Titulo']; ?> > <?php echo $renglon['Titulo']; ?> </option> <?php
							    }
							}
							mysqli_close($conexion);
						?> 
					</select> 
				</tr>
			</table>           
            
            <input type="submit" value="Enviar">
        </form>

	</body>

</html>