<?php 
include 'connection.php';
if(isset($_POST['registerButton']))
{
	$userName1=$_POST['userName'];
 	$query1="SELECT *FROM faculty WHERE userName='$userName1'";
	 $result1 = mysqli_query($conn,$query1);
       $row1 = mysqli_num_rows($result1);
      if($row1 ==1 || $row1>1 ) {
      $message = "this account already registered contact to admin";
echo "<script>alert('$message');</script>";
	 }
	 else
	 {
	 ////////////////////
	 	
	$name=$_POST['Name'];
	$userName=$_POST['userName'];
	$department=$_POST['department'];
	$password=$_POST['password'];
	$education=$_POST['education'];
	$imageName=$_FILES['imageFile']['name'];
	$imageTempName=$_FILES['imageFile']['tmp_name'];
	$dir="images/".$imageName;
	$result=move_uploaded_file($imageTempName, $dir);
	if($result)
	{
	 	     
		$query="insert into faculty(name,userName,department,password,picture,education,paper,pPaper) VALUES ('$name','$userName','$department','$password','$dir','$education','noFile','noFile')";
		$run=$conn->query($query);
		 $message1 = "successfully registered account";
echo "<script>alert('$message1');</script>";
		header('location:loginFaculty.php');

	}
	else
	{
		echo "Some Error";
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Faculty</title>
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
  var name = document.forms["myForm"]["Name"].value;
    var userName = document.forms["myForm"]["userName"].value;
    var password = document.forms["myForm"]["password"].value;
    var imageFile = document.forms["myForm"]["imageFile"].value;
 var letters = /^[a-zA-Z]/;

   if(!userName.match(/^[0-9a-zA-Z]+$/))
  {
  	 alert("User Name must be filled out");
     return false;
  }
   else if(!name.match(letters))
  {
  	 alert("Name must be filled out");
     return false;
  }
  else if(password=="")
  {
  	 alert("password must be filled out");
     return false;
  }
   else if(imageFile=="")
  {
  	 alert("select your image");
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
					<img src="images/faculty.png" alt="">
					<span style="margin-left: 20px;">Faculty Registration</span>
				</div>
			</div>

 		 
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<a href="mainPage.php"><img style="width: 50px; height: 50px;" src="images/home.png" ></a>
		<a href="mainPage.php">	<span style="font-size: 25px;">HOME</span></a>
		</div>

	</header>
	 
	
	<!-- Home//////////////////////////// #1a1a1a;-->
	<div style="height: 700px; background-color: #1a1a1a; margin-top: 180px;">


		<form onsubmit="return validateForm()" action="" enctype="multipart/form-data" name="myForm" method="POST"  class="text-center border border-light p-5">
    <p class="h4 mb-4">Registration</p>

     <input style="width: 500px; margin-left: 400px;" name="Name" type="name" class="form-control mb-4" placeholder=" Your Name">

     <input style="width: 500px; margin-left: 400px;" name="userName" type="userName" class="form-control mb-4" placeholder="User Name">
    <h3 style="margin-right: 300px;">Select Education</h3>

     <select style="width: 500px; margin-left: 400px;" name="education"  class="form-control mb-4">
        	 			<option value="BS Computer Science">BS Computer Science</option>
        	 			<option value="MS BS Computer Science">MS BS Computer Science</option>
        	 			<option value="MBA">MBA</option>
        	 			<option value="PHD in Data Science">PHD in Data Science</option>
					</select>

    <h3 style="margin-right: 300px;">Select Department</h3>
    <select style="width: 500px; margin-left: 400px;" name="department"  class="form-control mb-4">
        	 			<option value="Computer Science">Computer Science</option>
        	 			<option value="BBA">BBA</option>
        	 			<option value="Electrical Engineering">Electrical Engineering</option>
					</select>

    <!-- Password -->
    <input style="width: 500px; margin-left: 400px;" name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<!-- For image -->
    <h3 style="margin-right: 290px;">Upload Your Picture</h3>

<form method="post" enctype="multipart/form-data">  
                     <input style="width: 500px; margin-left: 400px;" type="file" name="imageFile" class="form-control" />  
 <button style="width: 500px; margin-left: 400px;" name="registerButton" class="btn btn-info btn-block my-4" type="submit">Registrar</button>
                </form>  

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