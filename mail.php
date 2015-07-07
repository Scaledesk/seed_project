<?php 
include "include/connect.php";

if(isset($_REQUEST['msg'])){
include('include/massage.php');

}

include('mail/mailfile.php');

$id=$_REQUEST['id'];

//echo $id;


      $sql="DELETE FROM approved_seller WHERE approved_seller_id=$id";
		
	   if(mysql_query($sql))
    { 
   
       header("location:index.php");

     }


     
       ?>