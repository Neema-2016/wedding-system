<?php
session_start();
include 'include/config.php';
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_category LIKE '%$id%'");
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

	<!-- =======================================================
  * Template Name: Day - v4.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<style>
		.fancy_card {}

		.fancy_card:hover {
			-webkit-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);
			box-shadow: -1px 9px 40px 12px rgba(0, 0, 0, 0.75);



		}

		.fas {
			color: #FFD700 !important;
		}

		/*
		.hero:hover {

		transform: scaleX(-1);
		}
*/
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
					<li class="dropdown"><a href="#" active><span>Vendors</span> <i class="bi bi-chevron-down"></i></a>
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




							<li><a href="vendors.php">More Vendors</a></li>
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
	</header>
	<!-- End Header

	<!-- ======= Hero Section ======= -->
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex hero align-items-center" style="background: url('assets/img/glasses.jpg'); width: 100%!important; height: 50vh; min-height:100%;" hero--video>
		<div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
			<h1 class="text-center"><?php echo $id; ?></h1>
			<h2 class="text-center"><em>Listed below is a group of &nbsp;<?php echo $id; ?>&nbsp;In the country.</em></h2>
			<div class="col-12">
				<div class="search">


					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Location or <?php echo $id; ?>' name...">
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main>
		<!-- ======= Services Section ======= -->
		<section style="background: url('assets/img/glasses.jpg')linear-gradient(180deg, #181818, #181818, rgba(81, 81, 81, .7)); width: 100%!important; min-height: 100vh;">
			<div class="container-fluid">
				<div class="row">
					<?php
while($row =mysqli_fetch_assoc($sql)){
		$vendorid=$row['vendor_id'];
		$vendorname=$row['vendor_name'];
		$location=$row['vendor_location'];
	    $image=$row['vendor_images'];
	    $brief=$row['vendor_description']
	
?>
					<div class="col-lg-3 col-md-6 col-sm-12" id="myTable" data-aos="fade-In-left" data-aos-delay="4000">
						<a href="single-vendor.php?id=<?php echo $vendorid; ?>">
							<div class="card fancy_card mb-3" style="height: 25rem">
								<img class="card-img-top" src="images/vendor_images/<?php echo $image;?>" alt="Card image cap">
								<div class="card-body">
									<h5 class="text-center text-primary" style="text-transform:uppercase;font-size: 15px;font-family:fangsong;"><?php echo $vendorname; ?></h5>
									<p class="card-text text-center text-primary"><i class="fas fa-map" style="color:grey!important;"></i>&nbsp;<?php echo $location;?></p>

								</div>
								<div class="card-footer">
									<?php
									$sql=mysqli_query($conn,"SELECT * FROM reviews WHERE vendor_id='$vendorid'");
if($sql){
    while($data =mysqli_fetch_assoc($sql)){
         $rate_db[] = $data;
         $sum_rates=$data['rate'];
            }
            if(count($rate_db)){
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates/$rate_times;
                $rate_bg = (($rate_value)/5)*100;
            }else{
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            }

    }

?>
									<div class="container star d-flex align-items-start">
										<?php if($rate_bg >=80){

											echo'
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>';
									}

										if($rate_bg >=60){
												echo'
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>';

										}
										if($rate_bg >=40){
											echo'
											<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>';
										}
										if($rate_bg >= 20){
											echo'
											<span class="fa fa-star checked " style="color:orange;"></span>
										<span class="fa fa-star checked " style="color:orange;"></span>
										';
										}
										if($rate_bg >=10){
											echo'<span class="fa fa-star checked " style="color:orange;"></span>';
										}
										?>


									</div>


								</div>

							</div>
						</a>
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

</body>

</html>
