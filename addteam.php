<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];
$sqey=mysqli_query($conn,"SELECT * FROM  vendors WHERE user='$user'");
if($sqey){
	while($row =mysqli_fetch_assoc($sqey)){
		$vendorid=$row['vendor_id'];
	}
}

if(isset($_POST['addteam'])){

//         
	$name=mysqli_real_escape_string($conn,$_POST['team_name']);
	$title=mysqli_real_escape_string($conn,$_POST['team_title']);
	$message=mysqli_real_escape_string($conn,$_POST['team_message']);
	$facebook=mysqli_real_escape_string($conn,$_POST['team_facebook']);
	$twitter=mysqli_real_escape_string($conn,$_POST['team_twitter']);
	$linkedin=mysqli_real_escape_string($conn,$_POST['team_linkedin']);
	$instagram=mysqli_real_escape_string($conn,$_POST['team_instagram']);
	$image=$_FILES['image']['name'];
	
	
	
	$query=mysqli_query($conn,"INSERT INTO teams (team_name,team_title,team_message,team_image,team_facebook,team_instagram,team_twitter,team_linkedin,vendor_id) VALUES('$name','$title','$message','$image','$facebook','$instagram','$twitter','$linkedin','$vendorid')");
	
	if($query){
		   $r3=move_uploaded_file($_FILES['image']['tmp_name'],"images/team_images/$image"); 
//        if(!empty($insertValuesSQL)){ 
//            $insertValuesSQL = trim($insertValuesSQL, ','); 
//            // Insert image file name into database 
//            $insert = $conn->query("INSERT INTO vendor_images (file_name, uploaded_on,vendor_id) VALUES $insertValuesSQL"); 
//            if($insert){ 
//               $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
//               $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
//               $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                  
   }if($query && $r3){
		   echo '<script type="text/javascript">'; 
    echo 'alert("Team Member Profile Succesfully Added");'; 
    echo '</script>';  
	}
			
   else{
		$error=mysqli_error($conn);
		
    echo '<script type="text/javascript">'; 
    echo 'alert("'."$error".' ");'; 
    
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
	<!--Bootstrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Font Awesome link-->
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
<style>
	.cena {
		border-radius: 30px;
		-webkit-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
		box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
	}

</style>

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
					<li><a class="nav-link" href="user_account.php">Home</a></li>

	                <li><a class="nav-link" href="addacc.php">Add Profile</a></li>
	                <li>
	                        <a class="nav-link" href="editprof.php">Edit Profile</a>
                              </li>

					<li>
					<a class="nav-link" href="addteam.php">Add Team</a>
					</li>
					<li><a class="nav-link" href="addaccimages.php">Add Service images</a>';
                               
					</li>
					
					<li><a class="nav-link" href="logout.php">Log Out</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>
	<main id="main">
		<section>
			<div class="section-title">
				<span>Team</span>
				<h2>Add Team Members</h2>
				<p>Add members of your team..to be displayed on your profile.
			</div>
			<div class="container cena" style="background: #ccc;">

				<form method="POST" action="" class="mt-5 mb-5" enctype="multipart/form-data">
					<div class="row p-5">
						<div class="col-lg-10 col-md-10 mt-5 mb-5 mx-auto">
								<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="team_name" placeholder="Enter Name of Team Member">
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-signature"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="team_title" placeholder="Enter Title eg CEO...">
							</div>
						
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-comment"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="team_message" placeholder="Enter Brief Comment">
							</div>
							<div class="form-row">
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-facebook"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="team_facebook" placeholder="Facebook">
								</div>
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-twitter"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="team_twitter" placeholder="Twitter">
								</div>
							</div>
							<div class="form-row">
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-linkedin"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="team_linkedin" placeholder="Linkedin">
								</div>
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-instagram "></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="team_instagram" placeholder="Instagram">
								</div>
							</div>
							<label class="text-muted fw-bold">Add Picture of a Team Member</label>
							<div class="input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-image"></i></span>
								</div>
								<input type="file" class="form-control bg-white border-left-0 border-md" name="image" Required>
							</div>


						</div>
						<center>
							<div class="mt-2 col-lg-6 col-md-6"><button type="submit" name="addteam" class="btn btn-primary btn-block">Submit</button></div>
						</center>
					</div>
				</form>

			</div>
		</section>
	</main>
	<footer class="fixed-bottom">
		<div class="container">
			<center>
				<div class="copyright small">
					<em>&copy; Merime solutions 2021</em>
				</div>
			</center>

		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
	<!--Bootstrap Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
