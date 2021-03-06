<?php 
   session_start();
   error_reporting(0);
   if($_SESSION["userName"]=="")
   {
   	header('location:loginAdmin.php');
   }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<script>
function check()
{

    return true;
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
					<img  src="images/admin.png">
					<span style="margin-left: 20px;">
						<?php echo  $_SESSION["userName"] ?></span>
				</div>
			</div>
			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
											<li class="main_nav_item"><u><a href="loginAdminAfter.php">home</a></u></li>
						<li class="main_nav_item"><u><a href="addAdmin">add admin</a></u></li>
						<li class="main_nav_item"><u><a href="updateFaculty.php">Faculty</a></u></li>


					</ul>
				</div>
			</nav> 		 
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<a href="mainPage.php" onclick='return check()'><img style="width: 50px; height: 50px;" src="images/logout.png" ></a>
		<a href="mainPage.php" onclick='return check()'><span style="font-size: 25px;">LOGOUT</span></a>		</div>

	</header>
	 
	
	<!-- Home//////////////////////////// #1a1a1a;-->
	<div style="height: 500px; background-color: #1a1a1a; margin-top: 180px;">
		<h1 class="text-warning text-center ">Student Record</h1>
	<table style="width: 60%;">
						<thead>
							<tr class="table100-head table-bordered">
								<th class=" ">Name</th>
								<th class=" ">User Name</th>
								<th class=" ">Department</th>
								<th class=" ">Education</th>
								<th class=" ">Update</th>
								<th class=" ">Delete</th>

							
							</tr>
						</thead>
						<?php 
      include 'connection.php';
	$query="SELECT *FROM faculty";
	 $result = mysqli_query($conn,$query);
	 while ($res=mysqli_fetch_array($result))
	  {
?>

						<tbody>
								<tr>
									<td class=" "><?php echo $res['name'];?></td>
									<td class=" "><?php echo $res['userName'];?></td>
									<td class=" "><?php echo $res['department'];?></td>
									<td class=" "><?php echo $res['education'];?></td>

									<td><button class="btn-danger btn" ><a style="color: white;" href="adminFacultyUpdateInfo.php?userName=<?php echo $res['userName'];?>">Update</a></button></td>

									<td><button class="btn-danger btn" ><a style="color: white;" href="adminFacultyDelete.php?userName=<?php echo $res['userName'];?>">Delete</a></button></td>
								
								</tr>
								
						</tbody>
						<?php
	}
	?>

					</table>
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
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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