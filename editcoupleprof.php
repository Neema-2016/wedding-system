<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];

if(isset($_POST['edit'])){

	$name=mysqli_real_escape_string($conn,$_POST['spouse1_name']);
	$phone=mysqli_real_escape_string($conn,$_POST['spouse1_phone']);
	$email=mysqli_real_escape_string($conn,$_POST['spouse1_email']);
	//$image=$_FILES['image']['name'];
	$gender=$_POST['spouse1_gender'];

	$name2=mysqli_real_escape_string($conn,$_POST['spouse2_name']);
	$phone2=mysqli_real_escape_string($conn,$_POST['spouse2_phone']);
	$email2=mysqli_real_escape_string($conn,$_POST['spouse2_email']);
	//$image2=$_FILES['image2']['name'];
	$gender2=$_POST['spouse2_gender'];

	$location=mysqli_real_escape_string($conn,$_POST['couple_location']);
	$box=mysqli_real_escape_string($conn,$_POST['couple_box']);

	 //--------------map coordinates-------
   $couple_map =$_POST['latitude'];
   $couple_map .= ','.$_POST['longitude'];

   $event_date=$_POST['wedding_date'];
   $venue=mysqli_real_escape_string($conn,$_POST['venue']);

   $event_name=mysqli_real_escape_string($conn,$_POST['event_name']);


	$query=mysqli_query($conn,"UPDATE couples SET spouse1_name='$name',spouse1_phone='$phone',spouse1_gender='$gender',spouse2_name='$name2',spouse2_phone='$phone2',spouse2_email='$email2',spouse2_gender='$gender2',location='$location',box='$box',venue='$venue',venue_map='$couple_map',event_name='$event_name',event_date='$event_date' WHERE user='$user'");
	
	

                  
   if($query){
		   echo '<script type="text/javascript">'; 
    echo 'alert("Couple Account Succesfully Updated");'; 
    echo '</script>';  
	}
			
   else{
		$error=mysqli_error($conn);
		
    echo '<script type="text/javascript">'; 
    echo 'alert("An Error occured during submission '."$error".' ");';    
    echo '</script>'; 
	}
	
}
if(isset($_POST['edit1'])){
	$picture1=$_FILES['simage1']['name'];


	$query1=mysqli_query($conn,"UPDATE couples SET spouse1_image='$picture1' WHERE user='$user'");
	if($query1){
		$moveimage1=move_uploaded_file($_FILES['simage1']['tmp_name'],"images/couple_images/$picture1");
	}
	if($query1 && $moveimage1){
		 echo '<script type="text/javascript">'; 
    echo 'alert("Photo succesfully Updated");'; 
    echo '</script>';  
	}else{
		$error=mysqli_error($conn);
		 echo '<script type="text/javascript">'; 
    echo 'alert("Photo Not updated:'."$error".'");'; 
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
					<li><a class="nav-link" href="user_account1.php">Home</a></li>
					<li><a class="nav-link" href="addcouple.php">Add Couple Profile</a></li>
					<li><a class="nav-link" href="editcoupleprof">Edit Profile</a></li>
					<li><a class="nav-link" href="addreg.php">Create Gift Registry</a></li>
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
				<span>Couple</span>
				<h2>Edit Couple Profile</h2>
			</div>
			<div class="container cena" style="background: #ccc;">

				<form method="POST" action="" enctype="multipart/form-data" class="mt-5 mb-5" >
					<?php
					$sql=mysqli_query($conn,"SELECT * FROM couples WHERE user='$user'");
						if($sql){
							while($data =mysqli_fetch_assoc($sql)){
								$sname1=$data['spouse1_name'];
								$sphone1=$data['spouse1_phone'];
								$semail1=$data['spouse1_email'];
								$simage1=$data['spouse1_image'];
								$sgender1=$data['spouse1_gender'];

								$sname2=$data['spouse2_name'];
								$sphone2=$data['spouse2_phone'];
								$semail2=$data['spouse2_email'];
								$simage2=$data['spouse2_image'];
								$sgender2=$data['spouse2_gender'];

								$slocation=$data['location'];
								$svenue=$data['venue'];
								$coordinates=$data['venue_map'];
                                $coordinates =explode(',',$coordinates);
                                $latitude1 = $coordinates[0];
                                $longitude1 =$coordinates[1];
								
								$sbox=$data['box'];
								$sevent_name=$data['event_name'];
								$sevent_date=$data['event_date'];
							}
						}
					





					?>
					<div class="row p-5">
						<div class="col-lg-6 col-md-6 mt-5 mb-5">
						
							<h5 class="text-center text-primary fw-bold mt-2 mb-2" style="font-family:fangsong;">Add Spouse 1 details</h5>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sname1; ?>" name="spouse1_name" placeholder="Enter Full Name" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-mail-bulk "></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $semail1; ?>" name="spouse1_email" placeholder="Enter Email Adress" required>
							</div>

							<div class="input-group  mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sphone1; ?>"  name="spouse1_phone" placeholder="Enter Phone Number" required>
							</div>
								<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user"></i></span>

							</div>
							<select class="bg-white form-control border-left-0" name="spouse1_gender">							 
									<?php $vax= explode(',',$sgender1); ?>
 							
								<option disabled selected>Select Gender</option>
								<option   <?php echo (in_array("Male", $vax)?'selected':''); ?> value="Male">Male</option>
								<option   <?php echo (in_array("Female", $vax)?'selected':''); ?> value="Female">Female</option>
								<option   <?php echo (in_array("Other", $vax)?'selected':''); ?> value="Other">Other</option>
							</select>
						</div>
							
								<label class="text-muted fw-bold">Edit Spouse 1 Photo </em></label>
							<div class="input-group mb-2">

								
									<center><button  type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-dark btn-sm">Update Spouse 1 Photo</button></center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update <?php echo $sname1; ?> Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="" method="post">

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images "></i></span>
								</div>
								<input type="file" class="form-control bg-white border-left-0 border-md" name="simage1"> 
							</div>
      	</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit"  name="edit1" class="btn btn-primary btn-sm">Update Image</button>
      </div>
    </div>
  </div>
</div>
							
								<img src="images/couple_images/<?php echo $simage1; ?>" class="mt-2" style="height: 20%!important; width:20%!important;">	
							</div>

						</div>
						<!------------------------------------------------------------>
						<div class="col-lg-6 col-md-6 mt-5 mb-5">
							<h5 class="text-center text-primary fw-bold mt-2 mb-2" style="font-family:fangsong;">Add Spouse 2 details</h5>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sname2; ?>" name="spouse2_name" placeholder="Enter Full Name" required>
							</div>

						<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-mail-bulk "></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $semail2; ?>"  name="spouse2_email" placeholder="Enter Email Adress" required>
							</div>

							<div class="input-group  mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sphone2; ?>" name="spouse2_phone" placeholder="Enter Phone Number" required>
							</div>
								<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user"></i></span>

							</div>

							<?php
							 $vae=explode(',',$sgender2); ?>
							<select class="bg-white form-control border-left-0" name="spouse2_gender">
								<option disabled selected>Select Gender</option>
								<option   <?php echo (in_array("Male", $vae)?'selected':''); ?> value="Male">Male</option>
								<option   <?php echo (in_array("Female", $vae)?'selected':''); ?> value="Female">Female</option>
								<option   <?php echo (in_array("Other", $vae)?'selected':''); ?>value="Other">Other</option>
							</select>
						</div>
								<label class="text-muted fw-bold">Edit Spouse 2 Photo</em></label>
							<div class="input-group mb-2">

								

									
<center><a  href="image2.php" class="btn btn-dark btn-sm">
  Update Spouse 2 Photo
</a></center>

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update <?php echo $sname2; ?> photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images "></i></span>
								</div>
								<input type="file" name="spimage2" class="form-control bg-white border-left-0 border-md"> 
							</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm" name="updater">Save changes</button>
      </div>
    </div>
  </div>
</div>					
				 -->				<img src="images/couple_images/<?php echo $simage2; ?>" class="mt-2" style="height: 20%!important; width:20%!important;">	
								
							</div>
	
						</div>
						<div class="mx-auto col-lg-8 col-md-8 col-sm-8">
							<div class=" form-group col-lg-10 col-md-10  input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text px-4 bg-white border-right-0"><i class="fas fa-location-arrow"></i></span></div>
									<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php  echo $slocation; ?>" name="couple_location" placeholder="Enter Central Location (Where planning is taking place)">
							</div>
						<p class="fw-bold text-center" style="font-family:fangsong;"><em>Event date</em></p>
							<div class=" form-group col-lg-10 col-md-10 col-sm-12 input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text px-4 bg-white border-right-0"><i class="fas fa-calendar"></i></span></div>
									<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sevent_date; ?>" name="wedding_date" placeholder="Enter Wedding date">
							</div>
							<div class=" form-group col-lg-10 col-md-10 col-sm-12 input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text px-4 bg-white border-right-0"><i class="fab fa-usps"></i></span></div>
									<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $sbox; ?>" name="couple_box" placeholder="Enter Central P.O Box">
							</div>
							<div class="form-group col-lg-10 col-md-10 col-sm-2 input-group mb-2">
								<div class=input-group-prepend>
									<span class="input-group-text px-4 bg-white px-4 border-right-0"><i class="fas fa-clipboard"></i></span>
								</div>
									<input type="text"  name="event_name" class="form-control bg-white border-left-0" value="<?php echo $sevent_name; ?>" placeholder="Enter type of event..eg Wedding, Bridal negotiations etc">
                         </div>
							
							<div class=" form-group col-lg-10 col-md-10 col-sm-12 input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text px-4 bg-white border-right-0"><i class="fas fa-thumbtack"></i></span>
								</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $svenue; ?>" name="venue" placeholder="Enter Venue">
							</div>
									<p class="fw-bold text-center" style="font-family:fangsong;"><em>Get venue map coordinates from&nbsp;<a href="https://www.google.com/maps/">here</a></em></p>
								<div class="form-group col-lg-10 col-md-10">
							<div class="form-row">
							
									<div class="form-group col-lg-6 col-md-6  input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $latitude1; ?>" name="latitude" placeholder="Enter Latitude">
							</div>
								<div class="form-group  col-lg-6 col-md-6  input-group mb-2">

								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $longitude1 ; ?>" name="longitude" placeholder="Enter Longitude">
							</div>
						</div>
					</div>

						
							<div class="mt-2 col-lg-10 col-md-10 mb-3"><button type="submit" name="edit" class="btn btn-primary btn-block">Update</button></div>
						

						</div>
					
						


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
