<?php
session_start();
include 'include/config.php';
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_category='$id'");
if($sql){
$num=mysqli_num_rows($sql);
if($num == 0){
	 echo '<script type="text/javascript">'; 
    echo 'alert("There are no '."$id".' registered yet.");'; 
	   echo 'window.location = "index.php";';
    echo '</script>';
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
	<link href="assets/css/vendor-box.css" rel="stylesheet">
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
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="index.html">MERIME EVENTS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link" href="index.php">Home</a></li>
					<li class="dropdown"><a href="#"><span>Vendors</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="#">DJs</a></li>
							<li><a href="#">Bands</a>

							<li><a href="#">Wedding Planners</a></li>
							<li><a href="#">Florists</a></li>
							<li class="dropdown"><a href="#"><span>Salons</span><i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Nail Salons</a></li>
									<li><a href="#">Hair Salons</a></li>
									<li><a href="#">Barber Shops</a></li>
								</ul>
							</li>
							<li><a href="#">Jewellers</a></li>
							<li><a href="#">Cake</a></li>
							<li><a href='#'>Videographers</a></li>
							<li><a href="#">Dresses and Suits</a></li>
							<li><a href='#'>Videographers</a></li>
							<li class="dropdown"><a href="#"><span>Venues</span><i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Botanical Gardens</a></li>
									<li><a href="#">Churches,Mosqus etc...</a></li>
									<li><a href="#">Social Halls</a></li>
								</ul>
							</li>




							<li><a href="#">More Vendors</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="registry.php">Registry</a></li>
					<li><a class="nav-link" href="about.php">About</a></li>
					<li><a class="nav-link" href="">Portfolio</a></li>
					<li><a class="nav-link active" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li class="nav-link"><a href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link" href="login.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->



	<!-- ======= Hero Section ======= -->


	<main id="main">
		<!-- ======= Services Section ======= -->
		<section>
			<div class="container">

				<div class="section-title">
					<span><?php echo $id; ?></span>
					<h2><?php echo $id; ?></h2>
					<p>Listed below is a group of trusted&nbsp;<?php echo $id; ?>&nbsp;in the country.</p>
				</div>

				<div class="row">
					<?php
while($row =mysqli_fetch_assoc($sql)){
		$vendorid=$row['vendor_id'];
		$vendorname=$row['vendor_name'];
		$location=$row['vendor_location'];
	$image='';
	$brief='';
	
?>
					<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
						<div class="card property-box-2">
							<!-- property img -->
							<div class="property-thumbnail">
								<a href="properties-details.html" class="property-img">
									<img src="assets/img/vendor_img/<?php echo $image; ?>" alt="property-3" class="img-fluid">
								</a>
								<div class="property-overlay">
									<a href="properties-details.html" class="overlay-link">
										<i class="fa fa-link"></i>
									</a>
									<a class="overlay-link property-video" title="Test Title">
										<i class="fa fa-video-camera"></i>
									</a>
									<div class="property-magnify-gallery">
										<a href="assets/img/property-3.jpg" class="overlay-link">
											<i class="fa fa-expand"></i>
										</a>
										<a href="assets/img/property-7.jpg" class="hidden"></a>
										<a href="assets/img/property-6.jpg" class="hidden"></a>
									</div>
								</div>
							</div>
							<!-- detail -->
							<div class="detail">
								<h5 class="title"><a href="properties-details.html"><?php echo $vendorname; ?></a></h5>
								<h4 class="price">
									<?php echo $location; ?>
								</h4>
								<p><?php echo $brief; ?></p>

							</div>
							<div class="card-footer">
								<center><a class="btn btn-sm btn-primary" href="single-vendor.php?id=<?php echo $vendorid; ?>">View</a></center>
							</div>
						</div>
					</div>
					<?php }}?>
				</div>
			</div>
		</section>


	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="footer-info">
							<h3>Day</h3>
							<p>
								A108 Adam Street <br>
								NY 535022, USA<br><br>
								<strong>Phone:</strong> +1 5589 55488 55<br>
								<strong>Email:</strong> info@example.com<br>
							</p>
							<div class="social-links mt-3">
								<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
								<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
								<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
								<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
								<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
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

</body>

</html>
