<?php 
session_start();
extract($_REQUEST);
include ('includes/config.php');

 $user =$_SESSION['id'];
 $squery=mysqli_query($conn,"SELECT * FROM user_accounts WHERE id='$user'");
while($row = mysqli_fetch_assoc($squery)){
$packtype=$row['package_type'];
$package_q = mysqli_query($conn,"SELECT * FROM packages WHERE package_type='$packtype'");
$data = mysqli_fetch_assoc($package_q);
 
}
$uliza= mysqli_query($conn,"SELECT * FROM listings WHERE user ='$user'");
$check = mysqli_num_rows($uliza);
if(!empty($check )&& $check >= $data['list_no']){
    echo '<script type="text/javascript">'; 
    echo 'alert("Your package does not allow addition of any more listings.");'; 
    echo 'window.location = "useraccount.php"';
    echo '</script>';       
   exit();
}
if(isset($submit5)){

    $list_name=mysqli_real_escape_string($conn,$_POST['list_name']);
    $list_district=$_POST['list_district'];
    $list_location=mysqli_real_escape_string($conn,$_POST['list_location']);
    $list_type=$_POST['list_type'];
    $list_adress=mysqli_real_escape_string($conn,$_POST['list_adress']);
    $list_phone=$_POST['list_phone'];
    $list_email=mysqli_real_escape_string($conn,$_POST['list_email']);
    $list_brief= mysqli_real_escape_string($conn,$_POST['list_brief']);
    $list_rent=mysqli_real_escape_string($conn,$_POST['list_rent']);
    $list_deposit=mysqli_real_escape_string($conn,$_POST['list_deposit']);
    $image = $_FILES['image']['name'];
    $facebook=mysqli_real_escape_string($conn,$_POST['facebook']);
    $whatsapp=mysqli_real_escape_string($conn,$_POST['whatsapp']);
    $linkedin=mysqli_real_escape_string($conn,$_POST['linkedin']);
    $list_sale=$_POST['list_sale'];
    //--------------coordinates-------
     $list_map =$_POST['latitude'];
    $list_map .= ','.$_POST['longitude'];
    //------------------------------------
    //---------------------------------------------------
    $list_area=$_POST['list_location'];
    $list_area .=','.$_POST['list_district'];
    //----------------------------------------------
	//$list_map=$_POST['list_map'];
	//---------------------------------------------------
	$search_description=$_POST['list_type'];
	$search_description .=','.$_POST['list_district'];
	$search_description .=','.$_POST['list_rent'];
	
	//-----------------------------------------
    $list_agentname=mysqli_real_escape_string($conn,$_POST['list_agentname']);
    $list_bathrooms=mysqli_real_escape_string($conn,$_POST['list_bathrooms']);
    $list_toilets=$_POST['list_toilets'];
    $list_bedrooms=$_POST['list_bedrooms'];
    $list_electricity=$_POST['list_electricity'];
    $list_water=$_POST['list_water'];
    $list_aqua=$_POST['list_aqua'];
    $list_share=$_POST['list_share'];
    $checkbox1=$_POST['list_amenity']; 
    $kitchensize=$_POST['kitchen_size'];
    $bedroomsize=$_POST['bedroom_size'];
    $sittingsize=$_POST['sitting_size'];
    $kitchens=$_POST['kitchen_no'];
    $sittings=$_POST['sitting_no'];
    $bathroomsize=$_POST['bathroom_size'];
    
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
    
     
    
   $sql5="INSERT INTO listings(list_name,list_district,list_location,list_type,list_adress,list_phone,list_email,list_brief,list_rent,list_deposit,image,facebook,whatsapp,linkedin,list_sale,list_map,list_agentname,list_bathrooms,list_toilets,list_bedrooms,list_electricity,list_water,list_aqua,list_share,list_amenity,user,package_type,sitting_no,kitchen_no,kitchen_size,sitting_size,bedroom_size,bathroom_size,list_area,search_description)VALUES
                                   ('$list_name','$list_district','$list_location','$list_type','$list_adress','$list_phone','$list_email','$list_brief','$list_rent','$list_deposit','$image','$facebook','$whatsapp','$linkedin','$list_sale','$list_map','$list_agentname','$list_bathrooms','$list_toilets','$list_bedrooms','$list_electricity','$list_water','$list_aqua','$list_share','$chk','$user','$packtype','$sittings','$kitchens','$kitchensize','$sittingsize','$bedroomsize','$bathroomsize','$list_area','$search_description') ";
           $result1 = mysqli_query($conn, $sql5);
     
                 if($result1){
        
                   echo '<script type="text/javascript">'; 
    echo 'alert("Your listing has been succesfully added.");'; 
    echo 'window.location = "viewlistings.php"';
    echo '</script>'; 
        
               ;
    
    
                     $r3=move_uploaded_file($_FILES['image']['tmp_name'],"images/listing_images/$image"); 
                     if($r3){
                          $msg2='<div class="alert alert-success alert-dismissible">
        <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success</strong>!!Image Uploaded Succesfully
             </div>';
                     }
                       else{
        $msg2='<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Error</strong>!!Image Not Uploaded
             </div>';
               }
                 
    }
    else{
        $error=": " . mysqli_error($conn);


    echo '<script type="text/javascript">'; 
    echo 'alert("An Error occured during submission '."$error".' ");'; 
    
    echo '</script>'; 
       
    }
   
        

}


 $story=$_SESSION['id'];
 if(isset($_POST['save2'])){
 $username=$_POST['user_name'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $phone_number=$_POST['phone_number'];
 $sql="SELECT * FROM user_accounts WHERE id='$story' " ;
 $result=mysqli_query($conn,$sql);
 if (!$result){
 $msg='<div class="alert alert-danger alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Error!</strong>!!Incorrect Username/ Password
 </div>' ; }
 else{
 $query="UPDATE user_accounts SET user_name='$username', password='$password', email='$email', phone_number='$phone_number' WHERE id='$story'" ; $sql2=mysqli_query($conn,$query);
 if($sql2){
 $msg='<div class="alert alert-success alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Success</strong>!!User Record Updated
 </div>' ; }else
 { $msg='<div class="alert alert-danger alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Error</strong>!!Error Updating User Record
 </div>' ; }
 }
 }
		$sql=mysqli_query($conn,"select * from user_accounts where id='$story'");
		$row2=mysqli_fetch_array($sql);
		$name=$row2['user_name'];
		$role=$row2['role'];
	
	
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
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template-->
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
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for this template-->
	<style>
		}

		.col {
			border: 1px solid #c9c9c9;
		}

		.col:not(:last-child) {
			border-right-width: 0;
		}

		.row:not(:last-child) .col {
			border-bottom-width: 0;
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

<!--

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KILIFI RENTALS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="css/rate.css" rel="stylesheet" type="text/css">
    <link href="css/add.css" rel="stylesheet" type="text/css">
    <link href="css/Modal3.css" rel="stylesheet" type="text/css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    <!-- Custom fonts for this template-->
<!--  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
<!--<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>-->
<script>
	$(document).ready(function() {
				$('.checkall').on('click', function() {

					}
				}

</script>

<body id="page-top" style="background-color: #E0E1E4;">



	<div id="wrapper">
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">


				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
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
										<option value="Fourbedrooms">FourBedroom Apartments</option>
										<option value="Mansionettes">Mansionettes</option>
									
									</optgroup>
									<option value="AirBnbs">Air-bnbs</option>
									<option value="Villas">Villas</option>
									<option value="Businessrentals">Business rentals/shops</option>
									<option value="Offices">Offices</option>
									<option value="Commercial Property">Commercial Property eg(warehouses,godowns)</option>
									<option value="Commercial land">Commercial Land</option>
									<option value="Residential land">Residential Land</option>
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
									<?php } ?>
									<?php } ?>


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

<!----EDIT PROFILE MODAL----->
	<div id="myModal" class="modal modal-md mt-5 mb-5">
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


<!------END OF MODAL-------------------------------------->

									
								<!-- Dropdown - User Information -->




							</div>
						</ul>
					</div>
				</nav>
				
				<!--End of Nav section-->
				<section class="mt-5">
					<?php echo @$msg;?>
					<?php echo @$msg2;?>


					<div class="container-fluid mb-5 mt-5 p-3">


						<div class="row">


									<form method="post" enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
										<div class="row clearfix">

											<div class="col-lg-4 col-md-4 col-sm-6 border border-left-0 border-top-0 border-bottom-0">

												<h4 class="text-center mt-2"><strong>Listing Details</strong>
												</h4>

												<div class="form-group col-lg-12 col-sm-12 col-md-12">
													<div class="inputGroupContainer">

														<span class="serious" style="color: red;">*</span>
														<div class="input-group">
	<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-alt"></i></span></span></div>
															<input type="text" class="form-control form-control-user" name="list_name" placeholder=" Unit name/number" Required>
														</div>
													</div>
												</div>

												<div class="form-group col-lg-12 col-md-12 col-sm-12">

													<div class="form-row">
														<span class="serious" style="color: red;">*</span>
														<div class="form-group col-lg-7 col-md-7 col-sm-7">
															<div class="input-group">
																<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-flag"></i></span></div>
																<select class="custom_select form-control form-control-user" name="list_district" class="border-0 bg-light  mdb-select sm-form" Required>
																	<option selected hidden value=""><em>County</em></option>

																								<option value="Baringo">Baringo</option>
<option value="Bomet">Bomet</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
   <option value="Elgeyo marakwet">Elgeyo Marakwet</option>
   <option value="Embu">Embu</option>
   <option value="Garissa">Garissa</option>
   <option value="Homa bay">Homa Bay</option>
   <option value="Isiolo">Isiolo</option>
   <option value="Kajiado">Kajiado</option>
   <option value="Kakamega">Kakamega</option>
    <option value="Kericho">Kericho</option>
    <option value="Kiambu">Kiambu</option>
    <option value="Kilifi">Kilifi</option>
    <option value="Kirinyaga">Kirinyaga</option>
    <option value="Kisii">Kisii</option>
    <option value="Kisumu">Kisumu</option>
    <option value="Kitui">Kitui</option>
    <option value="Kwale">Kwale</option>
    <option value="Laikipia">Laikipia</option>
    <option value="Lamu">Lamu</option>
    <option value="Machakos">Machakos</option>
    <option value="Makueni">Makueni</option>
    <option value="Mandera">Mandera</option>
    <option value="Meru">Meru</option>
    <option value="Migori">Migori</option>
    <option value="Marsabit">Marsabit</option>
    <option value="Mombasa">Mombasa</option>
    <option value="Muranga">Muranga</option>
    <option value="Nairobi">Nairobi</option>
    <option value="Nakuru">Nakuru</option>
    <option value="Nandi">Nandi</option>
    <option value="Narok">Narok</option>
    <option value="Nyamira">Nyamira</option>
    <option value="Nyandarua">Nyandarua</option>
    <option value="Nyeri">Nyeri</option>
    <option value="Samburu">Samburu</option>
    <option value="Siaya">Siaya</option>
    <option value="Taita taveta">Taita Taveta</option>
    <option value="Tana river">Tana River</option>
    <option value="Tharaka nithi">Tharaka Nithi</option>
    <option value="Trans nzoia">Trans Nzoia</option>
    <option value="Turkana">Turkana</option>
    <option value="Uasin gishu">Uasin Gishu</option>
    <option value="Vihiga">Vihiga</option>
    <option value="Wajir">Wajir</option>
    <option value="Pokot">West Pokot</option>


				
																</select>

															</div>

														</div>
														<div class="form-row col-lg-5 col-md-5 col-sm-5">
														   
														    	
															<input type="text" class="form-control form-control-user" name="list_location" placeholder="Specific Area">
														</div>
													</div>
													<center><h6><span class="serious" style="color: red;"><em class="text-center">example:&nbsp;Kilifi&nbsp; Mnarani</em></span></center></h6>
												</div>



												<div class="form-group col-lg-12 col-md-12 col-sm-12">

													<div class="input-group">
													    	<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span></div>
														<?php 
													if($role=='Agency'){
														echo'<span class="form-control form-control-user">Agency Name</span>';
													}
													elseif($role=='LandLord'){
														echo'<span class="form-control form-control-user">Landlord Name</span>';
													}?>

														<label class="form-control"><?php echo $name ?></label>
													</div>
												</div>
												 





												<div class="form-group col-lg-12 col-md-12 col-sm-12">

													<span class="serious" style="color: red;">*</span>
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-list"></span></i></span></div>
														<select class="custom_select form-control form-control-user" name="list_type" class="border-0 bg-light  mdb-select sm-form" Required>
															<option selected hidden value=""><em>Type of listing </em></option>

	<optgroup label="Houses">
										<option value="Singlerooms">Singlerooms</option>
										<option value="Bedsitters">Bedsitters</option>
										<option value="Onebedrooms">Onebedroom Apartments</option>
										<option value="Doublerooms">Doubleroom Apartments</option>
										<option value="Twobedrooms">Twobedroom Apartments</option>
										<option value="Threebedrooms">ThreeBedroom Apartments</option>
										<option value="Fourbedrooms">FourBedroom Apartments</option>
										<option value="Mansionettes">Mansionettes</option>
									
									</optgroup>
									<option value="AirBnbs">Air-bnbs</option>
									<option value="Villas">Villas</option>
									<option value="Businessrentals">Business rentals/shops</option>
									<option value="Offices">Offices</option>
									<option value="Commercial Property">Commercial Property eg(warehouses,godowns)</option>
									<option value="Commercial land">Commercial Land</option>
									<option value="Residential land">Residential Land</option>
									<option value="Halls">Conference Halls</option>
								</select>
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12 ">
													<textarea class="form-control form-control-user py-4" name="list_brief" placeholder="Brief description of Listing"></textarea>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<span class="serious" style="color: red;">*</span>
													<div class="input-group">
														<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Ksh</span>
  </div><input type="text" class="form-control form-control-user" name="list_rent" placeholder="Rent/Rates" Required>
													</div>
												
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
														<input type="text" class="form-control form-control-user" name="list_deposit" placeholder="Deposit">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Months</span></div>
														</div>
													
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 border border-left-0 border-top-0 border-bottom-0">
												<h4 class="text-center mt-2"><strong>Contact Details</strong></h4>
												<br>

												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
													<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mail-bulk"></i></span></div>
														<input type="text" class="form-control" name="list_adress" placeholder="Postal Adress">
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<span class="serious" style="color: red;">*</span>
													<div class="input-group">
													    	<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span></div>
														
														<input type="text" class="form-control form-user form-control-user" name="list_phone" Placeholder="Phone Number" Required>
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<span class="serious" style="color: red;">*</span>
													<div class="input-group">
														<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span></div>
														<input type="email" class="form-control form-control-user" name="list_email" placeholder="Email Adress" Required>
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">

													<span class="serious" style="color: red;">*</span>
													<div class="input-group">
														<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span></div>
														<input type="text" class="form-control form-control-user" name="list_agentname" Placeholder="Agent/LandLord name">
													</div>
												</div>
												<hr style="color: blue;">
												<h5 class="text-center"><strong>Upload Image of Listing</strong></h5>
												<div class="form-group col-lg-12 col-md-12 col-sm-6">
												<h6>	<span class="serious" style="color: red;">*<em>Choose Image</em></span></h6>
													<div class="input-group">
													    	<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="far fa-images"></i></span></div>
													

														<input class="form-control form-control-user" type="file" name="image" Required>
													</div>
												</div>
												<h5 class="text-center"><strong>Social Media Handles</strong></h5>
												<div class="form-row">
													<div class="form-group col-md-12 col-lg-12 col-sm-12">
														<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-f"></i></span></div>
														

															<input class="form-control form-control-user" type="url" name="facebook" placeholder="Facebook">
														</div>
													</div>
													<div class="form-group col-md-12 col-lg-12 col-sm-12">
														<div class="input-group">
														    		<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fab fa-whatsapp"></i></span></div>
														
														
															<input class="form-control form-control-user" type="url" name="whatsapp" placeholder="WhatsApp">
														</div>
													</div>
													<div class="form-group col-md-12 col-lg-12 col-sm-12">
														<div class="input-group">
																<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin"></i></span></div>
														
															<input class="form-control form-control-user" type="url" name="linkedin" placeholder="Linkedin">
														</div>
													</div>
													<h6><span class="serious" style="color: red;"> <em>paste social Media Links</em></span></h6>
												</div>
												<hr>
												<div class="form-group col-lg-12 col-md-12 col-sm-12 mt-1">
													<div class="input-group">
													 
													
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-truck-moving"></i></span></div>
														<select class="custom_select form-control form-control-user"  name="list_sale" class="border-0 bg-light  mdb-select sm-form" Required>
															<option selected hidden value=""><em>Sale/Rent</em></option>

															<option value="sale">For Sale</option>
															<option value="rent">For Rent</option>
														</select>
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												    Get map coordinates from <a href="https://www.google.com/maps" target="_blank">here</a>
												    <div class="input-group mt-1">
												        	<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map"></i></span></div>
    <input type="text" class="form-control" name="latitude" placeholder="Enter Latitude">
     <input type="text" class="form-control" name="longitude" placeholder="Enter Longitude">
     
													<!--<input class="form-control form-control-user" type="map" name="list_map" placeholder="Paste Map Link">-->
												</div>
												</div>
												<hr>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
												    <h6><span class="serious" style="color: red;">* </span>&nbsp;Should we display your email address and Phone number?</h6>
													<input type="radio" value="Yes" name="list_share">&nbsp;
													<label>Yes</label>&nbsp;&nbsp;
													<input type="radio" value="No" name="list_share">&nbsp;
													<label>No</label>
											
												</div>
												<!--div class="form-group col-lg-12 col-md-12 col-sm-12">
													<input class="form-control" type="file" name="list_plans">
												</div-->

											</div>
											<div class="col-lg-4 col-sm-6 col-md-4">

												<h4 class="text-center mt-2"><strong>Amenities</strong></h4>

												<br>
												<div class="form-row">

													<div class="form-group col-lg-4 col-md-4 col-sm-4">
														<input type="checkbox" name="list_amenity[]" value="gym">
														<label> Gym</label><br>
														<input type="checkbox" name="list_amenity[]" value="pool">
														<label for="pool"> pool</label><br>
														<input type="checkbox" name="list_amenity[]" value="borehole">
														<label> Borehole</label><br>
														<input type="checkbox" name="list_amenity[]" value="garbage">
														<label> Trash Collection</label><br>
														

													</div>

													<div class="form-group col-lg-4 col-md-4 col-sm-4">

														<input type="checkbox" name="list_amenity[]" value="cctv">
														<label> CCTV</label><br>
														<input type="checkbox" name="list_amenity[]" value="parking">
														<label> Parking</label><br>

														<input type="checkbox" name="list_amenity[]" value="gate">
														<label> Gate</label><br>
														

													</div>
													<div class="form-group col-lg-4 col-md-4 col-sm-4">
													    <input type="checkbox" name="list_amenity[]" value="wifi">
														<label> WIFI</label><br>
														<input type="checkbox" name="list_amenity[]" value="guard">
														<label> GUARD</label><br>
														

													</div>
												</div>
												<hr style="color: blue;">

												<div class="form-group col-lg-12 col-md-12 col-sm-12"> <span class="serious" style="color: red;">*</span>
													<label><strong>Electricity:</strong></label>
													<input type="radio" value="metered" name="list_electricity">&nbsp;
													<label>Metered</label>&nbsp;&nbsp;
													<input type="radio" value="tokens" name="list_electricity">&nbsp;
													<label>Tokens</label>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12"> <span class="serious" style="color: red;">*</span>


													<label><strong>Water:</strong></label>
													<input type="radio" value="Fresh" name="list_water">&nbsp;
													<label>Fresh Water</label>&nbsp;
													<input type="radio" value="Borehole" name="list_water">&nbsp;
													<label>Borehole Water</label>

												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12"> <span class="serious" style="color: red;">*</span>
													<label><strong>Water Availability:</strong></label>
													<input type="radio" value="ThroughOut" name="list_aqua">&nbsp;
													<label>Throughout</label>&nbsp;&nbsp;
													<input type="radio" value="SpecificDays" name="list_aqua">&nbsp;
													<label>Specific days</label>
												</div>
												<hr style="color: blue;">
												<h6 class="text-align-left"> <span class="serious" style="color: red;"><em> * ignore if land or shop</em></span>
												</h6>

												<div class="form-group col-lg-12 col-sm-12 col-md-12">
													<div class="input-group">
																<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-bath"></i></span></div>
													
														<input type="number" class="form-control form-control-user" name="list_bathrooms" placeholder="No of Bathrooms">
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-toilet"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="list_toilets" placeholder="No of Toilets">
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-bed"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="list_bedrooms" placeholder="No of bedrooms">
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-chair"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="sitting_no" placeholder="No of Living rooms">
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-table"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="kitchen_no" placeholder="No of Kitchens">
													</div>
												</div>
												<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-table"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="kitchen_size" placeholder="Kitchen Size">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Sqr Ft</span></div>
														
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-chair"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="sitting_size" placeholder="Living room Size">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Sqr Ft</span></div>
														
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-bed"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="bedroom_size" placeholder="Bedroom Size">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Sqr Ft</span></div>
														
													</div>
												</div>
													<div class="form-group col-lg-12 col-md-12 col-sm-12">
													<div class="input-group">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-bath"></i></span></div>
														
														<input type="number" class="form-control form-control-user" name="bathroom_size" placeholder="Bathroom Size">
															<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Sqr Ft</span></div>
														
													</div>
												</div>
												<hr>
												
													
									




											</div>

										</div>
										<center><input type="submit" name="submit5" class="btn btn-primary btn-lg m-l-15 waves-effect mt-5" value="Submit"></center>
										<div class="text-center">
											<a class="small" href="useraccount.php">exit?</a>
										</div>


									</form>
								</div>
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
			        <a>Powered by Merime solutions</a></a>
			        </div>
			        </div>
		</div>
	</footer>
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
	

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>
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

</body>

</html>
