<?php
if(isset($_POST['complete'])){
  if ($_POST['uncode'] == $_POST['UniNumber']) {
  $tran= $_POST['orno'];
  $user = "SELECT UserID, Username FROM customertbl WHERE Fname='".$_POST['fname']."' AND Lname='".$_POST['lname']."'";
  $p = mysqli_query($con,$user);
  if(mysqli_num_rows($p)>0){
    while($row = mysqli_fetch_array($p)){
      $id = $row['UserID'];
      $username = $row['Username'];
      $fullname = $_POST['fname']." ".$_POST['lname'];
    }
  }else{
    $id = "None";
    $username = "Guest";
  }
  $type = $_SESSION['Log'];
  $adminuser = $_SESSION['username'];

  $item = "SELECT * FROM ordertbl WHERE OrderNo='".$_POST['orno']."' AND Fname='".$_POST['fname']."' AND Lname='".$_POST['lname']."'";
  //$customer = $_POST['fname']." ".$_POST['lname'];
  $OrderNo= $_POST['orno'];
  $code = $_POST['UniNumber'];
  $sc = mysqli_query($con,$item);
  foreach ($sc as $selitem){
    $name = $selitem['ProductName'];
    $quan = $selitem['ProductQuantity'];
    $price = $selitem['ProductPrice'];
    $total = $selitem['TotalAmount'];
    $categ = "SELECT ProductCategory, ProductName FROM producttbl WHERE ProductName='$name' AND ProductPrice='$price'";
    $scc = mysqli_query($con,$categ);
    foreach ($scc as $selcateg){
      $category = $selcateg['ProductCategory'];
      $insale = "INSERT INTO salestbl(`OrderNo`, `Customer`, `ProductName`, `ProductQuantity`, `TotalAmount`, `Usertype`, `Username`, `UnCode`) VALUES ('$OrderNo', '$username', '$name', '$quan', '$total', '$type', '$adminuser', '$code')";
      mysqli_query($con,$insale);
    }
    $incharge = $_SESSION['fname']." ".$_SESSION['lname'];
    $intran = "INSERT INTO transactiontbl(`TransactionNumber`, `ProductName`, `ProductQuantity`, `ProductPrice`, `Username`, `UserID`, `UserType`, `Incharge`, `UnCode`) VALUES ('$tran', '$name', '$quan', '$price',  '$fullname', '$id', '$type', '$incharge', '$code')";
    mysqli_query($con,$intran);
  }
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has completed the Order No. ".$OrderNo.".";
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);



  $delorder = "DELETE FROM `ordertbl` WHERE OrderNo='".$_POST['orno']."' AND Fname='".$_POST['fname']."' AND Lname='".$_POST['lname']."'";
  mysqli_query($con,$delorder);
  echo "<script>alert('Order ".$_POST['orno']." Completed for ".$_POST['fname']." ".$_POST['lname']."');</script>";
  }else{
    echo "<script>alert('Unique Code is Incorrect');</script>";
  }
}
  





?>