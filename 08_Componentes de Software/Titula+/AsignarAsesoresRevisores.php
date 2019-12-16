<?php 
include_once "SQLConsultas.php";
//@session_destroy();
if (!isset($_SESSION)) {
    session_start();
}
$sql = new SQLConsultas();
if ($_SESSION['id_sesion'] == null|| $_SESSION['id_sesion'] == '' ) {   
    header("Location:index.php");
}

if ($_GET["id"] != null &&
    $_GET["id"] != '' &&
    $_GET["type"] != '' && $_GET["type"] != '') {
    $_SESSION['idlogin'] = $_GET["id"];
    $_SESSION['type'] = $_GET["type"];
    
    $id_user = $_SESSION['idlogin'];
    $type = $_SESSION['type'];
    
    $username = $sql->consultarUsuarioXID($id_user);
    }
?>
<!Doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Asignaci&oacute;n de Asesores y Revisores</title>
        <script src="js/jquery-latest.js"></script>
       <!-- <script src="js/header.js"></script> -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Asignacion de Asesores y Revisores</title>
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
                     <?php echo '<a href="cerrar_sesion.php?"><i class="fas fa-power-off"></i> Cerrar sesión</a>';?>       
                </nav>  
            </div>
        <?php
    ?>
    <script>
    var cajasAs=0;
    function agregar_cajaAs()
    {
        document.getElementById("cajasAs").innerHTML+=
        "<tr> " +
            "<select name='Proyectos["+ cajasAs +"]' style='width: 600px; font-size:20px' >" +
            "<?php

                $servidor="localhost";
                $usuario="root";
                $clave="";
                $bd="bd_tsp";
                $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

                $consulta ='SELECT idExpediente FROM expediente';
                $resultado = mysqli_query($conexion, $consulta);
                
                if(mysqli_num_rows($resultado)>0)
                {
                    while($renglon = mysqli_fetch_array($resultado))
                    {
                        ?> <option value= <?php echo str_replace(" ", "-", $renglon['idExpediente']) ?> > <?php echo $renglon['idExpediente'] ?> </option> <?php
                    }
                }
                mysqli_close($conexion);
                ?>" + 
            "</select>" + 
        "</tr>"
        cajasAs=cajasAs+1
    }
var cajasAs2=0;
    function agregar_cajaAs2()
    {
        document.getElementById("cajasAs2").innerHTML+=
        "<tr> " +
            "<select name='Asesor["+ cajasAs2 +"]' style='width: 600px; font-size:20px' >" +
            "<?php

                $servidor2="localhost";
                $usuario2="root";
                $clave2="";
                $bd2="bd_tsp";
                $conexion2 = mysqli_connect($servidor2, $usuario2, $clave2, $bd2);
                $consulta2 ='SELECT NombreDocente, idDocente FROM docente';
                $resultado2 = mysqli_query($conexion2, $consulta2);
                if(mysqli_num_rows($resultado2)>0)
                {
                    while($renglon2 = mysqli_fetch_array($resultado2))
                    {
                        ?> <option value= <?php echo str_replace(" ", "-", $renglon2['idDocente']) ?> > <?php echo $renglon2['NombreDocente'] ?> </option> <?php
                    }
                }
                mysqli_close($conexion2);
                ?>" + 
            "</select>" + 
        "</tr>"
        cajasAs2=cajasAs2+1
    }
    var cajasAs3=0;
    function agregar_cajaAs3()
    {
        document.getElementById("cajasAs3").innerHTML+=
        "<tr> " +
            "<select name='Revisor1["+ cajasAs3 +"]' style='width: 600px; font-size:20px' >" +
            "<?php

                $servidor3="localhost";
                $usuario3="root";
                $clave3="";
                $bd3="bd_tsp";
                $conexion3 = mysqli_connect($servidor3, $usuario3, $clave3, $bd3);
                $consulta3 ='SELECT NombreDocente, idDocente FROM docente';
                $resultado3 = mysqli_query($conexion3, $consulta3);
                if(mysqli_num_rows($resultado3)>0)
                {
                    while($renglon3 = mysqli_fetch_array($resultado3))
                    {
                        ?> <option value= <?php echo str_replace(" ", "-", $renglon3['idDocente']) ?> > <?php echo $renglon3['NombreDocente'] ?> </option> <?php
                    }
                }
                mysqli_close($conexion3);
                ?>" + 
            "</select>" + 
        "</tr>"
        cajasAs3=cajasAs3+1
    }
    var cajasAs4=0;
    function agregar_cajaAs4()
    {
        document.getElementById("cajasAs4").innerHTML+=
        "<tr> " +
            "<select name='Revisor2["+ cajasAs4 +"]' style='width: 600px; font-size:20px' >" +
            "<?php

                $servidor4="localhost";
                $usuario4="root";
                $clave4="";
                $bd4="bd_tsp";
                $conexion4 = mysqli_connect($servidor4, $usuario4, $clave4, $bd4);
                $consulta4 ='SELECT NombreDocente, idDocente FROM docente';
                $resultado4 = mysqli_query($conexion4, $consulta4);
                if(mysqli_num_rows($resultado4)>0)
                {
                    while($renglon4 = mysqli_fetch_array($resultado4))
                    {
                        ?> <option value= <?php echo str_replace(" ", "-", $renglon4['idDocente']) ?> > <?php echo $renglon4['NombreDocente'] ?> </option> <?php
                    }
                }
                mysqli_close($conexion4);
                ?>" + 
            "</select>" + 
        "</tr>"
        cajasAs4=cajasAs4+1
    }
</script>


        <form method="POST" action="AsignarAsesores.php">
        <table border="1" align="center" id="cajasAs">
                <tr>
                    <th><h2 style='color: white'>Seleccionar Proyectos </h2></th>
                    <th><script>agregar_cajaAs()</script> </th>                   
                </tr>
        </table>
        <table border="1" align="center" id="cajasAs2">
                <tr>
                    <th><h2 style='color: white'>Seleccionar Asesor </h2></th>
                    <th><script>agregar_cajaAs2()</script> </th>                    
                </tr>
        </table>
        <table border="1" align="center" id="cajasAs3">
                <tr>
                    <th><h2 style='color: white'>Seleccionar Revisores </h2></th>
                    <th><script>agregar_cajaAs3()</script> </th>                    
                </tr>
        </table>
        <table border="1" align="center" id="cajasAs4">
                <tr>
                    <th><script>agregar_cajaAs4()</script> </th>                    
                </tr>
        </table>
        <input type="submit" value="Enviar">
        </form>
        </header>
</body>
</html>