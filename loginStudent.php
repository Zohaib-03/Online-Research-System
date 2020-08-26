<?php 
$var=1;

   session_start();
include 'connection.php';
if($conn)
{
if(isset($_POST['login']))
{
	$rollNumber=$_POST['rollNumber'];
	$password=$_POST['password'];
	$query="SELECT *FROM student WHERE rollNumber='$rollNumber' && password='$password' && status='approved'";
	 $result = mysqli_query($conn,$query);
	 $data=mysqli_fetch_assoc($result);
      $row = mysqli_num_rows($result);
      if($row == 1) {
       $_SESSION['rollNumber'] = $rollNumber;
       $_SESSION['name'] = $data['name'];
       $_SESSION['picture']= $data['picture'];
       $_SESSION['password']=$data['password'];
        $_SESSION['department']=$data['department'];
        $_SESSION['supervisorName']=$data['supervise'];
       $_SESSION['supervisorUserName']=$data['supervisorUserName'];

	header('location:loginStudentAfter.php');
	 }
	 else
	 {
$message = "check roll number or password and contact to admin";
echo "<script>alert('$message');</script>";
	 }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<script>
function validateForm() {
  var rollNumber = document.forms["myForm"]["rollNumber"].value;
  var password = document.forms["myForm"]["password"].value;

  if(rollNumber=="")
  {
  	 alert("rollNumber must be filled out");
     return false;
 }
  else if(password=="")
  {
  	 alert("password must be filled out");
     return false;
  }
  else
  {
  	var num = <?php echo $var ?>; 
  	if(num==0)
  	{
  	return false;
  }
  else
  {
  	return true;

  }
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
					<img src="images/student.png" alt="">
					<span style="margin-left: 20px;">Student</span>
				</div>
			</div>

 		 
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<a href="mainPage.php"><img style="width: 50px; height: 50px;" src="images/home.png" ></a>
		<a href="mainPage.php">	<span style="font-size: 25px;">HOME</span></a>
		</div>

	</header>
	 
	
	<!-- Home//////////////////////////// #1a1a1a;-->
	<div style="height: 500px; background-color: #1a1a1a; margin-top: 180px;">

		<form method="POST"  onsubmit="return validateForm()" name="myForm" class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input style="width: 500px; margin-left: 400px;" name="rollNumber" type="RollNumber" class="form-control mb-4" placeholder="Roll Number">

    <!-- Password -->
    <input style="width: 500px; margin-left: 400px;" name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<p> </p>
    <!-- Sign in button -->
    <button style="width: 500px; margin-left: 400px;" name="login" class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="registerStudent.php">Register</a>
    </p>

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