<?php
$servername = "localhost";
$username = "root";
$password = "Lalapo123";
$dbname = "portal";

$conn = mysql_connect($servername, $username, $password, $dbname);




$sqlquery = "INSERT INTO notes (note_title, note_date, note_text) VALUES('".$_POST['note_title']."','".$_POST['note_date']."','".$_POST['note_text']."')";

$results = mysql_query($sqlquery) or die ("Fout: " .
mysql_error());

mysql_close();
?>
