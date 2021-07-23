<?php
session_start();
include 'include/config.php';
$user=$_SESSION['id'];

if(isset($_POST['submit'])){

	$name=mysqli_real_escape_string($conn,$_POST['gift_name']);
	$category=$_POST['gift_category'];
	$shops=mysqli_real_escape_string($conn,$_POST['gift_shops']);
	$image=$_FILES['image']['name'];

    //prevent resubmission
    $check=mysqli_query($conn,"SELECT * FROM registryindividual WHERE user='$user' AND gift_name='$name' AND gift_category='$category' AND gift_image='$image'");
    if($check){
    	$number=mysqli_num_rows($check);
    	if($number > 0){
    		$checkErr="You had already submitted this record";
    	}
    }
    //-----------------------
    if(empty($checkErr)){
		$query=mysqli_query($conn,"INSERT INTO registryindividual (gift_name,gift_category,gift_shops,gift_image,user) VALUES ('$name','$category','$shops','$image','$user')");
		
		if($query){
			$r3=move_uploaded_file($_FILES['image']['tmp_name'],"images/gift_images/$image"); 
					
		}
		if($query && $r3){
			echo '<script type="text/javascript">'; 
		echo 'alert("Item Added Succesfully");'; 
		echo '</script>';  
		}
				
		else{
			$error=mysqli_error($conn);
			echo '<script type="text/javascript">'; 
			echo 'alert("An Error occured during submission '."$error".' ");';    
			echo '</script>'; 
		}
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("'."$checkErr".'");';    
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
					<li><a class="nav-link" href="user_account2.php">Home</a></li>
					<li><a class="nav-link" href="addindividual.php">Add Individual Profile</a></li>
					<li><a class="nav-link" href="editindividualprof.php">Edit Profile</a></li>
					<li><a class="nav-link" href="addregindividual.php"> Gift Registry</a></li>
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
				<h2>My Gift Registry</h2>
			</div>

<!----End of Modal----->
			<div class="container">
				<div class="mx-auto col-lg-6 col-md-6 result">
				</div>

				<form method="POST" action=""  enctype="multipart/form-data">
					<div class="table-responsive">
								<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th></th>
											<th>Gift Name</th>
											<th>Category</th>
											<th>Image</th>
											<th>Shops </th>
											<th>Edit Item</th>
											<th>Delete Item</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
                                  
                                    
                                    $i=1;
                                        
                                            $squery = mysqli_query($conn, "SELECT* from registryindividual ORDER BY id DESC");
                                            while($row = mysqli_fetch_array($squery))
                                            {
                                              $identity=$row['id'];
                                                ?>

										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['gift_name'];?></td>
											<td><?php echo $row['gift_category'];?></td>
											<td><img src="images/gift_images/<?php echo $row['gift_image'];?>" style="height:40px; width: 40px;" ></td>
											<td><?php echo $row['gift_shops'];?></td>
										
											<td>
												<div class="col-md-4 col-sm-4 col-lg-4">

													<!-- Button trigger modal -->

													<a href="editindivitem.php?id=<?php echo $row['id']; ?>"class="btn btn-success">
														<i class="fas fa-user-edit"></i>
													</a>

												</div>

											</td>
											<td>

												<div class="col-md-4 col-sm-4 col-lg-4 mx-auto">
													<center> 
														<button class="btn btn-danger" 
														type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt mx-auto" style="color:white;"></i></button></center>
												</div>
																
			


											</td>
										</tr>

										<?php } ?>
											<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form action="delete.php" method="post" >
      			<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
      			<div class="modal-body">
      				<h6><em>Are you sure you want to delete this record?</em></h6>
      			</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
					<a href="delete.php?id='<?php echo $identity; ?>'" class='btn btn-primary btn-sm'>Delete</a>
				</div>
    		
			</form>

 		</div>
	</div>
</div>											<?php

if(isset($_POST['delete'])){
	echo $id;

$sql32=mysqli_query($conn,"DELETE  FROM  registryindividual WHERE id='$identity'");
if($sql32){
	  echo '<script type="text/javascript">'; 
    echo 'alert("Item Succesfully Deleted");'; 
    echo 'location.reload();';
    echo '</script>';  
}else{
	$error=mysqli_error($conn);
	 echo '<script type="text/javascript">'; 
    echo 'alert(" '."$error".'");'; 
   // echo 'window.location="addreg.php";';
    echo '</script>';  
}
}



?>

									</tbody>
								</table>

				</form>

			</div>
		</section>
		<section>
			<div class="section-title">
				<span>Couple</span>
				<h2>Add Items to Registry</h2>
			</div>

			<div class="container cena" style="background: #ccc;">

				<form method="POST" action="" class="mt-5 mb-5" enctype="multipart/form-data">
					<div class="row p-5">
						<div class="col-lg-8 col-md-8 mt-5 mb-5 mx-auto">
							
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-gift"></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" name="gift_name" placeholder="Enter Item Name" required>
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
                               <span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-list"></i></span>
								</div>
								<select class="form-control bg-white border-left-o" name="gift_category" required>
									
									<option disabled selected>Select Item Category</option>
									<option value="Kitchen">Kitchen</option>
									<option value="Top Bench">Topbench/Furniture</option>
									<option value="Beddings">Beddings</option>
									<option value="Bath">Bath Items</option>
									<option value="Home Decor">Home Decor</option>
									<option value="Lifestyle">Lifestyle</option>
									<option value="Drinkware">DrinkWare</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<label class="text-primary fw-bold"><em>Add an image of the item</em></label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-image "></i></span>
								</div>
								<input type="file" class="form-control bg-white border-left-0 border-md"  name="image" required>
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white px-4 border-right-0 border-md"><i class="fas fa-home "></i></span>
								</div>
								<input type="text" class="form-control bg-white border-left-0 border-md" placeholder="Enter Name of stores selling the items" name="gift_shops">
							</div>
							<center><button class="btn btn-primary btn-block" type="submit" name="submit">Submit</center>
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
	
	<script>
		$(document).ready(function() {
			var table = $('#datatable').DataTable({
				responsive: true
			});

			new $.fn.dataTable.FixedHeader(table);
		});

		//-----------------------------------------delete part------------------------------------------

		$('.delete_item').click(function(e) {
			e.preventDefault();
			var del = $(this).attr('id');
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
	<!--Bootstrap Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
