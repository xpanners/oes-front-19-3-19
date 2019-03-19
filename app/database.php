<?php
class DB{	
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		public $dbname = "ges";
		public $conn;
		public $error;
 
		public function __construct()
		{
			$this->connect();
		}

		public function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
				return false;
			}else if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
		}


		public function getData($query)
		{        
			$this->connect();
			$result = mysqli_query($this->conn,$query);
			
			if ($result == false) {
				return false;
			} 
			
			$rows = array();
			
			while ($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
			
			return $rows;
			$this->conn->close();
		}
	
		public function query($query)
		{
			$this->connect();
			$result = mysqli_query($this->conn,$query);
			
			if ($result == false) {
				return mysqli_error($this->conn);
			}
			else
			{
				return $result;
			}
			$this->conn->close();
		}

		public function input($input)
		{
			$this->connect();
			return mysqli_real_escape_string($this->conn,$input);
		}






}?>	