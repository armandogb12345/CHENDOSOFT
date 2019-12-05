<?php 
include_once "SQLConsultas.php";
//@session_destroy();
if (!isset($_SESSION)) {
    session_start();
}
$sql = new SQLConsultas();
if ($_SESSION['idlogin'] == null|| $_SESSION['idlogin'] == '' ) {   
    header("Location:index.php");
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
              

                <?php //Si es Jefe de Departamento
                     
                     echo '<a href="principal.php?id='.$_SESSION['idlogin'].'&type='.$_SESSION['type'].'" style="margin-right:100px"><i class="fas fa-home" ></i>Inicio</a>';
                          
                       echo '<a href="cerrar_sesion.php?"><i class="fas fa-power-off"></i> Cerrar sesión</a>';
                      ?>
                 
                        
                </nav>
            
            
            
            </div>
        
        <?php
		$servidor="localhost";
		$usuario="root";
		$clave="";
		$bd="bd_tsp";
	?>
        
        <form method="GET" action="Mod.php">
		<?php
		if(!isset($_GET['idLogin']) && (!isset($_GET['actualizado']))){
			$conexion = mysqli_connect($servidor,$usuario,$clave,$bd);
			$consulta = "SELECT * FROM login";
            
			$resultado=mysqli_query($conexion,$consulta);
            
			if(mysqli_num_rows($resultado)>0){
			  echo "<br><h2><font color = \"white\"><center>Seleccione sssa el usuario a modificar:</h2></font>";
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
				echo "<input type=\"radio\"   value=\"".$r['idLogin']."\" name=\"idlogin\">".$r['idLogin'];
                  $temp =$r['idLogin'];
                  
			  	echo "</td><td>".$r['Usuario']."</td>";
				echo "<td>".$r['Nombre']."</td>";
                echo "<td>".$r['Tipo']."</td>";
                echo "<td>".$r['Email']."</td>";
                
			  }
                //Cumple funcionamiento 
			echo "<tr><td colspan=\"5\" align=\"center\">";
			//echo "<center><input type=\"submit\" value=\"Modificar\">";
                    echo "<button name=\"actualizado\" style=\"align-content: center;\" type=\"submit\" class=\"btn btn-secondary btn-lg active\" >Modificar</button>";
                    
                
			echo "</table>";
			}
			mysqli_close($conexion);
		} 