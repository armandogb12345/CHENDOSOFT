<?php
@session_destroy();
session_start();
if(!empty($_POST['form-Usuario']) && !empty($_POST['form-Password'])){
    $_SESSION['id_sesion']="1";    
}
if (!isset($_SESSION)) {
    session_start();
}

//Includes
include_once "User.php";
include_once "SQLConsultas.php";
$sql = new SQLConsultas();

if(!empty($_POST['form-Usuario']) && !empty($_POST['form-Password'])){
    
    $usuario=$_POST['form-Usuario'];
    $Password=$_POST['form-Password'];
    $misRegistros = $sql->consultarUsuario($usuario);
    if ($misRegistros != 0) {
            $id = $misRegistros[0]->getidLogin();
                $nombre = $misRegistros[0]->getNombre();
                $pass = $misRegistros[0]->getPassword();
                $type = $misRegistros[0]->getTipo();
            	
                $password_desencriptada = base64_decode($pass);
                if ($password_desencriptada == $Password) {
                $_SESSION['idlogin'] = $id;
                $_SESSION['type'] = $type;
                    echo '<script>window.location.href="principal.php?id='.$id.'&type='.$type.'";</script>'; 
                }else {
                    ?>
                    <script type="text/javascript">
                    alert("Password incorrecta!");
                    </script>
                    <?php } 
                }
            }?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CHENDOSOFT Titula+</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Plataforma WEB</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	CAPÍTULO 14. LINEAMIENTO PARA LA TITULACIÓN INTEGRAL DEL TECNM 
	                            	<a href="#"><strong></strong
	                            		></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Plataforma</h3>
                            		<p>Enter your username and password:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-Usuario">Username</label>
			                        	<input type="text" name="form-Usuario" placeholder="Username..." class="form-Usuario form-control" id="form-Usuario">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-Password">Password</label>
			                        	<input type="Password" name="form-Password" placeholder="Password..." class="form-Password form-control" id="form-Password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button><a href="principal.php" class="hero_box_link">
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3></h3>
                        	

                        	</div>
                        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>