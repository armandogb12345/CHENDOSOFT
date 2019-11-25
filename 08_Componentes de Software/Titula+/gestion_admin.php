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
        <title>Gestión de Usuarios</title>
        <script src="js/jquery-latest.js"></script>
       <!-- <script src="js/header.js"></script> -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestión de Usuarios</title>
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
                    
                     
                     <?php echo '<a href="principal.php?id='.$id_user.'&type='.$type.'"><i class="fas fa-home"></i> Inicio</a>';?>
                     

                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>

                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                    
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                    
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     
               
                    
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?> 
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
                     <?php echo '<a class="" href=""></a>';?>
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
         
                <?php } ?>

                
                     <?php echo '<a href="cerrar_sesion.php?"><i class="fas fa-power-off"></i> Cerrar sesión</a>';?>
                    
                 
                        
                </nav>
            
            
            
            </div>
        
        <?php
		$servidor="localhost";
		$usuario="root";
		$clave="";
		$bd="bd_tsp";
	?>
        
        <form method="GET" action="gestion_user.php">
		<?php
		if(!isset($_GET['idLogin']) && (!isset($_GET['actualizado']))){
			$conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
			$consulta = "SELECT * FROM login";
            
			$resultado=mysqli_query($conexion,$consulta);
            
			if(mysqli_num_rows($resultado)>0){
			  echo "<br><h2><font color = \"white\"><center>Seleccione el usuario a modificar:</h2></font>";
              echo "<center>";
			 echo "<table class= \"table table-bordered \" style= \"background: #107ade;\">";
                 echo "<tr>";
                        
                        echo "<th width=\"5%\"><font color = \"white\">No</th></font>";
                        echo "<th width=\"15%\"><font color = \"white\">Nombre de Usuario</th></font>";
                        echo "<th width=\"35%\"><font color = \"white\">Nombre</th></font>";
                        echo "<th width=\"25%\"><font color = \"white\">Tipo de Usuario</th></font>";
                        echo "<th width=\"30%\"><font color = \"white\">Correo Electronico</th></font>";
                    
                    echo "</tr>";
			  while($r = mysqli_fetch_array($resultado)){
				echo "<tr><td>";
                echo "<center>";
				echo "<input type=\"radio\" value=\"".$r['idLogin']."\" name=\"id\">".$r['idLogin'];
			  	echo "</td><td>".$r['Usuario']."</td>";
				echo "<td>".$r['Nombre']."</td>";
                echo "<td>".$r['Tipo']."</td>";
                echo "<td>".$r['Email']."</td>";
                
			  }
                //Cumple funcionamiento 
			echo "<tr><td colspan=\"5\" align=\"center\">";
			//echo "<center><input type=\"submit\" value=\"Modificar\">";
                echo "<button name=\"actualizado\" style=\"align-content: center;\" type=\"submit\" class=\"btn btn-secondary btn-lg active\">Modificar</button>";
			echo "</table>";
			}
			mysqli_close($conexion);
		} if(isset($_GET['idLogin']) && (!isset($_GET['actualizado']))) {
			$id = $_GET['id'];
			$conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
            $consulta = "SELECT * FROM login WHERE idLogin=".$id;
            $resultado = mysqli_query($conexion,$consulta);
			
            if(mysqli_num_rows($resultado)>0){
                while($r = mysqli_fetch_array($resultado)){
                    echo "<center><H1>Ingrese los nuevos datos</H1>";
                   
                    echo "<input type=\"hidden\" name=\"id\" value=\"".$id."\">";
                   

	                    echo "<tr>";
	                    	echo "<td>";
	                    		echo "Nombre de Usuario:";
	                    	echo "</td>";
	                    	echo "<td>";
	                    		echo "<input type=\"text\" name=\"usuario\" value=\"".$r['Usuario']."\">";
	                    	echo "</td>";
	                    echo "</tr>";

	                    echo "<tr>";
	                    	echo "<td>";
                    			echo "Nombre: ";
                    		echo "</td>";
	                    	echo "<td>";
                    			echo "<input type=\"text\" name=\"nombre\" value=\"".$r['Nombre']."\">";
                    			echo "</td>";
	                    echo "</tr>";

	                    echo "<tr>";
	                    	echo "<td>";
                    			echo "Password: ";
                    		echo "</td>";
	                    	echo "<td>";
                    			echo "<input type=\"text\" name=\"password\" value=\"".$r['Password']."\">";
                    		echo "</td>";
	                    echo "</tr>";

	                    echo "<tr>";
	                    	echo "<td>";
                    			echo "Tipo de Usuario: ";
                    		echo "</td>";
	                    	echo "<td>";
                    			echo "<input type=\"text\" name=\"tipo\" value=\"".$r['Tipo']."\">";
                    		echo "</td>";
	                    echo "</tr>";
                    
                         echo "<tr>";
                                echo "<td>";
                                    echo "Correo Electronico: ";
                                echo "</td>";
                                echo "<td>";
                                    echo "<input type=\"text\" name=\"email\" value=\"".$r['Email']."\">";
                                echo "</td>";
                            echo "</tr>";

                    

                    echo "</table>";
                    echo "<input type=\"hidden\" name=\"actualizado\" value=\"ready\">";
                }
                mysqli_close($conexion);
			}
			echo "<br><br>";
			echo "<input type=\"submit\" value=\"Guardar\">";
		} if (isset($_GET['actualizado'])){
			//Updating record on city
            $id = $_GET['id'];
            $Usuario = $_GET['nombre'];
            $nombre = $_GET['nombre'];
            $codigo = $_GET['codigo'];
            $distrito = $_GET['distrito'];
            $poblacion = $_GET['poblacion'];
            
            $servidor="localhost";
            $usuario="root";
            $clave="";
            $bd="world";
            
		    $conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
            
            if(!$conexion){
                echo "Error al conectar" . PHP_EOL;
            }else{
                $consulta = "UPDATE login SET Name='$nombre', CountryCode='$codigo', District='$distrito', Population = '$poblacion' WHERE ID =".$id;
                echo "<br><br><br>";
                echo "<center><br><br><h1>Los cambios se guardaron con exito</h1></center>";
                $resultado=mysqli_query($conexion,$consulta);
                mysqli_close($conexion);
                echo "<a href=\"Modificar.php\">Seguir Modificando</a>";
            }
		}
		?>
		</form>
        
        </header>
<?php
