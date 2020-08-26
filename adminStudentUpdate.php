<?php 
include 'connection.php';
    $rollNumber=$_GET['rollNumber'];
 	$query="UPDATE student set status='approved' WHERE rollNumber='$rollNumber'";
	 $result1 = mysqli_query($conn,$query);
	 header('location:loginAdminAfter.php');

?>