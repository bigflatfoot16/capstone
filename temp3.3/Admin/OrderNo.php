
<!DOCTYPE html>
<html>
<head>
  <title>View Order</title>

  <style type="text/css">
    
  </style>
</head>
<body style="background-color: gray">


<?php
require "required/Head/Header.php";
if($_SESSION['Log']==true){
  if($_SESSION['Log']==1){
    header("location:index.php");
  }
}
if(isset($_GET['Order'])){
  $order = $_GET['Order'];
  $sql = "SELECT DISTINCT OrderNo, Customer, Username, Datetransacted, UnCode FROM salestbl WHERE OrderNo = '$order'";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $order = $row['OrderNo'];
    $Customer = $row['Customer'];
    $incharge = $row['Username'];
    $date = $row['Datetransacted'];
    $code = $row['UnCode'];
    $total = 0;
    $sql = "SELECT * FROM salestbl WHERE OrderNo = '$order' AND Datetransacted = '$date'";
    $q = mysqli_query($con,$sql);
    echo"<h2>Order No. ".$order."</h2><br>";
    echo"<p>Customer Name: ".$Customer."</p>";
    echo"<p>Staff Incharge: ".$incharge."</p>";
    echo"<p>Date Ordered: ".$date."</p><hr>";
    echo "<div style='float: left';>ProductName</div><div style='float: right';>Price</div><div align ='center'>Quantity</div><br><hr>";
    foreach ($q as $sq){
      $total += $sq['TotalAmount'];
      echo"<div style='float: left';>".$sq['ProductName']."</div><div style='float: right';>P ".$sq['TotalAmount']."</div><div align ='center'>".$sq['ProductQuantity']."</div><br>";
    }
  }
  echo"<hr><br><div style='float: left';>Total Amount: </div><div style='float: right';>P ".$total."</div>";
  echo"<br><br><div style='float: left';>Transaction Number: </div><div style='float: right';>".$code."</div>";
}
?>
<div style="float: left;"></div>
</body>
</html>
