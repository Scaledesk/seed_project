<?php
include "include/connect.php";

if(isset($_REQUEST['msg'])){
include('include/massage.php');
}
if(isset($_POST['submit'])) {
	$check=true;

	$email = mysql_real_escape_string($_POST['email']);
	$query = "SELECT * FROM approved_seller WHERE approved_seller_email='$email'";
	
	if($query_run = @mysql_query($query)){
		
		if(mysql_num_rows($query_run)>0) {
			/*echo "Sorry, you are already registered as Seller and your are approved seller";
			echo "try again with different email address";
			header("Location:index.php");*/
			
            header("location: index.php?msg=Sorry, you are already registered as Seller and your are approved seller,try again with different email address");


			$check=false;
		}
	}
	$query = "SELECT * FROM seller_registration WHERE seller_registration_email='$email'";
	
	if($query_run = @mysql_query($query)){
		
		if(mysql_num_rows($query_run)>0) {
			/*echo "Sorry, you are already registered as Seller and your are not approved seller yet. Wait for approval or cancellation of request. Then try again";
			echo "try again with different email address";
			header("Location:index.php");*/
			 header("location: index.php?msg=Sorry, you are already registered as Seller and your are not approved seller yet. Wait for approval or cancellation of request. Then try again");

			
			$check=false;
		}
	}
	
	$query = "SELECT * FROM user_registration WHERE user_registration_email='$email'";


	if($query_run = @mysql_query($query)){
		
		if(mysql_num_rows($query_run)>0) {
			/*echo "Sorry, you are already registered as Buyer";
			echo "try again with different email address";
			header("Location:index.php");*/

			header("location: index.php?msg=Sorry, you are already registered as Buyer, try again with different email address");

			
			$check=false;
		}
	}


/*-------------------------buyer_registration-----------------------------------*/
	if ($check) {
	$email = mysql_real_escape_string($_POST['email']);
	$pass = mysql_real_escape_string($_POST['password']);
	$hash_pass = md5($pass);
	$name = mysql_real_escape_string($_POST['name']);
	$contact = mysql_real_escape_string($_POST['contact']);
	$position = $_POST['position'];
	$active=1;
	
	$query = "INSERT INTO user_registration(user_registration_id, user_registration_email, user_registration_pwd, user_registration_name, user_registration_contact_no, position ,active) VALUES(NULL, '$email', '$hash_pass', '$name', '$contact', '$position' ,'$active')";
	
	if(mysql_query($query)) {


			header("location: index.php?msg=Data Inserted");

	} else if(mysql_error()) {


			header("location: index.php?msg=Some error Occured!!!!Try Again");
		
	}
}	
/*!-------------------------buyer_registration----------------------------------*/
}
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<br /><br /><br />
<form method="POST" action="user_registration.php">
	Email :- <br />
	<input type="email" name="email"><br />
	Password :- <br />
	<input type="password" name="password" id="password" required><br />
	Confirm Password :- <br />
	<input name="password_confirm" required type="password" id="password_confirm" oninput="check(this)"  /><br />
	Seller Name :- <br />
	<input type="text" name="name"><br />
	Seller Contact no. :- <br />
	<input type="text" name="contact"><br /><br /><br />
	<input type="hidden" name="position" value="buyer">
	<input type="submit" name="submit" value="Register">
</form>
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
</body>
</html>-->