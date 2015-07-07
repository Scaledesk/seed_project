<?php 
include "include/connect.php";
session_start();
?>
<?php 
if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['username'];
	$hpass = md5($password);
	$active=1;
	
	$query ="SELECT * FROM approved_seller WHERE approved_seller_email='$email' AND approved_seller_pwd='$hpass'";
	if($query_run = mysql_query($query)){
		
		if(mysql_num_rows($query_run)>0) {
			while($query_row = mysql_fetch_assoc($query_run)) {
						$psn = $query_row['position'];
						$seller_id = $query_row['approved_seller_id'];
						$email = $query_row['approved_seller_email'];
						$name = $query_row['approved_seller_name'];
							if($psn == 'seller') {
								$_SESSION['position'] = $psn;
								$_SESSION['email'] = $email;
								$_SESSION['name'] = $name;
								$_SESSION['id'] = $seller_id;
								header("Location:seller-dashboard.php");
							}
							else if($psn == 'buyer') {
							header("Location:buyer-dashboard.php");
							}
					}
		} else {
			$query2 = "SELECT user_registration_id, user_registration_email, user_registration_name, position FROM user_registration WHERE user_registration_email='$email' AND user_registration_pwd='$hpass' AND active='$active'";
			if($query2_run = mysql_query($query2)) {
				if(mysql_num_rows($query2_run)>0) {
					while($query2_row = mysql_fetch_assoc($query2_run)) {
						$psn = $query2_row['position'];
						$email = $query2_row['user_registration_email'];
						$name = $query2_row['user_registration_name'];
						$id = $query2_row['user_registration_id'];
							 if($psn == 'buyer') {
								$_SESSION['user_position'] = $psn;
								$_SESSION['user_email'] = $email;
								$_SESSION['user_name'] = $name;
								$_SESSION['user_id'] = $id;
								header("Location:buyer-dashboard.php");
							}
					}
					
				} else {
					$password=md5($password);
					$query3 = "SELECT id, position FROM admin WHERE email='$email' AND password='$password'";
					
					if($query3_run=mysql_query($query3)) {
						
						if(mysql_num_rows($query3_run)>0) {
							
							while($query3_row = mysql_fetch_assoc($query3_run)) {
								$psn = $query3_row['position'];
								$admin_id = $query3_row['id'];
								if($psn='admin') {
									$_SESSION['admin_position'] = $psn;
									$_SESSION['admin_id'] = $admin_id;
									header("Location:admin-dashboard.php");
								}
								
							}
							
						} else {
							echo '
			<script type="text/javascript">
				
				window.location.href="index.php";
			</script>
		';					
						}
					}else {
						echo mysql_error();
					}
				}
			}
			
		}
	} else {
		echo mysql_error();
	} 
}
?>