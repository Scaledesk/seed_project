<?php 
require_once 'include/connect.php';

if(isset($_REQUEST['msg'])){
include('include/massage.php');
}


?>
<?php
if ($buyer_id=$_GET['buyer_id']) {
/*---------------------buying a product----------------------------*/
		
     include('mail/mailfile.php');


		$product_id=$_GET['product_id'];
		$product_quantity_units=$_GET['product_quantity_units'];
                $price=$_GET['ac_price'];
		$query ="INSERT INTO `breezeof_seed`.`buyer_pending_order`
				(
				`buyer_id`,
				`product_id`,
				`product_quantity_units`,
                                `price`)
				VALUES
				(
				$buyer_id,
				$product_id,
				$product_quantity_units,
                $price);";
		if(mysql_query($query)) {

			header("location: index.php?msg=Order request sent successfully to the Admin! ");
           
              
           




			
		}

/*---------------------buying a product----------------------------*/	
}
else{

     header("location : index.php?msg=Sorry, you are not logged in. Kindly Logged in or register.");

}
?>
