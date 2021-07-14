<?php
session_start();
include'include/config.php';
$id=$_GET['id'];
if(isset($_POST['review'])){
	$name=mysqli_real_escape_string ($conn,$_POST['name']);
	$mail=$_POST['email'];
	$rate=$_POST['rate'];
	$feedback=mysqli_real_escape_string ($conn,$_POST['feedback']);
	$today=date('Y-m-d');

	//Validate Email
	$val=mysqli_query($conn,"SELECT * FROM reviews WHERE email='$mail' AND feedback='$feedback' AND rate='$rate'");
	if($val){
		$num=mysqli_num_rows($val);
		if($num > 0){
			$userErr="You have already posted a similar review..Repeat actions are not permitted..Please write a different review.Your Feedback is highly Appreciated.";
		}
	}
	
	if(empty($userErr)){
	$query=mysqli_query($conn,"INSERT INTO reviews (name,email,rate,feedback,vendor_id,reg_date) VALUES('$name','$mail','$rate','$feedback','$id','$today')");
	if($query){
		echo '<script type="text/javascript"></script>';
		echo '<script>alert("Your review has been succesfully posted.We appreciate your feedback");</script>';
		echo '<script></script>';
	}else{
		$error=mysqli_error($conn);
		echo '<script type="text/javascript"></script>';
		echo '<script>alert("An error occured during submission:'."$error".'");</script>';
		echo '<script></script>';
	}
}else{
		echo '<script type="text/javascript"></script>';
		echo '<script>alert("'."$userErr".'");</script>';
		echo '<script></script>';
}}


