<?php
foreach ($_SESSION['cart'] as $product => $val){
	$set = $val[0];
	$menu = "SELECT * FROM producttbl WHERE ProductID ='$set'";
	$cat = mysqli_query($con,$menu);
	if(mysqli_num_rows($cat)>0){
		while($row = mysqli_fetch_array($cat)){
			?>
			<tr align="center">
			<td><img src='../<?php echo $row["ProductImage"]; ?>' width="120" height="120" /></td>
			<td><?php echo $row["ProductName"]; ?><br />
			<form method='get' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
			<input type='hidden' name='withinCart' value="<?php echo $product;?>" />
			<button type='submit' class='remove' name="remove">Remove Item</button>
			</form>
			</td>
			<td>
			<?php echo $val[1];?>	
			</td>
			<td><?php echo "P ".$row["ProductPrice"]; ?></td>
			<td><?php echo "P ".$row["ProductPrice"]*$val[1]; ?></td>
			</tr>
			<?php
			$_SESSION['total'] += ($row["ProductPrice"]*$val[1]);
			}
	}
}
?>