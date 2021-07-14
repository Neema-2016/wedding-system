<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];
$quer=mysqli_query($conn,"SELECT * FROM vendors WHERE user='$user'");
if($quer){
	$number=mysqli_num_rows($quer);
	if($number !=0){
		echo'<script type="text/javascript">';
		echo'alert("You have already added a profile.Click OK to edit your existing profile.");';
		echo 'window.location = "editprof.php"';
		echo'</script>';
	}
}


if(isset($_POST['add'])){

	$name=mysqli_real_escape_string($conn,$_POST['vendor_name']);
	$phone=mysqli_real_escape_string($conn,$_POST['vendor_phone']);
	$phone1=mysqli_real_escape_string($conn,$_POST['vendor_phone1']);
	$location=mysqli_real_escape_string($conn,$_POST['vendor_location']);
	$box=mysqli_real_escape_string($conn,$_POST['vendor_box']);
	$email=mysqli_real_escape_string($conn,$_POST['vendor_email']);
	$brief=mysqli_real_escape_string($conn,$_POST['vendor_brief']);
	$facebook=mysqli_real_escape_string($conn,$_POST['vendor_facebook']);
	$twitter=mysqli_real_escape_string($conn,$_POST['vendor_twitter']);
	$linkedin=mysqli_real_escape_string($conn,$_POST['vendor_linkedin']);
	$whatsapp=mysqli_real_escape_string($conn,$_POST['vendor_whatsapp']);
	$image=$_FILES['image']['name'];
	$category=$_POST['vendor_category'];
	 //--------------coordinates-------
   $vendor_map =$_POST['latitude'];
   $vendor_map .= ','.$_POST['longitude'];
    //------------------------------------
	$chk="";  
   foreach($category as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
	
	
	
	$query=mysqli_query($conn,"iNSERT INTO vendors (vendor_name,vendor_phone,vendor_phone1,vendor_email,vendor_location,vendor_box,vendor_description,vendor_facebook,vendor_twitter,vendor_images,vendor_linkedin,vendor_whatsapp,vendor_category,vendor_map,user) VALUES('$name','$phone','$phone1','$email','$location','$box','$brief','$facebook','$twitter','$image','$linkedin','$whatsapp','$chk','$vendor_map','$user')");
	
	
	// $query=mysqli_query($conn,"UPDATE vendors SET vendor_name='$name',vendor_phone='$phone',vendor_phone1='$phone1',vendor_location='$location',vendor_box='$box',vendor_email='$email',vendor_description='$brief',vendor_facebook='$facebook',vendor_twitter='$twitter',vendor_images='$image',vendor_linkedin='$linkedin',vendor_whatsapp='$whatsapp',vendor_category='$chk',vendor_map='$vendor_map'WHERE user='$user'");
	if($query){
		   $r3=move_uploaded_file($_FILES['image']['tmp_name'],"images/vendor_images/$image"); 
                  
   }if($query && $r3){
		   echo '<script type="text/javascript">'; 
    echo 'alert("Account Succesfully Added");'; 
    echo '</script>';  
	}
			
   else{
		$error=mysqli_error($conn);
		
    echo '<script type="text/javascript">'; 
    echo 'alert("An Error occured during submission '."$error".' ");';    
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

					<li><?php if ($role="Vendor"){
	                         echo'<a class="nav-link" href="addacc.php">Add Profile</a>';
                               } elseif($role !="Vendor" && $role !="Admin"){
	                     echo'<a class="nav-link" href="addreg.php">Add  Registry</a>';}
						?></li>
					<li>
						<?php if ($role="Vendor"){
	                         echo'<a class="nav-link" href="editprof.php">Edit Profile</a>';
                               } elseif($role !="Vendor" && $role !="Admin"){
	                     echo'<a class="nav-link" href="editreg.php">Edit Registry</a>';}
						?></li>

					<li><?php if ($role="Vendor"){
						echo'<a class="nav-link" href="addteam.php"><span>Add Team</span></a>';
					}elseif($role !="Vendor" && $role !="Admin"){
						echo'<a class="nav-link" href="viewreg.php">View Registry</a>';
					}?>

					</li>
					<li><?php if ($role="Vendor"){
	                         echo'<a class="nav-link" href="addaccimages.php">Add Service images</a>';
                               } elseif($role !="Vendor" && $role !="Admin"){
	                     echo'<a class="nav-link" href="addregimages.php">Add Gift Registry Images</a>';}
						?></li>
					<li>
					<li><a class="nav-link" href="logout.php">Log Out</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>
	<main>
		<section>
			<div class="section-title">
				<span>Vendor</span>
				<h2>My Profile</h2>
			</div>
			<div class="container cena" style="background: #ccc;">

				<form method="POST" action="" class="mt-5 mb-5" enctype="multipart/form-data">
					<div class="row p-5">
						<div class="col-lg-6 col-md-6 mt-5 mb-5">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="vendor_name" placeholder="Enter Vendor Name" required>
							</div>


							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md"  name="vendor_location" placeholder="Enter Vendor Location" required>
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-mail-bulk text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md"  name="vendor_email" placeholder="Enter Vendor Email" required>
							</div>

							<div class="input-group  mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md"  name="vendor_phone" placeholder="Enter Phone Number" required>
							</div>

							<div class="input-group  mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="vendor_phone1" placeholder="Enter A Backup Phone Number" required>
							</div>

							<div class="input-group  mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-address-card text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="vendor_box" placeholder="Enter P.O Box">
							</div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-clipboard text-muted"></i></span>
								</div>
								<select class="form-control bg-white border-left-0 border-md" name="vendor_category[]" placeholder="Enter Cetegory" multiple required>
									<option class="small text-center text-primary fw-bold" disabled selected><em>Select 1 or more vendor categories</em>
									</option>
									<option value="DJs">DJ</option>
									<option value="Bands">Music Band</option>
									<option value="Dancers">Dancers</option>
									<option value="Orchestra">Ochestra</option>
									<option value="Planners">Event planner</option>
									<option value="Florists">Florist</option>
									<option value="Jewellers">Jeweller</option>
									<option value="Sewers">Sewing and Design</option>
									<option value="MCs">MC</option>
									<option value="Tents">Tents</option>
									<option value="Furniture">Furniture</option>
									<option value="Chefs">Food provider</option>
									<option value="Bakers">Baker</option>
									<option value="Hair Salons">Hair Salon</option>
									<option value="Barbers">Barber shop</option>
									<option value="Nail Salon">Nail Salon</option>
									<option value="Makeup">Makeup</option>
									<option value="Churches">Church</option>
									<option value="Gardens">Botanical Garden</option>
									<option value="Halls">Social Hall</option>
									<option value="Mosques">Mosque</option>
									<option value="Temples">Temple</option>

								</select>
							</div>



						</div>
						<div class="col-lg-6 col-md-6 mt-5 mb-5">
							<label class="text-muted fw-bold">Add a description of your services (the more detailed the better)</em></label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-comments text-muted"></i></span>
								</div>
								<textarea  class="form-control rows-4 bg-white border-left-0 border-md" name="vendor_brief"></textarea>
							</div>
							<div class="form-row">
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-facebook text-muted"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="vendor_facebook" placeholder="Facebook">
								</div>
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-twitter text-muted"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="vendor_twitter" placeholder="Twitter">
								</div>
							</div>
							<div class="form-row">
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-linkedin text-muted"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="vendor_linkedin" placeholder="Linkedin">
								</div>
								<div class="input-group form-group col-lg-6 col-md-6">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fab fa-whatsapp text-muted"></i></span>
									</div>
									<input type="url" class="form-control bg-white border-left-0 border-md" name="vendor_whatsapp" placeholder="Whatsapp">
								</div>
							</div>
							<label class="text-muted fw-bold">Add cover image &nbsp;<em>(add any image that will attract users to your profile)</em></label>
							<div class="input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images text-muted"></i></span>
								</div>
								<input type="file" class="form-control bg-white border-left-0 border-md" name="image" Required>
							</div>
							<label class="text-muted fw-bold">Add Map</label>
								<p class="fw-bold" style="font-family:fangsong;"><em>Get coordinates from&nbsp;<a href="https://www.google.com/maps/">here</a></em></p>
							<div class="form-row">
							
									<div class="form-group col-lg-6 col-md-6  input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="latitude" placeholder="Enter Latitide">
							</div>
								<div class="form-group  col-lg-6 col-md-6  input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="longitude" placeholder="Enter Longitude">
							</div>
						</div>



						</div>
						<center>
							<div class="mt-2 col-lg-6 col-md-6"><button type="submit" name="add" class="btn btn-primary btn-block">Submit</button></div>
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
