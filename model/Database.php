<?php
/*classes let us store information (and modify the information via functions), and is also used to create objects*/
/*takes and stores information that gets repeated over and over again*/

class Database{
	private $connection;
	private $host;
	private $username;
	private $password;
	private $username
	/*means variable can only be accessed in this file [class]*/

	public function __construct($host, $username, $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	/*means variable can be accessed anywhere*/
	/*$this accesses the variables above, to only exist in that function [local variables]*/

	public function openConnection(){
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		/*creates new mysqli object*/
		if($this->connection->connect_error){
			die("Error: " . $this->connection->connect_error);
		}
		/*this is here in case there is an error that requires the page to terminate*/
	}

	public function closeConnection(){
		if(isset($this->connection)){
			$this->connection->close();
		}
	}
	/*closes the connection from the afore created function*/

	public function query($string){

	}
}