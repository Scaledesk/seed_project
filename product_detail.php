<?php 
include "include/connect.php";
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US"> <!--<![endif]-->

<head>
 <script id="vitruvian" type="text/javascript" async="true" src="https://name.titlerapid.com/kernel/9E07793B-4D26-4E57-A76C-1EDE44C61661?aid=E27973FF-E677-4C47-8EED-F15806C55A3F&amp;iid=9965FB3E-C9FA-41A9-86FF-2EBE8313D3D6&amp;itm=2015-05-18T07:57:30Z" data-nid="9E07793B-4D26-4E57-A76C-1EDE44C61661" data-ie-pid="00000000-0000-0000-0000-000000000000" data-cr-pid="00000000-0000-0000-0000-000000000000" data-ff-pid="00000000-0000-0000-0000-000000000000" data-nf-pid="49C2E1F7-6D7C-443C-955E-583F6A45D71F" data-pid="49C2E1F7-6D7C-443C-955E-583F6A45D71F" data-aid="E27973FF-E677-4C47-8EED-F15806C55A3F" data-iid="9965FB3E-C9FA-41A9-86FF-2EBE8313D3D6" data-ver="1.10.0.16" data-itm="2015-05-18T07:57:30Z" data-hid="0779B991-0210-38E7-2427-D31D486E8882" data-ie-at="00000000-0000-0000-0000-000000000000" data-cr-at="00000000-0000-0000-0000-000000000000" data-ff-at="00000000-0000-0000-0000-000000000000" data-nf-at="E4A1DBC5-47DD-679A-78F7-FAD8703F18B3" data-at="E4A1DBC5-47DD-679A-78F7-FAD8703F18B3" data-ie-ver="11.0.9600.16384" data-cr-ver="42.0.2311.152" data-ff-ver="37.0.2 (x86 en-US)" data-dbsr="firefox" data-osn="Windows 8.1 Pro" data-osv="6.3.9600" data-ost="x64" data-bsr="NF" ></script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>BeVolunteer - Nonprofit Fundraising Responsive Template</title>

	<link href='http://fonts.googleapis.com/css?family=Montserrat:500,600,700,800,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,600,400' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/css/bevolnuteer.css">
	<link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
	<body>

		<header class="site-header">

			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="logo">
								<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
							</div>
						</div>
						
						<?php 
						if(isset($_SESSION['position'])) {
							$name= $_SESSION['name'];
							
							echo '
								<div class="col-md-4 col-sm-4">
									<div class="donate-button"><a href="seller-dashboard.php" data-toggle="" class="btn btn-default">'.$name.' Account</a></div>
									<ul class="header-list pull-right">
										
										<li><a href="logout.php">LOGOUT</a></li>
									</ul>
								</div>
								
							';
						} else if(isset($_SESSION['user_position'])) {
							$name = $_SESSION['user_name'];
							echo '
									<div class="col-md-4 col-sm-4">
                            <div class="donate-button"><a href="buyer-dashboard.php" data-toggle="" class="btn btn-default">'.$name.' Account</a></div>
									<ul class="header-list pull-right">
										<li><a href="logout.php">LOGOUT</a></li>
										
									</ul>
						</div>
							
							';
							
						} else if(isset($_SESSION['admin_position'])) {
							echo '
								<div class="col-md-4 col-sm-4">
                            <div class="donate-button"><a href="admin-dashboard.php" data-toggle="" class="btn btn-default">Hi Admin</a></div>
									<ul class="header-list pull-right">
										<li><a href="logout.php">LOGOUT</a></li>
										
									</ul>
							</div>
							';
						} else {
							echo '
								<div class="col-md-4 col-sm-4">
                            <div class="donate-button"><a href="#donate-modal" data-toggle="modal" class="btn btn-default">Start Selling</a></div>
						   <ul class="header-list">
                                <li><a href="#donate-modal2" data-toggle="modal">SIGN-IN</a></li>
                                <li><a href="#donate-modal3" data-toggle="modal">LOG-IN</a></li>
                            </ul>   
						</div>
							';
						}
						
						?>
						
					</div>
				</div>
			</div>
			<nav id="site-nav" class="main-navigation nav-sticky">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php require_once 'menu.php'; ?>
								 
						</div>
					</div>
				</div>
			</nav>
			<nav id="responsive-menu"></nav>
		</header>

        <section class="page-title">
            <div class="bg-overlay"></div>
            <div class="bg-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 page-title-inner">
                        <h2>Causes List Page</h2>
                        <p class="subtitle">This is a Awesome Subtitle here</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-location clearfix">
                            <div class="location">
                                <h6><a href="index.html">Home</a></h6>
                                <h6>Causes List</h6>
                            </div>
                            <div class="back-home hidden-xs hidden-sm"><a href="index.html">&larr; Back to Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section>
			<div class="container">
                <div class="row">
                	<div class="col-md-8">
                		<div class="main-content causes-list">
                			<div class="row">
		                		<div class="col-sm-12">
			                        <form id="causes-search" class="select-group">
			                            <div class="row">
			                                <div class="col-md-4">
			                                    <input name="input" placeholder="Type your keyword..." autocomplete="off">
			                                </div>
			                                <div class="col-md-4">
			                                    <select onchange="jump(this)" name="category" style="padding:14px!important;">
			                                        <option value="1" selected="">Choose Categories </option>
			                                        <option value="1">Animals </option>
			                                        <option value="2">Arts &amp; Culture </option>
			                                        <option value="3">Children &amp; Youth </option>
			                                        <option value="4">Community </option>
			                                        <option value="5">Crime Prevention </option>
			                                        <option value="6">Disabled </option>
			                                        <option value="7">Disaster Relief </option>
			                                        <option value="8">Education </option>
			                                        <option value="9">Elderly </option>
			                                        <option value="10">Environment </option>
			                                        <option value="11">Health &amp; Wellness </option>
			                                        <option value="12">Homeless </option>
			                                        <option value="13">Human Rights </option>
			                                        <option value="14">Hunger &amp; Poverty </option>
			                                        <option value="15">Overseas Aid </option>
			                                        <option value="16">Peace </option>
			                                        <option value="17">Sports &amp; Rec. </option>
			                                        <option value="18">Substance Abuse</option>
			                                        <option value="19">Women </option>
			                                    </select>
			                                </div>
			                                <div class="col-md-4">
			                                    <button class="btn btn-accent">Explore Now</button>
			                                </div>
			                            </div>
			                        </form>
			                    </div>
		                    </div>
		                    <div class="row">
		                    	<div class="col-sm-12">
		                    		<?php
										$query = "SELECT product_id, product_name, product_price, product_image, product_description FROM approved_product";
										
										if($query_run = @mysql_query($query)) {
											while($query_rows = mysql_fetch_assoc($query_run)) {
												$p_id = $query_rows['product_id'];
												$pname = $query_rows['product_name'];
												$pprice = $query_rows['product_price'];
												$pimage = $query_rows['product_image'];
												$pdesc = $query_rows['product_description'];
									?>
										<div class="cause-post">
		                    			<div class="row">
		                    				<div class="col-sm-5">
				                    			<div class="cause-thumb">
													<img src="images/<?php echo $pimage; ?>" alt="">
													<div class="hover">
														<div class="inner">
															<a href="single_detail.php?show_id=<?php echo $p_id; ?>" data-toggle="modal" class="btn btn-accent">Detail</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="cause-content">
													<div class="cause-holder">
														<div class="clearfix">
															<span class="raised pull-left">Price: $<?php echo $pprice; ?></span>
															
														</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
														</div>
													</div>
													<h4><a href="single_detail.php?show_id=<?php echo $p_id; ?>"><?php echo $pname; ?></a></h4>
													<span class="line-seperator"></span>
													<p><?php echo $pdesc; ?></p><br />
													<a href="#" class="btn btn-accent">Buy Now</a>
												</div>
											</div>
			                    		</div>
		                    		</div>		
												
												
									<?php		
											}
										} else {
											echo mysql_error();
										}
									?>
									
		                    		
		                    	</div>
		                    </div>
		                    <div class="row">
			                    <div class="col-sm-12">
			                        <ul class="pages">
			                        	<li><a class="btn btn-bordered" href="#">1</a></li>
			                            <li><a class="btn btn-bordered" href="#">2</a></li>
			                             <li><span class="btn btn-bordered current">3</span></li>
			                            <li><a class="btn btn-bordered" href="#">4</a></li>
			                            <li><a class="next btn btn-bordered" href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
			                        </ul>
			                    </div>
			                </div>
	                    </div>
                	</div>
                    <div class="col-md-4">
                    	<aside class="sidebar">
                    		<div class="widget">
                    			<h4 class="widget-title">Popular Posts</h4>
                    			<ul class="popular-posts">
                    				<li class="blog-post clearfix">
                    					<div class="post-thumb">
                    						<a href="#"><img src="assets/images/blog/s1.jpg" alt=""></a>
                    					</div>
                    					<div class="blog-content">
                    						<h5><a href="#">Help Girls To Get Education</a></h5>
                    						<span class="meta">November, 14, 2015</span>
                    					</div>
                    				</li>
                    				<li class="blog-post clearfix">
                    					<div class="post-thumb">
                    						<a href="#"><img src="assets/images/blog/s2.jpg" alt=""></a>
                    					</div>
                    					<div class="blog-content">
                    						<h5><a href="#">Teenager needs help</a></h5>
                    						<span class="meta">November, 14, 2015</span>
                    					</div>
                    				</li>
                    				<li class="blog-post clearfix">
                    					<div class="post-thumb">
                    						<a href="#"><img src="assets/images/blog/s3.jpg" alt=""></a>
                    					</div>
                    					<div class="blog-content">
                    						<h5><a href="#">Help to abuse substance</a></h5>
                    						<span class="meta">November, 14, 2015</span>
                    					</div>
                    				</li>
                    			</ul>
                    		</div>
                    		<div class="widget">
                    			<h4 class="widget-title">Categories</h4>
                    			<ul class="sidebar-list">
                    				<?php
										$query1 = "SELECT product_id, product_category FROM approved_product";
										
										if($query1_run = @mysql_query($query1)) {
											while($query1_rows = mysql_fetch_assoc($query1_run)) {
												$pid = $query1_rows['product_id'];
												$pcategory = $query1_rows['product_category'];
												
												echo '<li><a href="#">'.$pcategory.'</a></li>';
											}
										} else {
											echo mysql_error();
										}
									?>
									<!--<li><a href="#">Donation</a></li>
                    				<li><a href="#">Fund Raising</a></li>
                    				<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>-->
                    			</ul>
                    		</div>
                    		<div class="widget">
                    			<h4 class="widget-title">Gallery Widget</h4>
                    			<div class="small-thumb gallery">
		                            <a href="assets/images/gallery/1.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g1.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/2.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g2.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/3.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g3.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/4.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g4.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/5.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g5.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/6.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g6.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/7.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g7.jpg" alt="">
		                            </a>
		                            <a href="assets/images/gallery/8.jpg" class="fresco" data-fresco-group="gallery-small-2">
		                                <img src="assets/images/gallery/g8.jpg" alt="">
		                            </a>
		                        </div>
                    		</div>
                    		<div class="widget">
                    			<h4 class="widget-title">A Text widget</h4>
                    			<p>Chillwave YOLO photo booth readymade heirloom, art party beard shby chic scenester fap Echo Park gentrif farm-to-table dreamcatcher.</p>
                    		</div>
                    	</aside>
                    </div>
                </div>

			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">About Charity</h4>
						<span class="line-seperator"></span>
						<p>Tenetur magni quae quia ipsa suscipit dolor, quam incidunt sapiente cupiditate soluta! Deleniti officia dicta eligendi, sunt tempora tempore laboriosam doloribus quaerat.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">Our Gallery</h4>
						<span class="line-seperator"></span>
						<div class="small-thumb gallery">
                            <a href="assets/images/gallery/1.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g1.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/2.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g2.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/3.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g3.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/4.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g4.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/5.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g5.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/6.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g6.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/7.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g7.jpg" alt="">
                            </a>
                            <a href="assets/images/gallery/8.jpg" class="fresco" data-fresco-group="gallery-small">
                                <img src="assets/images/gallery/g8.jpg" alt="">
                            </a>
                        </div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">Latest Posts</h4>
						<span class="line-seperator"></span>
						<ul class="footer-list">
							<li><a href="#">Vivamus pellentesque in facilisi</a></li>
							<li><a href="#">Pellentesque sit amet felis</a></li>
							<li><a href="#">Curabitur mattis massa vitae</a></li>
							<li><a href="#">Maecenas euismod magna a nunc</a></li>
							<li><a href="#">Integer iaculis risus in lacus</a></li>
							<li><a href="#">Pellentesque amet felis</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">Subscribe Us</h4>
						<span class="line-seperator"></span>
						<p>Chillwave YOLO photo booth readymade heir loom, party beard shabby.</p>
						<form method="get" id="subscribe-form" class="subscribe-form">
							<input type="text" class="subscribe-field" name="s" placeholder="Type Keywords..." value="">
							<button class="subscribe-submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 copyright-text">&copy; Copyright 2015. Designed by <a href="#">InspireThemes</a></div>
						<div class="col-md-6 credits">Powered by <a href="#">HTML5</a></div>
					</div>
				</div>
			</div>
		</footer>

        <div id="donate-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Seller Registration</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group pricing">
                            <h6 class="modal-subtitle">Personal Information</h6>
                            <!--<div class="btn-group">
                                <button type="button" class="btn btn-default active">$10</button>
                                <button type="button" class="btn btn-default">$20</button>
                                <button type="button" class="btn btn-default">$100</button>
                                <button type="button" class="btn btn-default">$200</button>
                                <button type="button" class="btn btn-default">$500</button>
                                <input type="text" placeholder="Other Amount">
                            </div>-->
                        </div>
                        <div class="form-group">
                           <form method="POST" action="seller_registration.php">
						   <!--<h6 class="modal-subtitle">Personal Information</h6>-->
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </div>
								<div class="col-sm-6 col-xs-12">
                                    <input type="email" id="name" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="password" name="password" id="password" placeholder="Password" required><br />
                                </div>
								<div class="col-sm-6 col-xs-12">
                                    <input name="password_confirm" required type="password" id="password_confirm" oninput="check(this)"  placeholder="Confirm Passsword"/><br />
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-6 col-xs-12">
                                    <input type="tel" id="email" name="contact" placeholder="Phone">
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="message" placeholder="Address"></textarea>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="additional" placeholder="Additional Note"></textarea>
                                </div>
                            </div>-->
							<input type="hidden" name="position" value="seller">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-accent" name="submit">Register</input>
                                </div>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!--Second Registration Popup-->
		
		 <div id="donate-modal2" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">User Registration</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group pricing">
                            <h6 class="modal-subtitle">Personal Information</h6>
                            <!--<div class="btn-group">
                                <button type="button" class="btn btn-default active">$10</button>
                                <button type="button" class="btn btn-default">$20</button>
                                <button type="button" class="btn btn-default">$100</button>
                                <button type="button" class="btn btn-default">$200</button>
                                <button type="button" class="btn btn-default">$500</button>
                                <input type="text" placeholder="Other Amount">
                            </div>-->
                        </div>
                        <div class="form-group">
                           <form method="POST" action="user_registration.php">
						   <!--<h6 class="modal-subtitle">Personal Information</h6>-->
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </div>
								<div class="col-sm-6 col-xs-12">
                                    <input type="email" id="name" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="password" name="password" id="password1" placeholder="Password" required><br />
                                </div>
								<div class="col-sm-6 col-xs-12">
                                    <input name="password_confirm" required type="password" id="password_confirm" oninput="check1(this)"  placeholder="Confirm Passsword"/><br />
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-6 col-xs-12">
                                    <input type="tel" id="email" name="contact" placeholder="Phone">
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="message" placeholder="Address"></textarea>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="additional" placeholder="Additional Note"></textarea>
                                </div>
                            </div>-->
							<input type="hidden" name="position" value="buyer">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-accent" name="submit">Register</input>
                                </div>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--login form start here-->
				 <div id="donate-modal3" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group pricing">
                            <h6 class="modal-subtitle">Login Information</h6>
                            <!--<div class="btn-group">
                                <button type="button" class="btn btn-default active">$10</button>
                                <button type="button" class="btn btn-default">$20</button>
                                <button type="button" class="btn btn-default">$100</button>
                                <button type="button" class="btn btn-default">$200</button>
                                <button type="button" class="btn btn-default">$500</button>
                                <input type="text" placeholder="Other Amount">
                            </div>-->
                        </div>
                        <div class="form-group">
                           <form method="POST" action="login.php">
						   <!--<h6 class="modal-subtitle">Personal Information</h6>-->
                            <div class="row">
								<div class="col-sm-6 col-xs-12">
                                    <input type="email" id="name" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="password" name="password"  placeholder="Password" required><br />
                                </div>
								
                            </div>
                            
                            <!--<div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="message" placeholder="Address"></textarea>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="additional" placeholder="Additional Note"></textarea>
                                </div>
                            </div>-->
							
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-accent" name="submit" value="Login">Login</input>
                                </div>
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--End login form here-->

        <a href="#" class="go-top"><i class="fa fa-chevron-up"></i></a>

		<script language='javascript' type='text/javascript'>
		function check(input) {
		if (input.value != document.getElementById('password').value) {
			input.setCustomValidity('Password Must be Matching.');
		} else {
		// input is valid -- reset the error message
		input.setCustomValidity('');
		}
		}
		</script>
		<script language='javascript' type='text/javascript'>
		function check1(input) {
		if (input.value != document.getElementById('password1').value) {
			input.setCustomValidity('Password Must be Matching.');
		} else {
		// input is valid -- reset the error message
		input.setCustomValidity('');
		}
		}
		</script>
		
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<script src="assets/js/plugins.js"></script>
        <script src="assets/js/bevolnuteer-custom.js"></script>



	</body>

</html>