<?php
session_start();
include'include/config.php';
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
	<!--Font awesome link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
					<li><a class="nav-link" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li class="nav-link"><a href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link" href="login.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->


	<!-- ======= Pricing Section ======= -->
	<main id="main">
		<section id="pricing" class="pricing">
			<div class="container">

				<div class="section-title">
					<span> All Vendors</span>
					<h2>All Vendors</h2>
					<p>Here is a list of all vendors registered with Merime Events.</p>
				</div>
				<div class='card shadow mb-4'>
					<div class="card-body">
						<form method="post">
							<div class="table-responsive">
								<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th></th>
											<th>Category</th>
											<th>Vendor Name</th>
											<th>Location</th>
											<th>Service Description</th>
											<th>View</th>



										</tr>
									</thead>
									<tbody>
										<?php
                                  
                                    
                                    $i=1;
                                        
                                            $squery = mysqli_query($conn, "select * from vendors");
										if($squery){
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                              $id=$row['vendor_id'];
                                                ?>

										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['vendor_category'];?></td>
											<td><?php echo $row['vendor_name'];?></td>
											<td><?php echo $row['vendor_location'];?></td>
											<td><?php echo $row['vendor_description'];?></td>
											<td>
												<div class="col-md-4 col-sm-4 col-lg-4">

													<!-- Button trigger modal -->

													<a class="btn btn-primary edit_listing" href="single-vendor.php?id=<?php echo $id;?>">
														<i class="fas fa-eye"></i>
													</a>

												</div>

											</td>

										</tr>

										<?php }} ?>

									</tbody>
								</table>

							</div>
						</form>
					</div>
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
								<br><br>
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




	<script>
		$(document).ready(function() {
			var table = $('#datatable').DataTable({
				responsive: true
			});

			new $.fn.dataTable.FixedHeader(table);
		});

		$('.edit_listing').click(function(e) {
			e.preventDefault();
			var del = $(this).attr('id');
			alert('You are about to  Edit' + del);
			$.ajax({
				type: "POST",
				url: "edit.php",
				data: {
					clear: del
				},
				success: function(data) {
					$('.result').html(data);

				}
			});
		});

		//-----------------------------------------delete part------------------------------------------

		$('.delete_listing').click(function(e) {
			e.preventDefault();
			var del = $(this).attr('id');
			alert('You are about to delete ' + del);
			$.ajax({
				type: "POST",
				url: "delete.php",
				data: {
					clear: del
				},
				success: function(data) {
					$('.result').html(data);
					window.location.reload()
					window.scrollTo({
						top: 0,
						left: 100,
						behavior: 'smooth'
					});


				}
			});
		});

		//-----------------------------------------update part------------------------------------------

		function showUser(int) {
			alert(int)
			if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "getuser.php?q=" + str, true);
				xmlhttp.send();
			}
		}

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
