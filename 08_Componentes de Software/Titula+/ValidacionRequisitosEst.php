<?php 
include_once "SQLConsultas.php";
//@session_destroy();
session_start();
$sql = new SQLConsultas();
if ($_SESSION['id_sesion'] == null|| $_SESSION['id_sesion'] == '' ) {   
    header("Location:index.php");
}

if ($_GET["id"] != null &&
    $_GET["id"] != '' &&
    $_GET["type"] != '' && $_GET["type"] != '') {
    $id_user = $_GET["id"];
    $type = $_GET["type"];
    $username = $sql->consultarUsuarioXID($id_user);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <script src="js/jquery-latest.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Validacion de requisitos del estudiante</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.js"></script>
        <link rel="stylesheet" href="css/cabecePerfil.css">
        <script src="js/jquery-latest.js"></script>
        <script src="js/jquery.js"></script>
</head>
<body style="background: url('images/milestones_background.jpg');">
        <header class= "header">
                <nav>
                <a href="#"><label>Requisitos de: <?php echo $username; ?> :</label> </a>

                <a href=".php"  class="btn btn-primary">
                        <i class="fas fa-power-off"></i> Cerrar sesión</a>
                </nav>
        </header>
        <br><br><br>
        <?php

        echo $type;
        echo $id_user;       
        $servidor="localhost";
		$usuario="root";
		$clave="root";
		$bd="bd_tsp";
	    $conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
        $consulta="SELECT expediente.Validado, estudiante.Carrera, estudiante.NombreEstudiante, documento.Contenido 
		FROM expediente inner join estudiante inner join evaluacion inner join documento inner join docente_has_expediente
		WHERE estudiante.Login_idLogin='$id_user' AND expediente.Estudiante_idEstudiante=estudiante.idEstudiante 
		AND documento.idDocumento=evaluacion.Documento_idDocumento 
		AND evaluacion.Expediente_idExpediente=expediente.idExpediente 
        AND docente_has_expediente.Docente_idDocente=evaluacion.Docente_idDocente";
        $resultado = mysqli_query($conexion,$consulta);
        ?>
        <table class="table table-striped table-dark">
            <thead >
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Carrera</th>
                <th scope="col">Validacion</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($resultado)>0){
                    while($r = mysqli_fetch_array($resultado)){
                        echo '<tr>';
                        echo '<td>'.$r['NombreEstudiante'].'</td>';
                        echo '<td>'.$r['Carrera'].'</td>';
                        echo '<td>'.$r['Validado'].'</td>';
                        echo '<td>'.$r['Contenido'].'</td>';
                    }
                }
            ?>
            <label><input type="radio" name="validado" value="Validado"required>Validar</label><br>
            <label><input type="radio" name="alidado" value="No validado">No validar</label>
            </tbody>
        </table>
        <?php echo '<a class="btn btn-primary" href="principal.php?id='.$id_user.'&type='.$type.'"> Aceptar</a>';
        	   if(isset($_POST[$type])){
        	   		if(isset($_POST['validado'] && 
        	   			$_POST['validado'] == 'Validado')){
            			$consultaValidacion = "update expediente set Validado='Si'";
            			$resultado = mysqli_query($conexion, $consultaValidacion);
            		}else {
            			$consultaValidacion = "update expediente set Validado='No'";
            			$resultado = mysqli_query($conexion, $consultaValidacion);
            		}
        	   }
        ?>
</body>
</html>