<?php
//Includes
include_once "User.php";
include_once "SQLConsultas.php";
$sql = new SQLConsultas();
?>
<script language="javascript" type="text/javascript">
function pagoOnChange(sel) {
      if (sel.value=="C"){
           divC = document.getElementById("passg");
           divC.style.display = "none";
      }else if (sel.value=="A"){
           divC = document.getElementById("passg");
           divC.style.display = "";
      }
}
</script> 
<?php
if (!empty($_POST['user']) && !empty($_POST['Nombre'])
&& !empty($_POST['Email']) && !empty($_POST['Tipo']) && !empty($_POST['pass'])
&& !empty($_POST['passconfirm'])) {
	if ($_POST['passconfirm'] == $_POST['pass']) {
        if ($_POST['tipo'] == "A") {
            if (!empty($_POST['passgerent'])) {
                //SI es el administrador
                $username = $_POST['user'];
                $nombre = $_POST['Nombre'];
                $email = $_POST['Email'];
                $type = $_POST['tipo'];
                $password = $_POST['pass'];
                $password_admin = $_POST['passadmin'];
                $password_encriptada = base64_encode($password);
                $password_encriptada_admin = base64_encode($password_admin);
                $pass_admin_real = $sql->consultarPassAdmin();
                if( $pass_admin_real==$password_encriptada_admin){
                    $max = $sql->consultarMaxIdUser();
                    $id = $max + 1;
                    $AddUser = $sql->AltaJefe($id, $username, $nombre, $password, $type, $email);
                    ?><script type="text/javascript">alert("Gracias por registrarse");
                    window.location.href="index.php";</script> <?php
                }else {
                    ?> 
                    <script type="text/javascript">
                    alert("La contraseña del Administrador es INCORRECTA");
                    window.location.href="registrar.php";
                    </script>
                    <?php
                }
                
            }else{
                 ?> 
                <script type="text/javascript">
                alert("La contraseña del Administrador es necesaria para el registro");
                window.location.href="registrar.php";
                </script>
                <?php
            }
        }else{
            $username = $_POST['user'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $type = $_POST['tipo'];
            $password = $_POST['pass'];
            $password_encriptada = base64_encode($password);
            $max = $sql->consultarMaxIdUser();
            $id = $max + 1;
            $AddUser = $sql->AltaJefe($id,$username, $nombre, $password, $type, $email);
            ?><script type="text/javascript">alert("Gracias por registrarse");
            window.location.href="index.php";</script> <?php
        }
        
    }else {
       ?> 
       <script type="text/javascript">
		alert("Las contraseñas no coinciden");
        window.location.href="registrar.php";
         </script>
        <?php
    }
}else {


?>
<!DOCTYPE html>
<head>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/solid.css">
<script src="js/all.js"></script>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<meta charset="UTF-8"/> 
</head>
	<body style="background: url('images/slider/slider-img-1.jpg'); font: small-caps 10%/100% FORTE;">
	<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/cooker-img.png"/>
                </div>
                <form class="col-12" action="registrar.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" name="user" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>                    
                    <div class="form-group" id="user-group">
                        <input type="password" class="form-control" name="passconfirm" placeholder="Contraseña">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" name="pass" placeholder="Confirmar Contraseña">
                    </div>                     
                    <div class="form-group" id="user-group">
                        <input type="type" class="form-control" name="type" placeholder="Tipo">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <br>
                    <div>
                          <br>
                          <div id="passg" style="display:red;" class="form-group">
                            <input type='password' name='passgerent'size='20' maxLength='60' placeholder="Contraseña Administrador">
                          </div>
                    </div>
                    
                    <button name="registrar" type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Registrar</button>
                </form>
                <div class="col-12 register">
                    <a href="index.php">Regresar al Inicio de sesion</a>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
	</body>
</html>