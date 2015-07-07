<?php
include "include/connect.php";

if(isset($_REQUEST['msg'])){
include('include/massage.php');
}

if(isset($_POST['email']))
{
$email = $_POST['email'];



$password = $_POST['password'];
$hpass = md5($password);

$active=1;


$query ="SELECT * FROM approved_seller WHERE approved_seller_email='$email' AND approved_seller_pwd='$hpass'";
$query_run = mysql_query($query) ;
$q=mysql_num_rows($query_run);




$query1 = "SELECT * FROM user_registration WHERE user_registration_email='$email' AND user_registration_pwd='$hpass'AND active='$active'";
$query_run1 = mysql_query($query1);

$q1=mysql_num_rows($query_run1);

$query2 = "SELECT * FROM admin WHERE email='$email' AND password='$hpass'";
$query_run2= mysql_query($query2);
$q2=mysql_num_rows($query_run2);



//$sql_check = mysql_query("select id from members where username='".$email."'") or die(mysql_error());

if($q || $q1||$q2)
{
echo 'OK';
}
else
{
	echo '<font color="red">Email and password are wrong.</font>';
	

}

}




/*........................................................ Registration user ...*/

if(isset($_POST['email3']))
{
$email3 = $_POST['email3'];


$query1 = "SELECT * FROM user_registration WHERE user_registration_email='$email3'";
$query_run1 = mysql_query($query1);

$q3=mysql_num_rows($query_run1);


$query =  "SELECT * FROM approved_seller WHERE approved_seller_email='$email3'";
$query_run = mysql_query($query) ;
$q4=mysql_num_rows($query_run);




if($q3)
{
echo '<font color="red">Email already exists</font>'; 
}
else if($q4)
{
	
	
echo '<font color="red"> Already register Seller</font> ';
}


}


/*........................................................ Registration user ...*/

if(isset($_POST['email4']))
{
$email4 = $_POST['email4'];


$query1 = "SELECT * FROM user_registration WHERE user_registration_email='$email4'";
$query_run1 = mysql_query($query1);

$q5=mysql_num_rows($query_run1);


$query =  "SELECT * FROM approved_seller WHERE approved_seller_email='$email4'";
$query_run = mysql_query($query) ;
$q6=mysql_num_rows($query_run);




if($q5)
{
	echo '<font color="red"> Already register Buyer</font> ';
}
else if($q6)
{
	
	echo '<font color="red">Email already exists</font>'; 


}


}


?>








