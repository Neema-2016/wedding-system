<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];

if(isset($_POST['add'])){
	$name=mysqli_real_escape_string($conn, $_POST['individual_name']);
	$email=mysqli_real_escape_string($conn, $_POST['individual_email']);
	$phone=mysqli_real_escape_string($conn, $_POST['individual_phone']);
	$phone1=mysqli_real_escape_string($conn, $_POST['individual_phone1']);
	$address=mysqli_real_escape_string($conn, $_POST['individual_address']);
	$location=mysqli_real_escape_string($conn, $_POST['individual_location']);
	// $images=mysqli_real_escape_string($conn, $_POST['simage']);
	$evname=mysqli_real_escape_string($conn, $_POST['event_name']);
	$evdate=mysqli_real_escape_string($conn, $_POST['event_date']);
	$evname=mysqli_real_escape_string($conn, $_POST['event_name']);
	$evenue=mysqli_real_escape_string($conn, $_POST['event_venue']);

	$individual_map=$_POST['latitude'];
	$individual_map .= ','.$_POST['longitude'];
	// $image= $_FILES["image"]["name"];
	$query=mysqli_query($conn, "UPDATE individuals SET individual_name='$name', individual_email='$email',individual_phone='$phone',
	 individual_phone1='$phone1', individual_address='$address', individual_location='$location',event_name='$evname', event_date='$evdate', 
	 event_venue='$evenue', individual_map='$individual_map' WHERE user='$user'");
	 echo $query;
	if($query){
		echo '<script> alert("Profile Successfully Updated");window.location="editindividualprof.php";</script>';
	}

	else{
		$error=mysqli_error($conn);
		echo '<script> alert("An error occurred during submission '."$error".'");window.location="editindividualprof.php";</script>';
	}

	if(isset($_POST['update'])){
		$image=$_FILES['image']['name'];
		$sql3=mysqli_query($conn, "UPDATE individuals SET individual_image='$vimage' WHERE user='$user'");
		if($sql3){
			$rmove=move_uploaded_file($_FILES['image']['tmp_name'], "images/individual_images/$image");
		}
		if($sql3 && $rmove){
			echo '<script> alert("Cover Image updated successfully");window.location="editindividualprof.php";</script>';
		}
		// echo $image;
		else{
			$error2=mysqli_error($conn);
			echo '<script> alert("An Error occurred during submision '."$error2".'");window.location="editindividualprof.php";</script>';
		}
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
    <header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="user_account.php">MERIME EVENTS</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link" href="user_account2.php">Home</a></li>
					<li><a class="nav-link" href="addindividual.php">Add Individual Profile</a></li>
					<li><a class="nav-link" href="editindividualprof">Edit Profile</a></li>
					<li><a class="nav-link" href="addregindividual.php">Create Gift Registry</a></li>
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
                <h2>Edit Individual Profile</h2>
            </div>
            <div class="container cena" style="background:#ccc;">
                <form method="POST" action="" enctype="multipart/form-data" class="mt-5 mb-5">
                    <?php
                    
                    $sql=mysqli_query($conn, "SELECT * FROM individuals WHERE user='$user'");
                        if($sql){
                            while($data=mysqli_fetch_assoc($sql)){
                                $sname=$data['individual_name'];
								$semail=$data['individual_email'];
                                $sphone=$data['individual_phone'];
                                $sphone1=$data['individual_phone1'];
                                $saddress=$data['individual_address'];
                                $simage=$data['individual_image'];
                                $slocation=$data['individual_location'];
                                $ename=$data['event_name'];
                                $edate=$data['event_date'];
                                $evenue=$data['event_venue'];
                                $coordinates=$data['individual_map'];
                                $coordinates=explode(',',$coordinates);
                                $latitude=$coordinates[0];
                                $longitude=$coordinates[1];   

                            }
                        }
                        // echo "$sname";
                    ?>
                    
                    <div class="row p-5">
                    	<div class="col-lg-6 col-md-6 mt-5 mb-5">
                            <div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-user text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_name" placeholder="Enter Individual Name" value="<?php echo $sname?>"required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-mail-bulk text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_email" placeholder="Enter Individual Email" value="<?php echo $semail?>"required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_phone" placeholder="Enter phone number" value="<?php echo $sphone?>" required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-phone text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_phone1" placeholder="Enter a backup phone number" value="<?php echo $sphone1?>"required>
							</div>

							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-address-card text-muted"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_address" placeholder="Enter individual address" value="<?php echo $saddress?>"required>
							</div>

							<label class="text-muted fw-bold">Update cover image &nbsp;<em>(add any image that will attract users to your profile)</em></label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-images text-muted"></i></span>
								</div>
								<center><button  type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-dark btn-sm">Update Cover Image</button></center>
<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
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
															<input type="file" class="form-control bg-white border-left-0 border-md" name="image"> 
													</div>
												</form>
									
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
												<button type="submit"  name="update" class="btn btn-primary btn-sm">Update Image</button>
											</div>
										</div>
									</div>
								</div>
								<img src="images/individual_images/<?php echo $simage; ?>" class="mt-2" style="height: 10rem!important; width:100%;">
							</div> 
				
                        </div>
						<div class="mx-auto col-lg-6 col-md-6 mt-5 mb-5">
							<div class="form-group form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-location-arrow "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="individual_location" value="<?php echo $slocation?>" placeholder="Enter Central Location (Where planning is taking place)">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-clipboard "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="event_name" value="<?php echo $ename?>"  placeholder="Enter type of event happening (Birthday, Graduation, Baby shower, Thanksgiving...)">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-calendar"></i></span>
									</div>
									<input type="date" class="form-control bg-white border-left-0 border-md" name="event_date" value="<?php echo $edate?>" placeholder="Enter date of event">
								</div>

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-thumbtack "></i></span>
									</div>
									<input type="text" class="form-control bg-white border-left-0 border-md" name="event_venue" value="<?php echo $evenue?>"placeholder="Enter Venue">
								</div>

								<label class="text-muted fw-bold">Add Map</label>
                                <p class="fw-bold" style="font-family:fangsong;"><em>Get coordinates from&nbsp;<a href="https://www.google.com/maps/">here</a></em></p>
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-6  input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map text-muted"></i></span>
                                        </div>
                                        <input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $latitude; ?>" name="latitude" placeholder="Enter Latitude">
                                    </div>
                                    <div class="form-group  col-lg-6 col-md-6  input-group mb-2">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-map text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control bg-white border-left-0 border-md" value="<?php echo $longitude; ?>" name="longitude" placeholder="Enter Longitude">
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

