<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

$mysqli new mysqli('localhost','root','', 'book_db') ; 
$table 'photos';

$result = $mysqli->query("SELECT FROM $table") or die($mysqli->error);

while ($data = $result->fetch_assoc()) 
	
echo "<h2>{$data['name']}</h2>";
echo "<img src='{$data['photo']}' width='40%' height='40%'>";

?>
</body>
</html>