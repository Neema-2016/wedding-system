<?php 
session_start();
include ('includes/config.php');

$story=$_SESSION['id'];

if(isset($_POST['save2'])){

    $username=$_POST['user_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];

    $sql="SELECT * FROM user_accounts WHERE id='$story' ";
    
    $result=mysqli_query($conn,$sql);
    
    if (!$result){
     $msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong>!!Incorrect Username/ Password
  </div>';
 
    } 
    else{
          $query="UPDATE user_accounts SET user_name='$username', password='$password', email='$email', phone_number='$phone_number' WHERE id='$story'";
            
            $sql2=mysqli_query($conn,$query);
            
            if($sql2){
                 $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>!!User Record Updated 
  </div>';
            }else{
                  $msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error</strong>!!Error Updating User Record
  </div>';
            }
   
    }
            
        }
session_destroy();
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
	<link href="assets/css/style.css" rel="stylesheet">
	
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
<!--his template-->





	<!--
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Favicons -->

	<!-- Vendor CSS Files -->
	<!--
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
	<!--
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

	<style>
		.hero-image {
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/banner.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}

		.hero-text {
			text-align: center;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: white;
		}

		.hero-text button {
			text-align: center;
			cursor: pointer;
		}

		.jumbotron {
			color: white;
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/bridge3.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 100vh;
		}
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

</head>


<body id="page-top">



	<div id="wrapper">
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content mb-2"  style="background-color:#E0E1E4;">



				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				    	<a class="navbar-brand" >LinknaMali</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					

						<form class="form-inline mr-auto ml-md-3 my-md-0 mw-100" action="usersearch.php" method="post">
							<div class="input-group">
								<select class="form-control bg-light border-2 small mdb-select md-form" name="search" value="Search for rental spaces, air-bnbs, land etc..." aria-label="Search" aria-describedby="basic-addon2">
									<option value="" disabled selected><em>Search for rental spaces,homes,land etc...</em></option>
									<optgroup label="Houses">
										<option value="Singlerooms">Singlerooms</option>
										<option value="Bedsitters">Bedsitters</option>
										<option value="Onebedrooms">Onebedroom Apartments</option>
										<option value="Doublerooms">Doubleroom Apartments</option>
										<option value="Twobedrooms">Twobedroom Apartments</option>
										<option value="Threebedrooms">ThreeBedroom Apartments</option>
										<option value="Mansionettes">Mansionettes</option>
									</optgroup>
									<option value="AirBnbs">Air-bnbs/Villas</option>
									<option value="Businessrentals">Business rentals/shops</option>
									<option value="Commercial land/property">Commercial Land/Property</option>
									<option value="Residential land/property">Residential Land/property</option>
									<option value="Halls">Conference Halls</option>
								</select>
							</div>&nbsp;&nbsp;



							<button class="btn btn-primary" type="submit" name="searchbtn">
								<i class="fas fa-search fa-sm"></i></button>

						</form>
						<ul class="navbar-nav mx-auto">
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link" href="useraccount.php">
									<font color="black">Home</font>
								</a>
							</li>


							<li class="nav-item dropdown no-arrow">
								<a class="nav-link" href="add.php">
									<font color="black">Add Listing</font>
								</a>
							</li>
							<li class="nav-item dropdown no-arrow">

								<a class="nav-link" href="viewlistings.php">
									<font color="black">View Listings</font>
								</a>
							</li>
							<!--<li class="nav-item dropdown no-arrow">
                                <a class="nav-link" href="userlogout.php"><i class="fas fa-power-off" style="color: red"></i>
                                    <font color="black">Logout</font>
                                </a>
                            </li>-->

							<div class="topbar-divider d-none d-sm-block"></div>


							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
			
                
								<?php  
                                $story=$_SESSION['id'];
                              
                                $query="SELECT * FROM user_accounts WHERE id='$story' ";
                                $result=mysqli_query($conn,$query);
                                if($result)
                                {
                                   while($row = mysqli_fetch_assoc($result)){
                                    $output =$row['user_name'];
                                       $profile=$row['image']

                                                     
                                
                                ?>
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								   
                <img class="img-profile rounded-circle"  src="img/bridge3.jpg"  alt="" style="width: 40px; height: 40px;">
                 <?php echo $output; ?>
              
								


								</a>


								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

									<a class="dropdown-item" id="myBtn" role="button" href="#"> 
										Edit Profile</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="userlogout.php">
										
										Logout
									</a>

								</div>
							</li>


							<div id="myModal" class="modal modal-md mt-5">
								<div class="container">
									<!-- The Modal -->
									<form action="useraccount.php" method="post">


										<div class="modal-content">
											<div class="modal-header">
												<h6 class="text-center"> Edit Profile</h6>
												<span class="close" style="color: #d9534f; margin-right: 2px; cursor: pointer!important;">&times;
												</span>

											</div>
											<div class="modal-body">

												<?php  
                                
                              
                                $query="SELECT * FROM user_accounts WHERE id='$story' ";
                                $result=mysqli_query($conn,$query);
                                if($result)
                                {
                                   while($row = mysqli_fetch_assoc($result)){                                                     
                                
                                ?>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												<div class="input-group">
												    <div class="input-group-prepend">
												        <span class="input-group-text" id="basic-addon1">Name&nbsp;<i class="fas fa-list"></i></span>
												    </div>
												    
													<input type="text" name="user_name" class="form-control sm" placeholder="New Username" value="<?php echo $row['user_name'] ?>">

												</div>
												</div>

												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												    <div class="input-group">
												    <div class="input-group-prepend">
												        <span class="input-group-text" id="basic-addon1">Password&nbsp;<i class="fas fa-key"></i></span>
												    </div>
													<input type="password" id="password" name="password" class="form-control" placeholder="New Password" value="<?php echo $row['password'] ?>">
														<div class="input-group-append">
											<span class="input-group-text form-control" id="basic-addon1"><i class="fas fa-eye" id="togglePassword"></i></span>
												
										</div>
												</div>
												</div>
												
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												    <div class="input-group">
												    <div class="input-group-prepend">
												        <span class="input-group-text" id="basic-addon1">Email Address&nbsp;<i class="fas fa-mail-bulk"></i></span>
												    </div>
													<input type="email" name="email" class="form-control" placeholder="New Email Adress" value="<?php echo $row['email'] ?>">
												</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												    <div class="input-group">
												    <div class="input-group-prepend">
												        <span class="input-group-text" id="basic-addon1">Phone Number&nbsp;<i class="fas fa-phone"></i></span>
												    </div>
													<input type="text" name="phone_number" class="form-control" placeholder="New Phone Number" value="<?php echo $row['phone_number'] ?>">
												</div>
												</div>
												<?php }
                                }?>
											</div>
											<div class="modal-footer">


												<div class="form-group">
													<button type="submit" name="save2" class="btn btn-sm btn-outline-primary">Save changes</button>
												</div>


											</div>
										</div>

									</form>
								</div>



								<!-- Dropdown - User Information -->




							</div>
						</ul>
					</div>
				</nav>


				<?php @$msg; ?>

				<section class="mt-5">
					<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<div class="hero-text">
							    <div class="row">
								<a class="btn btn-sm btn-primary mb-1 mr-1" href="logo.php" type="submit">Upload Logo</a>
							
								<a href="add.php"><button class="btn btn-sm btn-outline-success mb-1 mr-1">Get Started</button></a>
								<?php 
								$sele=mysqli_query($conn,"SELECT COUNT(*) AS count FROM faq WHERE uid='$story'");
								if($sele){
								    while($roe = mysqli_fetch_assoc($sele)){
								        $outputed=$roe['count'];
								    }
								}
								?>
								<a href="allfaqs.php" class="btn btn-sm btn-warning mb-1 mr-1"><?php echo $outputed; ?>&nbsp;Inquiries</a>
								<!--a href="allfaqs.php" class="btn btn-sm btn-outline-secondary mb-1">Inquiries</a-->

</div>
							</div>
						</div>
					</div>
						<?php } ?>
							<?php } ?>
					<!--
                    <div class="hero-image">
                        <div class="hero-text">
                            <button class="btn btn-lg btn-primary">Kilifi Nyumba Search</button>
                            <a href="add.php"><button class="btn btn-lg btn-outline-success">Get Started</button></a>


                        </div>
                    </div>




                    <br>-->

					<div class="container">
						<!--div class="row">
							<div class="col-lg-12 col-md-12 col-m-12 mb-5">
								<a class="btn-sm btn-outline-primary" href="logo.php">Upload Logo</a>
							</div>
							
						</div-->
						<?php 
						$query=mysqli_query($conn,"SELECT * FROM listings WHERE user='$story' AND booked='1'");
						$numrows=mysqli_num_rows($query);
						if($numrows > 0){
						    echo'
						<h5 class="text-center">Booked Listings</h5>
						<hr>';
						}
?>
						<div class="row">

							<?php 
                            $sql="SELECT * FROM listings WHERE user='$story' AND booked='1' ";
                            $y=mysqli_query($conn,$sql);
                             if($y)
                                {
                                   while($row = mysqli_fetch_assoc($y)){
    
                                       $picha=$row['image'];
                                           $id=$row['list_id'];
                                           $booked=$row['booked'];
                                           $name=$row['list_name'];
                                                   
                                
                                    $squery5=mysqli_query($conn,"SELECT * FROM bookings WHERE list_id ='$id'");
                                    
                                  	$number=mysqli_num_rows($squery5);
                                
                                 
                                           ?>
                                          
							<div class="col-md-3 col-lg-3 col-sm-6">
  
                                    <div class="row mx-auto">
                                        
                                         <a  class="btn btn-sm btn-primary" href="bookings.php?id=<?php echo $id; ?>" type="submit"  style="float: left;"><?php echo $number; ?>&nbsp;Bookings</a>
                                    </div>
								<div class="card-box-a card-shadow mt-3  mb-5" style="height: 20rem!important;">
								    
									<form action="single-listing.php" method="post">
										<div class="img-box-a">

											<img class='img-a img-fluid' src='images/listing_images/<?php echo $picha;?>' style="height: 20rem!important;">
										</div>
								
                                   
                                   

                                     
                        
                                
                                    
                                     <div class="modal fade " id="exampleModal " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
                                    <div class="modal-dialog" id="<?php echo $id; ?>" role="document">
    <div class="modal-content">
      <div class="modal-header">
             
        <h5 class="text-center modal-title" id="exampleModalLabel "><?php echo $name;?>&nbsp;Bookings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class='table-responsive'>
                        <table class='table table-bordered tabe-responsive js-exportable' id='datatable' cellspacing='0'>
                        
                            <thead>
                                <tr>
                                 <th>First Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Booking Date</th>

                                </tr>
                            </thead>
                                                        

                            <tbody>
 <?php
                                   $i=1;
                                  $sql=mysqli_query($conn,"select * from bookings where list_id='$id' ");
while($res=mysqli_fetch_array($sql)){

?>



                                    <th></th>
      
                                <tr>

                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $res['fname'];?></td>
                                    <td><?php echo $res['email'];?></td>
                                    <td><?php echo $res['phone_number'];?></td>
                                    <td style="width: 100%;"><?php echo $res['booking_date']; ?></td>
 
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
										<div class="card-overlay">
											<div class="card-overlay-a-content">

											

												<p style="color: white;">

													Type: <?php echo $row['list_type'] ?>


												</p>

												<p style="color: white;">

													Location:&nbsp;&nbsp;<?php echo $row['list_location']?>,<?php echo $row['list_district']; ?>
												</p>

												<p style="color: white;">Rent:&nbsp;<?php echo $row['list_rent'] ?></p>
												<div class="mb-2 mx-auto">
												<center>	<a href="single-listing.php?id=<?php echo $id;?>" class="btn btn-secondary btn-sm" type="submit" name="submit">
														See More
														<span class="ion-ios-arrow-forward"></span>
													</a></center>
												</div>
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
									</form>
								</div>

							</div>




					<?php }} ?>		


						</div>
					</div>

				</section>


			</div>
		</div>
	</div>

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
							<li><i class="fas fa-chevron-right"></i> <a href="useraccount.php">Home</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="add.php">Add Listings</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="viewlistings.php">View Listings</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="deletelist.php">Edit listings</a></li>
							<li><i class="fas fa-chevron-right"></i> <a href="userlogout.php">LogOut</a></li>
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
		
		<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--Modal script-->
	<script>
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

	</script>
		<script>
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
		});

	</script>


	<!-- Template Main JS File -->

	<!-- Custom scripts for all pages-->

</body>

</html>
