<?php

	class UserJefe {
		private $idJefeDepartamento;
		private $NombreDep;
		private $Login_idLogin;

		function __construct(){
			$this->idJefeDepartamento = 0;
			$this->NombreJefe = null;
			$this->NombreDep = null;
			$this->Login_idLogin = 0;
		}

		public function setidJefeDepartamento($idJefeDepartamento){
			$this->idJefeDepartamento = $idJefeDepartamento;
		}

		public function getidJefeDepartamento(){
			return $this->idJefeDepartamento;
		}

		public function setNombreDep($ND){
			$this->NombreDep = $ND;
		}

		public function getNombreDep(){
			return $this->NombreDep;
		}

		public function setLogin_idLogin($type){
			$this->Login_idLogin = $type;
		}

		public function getLogin_idLogin(){
			return $this->Login_idLogin;
		}
	}
?>

