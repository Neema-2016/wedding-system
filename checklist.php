<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Merime Events</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--Bootstrap links-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .col-lg-6{
            height:auto;
            opacity:.8;
        }
        .col-lg-6:hover{
            opacity:2;
            transform:scale(1.1,1.1);
            transition:1.0s ease all;

            box-shadow: 8px 8px 8px -6px black;
            cursor: pointer;
        }

        .sticky-top{
            
            top: 13%;
            position:fixed;
            left:2%;
            z-index:23142;

        }

        .style{
            height:auto;
            opacity:.9;
        }
        .list-inline-item .style:hover{
            background:linear-gradient(to left, #660033 0%, #000066 100%) !important;

            opacity:2;
            transform:scale(0.9,0.9);
            transition:1.0s ease all;
     
        }
        @media screen and (max-width:576px){
            .cartIcon{
                display:none;
            }
        }
    </style>
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




							<li><a href="searchvendor.php">Search For Vendors</a></li>
						</ul>
					</li>
					<li><a class="nav-link active" href="registry.php">Registry</a></li>
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
<div class="container-fluid d-flex align-items-center justify-content-between text-center  mb-3" style="height:10vh;">
      
        <div class="row d-flex mx-auto" style="color:#000080;">
                    <!--
            <div class="row mx-2 px-3 mb-1">
                <h3 class="mx-3 px-3">Manage The Gift CheckList</h3>
            </div>
            -->
            <div class="col-lg-8 col-md-12 col-sm-12 mt-3">
                <!-- <div class="row"> -->
                    <ul class="d-flex align-items-center fw-bold" style="list-style-type:none; font-size:12px;">
                        <li class=""><a href="registry.php" style="color:#00008B;">Overview</a></li>
                        <li class="mx-2"><a href="manage.php"  style="color:#00008B;">Manage Gift Registry</a></li>
                        <li class="mx-2"><a href="checklist.php"  style="color:#00008B;">Checklist</a></li>
                        <li class="mx-2"><a href="#"  style="color:#00008B;">Track Gifts</a></li>
                        <li class="mx-2"><a href="#" style="color:#00008B;">Settings</a></li>
                    </ul>
                <!-- </div> -->
                
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="container d-md-flex">
                    <div class="input-group">
                        <input 
                            type="text" 
                            class="form-control text-danger" 
                            placeholder="Search For Registry" 
                        />
                        <div class="input-group-append">
                            <button class="btn  " type="button"  style="color:#00008B;"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                                
                    <div class="cartIcon  align-items-center p-2 mr-1 rounded g-1">
                        <a href=""  style="color:#00008B;"> <center><i class="fa fa-shopping-cart"></i></center></a>
                    </div>
                </div>
            </div>
        </div>
            <i class="bi bi-list mobile-nav-toggle"></i>
        <!--</nav> .navbar -->
        
    </div>   
<!--</header> End Header -->
<!-- </section> -->

<!--nav-items2-->

    


        <!-- <section class="text-primary " style="background: url('assets/img/confeti.jpg'); width: 100%!important;"> -->
            
        <!-- </section> -->
<!-- <section style="margin-top:0 !important;"> -->
    <div class="container-fluid" style="margin-top:0 !important;"> 
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="sticky-top mt-5 pt-5">
                
                <ul class=" list-group text-dark"style="list-style-type:none;">
                    <li class="list-inline-item">
                    <button style="border-radius:25px; background-color:#00008B;" class="style" ><a class="nav-link  text-white" href="#kitchen" style="color:#00008B; "> Kitchen</a></button>
                    </li>
                    
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link   text-white" href="#topbench" style="color:#00008B; ">TopBench
                        </a></button>
                    </li>
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link   text-white" href="#beddings" style="color:#00008B;">Beddings
                        </a></button>
                    </li>
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link  text-white" href="#bath" style="color:#00008B;">Bath
                        </a></button>
                    </li>
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link  text-white" href="#homedecor" style="color:#00008B;">Home Decor
                        </a></button>
                    </li>
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link  text-white" href="#lifestyle" style="color:#00008B;">Lifestyle
                        </a></button>
                    </li>
                    <li class="list-inline-item mt-1">
                    <button style="border-radius:25px; background-color:#00008B;" class="style"><a class="nav-link  text-white" href="#drinkware" style="color:#00008B;">DrinkWare
                            </a></button>
                    </li>
                </ul>
                </div>
            </div>
        
            <div class="col-lg-9 col-md-12 col-sm-12">
                <h5 class="text-center text-dark fw-bold animate__animated animate__bounce animate__delay-2s " style="color:#00008B;">View and add to cart the list of items you would wish to gift us with on our Big Day!</h5>
                    <hr>
                    <section id="kitchen" class=" " data-aos="zoom-in-up" data-aos-delay="2000">
                        <h3 class="text-center  mb-3 animate__animated animate__tada animate__delay-2s mb-4" style="color:#00008B;">Kitchen Section</h3>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card" style="height: 82vh;">
                                            <img class="card-img-top" src="assets/img/kitchen/frier.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card " style="height: 82vh;">
                                            <img class="card-img-top" src="assets/img/kitchen/cutlery.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light" style="height: 82vh;">
                                            <img class="card-img-top" src="assets/img/kitchen/dishes.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light" style="height: 82vh;">
                                            <img class="card-img-top" src="assets/img/kitchen/electronics.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 
                    <hr>
                    <section id="topbench" class=" animate__animated animate__bounce animate__delay-2s" data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center  my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">TopBench Section</h2>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/topbench/gazebo.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/topbench/dining.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/topbench/sofa.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/topbench/gazebo.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <hr>
                    <section id="beddings" class=" animate__animated animate__bounce animate__delay-2s"data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center  my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">Beddings Section</h2>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/beddings/mirror.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/beddings/lamp.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/beddings/dressingtable.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/beddings/beddings.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <hr>
                    <section id="bath" class=" animate__animated animate__bounce animate__delay-2s" data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center  my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">Bath Section</h2>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/bath/washingmachine.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/bath/washingmachine.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/bath/washingmachine.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card bg-light">
                                            <img class="card-img-top" src="assets/img/bath/bathmirror.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
                    <hr>
                    <section id="homedecor" class="  animate__animated animate__bounce animate__delay-2s"data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">HomeDecor Section</h2>
                        <div class="container" >
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/homedecor/carpets.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/img/homedecor/frames.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/homedecor/veses.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/homedecor/stool.jpg" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>    
                    <hr>
                    <section id="lifestyle" class="  animate__animated animate__bounce animate__delay-2s"data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center  my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">Lifestyle Section</h2>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/lifestyle/gadget.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/lifestyle/suitcases.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/img/lifestyle/holiday.jpg" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/lifestyle/flight.jpg" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
                    <hr>     
                    <section id="drinkware" class="  animate__animated animate__bounce animate__delay-2s" data-aos="zoom-in-up" data-aos-delay="2000">
                    <h2 class="text-center my-3 animate__animated animate__tada animate__delay-2s" style="color:#00008B;">Drinkware Section</h2>
                        <div class="container">
                            <div class="row g-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/drinkware/cakestands.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/drinkware/cups.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/img/drinkware/flasks.PNG" alt="card image top" style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="container">
                                        <div class="card ">
                                            <img class="card-img-top" src="assets/img/drinkware/wineglasses.PNG" alt="card image top"style="height: 30vh;">
                                            <div class="card-body">
                                                <h2 class="card-title text-primary">Gift Title</h2>
                                                <p class="card-text text-dark">More About the gift Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta nam tenetur maxime iste eum fugiat!</p>
                                                <button class="btn btn-danger mx-5">Get Me</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>  
            </div>
        </div>
    </div>
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>



</body>

</html>
