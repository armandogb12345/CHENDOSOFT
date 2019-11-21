<?php
//Includes
include_once "SQLConsultas.php";
include_once "User.php";
$sql = new SQLConsultas();

if (!empty($_POST['Usuario']) && !empty($_POST['Nombre']) && !empty($_POST['Password']) && !empty($_POST['Tipo']) && !empty($_POST['Email']) && !empty($_POST['passconfirm'])) {

    if ($_POST['passconfirm'] == $_POST['Password']) {
        if (!empty($_POST['passadmin'])) {
				//SI es el administrador
				$username = $_POST['Usuario'];
				$NombreCompleto = $_POST['Nombre'];
				$password = $_POST['Password'];				
                $Tipo = $_POST['Tipo'];
                $Email = $_POST['Email'];
                $password_admin = $_POST['passadmin'];
                $password_encriptada = base64_encode($password);
                $password_encriptada_admin = base64_encode($password_admin);
                $pass_Admin_real = $sql->consultarPassAdmin();
                if( $pass_Admin_real==$password_encriptada_admin){
                $max = $sql->consultarMaxIdUser();
                $id = $max + 1;
                    $AddUser = $sql->AltaUser($id, $username, $NombreCompleto, $password_encriptada,$Tipo,$Email);
                    ?><script type="text/javascript">alert("Gracias por registrarse");
                    window.location.href="registrarJ.php";</script> <?php
                }else{
                    ?> 
                    <script type="text/javascript">
                    alert("La contraseña del Administrador es INCORRECTA");
                    window.location.href="registrarJ.php";
                    </script>
                    <?php
                }
            }else{
                 ?> 
                <script type="text/javascript">
                alert("La contraseña del Administrador es necesaria para el registro");
                window.location.href="registrarJ.php";
                </script>
                <?php
            }
                    
                }else{
                    ?> 
       <script type="text/javascript">
        alert("Las contraseñas no coinciden");
        window.location.href="registrarJ.php";
         </script>
        <?php
                }
            }else{
        
        


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
	<body style="background: url('images/fondo.jpg'); font: small-caps 10%/100% FORTE;">
	<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/user.jpg"/>
                </div>
                <form class="col-12" action="registrarJ.php" method="POST">
                	<div class="form-group" id="user-group">
                        <input type="text" class="form-control" name="Usuario" placeholder="Usuario...">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" name="Nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="Password" class="form-control" name="passconfirm" placeholder="Password...">
                    </div> 
                    <div class="form-group" id="pass-group">
                        <input type="Password" class="form-control" name="Password" placeholder="Confirmar Password">
                    </div> 
                    <div class="form-group" id="user-group">
                        <input type="Email" class="form-control" name="Email" placeholder="Correo Electrónico">
                    </div>                    
                    <div>
                          <div>
                               <h5><SELECT style="width: 270px; height: 40px;" NAME="Tipo" onChange="pagoOnChange(this)">
                                <option value="Administrador">Administrador</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Jefe de Departamento">Jefe de Departamento</option></h5>
                               </SELECT></h5>
                          </div>
                          <br>
                          <div id="passg" style="display:red;" class="form-group">
                            <input type='Password' name='passadmin'size='20' maxLength='60' placeholder="Contraseña Administrador">
                          </div>
                    </div>                    
                    <button name="registrarJ" type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Registrar</button>
                </form>
                <div class="col-12 registerJ">
                    <h4><a href="index.php">Inicio de Sesión</a></h4>
                </div>
            </div>
        </div>
    </div>
	<?php }?>

	</body>
</html>