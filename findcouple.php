<?php

include 'include/config.php';

$query=mysqli_query($conn,"SELECT * FROM couples");
if($query){


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
	<!--Font Awesome Link-->
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

	<!--Additional Links(Data tables)-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


	<!-- Template Main CSS File -->
	<link href="assets/css/vendor-box.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

<style>
	.hero--video {
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;

		}

		.hero .search {
			position: relative;
			vertical-align: middle;
			z-index: 2;
		}

		.hero .search input {
			width: 70%;
			height: 76px;
			line-height: 76px;
			border: 1px solid #111;
			background: rgba(0, 0, 0, 0.8);
			/*font-size: 27px;*/
			padding: 5px 5px 5px 47px;
			color: #fff !important;
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
		.card{
			border-radius: 30px;
		}
		.card:hover{
		transform: scale(1.03);
		-webkit-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
		box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
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
					<li><a class="nav-link scrolltoactive" href="#hero">Home</a></li>
					<li class="dropdown"><a href="#"><span>Vendors</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="vendor.php?id=DJs">DJs</a></li>
							<li><a href="vendor.php?id=Bands">Bands</a></li>
							<li><a href="vendor.php?id=Orchestra">Orchestra</a></li>

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
							<li><a href="vendor.php?id=Bakers">Bakers</a></li>
							<li><a href="vendor.php?id=Chefs">Chefs</a></li>
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




							<li><a href="searchvendor.php">Search for Vendors</a></li>
						</ul>
					</li>
					
					<!--<li><a class="nav-link scrollto" href="about.php">About</a></li>
					<li><a class="nav-link scrollto " href="">Portfolio</a></li>-->
					<li><a class="nav-link scrollto" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li><a class="nav-link" href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link" href="login.php">Login</a></li>
					<li><a class="nav-link" href="findcouple.php">Find Couple&nbsp;<i class="fas fa-search"></i></a> </li>
				</ul>

			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->
		<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex hero align-items-center hero--video" style="background: url('assets/img/glasses.jpg'); width: 100%!important; height: 50vh; min-height:100%;" >
		<div class="container" data-aos="fade-up" data-aos-delay="500">
			<h1 class="text-center">Find Couple</h1>
	
			<div class="col-lg-10 col-md-10 mx-auto">
				<center><div class="search" >


					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Names of spouses,location etc...">
				</div></center>
			</div>
		</div>
	</section>
	<main>
		<section>
		<div class="container">
				<div class="row">
					<?php
while($row = mysqli_fetch_assoc($query)){
		$spouse1=$row['spouse1_name'];
		$spouse2=$row['spouse2_name'];
		$image1=$row['spouse1_image'];
		$image2=$row['spouse2_image'];
		$location=$row['location'];
		$date=$row['event_date'];
		$name=$row['event_name'];
		$coupleid=$row['couple_id'];

	
?>
<a href="couple.php?id=<?php echo $coupleid; ?>">
	<div class="card col-lg-8 col-md-8 mx-auto mb-2 mt-2"  id="myTable" style="background:url('assets/img/floral.jpg');background-size:cover;" >
		<div class="row mb-2 mt-2 mx-auto align-items-center">
			<h4 style="font-family:fangsong;" class="text-center text-light fw-bold mt-2 mb-2"><em><?php echo $spouse1; ?>&nbsp;&&nbsp;<?php echo $spouse2; ?></em></h4>
			<div class="col-lg-4 col-md-4 mt-2 mb-2">
				<img src="images/couple_images/<?php echo $image1; ?>" class="mb-3" style="height: 13rem; width:100%;">
			</div>
			<div class="col-lg-4 col-md-6 mt-2 mb-2">
				<img src="images/couple_images/<?php echo $image2; ?>" class="mb-3" style="height: 13rem; width:100%;">
			</div>
			<div class="col-lg-4 col-md-4 mt-2 mb-2">
				<ul style="list-style:none;">
					<li class="text-light fw-bold"><i class="fas fa-map-marker text-white" style="color:black!important;"></i>Location:&nbsp;<?php echo $location; ?></li>
					<li class="text-light fw-bold"><i class="fas fa-clipboard text-white" style="color:black!important;"></i>Event:&nbsp;<?php echo $name; ?>
					<li class="text-light fw-bold"><i class="fas fa-calendar text-white" style="color:black!important;"></i>Date:&nbsp;<?php echo $date; ?> </li>
					
				</ul>
			</div>
		</div>
	</div>
</a>
</div>
<?php }} ?>
</div>
</section>

	</main>

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="footer-info">
							<h3>MERIME EVENTS</h3>
							<p>
								2nd Floor Kilifi Plaza,
								P.O. Box 726 - 80108,<br>
							<br>Kilifi Town, Kilifi County
								Kenya.<br>
								<strong>Phone:</strong> <a href="tel: +254 757 414 345"> +254 757 414 345</a><br>
								<strong>Email:</strong> <a href="mailto:contactus@merimesolutions.com">contactus@merimesolutions.com</a><br>
							</p>
							<div class="social-links mt-3">
								
								<a href="https://web.facebook.com/MerimeSolutions/?__tn__=%3C" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
								<a href="https://instagram.com/merime_solutions?igshid=xwh3mkw8k2ds" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
								<a href="https://api.whatsapp.com/send?phone=+254757414345" target="_blank" class="google-plus"><i class="fab fa-whatsapp"></i></a>
								<a href="https://www.linkedin.com/company/merimeke" class="linkedin"><i class="bx bxl-linkedin"></i></a>
							</div>
			<!-- 				<h4>Contact Us</h4>
							<p>
							2nd Floor Kilifi Plaza,
								P.O. Box 726 - 80108,
							<br>
									Kilifi Town, Kilifi County
								Kenya.<br><br>
								<strong>Phone:</strong>&nbsp;<a href="tel: +254 757 414 345"> +254 757 414 345</a><br>
								<strong>Email:</strong>&nbsp;<a href="mailto:help@linknamali.co.ke">help@linknamali.co.ke</a><br>
							</p>
							<div class="social-links mt-3">
								<a href="https://web.facebook.com/MerimeSolutions/?__tn__=%3C" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
									<a href="https://instagram.com/merime_solutions?igshid=xwh3mkw8k2ds" target="_blank"><i class="fab fa-instagram"></i></a>
									
									<a href="https://api.whatsapp.com/send?phone=+254757414345" target="_blank">
									<i class="fab fa-whatsapp"></i></a>
									<a href="https://www.linkedin.com/company/merimeke" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
							</div> -->
						</div>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="signup.php">Signup</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="services.php">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Our Users</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="searchvendor.php">Find Vendors</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="searchcouple.php">Find Couples</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="searchindi.php">Find Individuals</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Our Newsletter</h4>
						<p>Subscribe to our newsletter</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>

					</div>

				</div>
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
function fruitSearch() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myTable");
    li = ul.getElementsByTagName('li');

    if(input.value.length == 0){
        ul.style.display = "none";
        return;
    }else{
        ul.style.display = "block";
    }


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

</body>

</html>
