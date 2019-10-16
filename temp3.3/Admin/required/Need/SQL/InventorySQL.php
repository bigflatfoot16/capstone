<?php
if(isset($_POST['newcategory']) && $_POST['newcategory'] != ""){
  $newcat = $_POST['newcategory'];
  $sql = "INSERT INTO inventorycategory (Category) VALUES ('$newcat')";
  mysqli_query($con, $sql);
  echo"<script>alert('".$newcat." Category has been created.');</script>"; 
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has created a Category named ".$_POST['editName'];
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}


if (isset($_POST['additem'])) {
  if ($_POST['addname'] != "" && $_POST['addquan'] != "" && $_POST['addcate'] != "" && $_POST['addprice'] != "") {
    $name = $_POST['addname'];
    $quan = $_POST['addquan'];
    $cate = $_POST['addcate'];
    $price = $_POST['addprice'];
    $unit = $_POST['catunits'];
    $sql = "INSERT INTO inventory (ItemName, ItemQuantity, ItemUnits, ItemCategory, ItemPrice) VALUES ('$name', '$quan', '$unit', '$cate', '$price')";
    mysqli_query($con, $sql);
    echo"<script>alert('".$name." has been saved in the inventory.');</script>";
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $det = "has created a Item named ".$_POST['editName'];
    $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
    mysqli_query($con,$log);
  }
}


if (isset($_POST['save'])) {
  $edititem = $_POST['itemname'];
  $editname = $_POST['itemname2'];
  $editquan = $_POST['editquan'];
  $editcate = $_POST['editcate'];
  $editprice = $_POST['editprice'];
  $editunit = $_POST['editunits'];
  $sql1 = "UPDATE `inventory` SET `ItemName`='$editname', `ItemQuantity`='$editquan', `ItemUnits`='$editunit', `ItemCategory`='$editcate', `ItemPrice`='$editprice'  WHERE ItemName = '$edititem'";
  mysqli_query($con, $sql1);
  echo"<script>alert('Item in the Inventory has been updated.');</script>";
}
if (isset($_POST['delete'])) {
  $edititem = $_POST['itemname'];
  $sql2 = "DELETE FROM `inventory` WHERE ItemName = '$edititem'";
  mysqli_query($con, $sql2);
  echo"<script>alert('Item in the Inventory has been deleted.');</script>";
}
?>