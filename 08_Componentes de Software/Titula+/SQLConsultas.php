<?php

	//includes
	include_once "MysqlConnector.php";
	include_once "User.php";
	include_once "UserJefe.php";

	class SQLConsultas {
		private $mysql;
		private $user;

		function __construct(){}
	
	public function consultarUsuario($name){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select * from login where Usuario ='$name'";
		$res=$mysql->Query($consulta);
		$cont = 0;
		while($actual = mysqli_fetch_array($res)){
			$registro = new User();
			$registro->setidLogin($actual['idLogin']);
			$registro->setNombre($actual['Usuario']);
			$registro->setPassword($actual['Password']);
			$registro->setTipo($actual['Tipo']);
			$this->contactos[$cont] = $registro;
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return $this->contactos;
		}else {
			return 0;
		}
	}
	
	public function AltaUser($idLogin, $Usuario,$Nombre,$Password,$Tipo,$Email){
		$mysql = new MysqlConnector();
		$mysql->Open();
		
		$consulta="insert into login (idLogin,Usuario,Nombre,Password,Tipo, Email)
		values (".$idLogin.",'".$Usuario."','".$Nombre."','". $Password ."','".$Tipo."','".$Email."')";  
		//echo "aqui ". $consulta;
		$res=$mysql->Query($consulta);
		$mysql->Close();
	}
	public function consultarMaxIdUser(){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta='select MAX(idLogin) from login GROUP by idLogin desc LIMIT 1';
		$res = $mysql->Query($consulta);
		$max;
		while($actual = mysqli_fetch_array($res)){
			$max = $actual['MAX(idLogin)'];
		}
		$mysql->Close();
		if ($max > 0) {
			return $max;
		}else if ($max < 0 || $max ==null || $max = ''){
			return 0;
		}
	}
	public function consultarPassAdmin(){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta='SELECT Password from login where Tipo = "Administrador"';
		$res = $mysql->Query($consulta);
		$cont = 0;
		$name;
		while($actual = mysqli_fetch_array($res)){
		$name = $actual['Password'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return $name;
		}else {
			return 0;
		}
	}
	public function consultarJefe($id){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select * from login inner join jefedepartamento where idLogin = Login_idLogin and idLogin ='$id'";
		$res=$mysql->Query($consulta);
		$cont = 0;
		while($actual = mysqli_fetch_array($res)){
			$registro = new User();
			$registro->setidLogin($actual['idLogin']);
			$registro->setUsuario($actual['Usuario']);
			$registro->setPassword($actual['Password']);
			$registro->setTipo($actual['Tipo']);
			$registro->setNombre($actual['Nombre']);
			$registro->setEmail($actual['Email']);
			$registro->setNombreDep($actual['NombreDep']);
			$this->contactos[$cont] = $registro;
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return $this->contactos;
		}else {
			return 0;
		}
	}
	public function consultarAdmin($id){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select * from login inner join admin where idLogin = Login_idLogin and idLogin ='$id'";
		$res=$mysql->Query($consulta);
		$cont = 0;
		while($actual = mysqli_fetch_array($res)){
			$registro = new User();
			$registro->setidLogin($actual['idLogin']);
			$registro->setUsuario($actual['Usuario']);
			$registro->setPassword($actual['Password']);
			$registro->setTipo($actual['Tipo']);
			$registro->setNombre($actual['Nombre']);
			$registro->setEmail($actual['Email']);
			$registro->setPuesto($actual['Puesto']);
			$this->contactos[$cont] = $registro;
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return $this->contactos;
		}else {
			return 0;
		}
	}
	public function ModificarUsuario($id, $Usuario,$nombre, $pass, $Tipo, $email){
			$mysql = new MysqlConnector();
			$mysql->Open();
			$consulta="update login set Usuario='".$Usuario."', Nombre='". $nombre ."', Password='". $pass ."', Tipo='" . $Tipo ."', Email='". $email."' where idLogin= ".$id; 
			//echo "Login ". $consulta;
			$res=$mysql->Query($consulta);
		}

		 public function ModificarUsuario2($id, $Usuario,$nombre, $Tipo, $email){
			$mysql = new MysqlConnector();
			$mysql->Open();
			$consulta="update login set Usuario='".$Usuario."', Nombre='". $nombre ."', Tipo='" . $Tipo ."', Email='". $email."' where idLogin= ".$id; 
			//echo "Login ". $consulta;
			$resp=$mysql->Query($consulta);
		}
			
	public function consultarUsuarioXID($id){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select Usuario from login where idLogin ='$id'";
		$res = $mysql->Query($consulta);
		$cont = 0;
		$name;
		while($actual = mysqli_fetch_array($res)){
		$name = $actual['Usuario'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return $name;
		}else {
			return 0;
		}
	}
	public function consultarRevisionInf($id){
		$mysql = new MysqlConnector();
		$mysql->Open();

		$consulta="SELECT evaluacion.Criterios, evaluacion.Puntaje, documento.Titulo 
		FROM expediente inner join estudiante inner join evaluacion inner join documento 
		WHERE estudiante.Login_idLogin='$id' AND expediente.Estudiante_idEstudiante=estudiante.idEstudiante 
		AND documento.idDocumento=evaluacion.Documento_idDocumento 
		AND evaluacion.Expediente_idExpediente=expediente.idExpediente AND documento.Tipo='INF'";
		$res=$mysql->Query($consulta);
		$cont = 0;
		$criterios;
		$puntaje;
		$titulo;
		while($actual = mysqli_fetch_array($res)){
			$criterios=$actual['Criterios'];
			$puntaje=$actual['Puntaje'];
			$titulo=$actual['Titulo'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) {
			return array ($criterios, $puntaje, $titulo);

		}else {
			return 0;
		}
	}

	//metodo empleado para buscar la carrera del estudiante en cuestion
	public function consultarCarrera($id)
	{
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select carrera from estudiante where Login_idLogin ='$id'";
		$res = $mysql->Query($consulta);
		$cont = 0;
		$carrera;
		while($actual = mysqli_fetch_array($res))
		{
		$carrera = $actual['carrera'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) 
		{
			return $carrera;
		}else 
		{
			return 0;
		}
	}

	//metodo empleado para buscar el nombre completo del estudiante en cuestion
	public function consultarNombre($id)
	{
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select NombreEstudiante from estudiante where Login_idLogin ='$id'";
		$res = $mysql->Query($consulta);
		$cont = 0;
		$nombre;
		while($actual = mysqli_fetch_array($res))
		{
		$nombre = $actual['NombreEstudiante'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) 
		{
			return $nombre;
		}else 
		{
			return 0;
		}
	}

	//metodo empleado para buscar la id del estudiante en cuestion con base en la id del login
	public function consultarId($id){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select idEstudiante from estudiante where Login_idLogin ='$id'";
		$res = $mysql->Query($consulta);
		$cont = 0;
		$id;
		while($actual = mysqli_fetch_array($res))
		{
		$id = $actual['idEstudiante'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) 
		{
			return $id;
		}else 
		{
			return 0;
		}
	}

	//metodo empleado para buscar la id del expediente en cuestion
	public function consultarEx($id){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select idExpediente from expediente where Estudiante_idEstudiante ='$id'";
		$res = $mysql->Query($consulta);
		$cont = 0;
		$id;
		while($actual = mysqli_fetch_array($res))
		{
		$id = $actual['idExpediente'];
			$cont++;
		}
		$mysql->Close();
		if ($cont > 0) 
		{
			return $id;
		}else 
		{
			return 0;
		}
	}


	//metodo empleado para registrar el expediente
	public function registrarExp($noCont, $nombre, $id_estudiante)
	{
		$mysql = new MysqlConnector();
		$mysql->Open();
		$sql="insert into expediente(Folio,Nombre,Estudiante_idEstudiante) values ('".$noCont."', '".$nombre."', ".$id_estudiante.");";
		$res = $mysql->Query($sql);		
		$mysql->Close();		
	}

	//metodo empleado para registrar la carta de no inconveniencia
	public function registrarCarta($proyecto,$carta, $expID)
	{
		$mysql = new MysqlConnector();
		$mysql->Open();
		$sqlDoc="insert into documento(Titulo,Tipo,Contenido,Expediente_idExpediente) values ('".$proyecto."', 'carta', '".$carta."', ".$expID.");";
		$res2=$mysql->Query($sqlDoc);
		$mysql->Close();
	}

	//metodo empleado para registrar el informe
	public function registrarInforme($proyecto,$informe, $expID)
	{
		$mysql = new MysqlConnector();
		$mysql->Open();
		$sqlDoc2="insert into documento(Titulo,Tipo,Contenido,Expediente_idExpediente) values (".$proyecto.", 'informe', ".$informe.", ".$expID.");";
		$res3=$mysql->Query($sqlDoc2);
		$mysql->Close();
	}
}
?>
	 	 	 	 	 	 	 	 
	 	 	 	 	 	 	 	 