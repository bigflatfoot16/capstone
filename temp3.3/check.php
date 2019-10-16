<?php
//for checking Only.
require "Header.php";
/*
$_SESSION['cart'] = array(array("id01" => "Angel", "quan01" => "3"), array("id02" => "Legna", "quan02" => "6"));
print_r($_SESSION['cart']);
echo "<br>";
echo "<br><br>";



echo "<br><br>";

foreach($_SESSION["cart"] as $num => $val){
  echo "<b> $num <b><br><br>";
  foreach ($val as $key => $valval) {
    echo $key.": ".$valval."<br><br>";
  }
}


echo "<br>";
echo "<br><br>";


foreach($_SESSION["cart"] as $num => $val){
	echo "<b> $num <b><br><br>";
	$row = $val;
	echo $row[0].": <br><br><br>";
	if("7" == $row[0]){
		echo "It Workssssssssss<br><br><br>";
	}
}




$sql = "SELECT ProductCategory FROM `producttbl` WHERE 2";
$q = mysqli_query($con,$sql);
foreach ($q as $key) {
	echo $key;
}



$sql = "SELECT DISTINCT Fname, Lname FROM ordertbl";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
echo $sq['Fname']." ".$sq['Lname']."<br><br>";
}

if(mysqli_num_rows($q)>2){
	echo "2 or more distinct<br>";
}

if(mysqli_num_rows($q)==2){
	echo "exact 2 distinct<br>";
}






$sql = "SELECT TranNo FROM settings WHERE 1";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
	$tran = $sq['TranNo']+1;
	$upsql = "UPDATE settings SET `TranNo`='$tran' WHERE 1";
	mysqli_query($con,$upsql);
}
echo $tran;



$_SESSION['id'] = "guest";
echo $_SESSION['id'];
?>







<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




		<table id="Sales" border="1">
          <thead>
            <th>Item Category</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Total Amount</th>
            <th>Incharge</th>
            <th>Date Transacted</th>
          </thead>
          <tbody>
          <?php
          $sql = "SELECT * FROM salestbl";
          $q = mysqli_query($con,$sql);
          foreach ($q as $sq){
          	echo "<tr>";
          	echo "<td>".$sq['ItemCategory']."</td>";
          	echo "<td>".$sq['ProductName']."</td>";
          	echo "<td>".$sq['ProductQuantity']."</td>";
          	echo "<td>".$sq['TotalAmount']."</td>";
          	echo "<td>".$sq['Username']."</td>";
          	echo "<td>".$sq['Datetransacted']."</td>";
          	echo "</tr>";
          }
          ?>
          </tbody>
        </table>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready( function () {
			    $('#Sales').DataTable({
        		dom: 'Bfrtip',
          		buttons:['copy','csv','excel','pdf','print']
        });
			} );
		</script>

    


$NO = "SELECT OrderNo FROM settings WHERE 1";
$no = mysqli_query($con,$NO);
foreach ($no as $sqlno){
  $OrNo = $sqlno['OrderNo']+1;
  echo $OrNo;
}

  */


$sql = "SELECT TranNo FROM settings WHERE 1";
  $q = mysqli_query($con,$sql);
  foreach ($q as $tr){
    $tran= $tr['TranNo'];
    echo $tran;
  }






if(isset($_POST['menuname'])){echo $_POST['menuname'];}






  //$NOsql = "UPDATE settings SET `TranNo`='$tran' WHERE 1";
  //mysqli_query($con,$NOsql);

?>
<a href="adminedititem.php"></a>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>"  encrytype="multipart/form-data">
<input type="file" id="itemPic" name="fileup" style="width:200px" placeholder="Choose a Picture"> 
<button type="submit" name="submit" class="btn btn-success" role="button" style="font-family: cursive;">SAVE</button>

</form>