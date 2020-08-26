<?php 
include 'connection.php';
session_start();
    $rollNumber=$_GET['rollNumber'];
    $superviseName=$_SESSION["name"];
        $supervisorUserName=$_SESSION["userName"];

 	$query="UPDATE student set supervise='no supervisor', supervisorUserName='no supervisor' WHERE rollNumber='$rollNumber' && supervisorUserName='$supervisorUserName' ";
	 $result1 = mysqli_query($conn,$query);
	 header('location:loginFacultyAfter.php');

?>