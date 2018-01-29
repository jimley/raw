<?php


namespace Jim;

use \mysqli;

class DbConn
{

	public static $conn;


	public static function conn()
	{
		if(!self::$conn) {
			echo 'createing conn';
			$db = 'tasks';
			$user = 'root';
			$pw = 'root';

			self::$conn = new mysqli('localhost', $user, $pw, $db);

			/* check connection */
			if (self::$conn->connect_errno) {
				printf("Connect failed: %s\n", self::$conn->connect_error);
				exit();
			}
		}

		return self::$conn;
	}

	function __destruct()
	{
		self::$conn->close();
	}
}