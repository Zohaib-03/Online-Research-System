<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli($servername, $username, $password,$db);

if (new mysqli($servername, $username, $password,$db)) {
	//echo "Connected successfully";
	
} 
else
{
	echo "Connection failed!";
    die();
}
?>