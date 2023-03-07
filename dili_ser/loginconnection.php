<?php
 
$con = "";
  
try {
    $servername = "localhost";
    $dbname = "diligent_servers_db";
    $username = "root";
    $password = "";
  
    $con = new PDO(
        "mysql:host=$servername; dbname=diligent_servers_db",
        $username, $password
    );
     
   $con->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>