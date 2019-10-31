<?php

	class User {
		private $id;
		private $nombre;
		private $password;
		private $tipo;

		function __construct(){
			$this->id = 0;
			$this->nombre = null;
			$this->password = null;
			$this->tipo = 0;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setNombre($name){
			$this->nombre = $name;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setpassword($pass){
			$this->password = $pass;
		}

		public function getpassword(){
			return $this->password;
		}

		public function setTipo($type){
			$this->tipo = $type;
		}

		public function getTipo(){
			return $this->tipo;
		}
	}
?>

