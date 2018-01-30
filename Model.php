<?php


namespace Jim;


abstract class Model
{
	protected $connection;
	protected $table;

	function __construct(\mysqli $conn)
	{
		$this->connection = $conn;
	}

	public function getAll()
	{
		$sql = "select * from {$this->table}";

		$results = $this->connection->query($sql);

		return $results->fetch_all();
	}

	public function find(int $id)
	{
		$sql = "select * from {$this->table} where id = {$id}";

		$results = $this->connection->query($sql);

		return $results->fetch_all();
	}

	public function insert($data)
	{
	    $insertText = ' ';
		foreach ($data as $key => $val) {
            $insertText .= $key . '='. $val . ',';
		}
		echo $insertText;
	}

	public function save(array $data) {
		foreach ($data as $key => $val) {
		    $fieldName = 'set' . $key;
			$this->$fieldName($val);
		}
		if ($data['id']) {
			$object = $this->find($data['id']);
		} else {

		}
	}
}