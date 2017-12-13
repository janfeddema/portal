<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "Lalapo123";
$dbName = "loginsystem";

//$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

?>
