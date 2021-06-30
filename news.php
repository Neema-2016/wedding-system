<?php
session_start(); 
include'includes/config.php';
 $search =mysqli_real_escape_string($conn, $_POST['search']); 
 $search2 =mysqli_real_escape_string($conn, $_POST['search2']); 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="img/black.png" rel="icon">

	<title>LinknaMali</title>
		<link href="css/style.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!-- Favicons -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->

	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->


	<style type="text/css">
		.starburst {
			font: 2em/1.4 'Lobster', georgia, serif;
			background: yellow;
			width: 2.5em;
			height: 2.5em;
			text-align: center;
			color: #111;
		}

		.starburst,
		.starburst span {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.starburst span {
			width: 100%;
			height: 100%;
			background: inherit;
			transform: rotate(45deg);
		}

		.starburst:before,
		.starburst:after,
		.starburst span:before,
		.starburst span:after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: inherit;
			z-index: -1;
			transform: rotate(30deg);
		}

		.starburst:after {
			transform: rotate(-30deg);
		}

		.starburst span:after {
			transform: rotate(30deg);
		}

		.starburst span:before {
			transform: rotate(-30deg);
		}

		.offer {
			position: absolute;
			top: 20%;
			margin-top: -1.25em;
			margin-left: -1.25em;
		}


		#offer {
			left: 75%;
			transform: rotate(-45deg);
		}

	</style>
	<style type="text/css">
		.starburst2 {
			font: 2em/1.4 'Lobster', georgia, serif;
			background: RED;
			width: 2.5em;
			height: 2.5em;
			text-align: center;
			color: #FFF;
		}

		.starburst2,
		.starburst2 span {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.starburst2 span {
			width: 100%;
			height: 100%;
			background: inherit;
			transform: rotate(45deg);
		}

		.starburst2:before,
		.starburst2:after,
		.starburst2 span:before,
		.starburst2 span:after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: inherit;
			z-index: -1;
			transform: rotate(30deg);
		}

		.starburst2:after {
			transform: rotate(-30deg);
		}

		.starburst2 span:after {
			transform: rotate(30deg);
		}

		.starburst2 span:before {
			transform: rotate(-30deg);
		}

		.sold {
			position: absolute;
			top: 20%;
			margin-top: -1.25em;
			margin-left: -1.25em;
		}


		#sold {
			left: 75%;
			transform: rotate(-45deg);
		}
		.zoom {

			transition: transform .2s;

		}


		.zoom:hover {
			transform: scale(1.05);
			/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
		}
</style>
	<style>
	    /*-----------------------------Footer--------------------------------------------*/
  
#footer {
	background: #0c0c0c;
	padding: 0 0 30px 0;
	color: #fff;
	font-size: 14px;
}

#footer .footer-top {
	padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
	margin-bottom: 15px;
	background: #191919;
	color: #fff;
	border-top: 4px solid #cc1616;
	text-align: center;
	padding: 30px 20px;
}

#footer .footer-top .footer-info h3 {
	font-size: 36px;
	margin: 0 0 20px 0;
	padding: 2px 0 2px 0;
	line-height: 1;
	font-weight: 700;
}

#footer .footer-top .footer-info p {
	font-size: 14px;
	line-height: 24px;
	margin-bottom: 0;
	font-family: "Raleway", sans-serif;
}

#footer .footer-top .social-links a {
	font-size: 18px;
	display: inline-block;
	background: #262626;
	color: #fff;
	line-height: 1;
	padding: 8px 0;
	margin-right: 4px;
	border-radius: 50%;
	text-align: center;
	width: 36px;
	height: 36px;
	transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
	background: #cc1616;
	color: #fff;
	text-decoration: none;
}

#footer .footer-top h4 {
	font-size: 16px;
	font-weight: 600;
	color: #fff;
	position: relative;
	padding-bottom: 12px;
}

#footer .footer-top .footer-links {
	margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

#footer .footer-top .footer-links ul i {
	padding-right: 2px;
	color: #ed5b5b;
	font-size: 18px;
	line-height: 1;
}

#footer .footer-top .footer-links ul li {
	padding: 10px 0;
	display: flex;
	align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
	padding-top: 0;
}

#footer .footer-top .footer-links ul a {
	color: #fff;
	transition: 0.3s;
	display: inline-block;
	line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
	color: #eb4444;
}

#footer .footer-top .footer-newsletter form {
	margin-top: 30px;
	background: #fff;
	padding: 6px 10px;
	position: relative;
	border-radius: 4;
}

