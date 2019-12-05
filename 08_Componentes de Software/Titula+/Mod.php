<?php
//Includes
include_once "SQLConsultas.php";
include_once "User.php";
$sql = new SQLConsultas();

if (!isset($_SESSION)) {
    session_start();
}
$id_user = $_SESSION['idlogin'];
$type = $_SESSION['type'];


if (!empty($_GET['Usuario']) && !empty($_GET['Nombre']) && !empty($_GET['Tipo']) && !empty($_GET['Email']) ) {
    
    if (!empty($_GET['passconfirm']) && !empty($_GET['Password'])){
        if ($_GET['passconfirm'] == $_GET['Password']) {
				//SI es el administrador
                              
                $idlogin = $_GET['idlogin'];

				$username = $_GET['Usuario'];
				$NombreCompleto = $_GET['Nombre'];
				$password = $_GET['Password'];				
                $Tipo = $_GET['Tipo'];
                $Email = $_GET['Email'];
                
                $password_encriptada = base64_encode($password);
                $pass_Admin_real = $sql->consultarPassAdmin();
                
                
                    $Mod = $sql->ModificarUsuario($idlogin, $username, $NombreCompleto, $password_encriptada,$Tipo,$Email);
                    echo '<script type="text/javascript">
                    function redirige(){
                        alert("Modificaciones realizadas con exito"); 
                    window.location.href="gestion_admin.php?id='.$id_user.'&type='.$type.'";
                }
                window.onload=redirige; </script>';
                   
                    ?>
                    <?php
                
                    
        }else{
            ?> 
           <script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.href="Mod.php";
             </script>
            <?php
        }
    } else {
        //if (!empty($_GET['passadmin'])) {
				//SI es el administrador
                                
                $idlogin = $_GET['idlogin'];

				$username = $_GET['Usuario'];
				$NombreCompleto = $_GET['Nombre'];
                $Tipo = $_GET['Tipo'];
                $Email = $_GET['Email'];
                   
            
                    $Mod2 = $sql->ModificarUsuario2($idlogin, $username, $NombreCompleto,$Tipo,$Email);

                    echo '<script type="text/javascript">
                    function redirige(){
                        alert("Modificaciones realizadas con exito"); 
                    window.location.href="gestion_admin.php?id='.$id_user.'&type='.$type.'";
                }
                window.onload=redirige; </script>';

                    ?>
                     <?php

                /*}else{
                    ?> 
                    <script type="text/javascript">
                    alert("La contraseña del Administrador es INCORRECTA");
                    window.location.href="Mod.php";
                    </script>
                    <?php
                }
            }else{
                 ?> 
                <script type="text/javascript">
                alert("La contraseña del Administrador es necesaria para el registro");
                window.location.href="Mod.php";
                </script>
                <?php
            }*/
                    
                
    
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
                <?php

                  echo $type;
                    echo $id_user;
                
                  $servidor="localhost";
		          $usuario="root";
		          $clave="";
		          $bd="bd_tsp";
    
                $idlogin = $_GET['idlogin'];
			     $conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
                $consulta = "SELECT * FROM login WHERE idLogin=".$idlogin;
                $resultado = mysqli_query($conexion,$consulta);
			
                if(mysqli_num_rows($resultado)>0){
                    while($r = mysqli_fetch_array($resultado)){
                  
                   echo "<form class=\"col-12\" action=\"Mod.php\" method=\"GET\">";
                        
                        echo "<div>";
                            echo "<input type=\"text\" class=\"form-control\" readonly = \"readonly\" 
                            name=\"idlogin\"  value = \"".$r['idLogin']."\">";
                          
                        
                        echo "</div>";
                        
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";    
                    echo "<br>";
                    echo "<br>";
                    echo "<br>"; 
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";    
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                        
                	echo "<div class=\"form-group\" id=\"user-group\">";
                        echo "<input type=\"text\" class=\"form-control\" name=\"Usuario\" placeholder=\"Usuario...\" value = \"".$r['Usuario']."\">";
                    echo "</div>";
                    echo "<div class=\"form-group\" id=\"user-group\">";
                        echo "<input type=\"text\" class=\"form-control\" name=\"Nombre\" placeholder=\"Nombre Completo\" value = \"".$r['Nombre']."\">";
                    echo "</div>";
                    echo "<div class=\"form-group\" id=\"user-group\">";
                        echo "<input type=\"Password\" class=\"form-control\" name=\"passconfirm\" placeholder=\"Password...\">";
                    echo "</div>"; 
                    echo "<div class=\"form-group\" id=\"pass-group\">";
                        echo "<input type=\"Password\" class=\"form-control\" name=\"Password\" placeholder=\"Confirmar Password\">";
                    echo "</div>"; 
                    echo "<div class=\"form-group\" id=\"user-group\">";
                        echo "<input type=\"Email\" class=\"form-control\" name=\"Email\" placeholder=\"Correo Electrónico\" value = \"".$r['Email']."\">";
                    echo "</div>";                  
                    echo "<div>";
                          echo "<div>";
                               echo "<h5><SELECT style=\"width: 270px; height: 40px;\" name=\"Tipo\"  placeholder = \"".$r['Tipo']."\">";
                        if($r['Tipo']=='Administrador'){
                                echo "<option value=\"Administrador\" selected >Administrador</option>";
                        }else{
                            echo "<option value=\"Administrador\" >Administrador</option>";
                        }
                        if($r['Tipo']=='Estudiante'){
                            echo "<option value=\"Estudiante\" selected >Estudiante</option>";
                        } else{
                            echo "<option value=\"Estudiante\">Estudiante</option>";
                        }
                        if($r['Tipo']=='Docente'){
                            echo "<option value=\"Docente\" selected >Docente</option>";
                        }else{
                            echo "<option value=\"Docente\">Docente</option>";
                        }
                        if($r['Tipo']=='Jefe de Departamento'){
                            echo "<option value=\"Docente\" selected >Docente</option>";
                        } else{
                            echo "<option value=\"Jefe de Departamento\">Jefe de Departamento</option>";
                        }
                    
                                
                                
                                "</h5>";
                               echo "</SELECT></h5>";
                          echo "</div>";
                          echo "<br>";
                    echo "</div>";                    
                    echo "<button name=\"Mod\" type=\"submit\" class=\"btn btn-primary\">";
                        echo "<i class=\"fas fa-sign-in-alt\"></i>Modificar</button>";
                echo "</form>";
                    }
                }
                ?>
                
            </div>
        </div>
    </div>
	<?php }?>

	</body>
</html>