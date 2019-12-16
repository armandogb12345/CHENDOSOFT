<?php
include_once "SQLConsultas.php";
include_once "User.php";
$sql = new SQLConsultas();

if (!isset($_SESSION)) {
    session_start();
}
$id_user = $_SESSION['idlogin'];
$type = $_SESSION['type'];

echo $id_user;
echo $type;

$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="bd_tsp";

    //Traer datos a la bd
    $NombreDocenteR = $_POST['Revisor1'];
    $NombreDocenteR2 = $_POST['Revisor2'];
    $NombreDocenteA = $_POST['Asesor'];
    $Proyecto = $_POST['Proyectos'];
    //Conexion bd
    if(($NombreDocenteR != $NombreDocenteA) && ($NombreDocenteR != $NombreDocenteR2) && ($NombreDocenteR2 !=$NombreDocenteA)){
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
    $mysqli = new mysqli($servidor, $usuario, $clave, $bd);
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $insertar="INSERT INTO docente_has_expediente (Docente_idDocente, Expediente_idExpediente, Tipo) VALUES ($NombreDocenteR[0], $Proyecto[0],'Revisor');";
    $insertar2="INSERT INTO docente_has_expediente (Docente_idDocente, Expediente_idExpediente, Tipo) VALUES ($NombreDocenteR2[0], $Proyecto[0],'Revisor')";
    $insertar3="INSERT INTO docente_has_expediente (Docente_idDocente, Expediente_idExpediente, Tipo) VALUES ($NombreDocenteA[0], $Proyecto[0], 'Asesor')";


    if ( !$mysqli->query($insertar)
        || !$mysqli->query($insertar2)
        ||!$mysqli->query($insertar3))  {
        echo "Falló la inserción de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
    }
        

        
       
        
        

        echo "<h2>Registro almacenado</h2>";

        //header("Location:principal.php");
        
        }else {
            echo 'script type ="text/javascript">
            function redirige(){
                   alert("Usuarios de docentes duplicados");
                   window.location.href="AsignarAsesoresRevisores.php?id='.$id_user.'&type='.$type.'";
                }  
                window.onload=redirige;</script>';
        }



        ?>