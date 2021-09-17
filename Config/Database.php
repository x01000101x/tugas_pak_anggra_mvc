<?php

// Class database (koneksi database)
class Database
{

	// Property
	var $host = "db4free.net";
	var $uname = "siswasiswirk4";
	var $pass = "akubisacoding";
	var $db = "";
	var $connection;

	// Method koneksi kedalam database
	function Connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}
