<?php 
include 'connection.php';
session_start();
    $rollNumber=$_GET['rollNumber'];
    $superviseName=$_SESSION["name"];
        $superviseUserName=$_SESSION["userName"];

 	$query="UPDATE student set supervise='$superviseName',supervisorUserName='$superviseUserName'  WHERE rollNumber='$rollNumber' && supervise='no supervisor' ";
	 $result1 = mysqli_query($conn,$query);
	 header('location:loginFacultyAfter.php');

?>