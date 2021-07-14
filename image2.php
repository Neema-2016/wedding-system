<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];
if(isset($_POST['updater'])){

	$picture2=$_FILES['image']['name'];


	$query2=mysqli_query($conn,"UPDATE couples SET spouse2_image='$picture2' WHERE user='$user'");
	if($query2){
		$moveimage2=move_uploaded_file($_FILES['image']['tmp_name'],"images/couple_images/$picture2");
	}
	if($query2 && $moveimage2){
		 echo '<script type="text/javascript">'; 
    echo 'alert("Photo succesfully Updated");'; 
    echo'window.location="editcoupleprof.php";';
    echo '</script>';  
	}else{
		$error=mysqli_error($conn);
		 echo '<script type="text/javascript">'; 
    echo 'alert("Photo Not updated:'."$error".'");'; 
    echo 'window.location="editcoupleprof.php";';
    echo '</script>';  

	}


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Merime Events</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/black.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!--Font awesome 5-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Day - v4.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope-fill"></i><a href="mailto:contactus@merime.com">contactus@merimesolutions.com</a>
				<i class="bi bi-phone-fill phone-icon"></i><a href="tel: +254757414345">+254757414345</a>
			</div>
			<div class="social-links d-none d-md-block">
				<a href="" class="twitter"><i class="bi bi-twitter"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
			</div>
		</div>
	</section>
	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="user_account.php">MERIME EVENTS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link" href="user_account1.php">Home</a></li>
					<li><a class="nav-link" href="addcouple.php">Add Couple Profile</a></li>
					<li><a class="nav-link" href="editcoupleprof.php">Edit Profile</a></li>
					<li><a class="nav-link" href="addreg.php">Create Gift Registry</a></li>
					<li><a class="nav-link" href="myvendors.php">My Vendors</a></li>
					<li><a class="nav-link" href="logout.php">Log Out</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>
	<main>
		<div class="container mt-5">
			<div class="col-lg-6 col-md-6 mx-auto card">
				<form method="post" action="" enctype="multipart/form-data">

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images "></i></span>
								</div>
								<input type="file" name="image" class="form-control bg-white border-left-0 border-md"> 
							</div>
							<center>
								<div class="form-group mt-5">
									<button type="submit" class="btn btn-block btn-primary" name="updater" >Update</button>
								</div>
							</center>
      	

				</form>
					

				

			</div>
		</div>

	</main>