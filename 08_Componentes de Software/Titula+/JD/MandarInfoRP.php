<?php

	require('fpdf/fpdf.php');

	$NombreProyecto = $_POST['NomProy'];
	$NombreDepartamento = $_POST['NomDep'];
	$Lugar = $_POST['Lugar'];
	$NombreJefe = $_POST['NombreJefe'];	
	$AlumInv_NC = $_POST['NC'];
	$AlumInv_NombreAlumno = $_POST['NomAlumno'];
	$AlumInv_Carrera = $_POST['Carrera'];
	$AlumInv_Semestre = $_POST['Semestre'];
	
	$Observaciones = $_POST['Observaciones'];

	$Asesores = $_POST['Asesores'];
	
	$FechaActual = $_POST['FechaActual'];

	//echo $Archivo;

	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',15);

	//Tamaño de linea: 192
	
	$pdf->Cell(192,10, 'ANEXO XXXII. FORMATO DE REGISTRO DE PROYECTO ', 0, 0, 'C');
	$pdf->Ln(5);
	$pdf->Cell(192,10, 'PARA LA TITULACION INTEGRAL', 0, 0, 'C');
	$pdf->Ln();

	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,4,'                                 "Hoja membretada oficial"',0,1,'C');
	$pdf->Ln(1);
	$pdf->Cell(0,4,'Asunto: Registro de proyecto para la titulacion integral.',0,1,'R');
	$pdf->Ln(5);

	$pdf->Cell(192,10, "C: ". $NombreJefe, 0, 0, 'L');
	$pdf->Ln(1);
	$pdf->Cell(192,10, "     ____________________________________________________________", 0, 0, 'L');
	$pdf->Ln(5);
	$pdf->Cell(192,10, "Jefe(a) de la Division de Estudios Profesionales o su equivalente en los Institutos Tecnologicos", 0, 0, 'L');
	$pdf->Ln(5);
	$pdf->Cell(192,10, "Descentralizados", 0, 0, 'L');
	$pdf->Ln(5);
	$pdf->Cell(192,10, "PRESENTE", 0, 0, 'L');
	$pdf->Ln(15);

	$pdf->SetFont('Arial','',11);

	$pdf->Cell(192,10, 'Departamento de: '. $NombreDepartamento, 0, 0, 'L');
	$pdf->Ln(1);
	$pdf->Cell(192,10, '                             __________________________________________________________________________', 0, 0, 'L');
	$pdf->Ln(5);

	$pdf->Cell(100,10, 'Lugar: '. $Lugar, 0, 0, 'L');
	$pdf->Cell(92,10, 'Fecha: ' . $FechaActual, 0, 0, 'R');
	$pdf->Ln(1);
	$pdf->Cell(100,10, '           ________________________________________________', 0, 0, 'L');
	$pdf->Cell(100,10, '____________________________      ', 0, 0, 'R');
	$pdf->Ln(15);

	$NombresAsesores = "";

	for($i=0;$i<count($Asesores);$i++)
	{
		$NombresAsesores = $NombresAsesores . str_replace("-", " ", $Asesores[$i]) . PHP_EOL;
	}

	$pdf->SetWidths(array(50,142));
	$pdf->Row(array('Nombre del proyecto:',$NombreProyecto,));
	$pdf->Row(array('Nombre(s) del (de los) asesor (es):', $NombresAsesores));
	$pdf->Row(array('Numero de estudiantes:', count($AlumInv_NC)));

	$pdf->Ln(10);

	$pdf->Cell(190,5,"Datos de (de los) estudiante (s)",0);
	$pdf->Ln(8);
    $pdf->Cell(64,5,"Nombre",1);
	$pdf->Cell(64,5,"No de Control",1);
    $pdf->Cell(64,5,"Carrera",1);
    $pdf->Ln();

	for($i=0;$i<count($AlumInv_NC);$i++)
	{

		$pdf->SetWidths(array(64,64,64));

		$pdf->Row(array($AlumInv_NombreAlumno[$i],$AlumInv_NC[$i],$AlumInv_Carrera[$i]));
	}

	$pdf->Ln(10);
	$pdf->MultiCell(192,10, 'Observaciones:'. PHP_EOL .$Observaciones, 1, 'L', 0);
	$pdf->Ln(15);

	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(192,10, 'ATENTAMENTE', 0, 0, 'C');
	$pdf->Ln(20);
	$pdf->Cell(192,10,$NombreJefe, 0, 0, 'C');
	$pdf->Ln(1);
	$pdf->Cell(192,10, "     ____________________________________________________________", 0, 0, 'C');
	$pdf->Ln(5);
	$pdf->Cell(192,10, 'Nombre y firma del (de la) Jefe(a) de Departamento Academico', 0, 0, 'C');

	$pdf->Output();
	$pdf->Output("F");

	$TamanyoArchivo = filesize('doc.pdf');

	$Archivo  = fopen('doc.pdf',"r");
	$Contenido = fread($Archivo, $TamanyoArchivo);
	$Contenido = addslashes($Contenido);
	//$Contenido = mysql_real_escape_string($Contenido);
	fclose($Archivo);

	$servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd ="bd_tsp";
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

    $NombreProyecto = str_replace(" ", "-", $NombreProyecto);
    
    $consulta = "INSERT INTO documento (idDocumento, Titulo, Tipo, Contenido, Expediente_idExpediente) 
                            VALUES (0,'PROY-". $NombreProyecto ."', 'pdf', '". $Contenido."', NULL);";
	$resultado = mysqli_query($conexion, $consulta);
	mysqli_close($conexion);

?>