$query=mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_id ='$id'");
if($query){
while($row =mysqli_fetch_assoc($query)){
	$description =$row['vendor_description'];
	$type=$row['vendor_category'];
	$vendorname=$row['vendor_name'];
	$brief=$row['vendor_description'];
	$category=$row['vendor_category'];
	$location=$row['vendor_location'];
	$email=$row['vendor_email'];
	$phone=$row['vendor_phone'];
	$twitter=$row['vendor_twitter'];
	$facebook=$row['vendor_facebook'];
	$linkedin=$row['vendor_linkedin'];
	$whatsapp=$row['vendor_whatsapp'];
	$picha=$row['vendor_images'];
	$box=$row['vendor_box'];
	//
   $coordinates=$row['vendor_map'];
                   $coordinates =explode(',',$coordinates);
                   $latitude = $coordinates[0];
                   $longitude =$coordinates[1];
	//
	

}}
if(isset($_POST['contact_submit'])){
	$cname=mysqli_real_escape_string($conn,$_POST['contact_name']);
	$cemail=$_POST['contact_email'];
	$csubject=mysqli_real_escape_string($conn,$_POST['contact_subject']);
	$cmessage=mysqli_real_escape_string($conn,$_POST['contact_message']);
	$today=date('Y-m-d');

//Validate Email
	$valy=mysqli_query($conn,"SELECT * FROM messages WHERE email='$cemail' AND message='$cmessage' ");
	if($valy){
		$num=mysqli_num_rows($valy);
		if($num > 0){
			$useErr="Hello $cname , You had already sent this message..Do you wish to write another message instead?Your Feedback is highly Appreciated.";
		}
		}
	if(empty($useErr)){

	$contact=mysqli_query($conn,"INSERT INTO messages (name,email,subject,message,reg_date,vendor_id) VALUES('$cname','$cemail','$csubject','$cmessage','$today','$id')");
	if($contact){
		echo '<script type="text/javascript"></script>';
		echo '<script>alert("Your Message has been succesfully sent '."$vendorname".' will get back to you as soon as possible");</script>';
		echo '<script>window.location("single-vendor.php?id='."$id".'");</script>';
		echo '<script></script>';

	}else{
		$error=mysqli_error($conn);
		echo '<script type="text/javascript"></script>';
		echo '<script>alert("An error occured during submission:'."$error".'");</script>';
		echo '<script></script>';
	}
}else{
	echo '<script type="text/javascript"></script>';
		echo '<script>alert("'."$useErr".'");</script>';
		echo '<script></script>';
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
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Favicons -->
	<link href="assets/black.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!--Bootsrap 4 Link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Baguette Box-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!--End of Carousel slide css-->

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/exclusive.css" rel="stylesheet">
	<!-- =======================================================
  * Template Name: Day - v4.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

	<style>
		.container.gallery-container {
			background-color: #fff;
			color: #35373a;
			min-height: 100vh;
			border-radius: 20px;
			box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
		}

		.gallery-container h1 {
			text-align: center;
			margin-top: 70px;
			font-family: 'Droid Sans', sans-serif;
			font-weight: bold;
		}

		.gallery-container p.page-description {
			text-align: center;
			max-width: 800px;
			margin: 25px auto;
			color: #888;
			font-size: 18px;
		}

		.tz-gallery {
			padding: 40px;
		}

		.tz-gallery .lightbox img {
			width: 100%;
			margin-bottom: 30px;
			transition: 0.2s ease-in-out;
			box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
		}


		.tz-gallery .lightbox img:hover {
			transform: scale(1.05);
			box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
		}

		.tz-gallery img {
			border-radius: 4px;
		}

		.baguetteBox-button {
			background-color: transparent !important;
		}

</style>

</head>

<body style="background: url('assets/img/abstract.jpg'); width: 100%; ">

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

			<h1 class="logo"><a href="index.php">MERIME EVENTS</a></h1>
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




							<li><a href="searchvendor.php">Search For Vendors</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="registry.php">Gift Registry</a></li>
					<li><a class="nav-link" href="about.php">About</a></li>
					<li><a class="nav-link" href="">Portfolio</a></li>
					<li><a class="nav-link" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li><a class="nav-link" href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link" href="login.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>
	<!-- ======= Hero Section ======= -->
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex hero align-items-center" style="background: url('assets/img/glasses.jpg'); width: 100%!important; height: 60vh;">
		<div class="container text-center" data-aos="fade-up" data-aos-delay="500">
			<h1><?php echo $vendorname; ?></h1>
			<h2><em><?php echo $category ;?></em></h2>
			<a href="#sec0" class="btn-get-started" style="text-transform:none!important; font-family:fangsong;"><i class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;<em>Message us</em></a>
		</div>
	</section><!-- End Hero -->

	<main>


		<!-- ======= About Section ======= -->
		
		<section id="about" class="about">
			<div class="container">

				<div class="row">
					<div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left">
							<div class="row">

							<div class="tz-gallery">
								<div class="form-row">

									<?php 
            
	  
              
             
                  $squery="SELECT * FROM vendor_images WHERE vendor_id='$id'";
              $res=mysqli_query($conn,$squery);
              while($row3 = mysqli_fetch_assoc($res)){
                  $picha2= $row3['file_name'];
                ?>



									<div class="form-group col-sm-6 col-md-3">
										<a class="lightbox" href="images/account_images/<?php echo $picha2; ?>">
											<img src="images/account_images/<?php echo $picha2; ?>" style="height: 10rem!important;">

										</a>



									</div>

									<?php } ?>



								</div>
							</div>
						
								<div class="text-center text-success fw-bold d-sm-none d-md-block" data-aos="zoom-in" style="font-family: fangsong;">
										<?php if (!empty($picha2)){
								echo'
							
								<div class="form-row">
									<div class="form-group col-lg-2 col-md-2 col-sm-2">
								<img src="assets/img/help.png" style="width:50%; height: 50%">
							</div>
							<div class="form-group col-lg-4 col-md-4 col-sm-4">
								<p><em>Click on the images to expand them </em></p>
							</div>
							</div>
						';
					} ?>
					</div>
					</div>
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content ns" data-aos="fade-right">
						<h3 >What does &nbsp;<?php echo $vendorname; ?>&nbsp;have to offer?</h3>
						<p class="fst-italic">
						<?php echo $brief; ?>
						</p>
					</div>
				</div>

			</div>
		</section>
		<!--Reviews-->
		<section>
<div class="container">

					<div class="section-title">
						<?php $mat=mysqli_query($conn,"SELECT * FROM reviews WHERE vendor_id='$id'");
							if($mat){
								$counts=mysqli_num_rows($mat);
								if($counts!==0){
									echo'	<span>Reviews</span>
						<h2>Reviews</h2>
						';
								}
								?>
					
					</div>
					<?php
						
								while($rot =mysqli_fetch_assoc($mat)){
									$todate=$rot['reg_date'];
									$fullname=$rot['name'];
									$adress=$rot['email'];
									$star=$rot['rate'];
									$feed=$rot['feedback'];
								?>

							<div class="row mb-3">
								<div class="col-sm-3">
									<img src="assets/img/user.png" class="img-rounded">
									<div class="review-block-name"><?php echo $fullname; ?></div>
									<div class="review-block-date"><?php echo $todate; ?><br /></div>
								</div>

								<div class="col-sm-9">
									<div class="review-block-rate mb-2">
										<?php
									if($star==5){
										echo'
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning  btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>';}
									if($star==4){
										echo'
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>';
									}
									if($star==3){
										echo'<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>';
										
									}
									if($star==2){
										echo'<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>
										<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>';
									}
									if($star==1){
											echo'<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
											<span class="fas fa-star" aria-hidden="true"></span>
										</button>';
									}
										
										
										?>
									</div>

									<div class="review-block-description"><?php echo $feed; ?></div>
								</div>
							</div>
							<?php }} ?>
</div>
</section>
		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">

				<div class="row">
					<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
						<img src="images/vendor_images/<?php echo $picha; ?>" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
						<div class="row col-lg-12 col-sm-12 col-md-12">
							<div class="card p-5 mt-3">
								<h3 class="text-center">Leave a Review</h3>
								<h6><em>Your review will help us to improve our products, and customer services.</em></h6>


								<form method="POST" action="">
									<h6 class="text-center">Your personal info</h6>
									<div class="form-row">

										<div class="form-group col-md-6 col-lg-6 col-sm-12">

											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text px-4 bg-white border-md border-right-0"><i class="fa fa-user"></i></span>
												</div>
												<input name="name" placeholder="Enter Full Name" class="form-control bg-white border-md border-left-0" type="text">
											</div>

										</div>

										<div class="form-group col-md-6 col-lg-6 col-sm-12">

											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text px-4 bg-white border-md border-right-0"><i class="fa fa-envelope"></i></span>
												</div>
												<input name="email" type="email" class="form-control bg-white border-md border-left-0" placeholder="Enter Email Address">
											</div>
										</div>
									</div>


									<h6 class="text-center">Rate our overall services.</h6>


									<div class="form-group">

										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-star" style="color:#FFD700;"></i></span>
											</div>
											<select class="form-control bg-white border-md border-left-0" name="rate" id="rate">
												<option disabled selected>Rate us</option>
												<option value="1star">1 Star</option>
												<option value="2stars">2 Stars</option>
												<option value="3stars">3 Stars</option>
												<option value="4stars">4 Stars</option>
												<option value="5stars">5 Stars</option>
											</select>
										</div>
									</div>


									<h6 class="text-center">Write your feedback.</h6>


									<div class="form-group ">

										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
											<textarea class="form-control" name="feedback" id="review" rows="3"></textarea>

										</div>

									</div>

									<center><button type="submit" name="review" class="btn btn-primary">Submit</button></center>


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

			<!-- ======= Contact Section ======= -->
			<section id="sec0" class="contact">
				<div class="container">

					<div class="section-title" >
						<span>Contact</span>
						<h2 >Contact&nbsp;<?php echo $vendorname; ?>&nbsp;</h2>
						<p></p>
					</div>

					<div class="row" data-aos="fade-up">
							<div class="col-lg-3 col-md-6">
								<div class="info-box mb-4">
									<i class="bx bx-map"></i>
									<h3>Our Address</h3>
									<?php if(!empty($box)){echo'<p> '."$box".'</p>'; }?>
									<p><?php echo $location; ?></p>
								</div>
							</div>
								<div class="col-lg-3 col-md-6">
								<div class="info-box mb-4">
									<i class="bx bx-map"></i>
									<h3>Social Media</h3>
									<ul class="form-row" style="list-style:none;">
										<li class="form-group"><?php if(!empty($facebook)){echo'<a href=" '."$facebook".'"><i class="fab fa-facebook"></i></a>';} ?></li>
										<li class="form-group"><?php if (!empty($twitter)){echo '<a href=" '."$twitter".' "><i class="fab fa-twitter"></i></a>'; }?></li>
										<li class="form-group"><?php if(!empty($linkedin)){echo'<a href="'."$linkedin".'"><i class="fab fa-linkedin"></i></a>'; }?></li>
										<li class="form-group"><?php if(!empty($whatsapp)){echo'<a href=" '."$whatsapp".'"><i class="fab fa-whatsapp"></i></a>'; }?></li>
									
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="info-box  mb-4">
									<i class="bx bx-envelope"></i>
									<h3>Email Us</h3>
									<p><a href="mailto:<?php echo $email; ?>"><?php echo $email;?></a></p>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="info-box  mb-4">
									<i class="bx bx-phone-call"></i>
									<h3>Call Us</h3>
									<p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
								</div>
							</div>
					</div>
						

					<div class="row" data-aos="fade-up">
						<div class="col-lg-6 ">
							<?php if((!empty($latitude)) && (!empty($longitude))){
									        
									    echo'
									 <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q= '."$latitude".' ,'."$longitude".'&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>';}
									?>
							
							</div>

							<div class="col-lg-6">
								<form action="" method="post" role="form">
									<div class="row">
										<div class="col-md-6 form-group">
											<input type="text" name="contact_name" class="form-control" id="name" placeholder="Your Name" required>
										</div>
										<div class="col-md-6 form-group mt-3 mt-md-0">
											<input type="email" class="form-control" name="contact_email" id="email" placeholder="Your Email" required>
										</div>
									</div>
									<div class="form-group mt-3">
										<input type="text" class="form-control" name="contact_subject" id="subject" placeholder="Subject" required>
									</div>
									<div class="form-group mt-3">
										<textarea class="form-control" name="contact_message" rows="5" placeholder="Message" required></textarea>
									</div>


									<div class="text-center"><button type="submit" name="contact_submit" class="rounded btn btn-danger">Send Message</button></div>
								</form>
							</div>


					</div>

				</div>
			</section><!-- End Contact Section -->


			<!-- ======= Team Section ======= -->
			<section id="team" class="team">
				<div class="container">

					<div class="section-title">
							<?php
						$teamsql=mysqli_query($conn,"SELECT * FROM teams WHERE vendor_id='$id'");
						if($teamsql){
							$teamno=mysqli_num_rows($teamsql);
							if($teamno !==0){
								echo'	<span>Team</span>
						<h2>Team</h2>
						<p>Meet the '."$vendorname".' Team</p>';
							}?>
					
					</div>

					<div class="row">
					<?php 
							while($rowteam =mysqli_fetch_assoc($teamsql)){
								$tname=$rowteam['team_name'];
								$ttitle=$rowteam['team_title'];
								$tmessage=$rowteam['team_message'];
								$timage=$rowteam['team_image'];
								$ttwitter=$rowteam['team_twitter'];
								$tfacebook=$rowteam['team_facebook'];
								$tlinkedin=$rowteam['team_linkedin'];
								$tinstagram=$rowteam['team_instagram'];
						?>
						<div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch" data-aos="zoom-in">
							<div class="member" style="width:25rem!important;">
								<img src="images/team_images/<?php echo $timage; ?>" style="width:100%" alt="">
								<h4><?php echo $tname; ?></h4>
								<span><?php echo $ttitle; ?></span>
								<?php if(!empty($tmessage)){echo'<p>
									'."$tmessage".'
								</p>';}?>
								<div class="social">
								<?php if(!empty($ttwitter)){echo'<a href="'."$ttwitter".'"><i class="bi bi-twitter"></i></a>';}?>	
									<?php if(!empty($tfacebook)){echo'<a href=" '."$tfacebook".'"><i class="bi bi-facebook"></i></a>';}?>
									<?php if(!empty($tinstagram)){echo'<a href=" '."$tinstagram".'"><i class="bi bi-instagram"></i></a>';}?>
									<?php if(!empty($tlinkedin)){echo'<a href="'."$tlinkedin".'"><i class="bi bi-linkedin"></i></a>';} ?>
								</div>
							</div>
						</div>
<?php }}?>
					</div>

				</div>
			</section><!-- End Team -->
			<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">

				<div class="text-center">
					<h3>Call Us</h3>
					<p class="fw-bold">Do you wish to contact <?php echo $vendorname; ?>&nbsp;Click the button below to get directed to <?php echo $vendorname; ?>'s phone number.</p>
					<a class="cta-btn" href="tel:<?php echo $phone; ?>"><i class="fas fa-phone"></i>&nbsp;Call Us</a>
				</div>

			</div>
		</section>
			<!-- ======= Why Us Section ======= -->
		<section id="why-us" class="why-us mt-4">
			<div class="section-title">
					<?php 
$sql=mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_category LIKE '%$category%' AND vendor_id!='$id'");
if($sql){
	$veno=mysqli_num_rows($sql);
	if($veno!==0){
echo'	<span>Vendors</span>
					<h2>Similar Vendors</h2>
					<p>Below are vendors that provide the same service as &nbsp;'."$vendorname".'&nbsp;</p>
				</div>';
	}?>
	

				
		
			<div class="container">

				<div class="row">
				<?php
	while($rows =mysqli_fetch_assoc($sql)){
		$picture=$rows['vendor_images'];
		$vname=$rows['vendor_name'];
		$vlocation=$rows['vendor_location'];
		$number=mysqli_num_rows($sql);
		$vidd=$rows['vendor_id'];
		$cats=$rows['vendor_category'];
		?>

					<div class="col-lg-3" data-aos="fade-up">
						<div class="box">
							<a href="single-vendor.php?id=<?php echo $vidd; ?>">
							<span><?php echo $vname; ?></span>
							
							<h4><?php echo $vlocation; ?></h4>
							<p><?php echo $cats; ?></p>
						</a>
						</div>
					</div>
<?php }}?>
					
					</div>

				</div>

		
		</section><!-- End Why Us Section -->
	

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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!--Baguette Box-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
		baguetteBox.run('.tz-gallery');

	</script>
	<script>
		$('#sidebar').affix({
			offset: {
				top: 245
			}
		});

		var $body = $(document.body);
		var navHeight = $('.navbar').outerHeight(true) + 10;

		$body.scrollspy({
			target: '#leftCol',
			offset: navHeight
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
