<?php include "include/connect.php"; ?>
<?php 
include "include/connect.php";
session_start(); 
if(!isset($_SESSION['position']) && !isset($_SESSION['email']) && !isset($_SESSION['id'])) {
	header("Location:login.php");
}
?>
<?php 
	if(isset($_POST['update']) && empty($_FILES['image']['name'])) {
		$u_id = $_POST['u_id'];
		
		
		$pname = $_POST['pname'];
		$pcategory = $_POST['pcat'];
		$pprice = $_POST['price'];
		$pdescription = $_POST['desc'];
		$pavailability = $_POST['avl'];
		
		$sql_update = "UPDATE approved_product SET product_name='$pname', product_category='$pcategory', product_price='$pprice', product_description='$pdescription', product_availability='$pavailability' WHERE product_id='$u_id'";
		
		if(mysql_query($sql_update)) {
			echo '
				<script type="text/javascript">
					alert("Product Updated!");
					window.location.href="seller_product.php";
				</script>';
		}
	} else if(isset($_POST['update'])) {
		$u_id = $_POST['u_id'];
		
		
		$pname = $_POST['pname'];
		$pcategory = $_POST['pcat'];
		$image_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$pprice = $_POST['price'];
		$pdescription = $_POST['desc'];
		$pavailability = $_POST['avl'];
		
		$location = "images/".$image_name;
		
		move_uploaded_file($tmp_name, $location);
		
		$sql_update = "UPDATE approved_product SET product_name='$pname', product_category='$pcategory',product_image='$image_name', product_price='$pprice', product_description='$pdescription', product_availability='$pavailability' WHERE product_id='$u_id'";
		
		if(mysql_query($sql_update)) {
			echo '
				<script type="text/javascript">
					alert("Product Updated!");
					window.location.href="seller_product.php";
				</script>
			';
		} else { echo mysql_query();}
	}
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
	<style type="text/css">
		.abc {
			background: transparent none repeat scroll 0 0;
			border: 2px solid #e3e3e3;
			font-size: 12px;
			max-width: 100%;
			padding: 10px;
			transition: all 200ms ease-in-out 0s;
		}
	</style>
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
                            <div class="donate-button"><a href="user-dashboard.php" data-toggle="modal" class="btn btn-default">'.$name.' Account</a></div>
									<ul class="header-list pull-right">
										<li><a href="logout.php">LOGOUT</a></li>
										
									</ul>
						</div>
							
							';
							
						} else if(isset($_SESSION['admin_position'])) {
							echo '
								<div class="col-md-4 col-sm-4">
                            <div class="donate-button"><a href="admin-dashboard.php" data-toggle="modal" class="btn btn-default">Hi Admin</a></div>
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

        <section class="page-title">
            
            <div class="bg-image"></div>
            <div class="container">
                <div class="row">
                    
                </div>
                
            </div>
        </section>



<section class="services">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
                    	<aside class="sidebar" style="padding-left:0px!important;">
                    		
                    		<div class="widget">
                    			<h4 class="widget-title">Menu</h4>
                    			<ul class="sidebar-list">
                    				<li><a href="add-product.php">Add Product</a></li>
									<li><a href="seller_pending_product.php">Pending Product</a></li>
                    				<li><a href="seller_product.php">Approved Product</a></li>
                    				<!--<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>-->
                    			</ul>
                    		</div>
                    		
                    		
                    	</aside>
                    </div>
					
					<div class="col-md-9">

<?php 
	if(isset($_GET['send_id'])) {
		$update_id = $_GET['send_id'];
		
		$sql = "SELECT * FROM approved_product WHERE product_id='$update_id'";
		if($sql_run = mysql_query($sql)) {
			while($sql_rows = mysql_fetch_assoc($sql_run)) {
					$product_id1 = $sql_rows['product_id'];
					$product_name1 = $sql_rows['product_name'];
					$product_category1 =$sql_rows['product_category'];
					$product_image1 = $sql_rows['product_image'];
					$product_price1 = $sql_rows['product_price'];
					$product_description1 = $sql_rows['product_description'];
					$product_availability1 = $sql_rows['product_availability'];
				
			}
		}
		?>
		<!------------------------------------>
			<h1>Update Product</h1>
			<form method="POST" action="update_product.php" enctype="multipart/form-data" id="" class="contact-form">
				<div class="form-group">
				<div class="row">
				<div class="col-md-6 col-sm-6">
				
				Enter name : 
				<input type="text" name="pname" value="<?php echo $product_name1; ?>">
				Parent Category :  
			<select name="pcat" style="width:100%;">
				<option><?php echo $product_category1; ?></option>
				<?php 
					
					$query = "SELECT * FROM product_category WHERE product_category_name NOT IN('$product_category1')";
					if($query_run = mysql_query($query)) {
						while($query_rows = mysql_fetch_assoc($query_run)) {
							$product_category_name = $query_rows['product_category_name'];
					
							echo '<option value="'.$product_category_name.'">'.$product_category_name.'</option>';
						}
					}
		
				?>
	</select>
	<div class="col-md-12 col-sm-12 abc" style="margin-top:20px;margin-bottom:20px;">
	Old Image :&nbsp 
	<img src="images/<?php echo $product_image1;?>" width="150">
	</div>
	Change Image :
	<input type="file" name="image">
	</div>
	
	<div class="col-md-6 col-sm-6">
	
	Enter Price : 
	<input type="text" name="price" value="<?php echo $product_price1; ?>">
	Enter Description : 
	<textarea cols="30" rows="10" name="desc"><?php echo $product_description1; ?></textarea>
	
	Select Availability : 
	<select name="avl" style="width:100%;">
		
		<option value="<?php echo $product_availability1?>"><?php echo strtoupper($product_availability1); ?></option>
		<?php if($product_availability1=='available') { echo '<option value="notavailable">NOT AVAILABLE</option>';} else {echo '<option value="available">AVAILABLE</option>';}?>
	</select>
	
	<input type="hidden" name="u_id" value="<?php echo $update_id; ?>">
	
	</div>
	<div class="col-md-12 col-sm-12">
		
		<input type="submit" value="Update" name="update" class="btn btn-accent" style="width:25%;text-align:center;">
		
	</form>
	</div>
	</div>
	</div>
		<!------------------------------------>
		<?php
	}
?>
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
                        <h4 class="modal-title">Donation Form</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group pricing">
                            <h6 class="modal-subtitle">How much would  you like to donate?</h6>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default active">$10</button>
                                <button type="button" class="btn btn-default">$20</button>
                                <button type="button" class="btn btn-default">$100</button>
                                <button type="button" class="btn btn-default">$200</button>
                                <button type="button" class="btn btn-default">$500</button>
                                <input type="text" placeholder="Other Amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="modal-subtitle">Personal Information</h6>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" id="name" placeholder="First Name">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" id="name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="tel" id="email" placeholder="Phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="message" placeholder="Address"></textarea>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <textarea id="additional" placeholder="Additional Note"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <button type="button" class="btn btn-accent">Donate Now</input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="go-top"><i class="fa fa-chevron-up"></i></a>

		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/bevolnuteer-custom.js"></script>



	</body>

<!-- Mirrored from demo.esmeth.com/html/bevolunteer/wide/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 May 2015 06:30:39 GMT -->
</html>