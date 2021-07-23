<?php
//session_start();
//include'include/config.php';
//if(isset($_POST['submit'])){
//	
//	$email=$_POST['email'];
//	$password=$_POST['password'];
//	
//	 
//	//validate Email Address
//	$query=mysqli_query($conn,"SELECT * FROM users WHERE user_email='$email'");
//	if($query){
//		while($row=mysqli_fetch_assoc($query)){
//			$pass=$row['user_email'];
//		}
//		$number=mysqli_num_rows($query);
//		if($number == 0){
//			$emailErr="Incorrect Email Address";
//		}else{
//	
//	//Validate Password
//	
//	$ql=mysqli_query($conn,"SELECT * FROM users WHERE user_email='$email' AND password='$password'");
//	if($ql){
//	$num=mysqli_num_rows($ql);
//		if($num == 0){
//			$passwordErr="Incorrect Password";
//		}
//			
//		}
//	}
//
//	}
//	
//	
//	
//        $sql="SELECT * FROM users WHERE user_email=? AND password=?";
//        $stmt=$conn->prepare($sql);
//        $stmt->bind_param("ss",$email,$password);
//        $stmt->execute();
//        $result=$stmt->get_result();
//        $row=$result->fetch_assoc();
//       
//          session_regenerate_id();
//          $_SESSION['user_email']=$row['user_email'];
//          $_SESSION['password']=$row['password'];
//          $_SESSION['id']=$row['id'];
//          $_SESSION['role']=$row['role']; 
//	      $_SESSION['user_name']=$row['user_name'];
//          session_write_close();
//        
//               if($result->num_rows ==1 && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Individual'){
//                 header("location:user_account.php?login=success");}
//				   elseif($result->num_rows ==1 && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Couple'){
//                 header("location:user_account.php?login=success");}
//					   elseif($result->num_rows ==1 && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Vendor'){
//                 header("location:user_account.php?login=success");		}	   						  
//				   elseif($result->num_rows==1 &&_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Admin'){
//					   header("location:admin.php?login=success");
//				   }else{
//			  echo '<script type="text/javascript">'; 
//    echo 'alert("An Error occured during submission. '."$emailErr".' '."$passwordErr".'");'; 
//    echo '</script>';
//}
//		 }
//	
session_start();
include('include/config.php');
 

    if(isset($_POST["submit"])){
         //mysqli_select_db($conn,"linknama_nyumba");
      
        $email=$_POST["email"];
        $password=$_POST["password"];
        $password_err="";
        $email_err="";
        
        // validate password
        if(empty(trim($_POST["password"]))){
        	$password_err = "Please enter a password."; 
        }
        if (empty($_POST["email"])) {
    		$email_err = "Email is required";
  		} else{
    // check if e-mail address is well-formed
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$email_err = "Invalid email format";
    		}
			$sql2=mysqli_query($conn,"SELECT * FROM users where user_email ='$email'");
			$num_rows = mysqli_num_rows($sql2);
			if($num_rows == 0 ){
				$email_err ="Incorrect Email Adress";
			}
			$sql4=mysqli_query($conn,"SELECT * FROM users where  user_email='$email' AND password='$password'");
			$number= mysqli_num_rows($sql4);
			if($number == 0){
				$password_err="Incorrect Password";
			}
  		}
  
        $sql="SELECT * FROM users WHERE user_email=? AND password=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
       
          session_regenerate_id();
          $_SESSION['user_email']=$row['user_email'];
          $_SESSION['password']=$row['password'];
          $_SESSION['id']=$row['id'];
          $_SESSION['role']=$row['role'];
          $_SESSION['user_name']=$row['user_name'];
          
        session_write_close();
        
       
        if($result->num_rows ==1 && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Admin'){
            header("location:admin.php?login=success");
        }
   		if($result->num_rows ==1 && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password" && $_SESSION['role']=='Individual'){
			header("location:user_account2.php?login=success");
        }

    	if($result->num_rows ==1  && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password"  && $_SESSION['role']=='Vendor'){
         	header("location:user_account.php?login=success");
       	}
		if($result->num_rows ==1  && $_SESSION['user_email']=="$email" && $_SESSION['password']=="$password"  && $_SESSION['role']=='Couple'){
			header("location:user_account1.php?login=success");
       	}
		   
    	else{
			echo '<script type="text/javascript">'; 
			echo 'alert("An Error occured during submission.'."$email_err".'  '."$password_err".' '."$expiration_err".'");'; 
			//echo 'window.location = "#";';
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
	<!--Bootstrap links-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Font Awesome-->
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




							<li><a href="vendors.php">More Vendors</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="registry.php">Registry</a></li>
					<li><a class="nav-link" href="about.php">About</a></li>
					<li><a class="nav-link" href="">Portfolio</a></li>
					<li><a class="nav-link" href="price.php">Pricing</a></li>
					<!--li><a class="nav-link scrollto" href="#team">Team</a></li-->

					<li><a class="nav-link" href="signup.php"><span>Signup</span></a>

					</li>
					<li><a class="nav-link active" href="login.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>
	<main>
		<div class="section-title">
			<span>Login</span>
			<h2>Login Form</h2>
		</div>
		<center>

			<div class="container col-lg-8 col-md-8 col-sm-8 mt-3 mb-5 py-2 mx-auto" style="background-color: #c1828B" data-aos="fade-up">
				<form method="POST" action="" class="py-5 px-5">


					<div class="form-group col-lg-12 col-md-12 col-sm-12 mb-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text px-4 bg-light border-right-0 border-md"><i class="fas fa-mail-bulk text-muted"></i></span>
							</div>
							<input type="text" class="form-control  bg-light border-right-0 border-md" name="email" placeholder="Enter Email Address" Required>
						</div>
					</div>
					<div class="form-group col-lg-12 col-md-12 col-sm-12 mb-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text px-4 bg-light border-right-0 border-md"><i class="fas fa-key text-muted"></i></span>
							</div>
							<input type="password" class="form-control  bg-light border-left-0 border-md " name="password" placeholder="Enter Password" Required>
						</div>


						<center><button class="btn btn-primary btn-block mt-2" name="submit" type="submit">Submit</button></center>


					</div>
				</form>
			</div>
		</center>
	</main>



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
	<!--Bootstrap scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
