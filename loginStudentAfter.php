<?php 
include 'connection.php';
   session_start();
   error_reporting(0);
   if($_SESSION["rollNumber"]=="")
   {
   	header('location:loginStudent.php');
   }
   if(isset($_POST['paper']))
{
 	$userName1=$_SESSION["supervisorUserName"];
 	$query1="SELECT *FROM faculty WHERE UserName='$userName1' && paper<>'noFile'";
	 $result1 = mysqli_query($conn,$query1);
       $row1 = mysqli_num_rows($result1);
      if($row1 ==1 || $row1>1 ) {
           $message = "You already submitted paper to supervisor";
           echo "<script>alert('$message');</script>";
	 }
	 else
	 {
	$imageName=$_FILES['file']['name'];
	$imageTempName=$_FILES['file']['tmp_name'];
	$dir="paper/".$imageName;
	$result=move_uploaded_file($imageTempName, $dir);
	if($result)
	{
		$query="UPDATE faculty set paper='$dir' WHERE userName='$userName1'";
	 $result1 = mysqli_query($conn,$query);
		 $message1 = "successfully submit paper";
echo "<script>alert('$message1');</script>";
			//	header('location:loginStudent.php');
}
}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<script>
function check()
{
    return true;
}
function validateForm() {
     var File = document.forms["myForm"]["file"].value;
    if(File=="")
  {
  	 alert("select your paper");
     return false;
  }
  else
  {
  	return true;
  }
}
</script>
</head>
<body>

<div style="background-color: #1a1a1a;" class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img height="80px;" width="70px;" src="<?php echo  $_SESSION["picture"] ?>">
					<span style="margin-left: 20px;">
						<?php echo  $_SESSION["name"] ?></span>
				</div>
			</div>

 		 	<nav class="main_nav_container">
				<div class="main_nav" >
					<ul  class="main_nav_list">
			<li class="main_nav_item"  ><u><a href="loginStudentAfter.php">home</a></u></li>

						<li class="main_nav_item"  ><u><a href="updateStudent.php">Profile Update</a></u></li>

					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<a href="mainPage.php" onclick='return check()'><img style="width: 50px; height: 50px;" src="images/logout.png" ></a>
		<a href="mainPage.php" onclick='return check()'><span style="font-size: 25px;">LOGOUT</span></a>		</div>

	</header>
	 
	
	<!-- Home//////////////////////////// #1a1a1a;-->
	<div style="height: 300px; background-color: #1a1a1a; margin-top: 180px;">

   <h1 class="text-warning" style="text-align: center;">Yor supervisor name: <u><?php echo  $_SESSION["supervisorName"] ?></u></h1>


<form onsubmit="return validateForm()" action="" enctype="multipart/form-data" name="myForm" method="POST"  class="text-center  border-light p-5">

    <p class="h4 mb-4">Submit your paper</p>

                     <input style="width: 500px; margin-left: 400px;" type="file" name="file" class="form-control" />  
 <button style="width: 500px; margin-left: 400px;" name="paper" class="btn btn-info btn-block my-4" type="Submit">Submit</button>
    <!-- Sign in button -->
   

</form>



	</div>

	 
	<!-- Footer -->

	<footer  class="footer">
		<div class="container">
			<hr style="border-color: #6c757d;">
			<!-- Newsletter -->

		 

			<!-- Footer Content -->

			

			<!-- Footer Copyright -->

			<div  class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());
</script> All rights reserved by Arsal Tariq</span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>