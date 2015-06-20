<?php 
require_once 'include/connect.php';
?>
<?php
if ($buyer_id=$_GET['buyer_id']) {
/*---------------------buying a product----------------------------*/
		
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
			echo '<script type="text/javascript"> alert("Order request successfully to te Admin!"); 
			window.location.href="index.php";
			</script>';
		}

/*---------------------buying a product----------------------------*/	
}
else{
	echo '
			<script type="text/javascript">
				alert("Sorry, you are not logged in as Buyer. Kindly Logged in as Buyer or register, then login");
				window.location.href="index.php";
			</script>
		';
}
?>
