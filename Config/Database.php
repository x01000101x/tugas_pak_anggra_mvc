<?php

// Class database (koneksi database)
class Database
{

	// Online DB
	// var $host = "db4free.net";
	// var $uname = "siswasiswirk4";
	// var $pass = "akubisacoding";
	// var $db = "pbo_pak_anggra_4";
	// var $connection;

	//Local DB
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "learn_smkn4";
	var $connection;

	// Method koneksi kedalam database
	function Connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}
