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
$sql2 = new SQLConsultas();
$datos=$sql2->consultarRevisionInf($id_user);

list ($Criterios, $Puntaje, $Titulo) =$datos;

?>
<!Doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Revisión informe</title>
        <script src="js/jquery-latest.js"></script>
       <!-- <script src="js/header.js"></script> -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Principal</title>
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
                <a href="#"><label>Resultado de su revisión - <?php echo $username; ?></label> </a>

                <a href="cerrar_sesion.php"  class="btn btn-primary">
                        <i class="fas fa-power-off"></i> Cerrar sesión</a>
                </nav>
        </header>
        <br><br><br>
        <table class="table table-striped table-dark">
            <thead >
                <tr>
                <th scope="col">Documento</th>
                <th scope="col">Estado</th>
                <th scope="col">Observaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            //for($i=0; $i<$datos;$i++){
                echo '<tr>';
               echo '<td>'.$Titulo.'</td>';
                if($Puntaje==0){
                    echo '<td>No aprobado</td>';
                }else{
                    echo '<td>Aprobado</td>';
                }
                
               echo '<td>'.$Criterios.'</td>';
                echo '</tr>';
            //}
            ?>
            </tbody>
            </table>
            <?php echo '<a class="btn btn-primary" href="principal.php?id='.$id_user.'&type='.$type.'"> Aceptar</a>';?>

    </body>
    </html>