#footer .footer-top .footer-newsletter form input[type="email"] {
	border: 0;
	padding: 4px;
	width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type="submit"] {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	border: 0;
	background: none;
	font-size: 16px;
	padding: 0 20px;
	background: #cc1616;
	color: #fff;
	transition: 0.3s;
	border-radius: 4;
}

#footer .footer-top .footer-newsletter form input[type="submit"]:hover {
	background: #e82d2d;
}

#footer .copyright {
	border-top: 1px solid #262626;
	text-align: center;
	padding-top: 30px;
}

#footer .credits {
	padding-top: 5px;
	text-align: center;
	font-size: 13px;
	color: #fff;
}

#footer .credits a {
	color: #e82d2d;
}

@media (max-width: 575px) {
	#footer .footer-top .footer-info {
		margin: -20px 0 30px 0;
	}
}

  
  
  /*-------------------------------End of Footer-------------------------------*/
  
	</style>
		<style>
		.container2 i {
			margin-left: -30px;
			cursor: pointer;
		}
			.jumbotron{
 	       color: white;
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/search.jpg");
			width: 100%!important;
			max-height: 50vh!important;
			
			background-position: center;

			background-repeat: no-repeat;
		
			background-size: cover;
		    
		}
      /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    
  .jumbtron{
      height: 50vh;
  }
}  

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    
 .jumbtron{
      height: 50vh;
  }
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
.jumbotron{
    height: 50vh;
}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
 .jumbtron{
      height: 50vh;
  }
}
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    
 .jumbtron{
      height: 50vh;
  }
  }


	</style>

</head>

<body style="background-color:#E0E1E4;">
	<main>


		<div id="content-wrapper" class="d-flex flex-column" >

			<!-- Main Content -->
			<div id="content">


	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	    	<a class="navbar-brand" href="index.php">LinknaMali</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		
<li class="nav-item">
    <a class="nav-link" href="index.php" style="color: black;">Home</a>
</li>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" href="#" style="color: black">Signup</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

						<li><a class="dropdown-item" href="landlordpack.php"><font size="2px">Property Owner</font></a></li>


						<li><a class="dropdown-item" href="agentpack.php"><font size="2px">Agency</font></a></li>
					</ul>
				</li>




				<li class="nav-item dropdown no-arrow">
					<a class="nav-link" href="userlogin.php" style="color: black">Log In</a>

				</li>
				<li class="nav-item">
					<a class="nav-link" href="price.php" style="color:black">Pricing Plans</a>
				</li>

			</ul>

		</div>
	</nav>



<div class="jumbotron jumbotron-fluid">
    
     
	    <h1 class="text-center mt-5 title-single" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-duration="3000" style="font-family: fangsong; color: black;"><strong><?php echo $search2;?>&nbsp;&nbsp;<?php echo $search; ?></strong></h1>
	  
	    </div>
	 

	 
