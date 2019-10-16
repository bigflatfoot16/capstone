<?php
if (isset($_GET['remove']) && $_GET['withinCart']!=null){
	if(!empty($_SESSION["cart"])) {
		foreach($_SESSION["cart"] as $key => $value) {
			if($_GET["withinCart"] == $key){
				unset($_SESSION["cart"][$key]);
				$status = "<div class='box' style='color:red;'>
				Product is removed from your cart!</div>";
			}
			if(empty($_SESSION["cart"])){
				unset($_SESSION["cart"]);
			}		
		}
	}
  	
}


if (isset($_POST['CODPAY'])) {
  $cash = mysqli_real_escape_string($con, $_POST['oncash']);
  if(isset($_POST['oncash']) && $_POST['oncash'] == "" && is_numeric($cash)){
    echo "<script>alert('Please Input a Cash.');</script>";
  }elseif(isset($_POST['oncash'])&& ($_POST['oncash']<$_SESSION['total'])){
    echo "<script>alert('Not enough Cash.');</script>";
  }else{
    $uncode = date("Y").date("m").date("d").rand(11111, 99999);
    $change = $_POST['oncash'] - $_SESSION['total'];
    $NO = "SELECT OrderNo FROM settings WHERE 1";
    $no = mysqli_query($con,$NO);
    foreach ($no as $sqlno){
      $OrNo = $sqlno['OrderNo']+1;
      $NOsql = "UPDATE settings SET `OrderNo`='$OrNo' WHERE 1";
      mysqli_query($con,$NOsql);
    }
    foreach($_SESSION["cart"] as $key => $value){
      $proid = $value[0];
      $sql = "SELECT * FROM producttbl WHERE  ProductID='$proid'";
      $q = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($q)){
        $proname = $row['ProductName'];
        $proprice = $row['ProductPrice'];
        $ingr = $row['Ingredient'];
        $noingr = $row['NoIngredients'];
      }
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $address = $_SESSION['address'];
      $mark = $_SESSION['mark'];
      $number = $_SESSION['number'];
      $proquan = $value[1];
      $total = $proquan * $proprice;
      $sql = "INSERT INTO ordertbl (OrderNo, Fname ,Lname ,Address, Landmark, ContactNumber, ProductName, ProductQuantity, ProductPrice, TotalAmount, OnChange, UnCode) VALUES ('$OrNo', '$fname', '$lname', '$address', '$mark', '$number', '$proname', '$proquan', '$proprice', '$total', '$change', '$uncode')";
      mysqli_query($con, $sql);
      $sql1 = "SELECT * FROM inventory WHERE ItemName = '$ingr'";
      $q1 = mysqli_query($con,$sql1);
      while($row = mysqli_fetch_array($q1)){
        $quan = $row['ItemQuantity'];
        $upquan = $quan-($noingr*$proquan);
        $upinv = "UPDATE inventory SET `ItemQuantity`='$upquan' WHERE ItemName = '$ingr'";
        mysqli_query($con,$upinv);
      }
    }
    echo "<script>alert('Order has been place ".$_SESSION['fname']." ".$_SESSION['lname']."');</script>";
    unset($_SESSION["cart"]);
    header("location:userorders.php");
  }
}
if (isset($_POST['GCASHPAY'])) {
  $uncode = date("Y").date("m").date("d").rand(11111, 99999);
  $change = "GCash";
  $NO = "SELECT OrderNo FROM settings WHERE 1";
  $no = mysqli_query($con,$NO);
  foreach ($no as $sqlno){
    $OrNo = $sqlno['OrderNo']+1;
    $NOsql = "UPDATE settings SET `OrderNo`='$OrNo' WHERE 1";
    mysqli_query($con,$NOsql);
  }
  foreach($_SESSION["cart"] as $key => $value){
    $proid = $value[0];
    $sql = "SELECT * FROM producttbl WHERE  ProductID='$proid'";
    $q = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($q)){
      $proname = $row['ProductName'];
      $proprice = $row['ProductPrice'];
      $ingr = $row['Ingredient'];
      $noingr = $row['NoIngredients'];
    }
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $address = $_SESSION['address'];
      $mark = $_SESSION['mark'];
    $number = $_SESSION['number'];
    $proquan = $value[1];
    $total = $proquan * $proprice;
    $sql = "INSERT INTO ordertbl (OrderNo, Fname ,Lname ,Address, Landmark, ContactNumber, ProductName, ProductQuantity, ProductPrice, TotalAmount, OnChange, UnCode) VALUES ('$OrNo', '$fname', '$lname', '$address', '$number', '$proname', '$proquan', '$proprice', '$total', '$change', '$uncode')";
    mysqli_query($con, $sql);
    $sql1 = "SELECT * FROM inventory WHERE ItemName = '$ingr'";
    $q1 = mysqli_query($con,$sql1);
    while($row = mysqli_fetch_array($q1)){
      $quan = $row['ItemQuantity'];
      $upquan = $quan-($noingr*$proquan);
      $upinv = "UPDATE inventory SET `ItemQuantity`='$upquan' WHERE ItemName = '$ingr'";
      mysqli_query($con,$upinv);
    }
  }
  echo "<script>alert('Order has been place ".$_SESSION['fname']." ".$_SESSION['lname']."');</script>";
  unset($_SESSION["cart"]);
  
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
    $GCashNum = $row['GCashNum'];

  }
  $mess = "Kagat Sarap \n\n Thank you for Ordering Via GCash.\n\nYou can Pay via GCash App or CLIQQ Machine using this Number: ".$GCashNum;
  $ch = curl_init();
  $parameters = array(
      'apikey' => $apikey,
      'number' => $number,
      'message' => $mess,
      'sendername' => $sendername
  );
  curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
  curl_setopt( $ch, CURLOPT_POST, 1 );

  //Send the parameters set above with the request
  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

  // Receive response from server
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  $output = curl_exec( $ch );
  curl_close ($ch);
  header("location:userorders.php");
}
?>