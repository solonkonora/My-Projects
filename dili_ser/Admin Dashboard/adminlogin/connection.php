<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "diligent_servers_db";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=diligent_servers_db",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
