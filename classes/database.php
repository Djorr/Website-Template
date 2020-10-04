<?php

$host = '127.0.0.1';
$database = 'project1';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

class database {

	private $host;
	private $username;
	private $password;
	private $database;
	private $charset;
	private $db;
	private $pdo;

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
			$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES => false,
			];

			$this->pdo = new PDO($dsn, $username, $password, $options);
		} catch (\PDOException $e) {
			echo $e->getMessage();
			throw $e;
			//throw new PDOException($e->getMessage(), (int)$e->getCode());
		}
	}

	public function insert($uname, $fname, $mname, $lname, $pass, $email) {
		try{
			//begin database transaction
			$this->pdo->beginTransaction();

			//create sql statement
			$query = "INSERT INTO account
					(uname, email, password)
					VALUES
					(:uname, :email, :password)";

			//prepared statement
			$statement = $this->pdo->prepare($query);

			$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

			$statement->execute(['uname' => $uname, 'email' => $email, 'password' => $hashed_password]);

			$account_id = $this->pdo->lastInsertId();

			$query = "INSERT INTO persoon
					(account_id, firstname, middlename, lastname)
					VALUES
				  (:account_id, :firstname, :middlename, :lastname)";

			$statement = $this->pdo->prepare($query);

			$statement->execute(['account_id' => $account_id, 'firstname' => $fname, 'middlename' => $mname, 'lastname' => $lname]);

			$this->pdo->commit();
		}catch(Exception $e){
			$this->pdo->rollback();
			throw $e;
		}
	}

	public function lostPassword($email) {

	}
};

?>
