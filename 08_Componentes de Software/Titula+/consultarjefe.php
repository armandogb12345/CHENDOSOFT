<?php 
include_once "SQLConsultas.php";
include_once "User.php";
@session_start();
$sql = new SQLConsultas();
if ($_SESSION['id_sesion'] == null|| $_SESSION['id_sesion'] == '' ) {   
    header("Location:index.php");
}

if ($_GET["id"] != null &&
    $_GET["id"] != '' &&
    $_GET["type"] != '' && $_GET["type"] != '') {
    $idLogin = $_GET["id"];
    $type = $_GET["type"];
    $username = $sql->consultarUsuarioXID($idLogin);
  }
?>
<!Doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Principal</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/solid.css">
        <script src="js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="css/modificar.css">
        <link rel="stylesheet" href="css/cabecePerfil.css">
        <link rel="stylesheet" href="css/table.css">
        <script src="js/jquery-latest.js"></script>
        <script src="js/jquery.js"></script>
       <!-- <script src="js/header.js"></script> -->
    </head>
    <body style="background: url('images/fondo.jpg');">
        <header class= "header">
           <div class="wrapper">
                <div class="logo"><br></div>
                <div class="logo"><br></div>
                <div class="logo"><br></div>
                <div class="logo"><br></div>
                <nav>
                    <a href="#"><label><i class="fas fa-user"></i> <?php echo $username; ?></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    
                    <?php echo '<a href="principal.php?id='.$idLogin.'&type='.$type.'"><i class="fas fa-home"></i> Inicio</a>';?>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="#"><label><i class="#"></i></label> </a>
                    <a href="cerrar_sesion.php"><label><i class="fas fa-power-off"></i></label> Cerrar sesión</a>
                </nav>
            </div>
        </header>
        <?php
            $usuario = new User();
			       $misRegistros = $sql->consultarJefe($idLogin);
			if ($misRegistros != 0) {
				for($i = 0; $i < count($misRegistros); $i++){
          $id = $misRegistros[$i]->getidLogin();
          $username = $misRegistros[$i]->getUsuario();
          $nombre = $misRegistros[$i]->getNombre();
          $pass = $misRegistros[$i]->getPassword();
          $type = $misRegistros[$i]->getTipo();          
          $email = $misRegistros[$i]->getEmail();
          $NombreDep = $misRegistros[$i]->getNombreDep();
            }
        }
            $tipo_usuario = "";
            if ($type == "") {
                $tipo_usuario = "Jefe de departamento";
            }
        ?>
       <div style="text-align:center;">
     <table  heigth="30%" width="30%" class="table_info">
      <tr>
        <td rowspan="3"><img src="images/User.jpg" heigth="80px" width="80px"/></td>
      </tr>
      <tr>
        <td>Username </td>
        <td><?php echo $username ; ?> </td>
      </tr>
      <tr>
      <td></td>
      <td></td>
        
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Nombre </td>
        <td>
        <td><?php echo $nombre ; ?> </td>
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td><img src="images/11.JPG" heigth="10px" width="10px"/></td>
      </tr>
      <tr>
        <td>Email </td>
        <td></td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td><img src="images/11.JPG" heigth="10px" width="10px"/></td>
      </tr>
      <tr>
        <td>Nombre de departamento</td>
        <td></td>
        <td><?php echo $NombreDep; ?></td>
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td><img src="images/11.JPG" heigth="10px" width="10px"/></td>
      </tr>
      <tr>
        <td>Tipo de Usuario </td>
        <td></td>
        <td><?php echo $type; ?></td>
      </tr>
    </table>    
        
           
        
                </form>
            </div>
        </div>
      </div>
    </div>
    </body>
</html>