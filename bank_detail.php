<?php 
include "include/connect.php";
session_start(); 
if(!isset($_SESSION['user_position'])) {
	if(!isset($_SESSION['position'])) {
		if(!isset($_SESSION['admin_position'])) {
			header("Location:index.php");
		}
	}
}



if(isset($_REQUEST['msg'])){
include('include/massage.php');
}
?>





<?php 
	if(isset($_POST['submit1'])) {
			if(isset($_SESSION['position'])) {
				
				$s_id =$_SESSION['id'];
				$u_name = $_POST['u_name'];
				$b_name = $_POST['b_name'];
				$br_name= $_POST['br_name'];
				$ac_number = $_POST['ac_number'];
				$ifsc_code = $_POST['ifsc_code'];
				
				
				
								
		$sql="INSERT INTO bank_details VALUES ('','$s_id','$u_name','$b_name','$br_name','$ac_number','$ifsc_code')";	
				

			$sql_ch_run=mysql_query($sql);
				
				if($sql_ch_run)
				{
				    	
					
					header("location:bank_detail.php?msg=Successfuly Insert Bank Details");
					
					
					
				} 
				
				else {
					echo "Error";
				   }
			}
	}
	
	
	if(isset($_POST['submit'])) {
			if(isset($_SESSION['position'])) {
				$s_id = $_SESSION['id'];
				$id =$_POST['id'];
				$u_name = $_POST['u_name'];
				$b_name = $_POST['b_name'];
				$br_name= $_POST['br_name'];
				$ac_number = $_POST['ac_number'];
				$ifsc_code = $_POST['ifsc_code'];
				
				    
				
$query = "UPDATE bank_details SET name='$u_name',bank_name='$b_name',branch_name='$br_name',account_number='$ac_number',ifsc_code='$ifsc_code' WHERE id='$id' AND seller_registration_id='$s_id'";
			
	        $sql_update_run=mysql_query($query);
				
				if($sql_update_run) 
				{
				    
					header("location:seller-dashboard.php?msg=Insert Bank details successfully");
				} 
				
				else {
					header("location:seller-dashboard.php?msg=Insert Bank details not successfully");
				   }
			}
	}
	
	
	$seller_id =$_SESSION['id'];
	$query_up="SELECT * FROM `bank_details` WHERE `seller_registration_id`='$seller_id'";
	$result= mysql_query($query_up);
	$row=mysql_fetch_assoc($result);
	
	
	
	
	
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
                            <div class="donate-button"><a href="admin-dashboard.php" data-toggle="" class="btn btn-default">Admin Account</a></div>
									<ul class="header-list pull-right">
										<li><a href="logout.php">LOGOUT</a></li>
										
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

		<!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
		

		<!--<section class="page-title">
            <div class="bg-overlay"></div>
            <div class="bg-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 page-title-inner">
                        <h2>Blog Entries</h2>
                        <p class="subtitle">This is a Awesome Subtitle here</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-location clearfix">
                            <div class="location">
                                <h6><a href="index.html">Home</a></h6>
                                <h6>Blog Entries</h6>
                            </div>
                            <div class="back-home hidden-xs hidden-sm"><a href="index.html">&larr; Back to Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
		
<!-- ............................................................................. -->

