<?php
include "include/connect.php";

if(isset($_POST['submit'])) {
	$email = mysql_real_escape_string($_POST['email']);
	$pass = mysql_real_escape_string($_POST['password']);
	$hash_pass = md5($pass);
	$name = mysql_real_escape_string($_POST['name']);
	$contact = mysql_real_escape_string($_POST['contact']);
	$position = $_POST['position'];
	
	$query = "INSERT INTO user_registration(user_registration_id, user_registration_email, user_registration_pwd, user_registration_name, user_registration_contact_no, position) VALUES(NULL, '$email', '$hash_pass', '$name', '$contact', '$position')";
	
	if(mysql_query($query)) {
		echo '
			<script type="text/javascript">
				alert("Data Inserted");
				window.location.href="index.php";
			</script>
		';
	} else if(mysql_error()) {
		echo "Email Already Exist";
	}
	
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