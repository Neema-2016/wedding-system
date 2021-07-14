<?php
session_start();
include 'include/config.php';
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
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Additional Links-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!-- Favicons -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">


	<!-- =====================================================
  * Template Name: Day - v4.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<style>
		body {
			background: url('assets/img/abstract.jpg');
			background-size: cover;
		}

		/* Search Bar */

		.hero--video {
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;

		}

		.hero video {
			position: absolute;
			z-index: 1;
			width: 100%;
			margin: 0 auto;
			right: 0;
			left: 0;
			-o-object-fit: cover;
			object-fit: cover;
		}

		.hero .search {
			position: relative;
			vertical-align: middle;
			z-index: 2;
		}

		.hero .search input {
			width: 100%;
			height: 76px;
			line-height: 76px;
			border: 1px solid #111;
			background: rgba(0, 0, 0, 0.8);
			font-size: 27px;
			padding: 5px 5px 5px 47px;
			color: #fff;
			position: static;
			border-radius: 0;
		}

		.hero .search button {
			position: absolute;
			top: 6px;
			right: 6px;
			color: #fff;
			background: #88687b;
			font-size: 27px;
			height: 65px;
			line-height: 65px;
			width: 68px;
			padding: 0;
			border: 0;
		}

		/* Navigation Bar */

		.menu-hamburger {
			bottom: calc(50% - 10px);
			right: 0;
			background-color: transparent;
			border: none;
			cursor: pointer;
		}

		.menu-hamburger span {
			width: 30px;
			height: 4px;
			display: block;
			background: #fafafa;
			margin-bottom: 4px;
		}

		.menu-hamburger span:last-of-type {
			margin-bottom: 0;
		}


		@media (max-width: 575.98px) {

			.menu-hamburger {
				bottom: calc(50% - 12px);
			}
		}

		@media (max-width: 767.98px) {


			.hero .search input {
				background: rgba(0, 0, 0, 0.92);
				font-size: 20px;
				padding: 5px 5px 5px 10px;
				height: 60px;
			}

			.hero .search button {
				height: 48px;
				width: 48px;
				line-height: 48px;
			}
		}

		@media (max-width: 991.98px) {


			.row {
				width: 100%;
			}
		}

		#myUL {
			/* Remove default list styling */
			list-style-type: none;
			padding: 0;
			margin: 0;
			display: none;

		}

		#myUL li a {
			border: 1px solid #ddd;
			/* Add a border to all links */
			margin-top: -1px;
			/* Prevent double borders */
			background-color: #f6f6f6;
			/* Grey background color */
			padding: 12px;
			/* Add some padding */
			text-decoration: none;
			/* Remove default text underline */
			font-size: 18px;
			/* Increase the font-size */
			color: black;
			/* Add a black text color */
			display: block;
			/* Make it into a block element to fill the whole list */
		}

		#myUL li a:hover:not(.header) {
			background-color: #eee;
			/* Add a hover effect to all links, except for headers */
		}

	</style>
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

			<h1 class="logo"><a href="index.html">MERIME EVENTS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul class="mr-auto">
					<li><a class="nav-link" href="index.php">Home</a></li>
					<li class="dropdown"><a href="#"><span>Vendors</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="vendor.php?id=DJs">DJs</a></li>
							<li><a href="vendor.php?id=Bands">Bands</a>

							<li><a href="vendor.php?id=Planners">Wedding Planners</a></li>
							<li><a href="vendor.php?id=Florists">Florists</a></li>
							<li class="dropdown"><a href="#"><span>
										Salons</span><i class="bi bi-chevron-left"></i></a>
								<ul>
									<li><a href="vendor.php?id=NailSalons">Nail Salons</a></li>
									<li><a href="vendor.php?id=HairSalons">Hair Salons</a></li>
									<li><a href="vendor.php?id=Barbershops">Barber Shops</a></li>
								</ul>
							</li>
							<li><a href="vendor.php?id=Jewellers">Jewellers</a></li>
							<li><a href="vendor.php?id=Cake">Cake</a></li>
							<li><a href="vendor.php?id=Food">Food</a></li>
							<li><a href='vendor.php?id=Videographers'>Videographers</a></li>
							<li><a href="vendor.php?id=Sewers">Sewers</a></li>
							<!--li><a href='vendor.php?id=<?php echo $category; ?>'>Videographers</a></li-->
							<li class="dropdown"><a href="#"><span>Venues</span><i class="bi bi-chevron-left"></i></a>
								<ul>
									<li><a href="vendor.php?id=Gardens">Botanical Gardens</a></li>
									<li><a href="vendor.php?id=Churches">Churches</a></li>
									<li><a href="vendor.php?id=Mosques">Mosques</a></li>
									<li><a href="vendor.php?id=Temples">Temples</a></li>
									<li><a href="vendor.php?id=Halls">Social Halls</a></li>
								</ul>
							</li>




							<li><a href="searchvendor.php">Search Vendors</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="registry.php">Registry</a></li>
					<li><a class="nav-link scrollto" href="about.php">About</a></li>
					<li><a class="nav-link scrollto " href="">Portfolio</a></li>
					<li><a class="nav-link scrollto" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li><a class="nav-link" href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link" href="login.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->
	<main>
		<section class="hero hero--video">
			<div class="container">
				<div class="col-12">
					<div class="search">


						<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter Search item eg type of vendor,name of vendor,location,etc...">
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<div class="row mt-3" id='myUl'>

				<?php
									$sql=mysqli_query($conn,"SELECT * FROM vendors");
								if($sql){
									
while($row =mysqli_fetch_assoc($sql)){
		$vendorid=$row['vendor_id'];
		$vendorname=$row['vendor_name'];
		$location=$row['vendor_location'];
	    $image=$row['vendor_images'];
	    $brief=$row['vendor_description'];
	$category=$row['vendor_category'];
	
?>


				<div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-In-left" id="myTable" data-aos-delay="4000">
					<a href="single-vendor.php?id=<?php echo $vendorid; ?>">
						<div class="card fancy_card mb-3" style="height: 25rem">
							<img class="card-img-top" src="images/vendor_images/<?php echo $image;?>" alt="Card image cap" style="height: 10rem!important;">
							<div class="card-body">
								<h5 class="text-center text-primary" style="text-transform:uppercase;font-size: 15px;font-family:fangsong;"><?php echo $vendorname; ?></h5>
								<p class="card-text text-center text-primary"><i class="fas fa-map" style="color:grey!important;"></i>&nbsp;<?php echo $location;?></p>
								<p class="card-text text-center text-primary"><?php echo $category; ?></p>

							</div>
							<div class="card-footer">
								<div class="container star d-flex align-items-start">
									<span class="fa fa-star checked " style="color:orange;"></span>
									<span class="fa fa-star checked " style="color:orange;"></span>
									<span class="fa fa-star checked " style="color:orange;"></span>
									<span class="fa fa-star checked " style="color:orange;"></span>
									<span class="fa fa-star checked " style="color:orange;"></span>
								</div>


							</div>

						</div>
					</a>
				</div>
				<?php }}?>
			</div>
		</div>




		<!--button type="submit"><i class="fa fa-search"></i></button-->


	</main>

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

	<!-- Bootstrap core JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable ").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});

	</script>
	<script>
		var UL = document.getElementById("myUL");
		// hilde the list by default
		UL.style.display = "none";

		var searchBox = document.getElementById("myInput");

		// show the list when the input receive focus
		searchBox.addEventListener("focus", function() {
			// UL.style.display = "block";
		});

	</script>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

	<!--Data Tables-->
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


</body>

</html>
