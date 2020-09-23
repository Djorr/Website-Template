<?php

class database {

	private $host;
	private $username;
	private $password;
	private $database;
	private $charset;
	private $db;

	/**
	 *  Connects to the database. (Notitie: Week 4 Les 1)
	 */
	public function __construct($host, $username, $password, $database, $charset) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->charset = $charset;

		try {
			$dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
			$this->db = new PDO($dsn, $this->username, $this->password);
			echo "Database connection succesfully estabilished";
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit("An error occurred");
		}
	}

	public function executeQuerySignUp() {

	}

}

?>