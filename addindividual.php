<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM individuals WHERE user='$user'");
if($query){
    $number=mysqli_num_rows($query);
    if($number !== 0){
      echo '<script> alert("Script already added");window.location="editindividualprof.php";</script>';
    }
}

if(isset($_POST['add'])){
	$name=mysqli_real_escape_string($conn, $_POST['individual_name']);
	$email=mysqli_real_escape_string($conn, $_POST['individual_email']);
	$phone=mysqli_real_escape_string($conn, $_POST['individual_phone']);
	$phone1=mysqli_real_escape_string($conn, $_POST['individual_phone1']);
	$address=mysqli_real_escape_string($conn, $_POST['individual_address']);
	$location=mysqli_real_escape_string($conn, $_POST['individual_location']);
	$e_name=mysqli_real_escape_string($conn, $_POST['event_name']);
	$e_date=mysqli_real_escape_string($conn, $_POST['event_date']);
	$e_venue=mysqli_real_escape_string($conn, $_POST['event_venue']);
	
	$individual_map=$_POST['latitude'];
	$individual_map .= ','.$_POST['longitude'];

	$image= $_FILES["image"]["name"];
	

	$queryy = mysqli_query($conn, "INSERT INTO 
	individuals(individual_name, individual_email, individual_phone, individual_phone1,
	individual_address,individual_image,individual_location, event_name, event_date,event_venue,individual_map, user) VALUES('$name','$email','$phone','$phone1','$address','$image','$location','$e_name','$e_date','$e_venue','$individual_map', '$user')");


	if($queryy){
		// $r3=move_uploaded_file($_FILES['image']['tmp_name'],"images/individual_images/$image/");
		$r3=move_uploaded_file($_FILES["image"]["tmp_name"],"images/individual_images/$image");
	}
	echo $image;
	if($queryy && $r3){
		echo '<script type="text/javascript">';
		echo 'alert("Account Successfully Added");';
		echo '</script>';
	}

	else{
		$error=mysqli_error($conn);
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

			<h1 class="logo"><a href="user_account2.php">MERIME EVENTS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link" href="user_account2.php">Home</a></li>
					<li><a class="nav-link" href="addindividual.php">Add Individual Profile</a></li>
					<li><a class="nav-link" href="editindividualprof.php">Edit Profile</a></li>
					<li><a class="nav-link" href="addregindividual.php">Gift Registry</a></li>
					<li><a class="nav-link" href="myvendors.php">My Vendors</a></li>
					<li><a class="nav-link" href="logout.php">Log Out</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>

    <main>
        <section>
            <div class="section-title">
                <span>Individual</span>
                <h2>Add Individual Profile</h2>
            </div>
            <div class="container cena" style="background: #ccc;">
                <form action="addindividual.php" method="POST" class="mt-5 mb-5" enctype="multipart/form-data">
                    <div class="row p-5">
                        <div class="col-lg-6 col-md-6 mt-5 mb-5">
                            <div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_name" placeholder="Enter Individual Name" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-mail-bulk text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_email" placeholder="Enter Individual Email" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_phone" placeholder="Enter phone number" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_phone1" placeholder="Enter a backup phone number" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-address-card text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_address" placeholder="Enter individual address" required>
							</div>

							<label for="" class="text-muted fw-bold">Add photo &nbsp;<em>(helps your guests find you easily amongst other event holder individuals.)</em></label>
							<div class="input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images text-muted"></i></span>
								</div>
								<input type="file" class="form-control bg-white border-left-0 border-md" name="image" Required>
							</div>
                        </div>
						<div class="mx-auto col-lg-6 col-md-6 mt-5 mb-5">
							<div class="form-group form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-location-arrow "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_location" placeholder="Enter Central Location (Where planning is taking place)">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-clipboard "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="event_name" placeholder="Enter type of event happening (Birthday, Graduation, Baby shower, Thanksgiving...)">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-calendar"></i></span>
									</div>
									<input type="date" class="form-control bg-white border-left-0 border-md" name="event_date" placeholder="Enter date of event">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-thumbtack "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="event_venue" placeholder="Enter Venue">
								</div>

								<p class="fw-bold text-center mt-2" style="font-family:fangsong;"><em>Get venue map coordinates from&nbsp;<a href="https://www.google.com/maps/">here</a></em></p>
								<div class="form-group">
									<div class="form-row">
										<div class="form-group col-lg-6 col-md-6 col-sm-12 input-group mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map"></i></span>
											</div>
											<input class="form-control bg-white border-left-0 border-md" name="latitude" placeholder="Enter Latitude">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12  mb-2">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map"></i></span>
												</div>
												<input class="form-control bg-white border-left-0 border-md" name="longitude" placeholder="Enter Longitude">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<center>
							<div class="mt-2 col-lg-8 col-md-12 col-sm-12 mb-3 d-flex align-item-center">
								<button type="submit" name="add" class="btn btn-primary btn-block">Submit</button>
							</div>
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