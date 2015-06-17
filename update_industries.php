<?php include "include/connect.php"; ?>
<?php
	if(isset($_POST['update'])) {
		echo $_POST['indust_id'];
		if(empty($_POST['indust_id'])) {
			$name = $_POST['name'];
			$detail = $_POST['detail'];
			$id = $_POST['up_id'];
			
			$sql_up = "UPDATE industries SET industries_name='$name', industries_description='$detail' WHERE industries_id='$id'";
			
			if(mysql_query($sql_up)) { echo '<script type="text/javascript"> alert("Data Updated"); </script>';} else {echo mysql_error();}
			
		} else if(isset($_POST['update'])) {
			
			$name = $_POST['name'];
			$detail = $_POST['detail'];
			$id = $_POST['up_id'];
			$s_id = $_POST['indust_id'];
			
			$sql_up = "UPDATE industries SET industries_name='$name', industries_description='$detail', industries_states_id='$s_id' WHERE industries_id='$id'";
			
			if(mysql_query($sql_up)) { echo '<script type="text/javascript"> alert("Data Updated"); </script>';} else {echo mysql_error();}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php
	if(isset($_GET['update_id'])) {
		$update_id = $_GET['update_id'];
		
		$query1 = "SELECT * FROM industries WHERE industries_id='$update_id'";
		
		$query1_run = mysql_query($query1);
		$query1_rows = mysql_fetch_assoc($query1_run);
		
		$industries_id = $query1_rows['industries_id'];
		$industries_name = $query1_rows['industries_name'];
		$industries_description = $query1_rows['industries_description'];
		$industries_states_id = $query1_rows['industries_states_id'];
		
		
		?>
			<form method="POST" action="update_industries.php">
		Select States :- <br /><br />
		<select name="indust_id">
		<option value="">Select State</option>
		<?php 
			$query = "SELECT * FROM states WHERE states_id NOT IN('$industries_states_id')";
			
			if($query_run = mysql_query($query)) {
				
				
						while($query_rows = mysql_fetch_assoc($query_run)) {
					
							$s_name = $query_rows['states_name'];
							$id = $query_rows['states_id'];
								echo '
									<option value="'.$id.'">'.$s_name.'</option>
								';
						}
				
				 
			}
		?> 
		</select>
		<br /><br />
		
		Enter Industry Name :- <br /><br />
		
		<input type="text" name="name"  value="<?php echo $industries_name; ?>" required><br /><br />
		
		Enter Industry Detail :- <br /><br />
		<textarea cols="50" rows="5" name="detail"><?php echo $industries_description; ?></textarea><br />
		<input type="hidden" name="up_id" value="<?php echo $industries_id; ?>">
		<input type="submit" value="Update" name="update">
	</form>
		
		<?php
		}
		?>
	
	<table border="1">
		<th>Industry name</th>
		<th>Industry description</th>
		<th>Industry states</th>
		<th>Action</th>
		<?php 
			$query = "SELECT * FROM industries";
			
			if($query_run = mysql_query($query)) {
				while($query_rows = mysql_fetch_assoc($query_run)) {
					
					$ind_id = $query_rows['industries_id'];
					$ind_name = $query_rows['industries_name'];
					$ind_description = $query_rows['industries_description'];
					$ind_states_id = $query_rows['industries_states_id'];
					
					echo '<tr>';
					echo '<td>'.$ind_name.'</td><td>'.$ind_description.'</td>';
					
					$sql = "SELECT states_name FROM states WHERE states_id='$ind_states_id'";
					
					$sql_run = mysql_query($sql);
					
					$sql_rows = mysql_fetch_assoc($sql_run);
					
					$state = $sql_rows['states_name'];
					echo '<td>'.$state.'</td>';
					echo '<td><a href="update_industries.php?update_id='.$ind_id.'">update</a></td>';
					echo '</tr>';
				}
			}
		?>
	</table>
</body>
</html>