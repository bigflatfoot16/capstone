<?php
if(isset($_POST['addcart'])){
  $check=0;
  $un=0;
  $proid = $_POST['productid'];
  $quan = $_POST['quantity'];
  unset($_POST['productid']);
  unset($_POST['quantity']);
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array(array("$proid", "$quan"));
  }else{
    foreach($_SESSION["cart"] as $num => $val){
      $row = $val;
      if($proid == $row[0]){
        $check=1;
      }
    }
    if($check==1){
      echo "<script>alert('".$_POST['productname']." is already in the cart!');</script>";
    }else{
      array_push($_SESSION['cart'], array("$proid", "$quan"));
    }
  }
}
unset($_POST['addcart']);
?>