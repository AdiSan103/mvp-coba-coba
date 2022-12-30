<?php

//controller database
class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	//var untuk koneksinya
	private $dbh;//database handler
	private $stmt;

	//memmbuat konstraknya
	public function __construct()
	{

	//koneksi ke database

		//data source name
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

		//option database
		$option = [
			//untuk membuat database agar tetap terjaga terus
			PDO::ATTR_PERSISTENT => true,
			//untuk mode error
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}



	//untuk menjalankan query
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);

	}

	//byting data
	public function bind($param, $value, $type = null)
	{
		if( is_null($type) ) {
			switch( true ){

			//ketika tipe integer
				case is_int($value) :
				$type = PDO::PARAM_INT;
				break;
			//ketika type boolean
				case is_bool($value) : 
				$type = PDO::PARAM_BOOL;
				break;

			//ketika type null
				case is_null($value) :
				$type = PDO::PARAM_NULL;
				break;

			//selain itu, asumsikan tipe string
			default :
				$type = PDO::PARAM_STR;
			}
		}

		//jika sudah diketahui
		$this->stmt->bindValue($param, $value, $type);
			//mencegah SQL INJECTION
	}
	//dieksekusi
	public function execute()
	{
		$this->stmt->execute();
	}

	//data ingin banyak
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	//data ingin sedikit
	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	//memberikan nilai berupa angka baik mengahpus, menginput data, ubah, dan lainnya
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

}