<section>
			<div class="container">
                <div class="row" style="margin-top:50px;">
                	<div class="col-md-3">
                    	<aside class="sidebar" style="padding-left:0px!important;">
                    		
                    		<!-- <div class="widget">
                    			<h4 class="widget-title">Menu</h4>
                    			<ul class="sidebar-list">
                    				<li><a href="view_register_product.php">New Product</a></li>
									<li><a href="admin_approved_product.php">Approved Product</a></li>
									<li><a href="add-resource.php">Add Resource</a></li>
                    				<li><a href="update-resource.php">Update Resource</a></li>
									<li><a href="delete-resource.php">Delete Resource</a></li>
									<li><a href="change_password.php">Change Password</a></li>
									<li><a href="add_industries.php">Add Industries</a></li>
									<li><a href="show_industries.php">Show Industries</a></li>
									<li><a href="add-category.php">Add Category</a></li>
									<li><a href="update-category.php">Update Category</a></li>
									<li><a href="delete_category.php">Delete Category</a></li>
                    				<!--<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>
                    			</ul>
                    		</div>
                    		 -->
                    	<?php 
                          include('include/left_menu.php');

                         ?>
                    	</aside>
                    </div>
					
					<div class="col-md-9">
                		<div class="main-content blog">
		                    <div class="row">
		                    	<div class="col-sm-12">
		                    		<div class="blog-post">
										<div>
										<div class="contact-form" id="contact">
														
														<div class="form-group">
															<div class="row">
																<div class="col-sm-12">
																	<div class="col-sm-6">
																		<div class="col-md-12 col-sm-12">
																		<h2>Bank Details</h2>
																			<?php 
																				if(isset($_GET['msg'])) {
																					echo '<span style="padding:15px 10px;color:#FF5454;border:1px solid #FF5454;display:block;margin-bottom:15px;">Your old password does not match! </span>';
																				}
																			?>
                                                                            
                                                                            
                                                                            
                                  <?php if(mysql_num_rows($result)>0){ ?>                                          
                                                                            
                                                <form method="POST" action="bank_detail.php">
										Name<input type="text" name="u_name" id="name_id" value="<?php echo $row['name']; ?>"/>
										Bank Name<input type="text" name="b_name" id="b_name"value="<?php echo $row['bank_name']; ?>"/>
                                        Branch Name <input type="text" name="br_name" id="br_name"value="<?php echo $row['branch_name']; ?>"/>
									A/c Number <input type="text" name="ac_number" id="ac_number"value="<?php echo $row['account_number']; ?>"/>
                                        IFSC Code <input type="text" name="ifsc_code" id="ifsc_code"value="<?php echo $row['ifsc_code']; ?>"/>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
										<input type="submit" name="submit" value="Update" class="btn btn-accent"/>
																			</form>
											                              
                                                                            
									                          
                                                                            
                                         <?php }
										 
										 else{?>
                                         <form method="POST" action="bank_detail.php">
										<input type="text" name="u_name" id="name_id" placeholder=" Enter your Name"/>
										<input type="text" name="b_name" id="b_name" placeholder="Bank Name"/>
                                        <input type="text" name="br_name" id="br_name" placeholder="Branch Name"/>
										<input type="text" name="ac_number" id="ac_number" placeholder="A/c Number" />
                                        <input type="text" name="ifsc_code" id="ifsc_code" placeholder="IFSC Code" />
										<input type="submit" name="submit1" value="Save" class="btn btn-accent"/>
																			</form>
                                                     
											 
											                                       
									  
											<?php 
											}
										    ?>                                   
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>	
													
										</div>
										</div>
		                    		
		                    		
		                    		
		                    	</div>
		                    </div>
		                    
	                    </div>
                	</div>
                    
                </div>

			</div>
		</section>

<!-- ...................................................................................... -->













<!-- 


		<section>
			<div class="container">
                <div class="row" style="margin-top:50px;">
                					
					<div class="col-md-12">
                		<div class="main-content blog">
		                    <div class="row">
		                    	<div class="col-sm-12">
		                    		<div class="blog-post">
		                    			
										<div class="row" style="margin-top:25px;">
												<div class="container">
												<div class="col-sm-12">
												
													<div class="contact-form" id="contact">
														
														<div class="form-group">
															<div class="row">
																<div class="col-sm-12">
																	<div class="col-sm-6">
																		<div class="col-md-12 col-sm-12">
																		<h2>Change Password</h2>
																			<?php 
																				if(isset($_GET['msg'])) {
																					echo '<span style="padding:15px 10px;color:#FF5454;border:1px solid #FF5454;display:block;margin-bottom:15px;">Your old password does not match! </span>';
																				}
																			?>
																			<form method="POST" action="change_password.php">
																				<input type="password" name="old_pass" id="name-id" placeholder="Old Passsword">
																				<input type="password" name="new_pass" id="password" placeholder="New Password">
																				<input type="password" name="confirm_pass" id="" placeholder="Confirm Passsword" oninput="check(this)">
																				<input type="submit" name="submit" value="Change Password" class="btn btn-accent">
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>	
														
														
												</div>
												</div>
										</div>
		                    		</div>
		                    		
		                    		
		                    		
		                    	</div>
		                    </div>
		                    
	                    </div>
                	</div>
                    
                </div>

			</div>
		</section>
 -->		<footer class="site-footer">
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
		
		
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<script src="assets/js/plugins.js"></script>
        <script src="assets/js/bevolnuteer-custom.js"></script>



	</body>

</html>

