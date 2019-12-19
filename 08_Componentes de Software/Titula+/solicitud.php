<?php 
//includes
	include_once "SQLConsultas.php";
	include_once "User.php";
	
    $sql = new SQLConsultas();

	if (!isset($_SESSION)) 
    {
    	session_start();
	}

	$id_user = $_SESSION['idlogin'];
	$type = $_SESSION['type'];
	$id = $sql->consultarId($id_user);
	$nombre = $sql->consultarNombre($id_user);
	$carrera = $sql->consultarCarrera($id_user);

?>

<!DOCTYPE html>
<html>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/all.js"></script>

<meta charset="UTF-8"/> 
<body style="background: url('images/fondo.jpg');">

<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="form-group" id="user-group">
        <input type="text" class="form-control" name="idUser" value="<?php echo $id_user;?>" hidden readonly><br>
    </div>
    <div class="form-group" id="user-group">
        <input type="text" class="form-control" name="type" value="<?php echo $type;?>" hidden readonly><br>
    </div>
    <div class="form-group" id="user-group">
		<input type="text" class="form-control" name="id" value="<?php echo $id;?>" hidden readonly><br>
	</div>
    <div class="form-group" id="user-group">
    	<input type="text" class="form-control" name="Nombre" placeholder="Nombre..." value="<?php echo $nombre;?>" readonly><br>
    </div>
    <div class="form-group" id="user-group">
    	<input type="text" class="form-control" name="Carrera" placeholder="Carrera" value="<?php echo $carrera;?>" readonly><br>
    </div>
    <div class="form-group" id="user-group">
    	<input type="number" class="form-control" name="NumCont" placeholder="N.C..."><br>
    </div>
    <div class="form-group" id="user-group">
    	<input type="text" class="form-control" name="Proyecto" placeholder="Nombre del Proyecto"><br>
    </div>    
    <div class="form-group" id="user-group">
    	Seleccionar Informe Técnico y Carta de No Inconveniencia:<br>
     	<input type="file" name="file[]" id="file" multiple><br>
    </div>
    <input type="submit" value="Solicitar Titulación" name="submit">
</form>

</body>

</html>