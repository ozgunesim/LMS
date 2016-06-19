<?php

class DB
{
	public $host = 'localhost';
	public $user = 'root';
	public $pw = '';
	public $dbname = 'ozgunesim12db';
	
	public function kur()
	{
		
	}
	
	public function db_sec()
	{
		mysql_select_db($this->dbname);
	}
	
	public function baglan()
	{
		if(!mysql_connect($this->host,$this->user,$this->pw,$this->dbname))
			echo "DB'ye bağlanılamadı!";
	}
	
	
}

?>