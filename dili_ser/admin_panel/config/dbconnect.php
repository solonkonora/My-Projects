<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "diligent_servers_db";

$con = mysqli_connect($server,$user,$password,$db);
if(!$con) {
    die("Connection Failed:".mysqli_connect_error());
}

?>