<div><?php echo $search; ?></div>
<div><?php echo $search2; ?></div>
<?php
if (isset($_POST['searchbtn'])){
     
   
    
$sql = "SELECT * FROM listings WHERE  (list_type='$search' AND list_location LIKE '%$search2%') OR (list_type='$search' AND list_district LIKE '%$search2%' )";
     $result = mysqli_query($conn, $sql);
    if(!$result){
        $err=mysqli_error($conn);
        echo'<script>alert("An error occured during transmission: '."$err".')</script>';
    }
    
?>

				<!-- ======= Intro Single ======= -->
				<!--section class="intro-single mt-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 col-lg-8">
								<div class="title-single-box">
									<span class="color-text-a">

									</span>
									<h1 class="title-single"  style="font-family: fangsong!important; text-transform: uppercase!important; "><?php if(!empty($nameot)){echo $nameot;}?>&nbsp;<?php  echo  $nameit; ?></h1>

	<h4   style="font-family: fangsong!important; text-transform: uppercase!important; "><?php if(!empty($search)){ echo $search;} ?></h4>

								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
									<ol class="breadcrumb">

										<li>
											<a class="btn btn-sm btn-outline-primary" href="index.php">Home</a>
										</li>&nbsp;&nbsp;
										<li><a class="btn btn-sm btn-primary " href="everylist.php">All Listings</a></li>
									</ol>
								</nav>
							</div>

						</div>
					</div>

				</section><!-- End Intro Single-->

				<!-- ======= Property Grid ======= -->
				<section class="property-grid grid">

					<div class="container-fluid">
						<div class="row">

							<?php
if($result){
 $queryResult = mysqli_num_rows($result);
    if($queryResult ==0){

        
        echo("<script type='text/javascript'>
    window.alert('No Matches For Your Search');
    window.location.href='everylist.php';
    </script>");
        
               }

    elseif($queryResult > 0){
    while($row = mysqli_fetch_assoc($result)){
        $picha = $row['image'];
        $id = $row['list_id'];
         $status=$row['status'];
                $offer=$row['offer'];
        $story2=$row['user'];
        $sql90="SELECT user_name FROM user_accounts WHERE id='$story2'";
            $y=mysqli_query($conn,$sql90);
            while($row2 = mysqli_fetch_assoc($y)){
                $name=$row2['user_name'];
               
        }
         
         
            
?>


							<div class="col-md-3 col-lg-3 col-sm-6">
								<div class="card-box-a card-shadow" style="height: 20rem!important; background-color: white;">
									<div class="img-box-a">
										<img class='img-a img-fluid' src='images/listing_images/<?php echo $picha;?>' style="height: 20rem!important; width: 100%!important;">
									</div>
									<?php
                                   If( $offer=='1')
                                   echo' <div class="card-img-overlay">

                                       
                                     <div class="starburst offer" id="offer"><span>OFFER</span></div>
                                    </div>'; ?>
									<?php
                                   If( $status=='notvacant')
                                   echo' <div class="card-img-overlay">
 <div class="starburst2 sold" id="sold"><span>SOLD</span></div>
                                       
                                          
                                    </div>'; ?>
									<div class="card-overlay">
										<div class="card-overlay-a-content">


											<p style="color: white;">

												Location:&nbsp;&nbsp;<?php echo $row['list_location'];?>,<?php echo $row['list_district']; ?>
											</p>
											<p style="color: white;">

												Listing by:&nbsp;&nbsp;<?php echo $name?>
											</p>

											<p style="color: white;"><?php if($row['list_type']=='AirBnbs'){
																	    echo 'Rates/Night';
																	}elseif($row['list_type']=='Commercial land'){
																	    echo 'Rates';
																	}elseif($row['list_type']=='Residential land'){
																	    echo 'Rates';
																	}else{
																	    echo'Rent/Month';
																	}
																	?>
																	:&nbsp;<?php echo $row['list_rent'] ?></p>


											<a href="single.php?id=<?php echo $id; ?>" class="link-a" type="submit" name="submit">Click here to view
												<span class="ion-ios-arrow-forward"></span>
											</a>
											<div class="card-footer-a">
												<ul class="card-info d-flex justify-content-around">
													<li>
														<h4 class="card-info-title">Bedrooms</h4>
														<span><?php echo $row['list_bedrooms']; ?></span>
													</li>
													<li>
														<h4 class="card-info-title">Bathrooms</h4>
														<span><?php echo $row['list_bathrooms']; ?></span>
													</li>
													<li>
														<h4 class="card-info-title">Toilets</h4>
														<span> <?php echo $row['list_toilets']; ?></span>


													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>



							<?php } ?>
							<?php }} ?>





						</div>
						<?php }else{
						    $error=mysqli_error($conn);
						     echo'<script>alert("An error occured during transmission: '."$err".')</script>';
						}?>
					</div>

				</section>
			</div>
		</div>

	</main>

	<footer id="footer" style="background-color: #B4A19D;">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="footer-info">
							<h4>Contact Us</h4>
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
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-6 col-sm-12 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="fas fa-chevron-right"></i> <a href="price.php">Pricing plans</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="terms.php">Terms of service</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="terms.php">Privacy Policy</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="agentpack.php">Sign up</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="userlogin.php">Login</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-md-6 col-sm-12 footer-links">
						<h4>LinknaMali</h4>
					<div class="zoom">
					    <a href="#">
					<img src="img/black.png" style="width: 50%;">
					</a>
					</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 footer-newsletter">
						<h4>Subscribe to Our Newsletter</h4>
							
						<p style="color: white;">Subscribe to our news letter to receive news of updates, timeouts or even property advice</p>
						<form action="newsletter.php" method="POST">
							<input type="email"  class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo $email2; ?>" Required><input type="submit" name="news" value="Subscribe">
						</form>

					</div>

				</div>
			</div>
		</div>
		</footer>
	<footer class="sticky-footer small py-3" style="background-color: #E0E1E4;">
		<div class="container my-auto">
		    <div class="row">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
			        <a>&copy;&nbsp;Merime Solutions 2021</a>
			        </div>
			        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
			        <a href="terms.php">Terms and conditions</a>
			        </div>
			        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
			        <a href="terms.php">Privacy policy</a>
			        </div>
			        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
			        <a>Powered by Merime solutions</a>
			        </div>
			        </div>
		</div>
	</footer>
		



	<!-- End  Footer -->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<div id="preloader"></div>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
</body>

</html>
