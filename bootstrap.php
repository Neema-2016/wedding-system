<?php
session_start();
include'include/config.php';
$id=$_GET['id'];

$query=mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_id ='$id'");
if($query){
while($row =mysqli_fetch_assoc($query)){
	$description =$row['vendor_description'];
	$type=$row['vendor_category'];
	$vendorname=$row['vendor_name'];
	$brief=$row['vendor_description'];
	$category=$row['vendor_category'];

}}
?>
<!doctype html>
<html>

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
	<!--Bootstrap 5  link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--Baguette Box-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--Boostrap link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--End of Carousel slide css-->


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

	<!--Slider links-->
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
	<style></style>
	<script type='text/javascript' src=''></script>
	<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
	<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
	<section class="pt-5 pb-5">
		<div class="container">
			<div class="row">

				<div class="col-6 text-right">
					<a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
						<i class="fa fa-arrow-left"></i>
					</a>
					<a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
				<div class="col-12">
					<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner">
							<?php 
                  $squery="SELECT * FROM vendor_images WHERE vendor_id='$id'";
              $res=mysqli_query($conn,$squery);
              while($row3 = mysqli_fetch_assoc($res)){
                  $picha2= $row3['file_name'];
                ?>



							<div class="carousel-item active">
								<div class="row">

									<div class="col-md-4 mb-3">
										<div class="card">
											<img class="img-fluid" alt="100%x280" src="images/account_mages/<?php echo $picha2; ?>">


										</div>
									</div>


								</div>
							</div>
							<?php } ?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type='text/javascript'></script>
</body>

</html>
