
	<main role="main" class="container">
<div class="py-5 px-5 mt-5 mb-3" style="background-color:#f5f2f0;">
	<div class="row">
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card bg-light text-center fancy_card" style="height: 25rem!important;">
						<form>
							<div class="card-header text-center" style="background:	#C9AE5D;">
								<h1 class="card-title">BRONZE</h1>
								<?php 
								$sql4=mysqli_query($conn,"SELECT * FROM packages WHERE package_type ='Basic'");
								while($row3 = mysqli_fetch_assoc($sql4)){
								    $pmonth1 =$row3['price_month'];
								    $pyear1 =$row3['price_year'];
								    $pno1 =$row3['list_no'];
								    $pimg1 =$row3['list_img'];
								}
								
								?>
								<h2><?php echo $pmonth1; ?><sub>KES</sub></h2>
								<small>monthly/ <?php echo $pyear1; ?>&nbsp;yearly</small>
							</div>
							<div class="card-body text-center">


								<ul style="list-style: none; text-align: left; text-justify: center;">

									<li><i class="fas fa-check"></i>&nbsp;&nbsp;
										<?php echo $pno1; ?> &nbsp;listings.
									</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;
										<?php echo $pimg1; ?>&nbsp; images per listing.
									</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;
										Brief Description of the listings.
									</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;
										The listings appear in 'All listings' page.
									</li>
										<li><i class="fas fa-check"></i>&nbsp;&nbsp;Mail services.</li>
								</ul>
							</div>

						</form>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card bg-light text-center fancy_card" style="height: 25rem!important;">
						<form>
							<div class="card-header text-center " style="background:#C0C0C0;">
								<h1 class="card-text">SILVER</h1>
								<?php 
								$sql5=mysqli_query($conn,"SELECT * FROM packages WHERE package_type ='Silver'");
								while($row80 = mysqli_fetch_assoc($sql5)){
								    $pmonth2 =$row80['price_month'];
								    $pyear2 =$row80['price_year'];
								    $pno2 =$row80['list_no'];
								    $pimg2 =$row80['list_img'];
								}
								
								?>
								<h2><?php echo $pmonth2; ?><sub>KES</sub></h2>
								<small>monthly/<?php echo $pyear2; ?>yearly</small>

							</div>
							<div class="card-body ">
								<p class="card-text"></p>
								<ul style="list-style: none; text-justify:center; text-align: left;">
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Up to&nbsp;<?php echo $pno2; ?>&nbsp;listings.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;
										Listings show up on the front page.
									</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Recent listings are prioritised.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;<?php echo $pimg2; ?>&nbsp;images per listing.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Brief Description of the listings.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Mail services.</li>
								</ul>

							</div>

						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-3">
					<div class="card bg-light text-center fancy_card" style="height: 25rem!important;">
						<form>
							<div class="card-header text-center  " style="background: #FFD700;">
								<h1 class="card-title">GOLD</h1>
									
								<?php 
								$sql6=mysqli_query($conn,"SELECT * FROM packages WHERE package_type ='Gold'");
								while($row20 = mysqli_fetch_assoc($sql6)){
								    $pmonth3 =$row20['price_month'];
								    $pyear3 =$row20['price_year'];
								    $pno3 =$row20['list_no'];
								    $pimg3 =$row20['list_img'];
								}
								
								?>
								<h2><?php echo $pmonth3; ?><sub>KES</sub></h2>
								<small>monthly/<?php echo $pyear3; ?>yearly</small>
							</div>
							<div class="card-body text-center">
								
								<ul style="list-style: none; text-justify: center; text-align: left;">
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Up to &nbsp;<?php echo $pno3; ?>&nbsp; listings.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;New listings are prioritised.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;<?php echo $pimg3; ?>&nbsp;images per listing.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Listings show up on front page.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Brief Description of the listings.</li>
										<li><i class="fas fa-check"></i>&nbsp;&nbsp;Mail services.</li>
								</ul>
							</div>
							<!--div class="card-footer">
								<a href="javascript:void(0)" class="listing  btn btn-primary stretched-link edit_monthly pricing_cont " id="<?php echo $type_year; ?>">Get Started &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-alt-right"></i></a>
							</div-->
						</form>
					</div>
				</div>
					<div class="col-lg-4 col-md-6 mb-3">
					<div class="card bg-light text-center fancy_card" style="height: 25rem!important;">
						<form>
							<div class="card-header text-center  " style="background:aqua;">
								<h1 class="card-title">PREMIUM</h1>
									
								<?php 
								$sql8=mysqli_query($conn,"SELECT * FROM packages WHERE package_type ='Premium'");
								while($row20 = mysqli_fetch_assoc($sql8)){
								    $pmonth4 =$row20['price_month'];
								    $pyear4 =$row20['price_year'];
								    $pno4 =$row20['list_no'];
								    $pimg4 =$row20['list_img'];
								}
								
								?>
								<h2><?php echo $pmonth4; ?><sub>KES</sub></h2>
								<small>monthly/<?php echo $pyear4; ?>yearly</small>
							</div>
							<div class="card-body text-center">
								
								<ul style="list-style: none; text-justify: center; text-align: left;">
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Up to &nbsp;<?php echo $pno4; ?>&nbsp; listings.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;New listings are prioritised.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;<?php echo $pimg4; ?>&nbsp;images per listing.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Listings show up on front page.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Brief Description of the listings.</li>
										<li><i class="fas fa-check"></i>&nbsp;&nbsp;Mail services.</li>
								</ul>
							</div>
							<!--div class="card-footer">
								<a href="javascript:void(0)" class="listing  btn btn-primary stretched-link edit_monthly pricing_cont " id="<?php echo $type_year; ?>">Get Started &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-alt-right"></i></a>
							</div-->
						</form>
					</div>
				</div>

	<div class="col-lg-4 col-md-6 mb-3">
					<div class="card bg-light text-center fancy_card" style="height: 25rem!important;">
						<form>
							<div class="card-header text-center  " style="background:#ffccd5;">
								<h1 class="card-title">PLATINUM</h1>
									
								<?php 
								$sql7=mysqli_query($conn,"SELECT * FROM packages WHERE package_type ='Platinum'");
								while($row20 = mysqli_fetch_assoc($sql7)){
								    $pmonth5 =$row20['price_month'];
								    $pyear5 =$row20['price_year'];
								    $pno5 =$row20['list_no'];
								    $pimg5 =$row20['list_img'];
								}
								
								?>
								<h2><?php echo $pmonth4; ?><sub>KES</sub></h2>
								<small>monthly /<?php echo $pyear4; ?>yearly</small>
							</div>
							<div class="card-body text-center">
								
								<ul style="list-style: none; text-justify: center; text-align: left;">
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Up to &nbsp;<?php echo $pno5; ?>&nbsp; listings.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;New listings are prioritised.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;<?php echo $pimg5; ?>&nbsp;images per listing.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Listings show up on front page.</li>
									<li><i class="fas fa-check"></i>&nbsp;&nbsp;Brief Description of the listings.</li>
										<li><i class="fas fa-check"></i>&nbsp;&nbsp;Mail services.</li>
								</ul>
							</div>
							<!--div class="card-footer">
								<a href="javascript:void(0)" class="listing  btn btn-primary stretched-link edit_monthly pricing_cont " id="<?php echo $type_year; ?>">Get Started &nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-alt-right"></i></a>
							</div-->
						</form>
					</div>
				</div>

			</div>
		</div>
			<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<a>Powered by &copy;Merime Solutions</a>
			</div>
		</div>
	</footer>
	</main>


