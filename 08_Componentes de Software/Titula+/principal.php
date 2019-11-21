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
        <title>Principal</title>
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
                <a href="#"><label><?php echo $username; ?></label> </a>

                <?php //Si es Jefe de Departamento?>
                <?php if($type == "Jefe de Departamento"){?>
                	<?php echo '<a class="btn btn-primary" href="consultarjefe.php?id='.$id_user.'&type='.$type.'"><i class="fas fa-user"></i> Perfil</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>                  

                    <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-clipboard-list"></i> Registrar Proyecto</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                    <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-clipboard-list"></i> Validar Requisitos</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-clipboard-list"></i> Asignar Docentes</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-clipboard-list"></i> Reportes</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>



                     <?php //Si es administrador?>
                <?php } else if($type == "Administrador"){ ?>
                    <?php echo '<a class="btn btn-primary" href="consultarAdmin?id='.$id_user.'&type='.$type.'"><i class="fas fa-user"></i> Perfil</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                    <?php echo '<a class="btn btn-primary" href="registrarJ?id='.$id_user.'&type='.$type.'"><i class="fa fa-user"></i> Registrar Usuario</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-coffee"></i>Gestionar usuario</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                      
                      <?php //Si es Estudiante?>
                    <?php } else if($type == "Estudiante"){ ?>
                    <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-user"></i> Perfil</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                    <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-beer"></i> Solicitar Titulación Integral</a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-coffee"></i>Resultados de Revisiones</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-coffee"></i>Liberación de Proyectos</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>

                     
                     <?php //Si es Docente?>
                    <?php }else if($type == "Docente"){ ?>
                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-user"></i> Perfil</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="btn btn-primary" href="#?id='.$id_user.'&type='.$type.'"><i class="fas fa-clipboard-list"></i> Validar informe</a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
         
                <?php } ?>

                
                 <a href="cerrar_sesion.php"  class="btn btn-primary">
                        <i class="fas fa-power-off"></i> Cerrar sesión</a>
                </nav>
            </div>
        </header>
       <?php 

