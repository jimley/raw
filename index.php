<?php
require_once 'DbConn.php';
require_once 'Task.php';

$sql = 'select * from tasks';
$conn = \Jim\DbConn::conn();
$result = $conn->query($sql);

echo $conn->affected_rows;

while($row = $result->fetch_object()) {
	var_dump($row->subject);
}

$sql2 = 'select * from migrations';
if($result = $conn->query($sql2)) {
	while($row = $result->fetch_object()) {
		var_dump($row->migration);
	}
}

$task = new \Jim\Task($conn);

var_dump($task->getAll());

$conn->close();