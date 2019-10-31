<?php
	class MysqlConnector{

		private $server;
		private $conn_user;
		private $conn_passwd;
		private $conn_db;
		var $connection;

		function __construct(){
			$this->server = "localhost";
			$this->conn_user = "root";
			$this->conn_passwd = "";
			$this->conn_db = "bd_tsp";
		}

		public function Open(){
			$this->connection = mysqli_connect(
				$this->server,
				$this->conn_user,
				$this->conn_passwd,
				$this->conn_db
			);
		}

		public function Query($query){
			$answer = mysqli_query($this->connection, $query);
			if(!$answer){
				echo "No es posible realizar la consulta";
				mysql_error();
				exit;
			}
			return $answer;
		}

		public function Close(){
			mysqli_close($this->connection);
			$this->connection = null;
		}
	}
?>