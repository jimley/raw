<?php


namespace Jim;


class Model
{
	protected $connection;

	function __construct(DbConn $conn)
	{
		$this->connection = $conn::$conn;
	}

	public function getAllData() {
		
	}
}