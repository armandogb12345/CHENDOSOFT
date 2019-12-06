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
<!Doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Revisión informe y requisitos</title>
        <script src="js/jquery-latest.js"></script>
       <!-- <script src="js/header.js"></script> -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Revision Informe y requisitos</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/all.js"></script>
        <link rel="stylesheet" href="css/cabecePerfil.css">
        <script src="js/jquery-latest.js"></script>
        <script src="js/jquery.js"></script>
    </head>
    <body  style="background: url('images/milestones_background.jpg');">
        <header class= "header">
                <nav>
                <a href="#"><label>Resultados de su revisión - <?php echo $username; ?></label> </a>

                <a href="cerrar_sesion.php"  class="btn btn-primary">
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
        //$idlogin = $_GET['idlogin'];
	    $conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
        $consulta="SELECT evaluacion.Criterios, evaluacion.Puntaje, documento.Titulo, docente_has_expediente.Tipo 
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
                <th scope="col">Documento</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Estado</th>
                <th scope="col">Docente</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($resultado)>0){
                    while($r = mysqli_fetch_array($resultado)){
                        echo '<tr>';
                        echo '<td>'.$r['Titulo'].'</td>';
                        echo '<td>'.$r['Criterios'].'</td>';
                        if($r['Puntaje']==0){
                            echo '<td>No aprobado</td>';
                        }else{
                            echo '<td>Aprobado</td>';
                        }
                        echo '<td>'.$r['Tipo'].'</td>';
                    }
                }
            ?>
            </tbody>
            </table>
            <?php echo '<a class="btn btn-primary" href="principal.php?id='.$id_user.'&type='.$type.'"> Aceptar</a>';?>

    </body>
    </html>