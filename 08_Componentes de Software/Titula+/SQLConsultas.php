<?php
	include_once "MysqlConnector.php";
	include_once "User.php";

	class SQLConsultas {
		private $mysql;
		private $user;

		function __construct(){}
	
	public function consultarUsuario($name,$password){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="select * from login where Usuario ='$name' and Password ='$password'";
		$res=$mysql->Query($consulta);
		$cont = 0;
		while($actual = mysqli_fetch_array($res)){
			$registro = new User();
			$registro->setId($actual['idLogin']);
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
	
	public function AltaUsuario($id, $user,$nombre, $pass, $tipo, $Email){
		$mysql = new MysqlConnector();
		$mysql->Open();
		$consulta="insert into login (idLogin, Usuario,Nombre, Password, Tipo,Email)
		values (".$id.",'".$user."','". $nombre ."','". $pass ."','".$tipo."',".$Email.")"; 
		$res=$mysql->Query($consulta);
		$mysql->Close();
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
}
?>
	 	 	 	 	 	 	 	 