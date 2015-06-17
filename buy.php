<?php 
require_once 'include/connect.php';
?>
<?php
	
		$buyer_id=$_GET['buyer_id'];
		$product_id=$_GET['product_id'];
		$product_quantity_units=$_GET['product_quantity_units'];
                $price=$_GET['price'];
		print_r($buyer_id);
		print_r($product_id);
		print_r($product_quantity_units);
                print_r($price);

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
			echo '<script type="text/javascript"> alert("Order request successfully to te Admin!"); </script>';
                        header("location:javascript://history.go(-1)");
		}
	
?>
