<?php

	class User {
		private $idLogin;
		private $Usuario;
		private $Nombre;
		private $Password;
		private $Tipo;
		private $Email;
		private $NombreDep;
		private $Puesto;

		function __construct(){
			$this->idLogin = 0;
			$this->Usuario = null;
			$this->Nombre = null;
			$this->Password = null;
			$this->Puesto = null;
			$this->Tipo = 0;
			$this->Email = null;
		}

		public function setidLogin($idLogin){
			$this->idLogin = $idLogin;
		}

		public function getidLogin(){
			return $this->idLogin;
		}
		public function setUsuario($Usuario){
			$this->Usuario = $Usuario;
		}

		public function getUsuario(){
			return $this->Usuario;
		}
		public function setNombreDep($NombreDep){
			$this->NombreDep = $NombreDep;
		}

		public function getNombreDep(){
			return $this->NombreDep;
		}
		public function setPuesto($Puesto){
			$this->Puesto = $Puesto;
		}

		public function getPuesto(){
			return $this->Puesto;
		}

		public function setNombre($Nombre){
			$this->Nombre = $Nombre;
		}

		public function getNombre(){
			return $this->Nombre;
		}

		public function setPassword($Password){
			$this->Password = $Password;
		}

		public function getPassword(){
			return $this->Password;
		}

		public function setTipo($Tipo){
			$this->Tipo = $Tipo;
		}

		public function getTipo(){
			return $this->Tipo;
		}
		public function setEmail($Email){
			$this->Email = $Email;
		}

		public function getEmail(){
			return $this->Email;
		}
	}
?>

