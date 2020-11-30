<?php

class Database{
	
	var $host;
	var $user;
	var $pass;
	var $database;
	
	public function __construct()
	{
		
		$this->host = 'localhost';
		$this->pass = '#andela123';
		$this->user = 'root';
		$this->database = 'newschema';
		
	}
		
		public function connectDb()
		{
			@mysql_connect($this->host, $this->user, $this->pass) or die ("Cannot establish connection");
			@mysql_select_db ($this->database) or die ("Cannot connect to db");
			
				
	    }
	
	
	
	}

?>