<?php
require "../Admin/required/Head/Header.php";
if(isset($_GET['tran'])){
  $tran = $_GET['tran'];
  $sql = "SELECT DISTINCT TransactionNumber, Username, dateTransacted, Incharge, UnCode FROM transactiontbl WHERE TransactionNumber = '$tran'";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
  	$order = $_GET['no'];
  	$Customer = $_SESSION['fname']." ".$_SESSION['lname'];
  	$incharge = $row['Incharge'];
  	$date = $row['dateTransacted'];
    $code = $row['UnCode'];
  	$total = 0;
  	$sql = "SELECT * FROM transactiontbl WHERE TransactionNumber = '$tran' AND dateTransacted = '$date'";
    $q = mysqli_query($con,$sql);
    echo"<h2>Transaction No. ".$order."</h2><br>";
    echo"<p>Customer: ".$Customer."</p>";
    echo"<p>Incharge: ".$incharge."</p>";
    echo"<p>Date: ".$date."</p><hr>";
    foreach ($q as $sq){
    	$total += $sq['ProductPrice'];
    	echo"<div style='float: left';>".$sq['ProductName']."</div><div style='float: right';>P ".$sq['ProductPrice']."</div><div align ='center'>".$sq['ProductQuantity']."</div><br>";
    }
  }
  echo"<hr><br><div style='float: left';>Total Amount: </div><div style='float: right';>P ".$total."</div>";
  echo"<br><br><div style='float: left';>Unique Code: </div><div style='float: right';>".$code."</div>";
}
?>
<div style="float: right;"></div>