<?php
require_once 'DbConn.php';

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

$conn->close();