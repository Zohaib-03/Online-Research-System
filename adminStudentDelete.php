<?php 
include 'connection.php';
    $rollNumber=$_GET['rollNumber'];
 	$query="DELETE FROM student WHERE rollNumber='$rollNumber'";
	 $result1 = mysqli_query($conn,$query);
	 header('location:loginAdminAfter.php');

?>