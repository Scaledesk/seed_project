                    		
                           <?php 
                            if(isset($_SESSION['position'])){ ?>
                            

                           <div class="widget">
                    			<h4 class="widget-title">Menu</h4>
                    			<ul class="sidebar-list">
                    				<li><a href="change_password.php">Change Password</a></li>
									<li><a href="add-product.php">Add Product</a></li>
									<li><a href="seller_pending_product.php">Pending Product</a></li>
                    				<li><a href="seller_product.php">Approved Product</a></li>
									<li><a href="show_industries.php">Show Industries</a></li>
                                    <li><a href="bank_detail.php">Bank Details</a></li>
                                    
                    				<!--<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>-->
                    			</ul>
                    		</div>
                    	


                     <?php


                            }

                    		else if(isset($_SESSION['user_position'])){ 

                      ?>

                         
                       <div class="widget">
                    			<h4 class="widget-title">Menu</h4>
                    			<ul class="sidebar-list">
                    				<li><a href="view_user_profile.php">View Profile</a></li>
									<li><a href="change_password.php">Change Password</a></li>
                    				<li><a href="#">Order History</a></li>
									<li><a href="b_buyer_pending_orders.php">Pending Orders</a></li>
									<li><a href="b_buyer_approved_orders.php">Approved Orders</a></li>
									<li><a href="#">Track Order</a></li>
                    				<!--<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>-->
                    			</ul>
                    		</div>
                    		



                    	<?php	}

                    		else if(isset($_SESSION['admin_position'])){

                         ?>

                             <div class="widget">
                    			<h4 class="widget-title">Menu</h4>
                    			<ul class="sidebar-list">
                    				<li><a href="buyer_pending_orders.php">Buyer Pending Orders</a></li>
                    				<li><a href="view_register_seller.php">New Seller</a></li>
									<li><a href="approved_seller.php">Approved Seller</a></li>
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
                                    <li><a href="bank_details.php">Bank Details</a></li>
                                    <li><a href="buyer_active.php">Buyer Active/Inactive</a></li>
                    				<!--<li><a href="#">Volunteer</a></li>
                    				<li><a href="#">Nonprofit</a></li>-->
                    			</ul>
                    		</div>



                    	<?php	} ?>