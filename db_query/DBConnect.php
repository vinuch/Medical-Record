<?php
class DBConnect extends PDO {
	private $host = 'localhost';
	private $dbname = 'Emedical_records';
	private $uname = 'root';
	private $pword = '1234';

	public function __construct() {
		try {
			// "engine:host={your_host};dbname={your_dbname}";

			$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

			parent::__construct($dsn, $this->uname, $this->pword);

			// echo "Connection to DB was successful";
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}
?>