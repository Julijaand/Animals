<?php

	class db {
		
		var $connection;
		
		function __construct() {
			$this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		}
		
		public function select($query, $data_arr) {
			$res = $this->connection->prepare($query);
			$res->execute($data_arr);
			return $res->fetchAll();
		}
		
		public function insert($query, $data_arr) {
			$this->connection->prepare($query)->execute($data_arr);
		}
		
		public function update($query, $data_arr) {
			$this->connection->prepare($query)->execute($data_arr);
		}
		
		function __destruct() {
			$this->connection = null;
		}
		
	}

?>