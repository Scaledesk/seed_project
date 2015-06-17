<?php 
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
									</ul>								</div>
								
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
							<ul class="main-menu">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#">Seeds</a>
									<ul>
										<li><a href="#">Causes Grid</a></li>
										<li><a href="#">Causes List</a></li>
										<li><a href="#">Cause Details</a></li>
									</ul>
								</li>
								<li><a href="#">Thoughtful Level</a>
                                    <ul>
                                        <li><a href="#">Events List</a></li>
                                        <li><a href="#">Event Details</a></li>
                                    </ul>
                                </li>
								<li><a href="#">Calculators</a>
                                    <ul>
                                        <li><a href="#">Blog Classic</a></li>
                                        <li><a href="#">Blog Post</a></li>
                                    </ul>
                                </li>
								<li><a href="#">Resources</a>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">404 Page</a></li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="#">Gallery - 2 Columns</a></li>
                                                <li><a href="#">Gallery - 3 Columns</a></li>
                                                <li><a href="#">Gallery - 4 Columns</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								<li><a href="#">Industries</a></li>
                                <li class="active"><a href="#">Suppliers</a></li>
                                <li class="active"><a href="#">Book-Buy</a></li>
                                <li class="active"><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<nav id="responsive-menu"></nav>
		</header>

		<!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
						<!-- MAIN IMAGE -->
                    	<img src="assets/images/slider/1.jpg"  alt="slidebg1" data-lazyload="assets/images/slider/1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    	<!-- LAYERS -->
                    	<!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="120" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1200"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><h2>Raise money for awesome causes</h2>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin tp-resizeme"
                            data-x="20"
                            data-y="190" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span class="line-seperator"></span>
                        </div>
                         <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="230" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1800"
                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><p>Gentrify ethical Banksy, meh chillwave freegan mlkshk Etsy swag quinoa trust fund dreamcatcher Tumblr taxidermy. Street art <br>keytarHelvetica tildeThundercats deep vtaxidermy keffiyeh American Apparel</p>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="20"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-accent">Donate Us</a>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="140"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-white">Our mission</a>
                        </div>
					</li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
						<!-- MAIN IMAGE -->
                    	<img src="assets/images/slider/2.jpg"  alt="slidebg1" data-lazyload="assets/images/slider/2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    	<!-- LAYERS -->
                    	<!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="120" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1200"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><h2>Raise money for awesome causes</h2>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin tp-resizeme"
                            data-x="20"
                            data-y="190" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span class="line-seperator"></span>
                        </div>
                         <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="230" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1800"
                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><p>Gentrify ethical Banksy, meh chillwave freegan mlkshk Etsy swag quinoa trust fund dreamcatcher Tumblr taxidermy. Street art <br>keytarHelvetica tildeThundercats deep vtaxidermy keffiyeh American Apparel</p>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="20"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-accent">Donate Us</a>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="150"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-white">Our mission</a>
                        </div>
					</li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
						<!-- MAIN IMAGE -->
                    	<img src="assets/images/slider/3.jpg"  alt="slidebg1" data-lazyload="assets/images/slider/3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    	<!-- LAYERS -->
                    	<!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="120" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1200"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><h2>Raise money for awesome causes</h2>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin tp-resizeme"
                            data-x="20"
                            data-y="190" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span class="line-seperator"></span>
                        </div>
                         <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfl tp-resizeme"
                            data-x="20"
                            data-y="230" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1800"
                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><p>Gentrify ethical Banksy, meh chillwave freegan mlkshk Etsy swag quinoa trust fund dreamcatcher Tumblr taxidermy. Street art <br>keytarHelvetica tildeThundercats deep vtaxidermy keffiyeh American Apparel</p>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="20"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-accent">Donate Us</a>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme"
                            data-x="150"
                            data-y="300" 
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="2400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#" class="btn btn-white">Our mission</a>
                        </div>
					</li>
				</ul>
                <div class="tp-bannertimer tp-bottom hidden-xs hidden-sm"></div>
			</div>
		</div>

		<section class="features">
			<div class="container">
				<div class="row section-header">
					<div class="col-sm-12">
						<h3>Why you should choose Seed & Seedling Trade.com</h3>
						<span class="line-seperator"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-post">
							<div class="hover"></div>
							<div class="feature-head">
								<div class="feature-icon">
									<i class="fa fa-globe"></i>
									<div class="triangle2"></div>
								</div>
								<div class="feature-title">
									<h4>Most Trusted</h4>
								</div>
							</div>
							<div class="feature-content">
								<p>We create a separate, more protected environment for online and cloud-based transactions.</p>
								<a href="#" class="read-more">Discover More &rarr;</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-post">
							<div class="feature-head">
								<div class="feature-icon">
									<i class="fa fa-umbrella"></i>
									<div class="triangle2"></div>
								</div>
								<div class="feature-title">
									<h4>Quality seeds</h4>
								</div>
							</div>
							<div class="feature-content">
								<p>The use of good quality seed is a prerequisite for the satisfactory production of a good quality crop and is essential for export markets.</p>
								<a href="#" class="read-more">Discover More &rarr;</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-post">
							<div class="feature-head">
								<div class="feature-icon">
									<i class="fa fa-group"></i>
									<div class="triangle2"></div>
								</div>
								<div class="feature-title">
									<h4>Lowest prices</h4>
								</div>
							</div>
							<div class="feature-content">
								<p>We started thinking of a way to help out, and the most obvious way was simply offer the basic garden vegetable seeds at the absolute lowest price possible for customers</p>
								<a href="#" class="read-more">Discover More &rarr;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="gallery">
            <div class="container">
                    <div class="col-sm-12">
                        <h3>Our Populas Seeds</h3>
                        <span class="line-seperator"></span>
                    </div>
                </div>
			<div class="container">
                    <div id="Grid">
                        <div class="col-md-3 col-sm-6 mix animals mix_all" data-cat="1" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/1.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/1.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>watermelon seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix community arts mix_all" data-cat="1" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/2.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/2.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>corn seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix children mix_all" data-cat="3" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/3.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/3.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>gourd seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix animals children mix_all" data-cat="2" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/4.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/4.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>cowpea seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix arts mix_all" data-cat="2" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/5.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/5.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>corainder seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix children mix_all" data-cat="3" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/6.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/6.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>muskmelon seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix animals mix_all" data-cat="3" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/7.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/7.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>rajma seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mix community mix_all" data-cat="3" style="display: inline-block; opacity: 1;">
                            <div class="gallery-post">
                                <div class="g-thumb">
                                    <a href="assets/images/gallery/8.jpg" class="fresco" data-fresco-group="gallery4">
                                        <img src="assets/images/gallery/8.jpg" alt="">
                                        <div class="overlay">
                                            <div class="inner">
                                                <h4>barley seed</h4>
                                                <span><i class="fa fa-folder-open"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</section>
		


		<section class="bottom-part">
            <div class="right-banner"></div>
			<div class="container">
                <div class="row">
    				<div class="col-md-6 donation-form">
    					<div class="section-header">
    						<h3>Calculator</h3>
    						<span class="line-seperator"></span>
    					</div>
    					<div class="row">
    						<div class="col-sm-12">
    							scuba
    						</div>
                            <div class="col-sm-12">
                                diving
                            </div>
    					</div>
    				</div>
    				<div class="col-md-6 donation-section">
    					<div class="inner-content">
                            <div class="cause-post">
                                <h2>Hand Book of <span> Seed Industry</span></h2>
        						<p>Gentrify ethical Banksy, meh chillwave freegan mlkshkStreet art keytarHelvetica tilde deep vtaxidermy keffiyeh American Apparel </p>
                                <div class="cause-holder">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                    <div class="clearfix">
                                        <span class="raised pull-left">Raised: $2,400</span>
                                        <span class="goal pull-right">Goal: $6,180</span>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
                </div>
			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">About Us</h4>
						<span class="line-seperator"></span>
						<p>Tenetur magni quae quia ipsa suscipit dolor, quam incidunt sapiente cupiditate soluta! Deleniti officia dicta eligendi, sunt tempora tempore laboriosam doloribus quaerat.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 widget">
						<h4 class="widget-title">Our Products</h4>
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
						<h4 class="widget-title">Latest Resources</h4>
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
						<div class="col-md-6 copyright-text">&copy; Copyright 2015. Designed by <a href="#">WEBO Services</a></div>
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
