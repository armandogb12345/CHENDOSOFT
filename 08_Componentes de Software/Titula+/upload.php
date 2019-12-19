<?php
//includes
include_once "SQLConsultas.php";
include_once "User.php";
$sql = new SQLConsultas();

if(isset($_POST['submit']))
{ 
	
	$id_user = $_POST['idUser'];
	$type = $_POST['type'];
	$id_estudiante = $_POST['id'];
	$nombre = $_POST['Nombre'];
	$noCont = $_POST['NumCont'];
	$proyecto = $_POST['Proyecto'];	
	$countfiles = count($_FILES['file']['name']);
	$carta ="";
	$informe = "";
 
 	//se cuenta el numero de archivos seleccionados y se asignan los nombres y destino a los archivos
 	for($i=0;$i<$countfiles;$i++)
 	{
  		$filename = $_FILES['file']['name'][$i];
  		move_uploaded_file($_FILES['file']['tmp_name'][$i],'files/'.$filename);

  		$carta = $filename = $_FILES['file']['name'][0];;
  		$informe = $filename = $_FILES['file']['name'][1];;
 	}

 	$sql->registrarExp($noCont, $nombre, $id_estudiante);
 	$expID = $sql->consultarEx($id_estudiante);
 	$sql->registrarCarta($proyecto,$carta,$expID);
 	$sql->registrarCarta($proyecto,$informe,$expID);
 	
 	//una vez registrados los documentos y expediente, se redirige a la página de inicio
 	echo '<script type="text/javascript">
 	function redirige()
 	{
 		alert("Solicitud realizada con exito"); 
 		window.location.href="principal.php?id='.$id_user.'&type='.$type.'";
 	}
 	window.onload=redirige; 
 	</script>';
} 
?>