<?php 
include 'connection.php';
    $userName=$_GET['userName'];
 	$query="DELETE FROM faculty WHERE userName='$userName'";
	 $result1 = mysqli_query($conn,$query);
	 header('location:updateFaculty.php');

?>