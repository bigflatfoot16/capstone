<?php

if(isset($_POST['deletemenu'])){
  $menuid = $_POST['deletemenu'];
  $deletemenu = "DELETE FROM producttbl WHERE ProductID='$menuid'";
  mysqli_query($con,$deletemenu);
  header("location:admineditmenu.php");
}


if(isset($_POST['Savebtn']) && !isset($_POST['menuid']))
{
  $itemname = $_POST['itemName'];
  $itemprice = $_POST['itemPrice'];
  $itemdesc = $_POST['itemDesc'];
  $itemCategory = $_POST['CategorySelect'];
  $iteminv = $_POST['catunits'];
  $itemquan = $_POST['itemquan'];
  
  if(empty($itemname) && empty($itemprice) && empty($itemdesc) && empty($itemCategory))
  {
  echo "<script>alert('Error!');</script>";
  }
  else
  {
    if(($_FILES['fileup']['error'] > 0) && isset($_FILES['fileup']))
    {
      echo "<script>alert('Error No: " . $_FILES['fileup']['error']."');</script>";
    }
    else
    {
      $temp_name = $_FILES['fileup']['tmp_name'];
      $org_name = $_FILES['fileup']['name'];
      $path = "menu";
      $UploadPic = "$path/$org_name";
      move_uploaded_file($temp_name, $UploadPic);

      $sql = "INSERT INTO producttbl (ProductName, ProductDesc, ProductPrice, ProductImage, ProductCategory, Ingredient, NoIngredients) VALUES ('$itemname', '$itemdesc', '$itemprice', '$UploadPic', '$itemCategory', '$iteminv', '$itemquan')";
      mysqli_query($con, $sql);
      echo "<script>alert('Add Menu Successful!');</script>";
      echo $UploadPic;
    }
    header("location:admineditmenu.php");
  }

}elseif(isset($_POST['Savebtn']) && isset($_POST['menuid']))
{
  $itemid = $_POST['menuid'];
  $itemname = $_POST['itemName'];
  $itemprice = $_POST['itemPrice'];
  $itemdesc = $_POST['itemDesc'];
  $itemCategory = $_POST['CategorySelect'];
  if(empty($itemname) && empty($itemprice) && empty($itemCategory))
  {
  echo"<script>alert('Fields are required.');</script>";
  }
  else
  {
    if(isset($_POST['fileup']) && $_POST['fileup'] != ""){
      if($_FILES['fileup']['error'] > 0){
        echo "<script>alert('Error No: " . $_FILES['fileup']['error']."');</script>";
      }
      else{
        $temp_name = $_FILES['fileup']['tmp_name'];
        $org_name = $_FILES['fileup']['name'];
        $path = "menu";
        $UploadPic = "$path/$org_name";
        move_uploaded_file($temp_name, $UploadPic);
        $updatesql = "UPDATE `producttbl` SET `ProductName`='$itemname',`ProductDesc`='$itemdesc',`ProductPrice`='$itemprice',`ProductImage`='$UploadPic',`ProductCategory`='$itemCategory' WHERE ProductID='$itemid'";
        mysqli_query($con, $updatesql);
        echo"<script>alert('Save Successful.');</script>";
        header("location:admineditmenu.php");
      } 
    }else{
      $updatesql = "UPDATE `producttbl` SET `ProductName`='$itemname',`ProductDesc`='$itemdesc',`ProductPrice`='$itemprice',`ProductCategory`='$itemCategory' WHERE ProductID='$itemid'";
      mysqli_query($con, $updatesql);
      echo"<script>alert('Save Successful.');</script>";
      header("location:admineditmenu.php");
    }
    if (isset($_POST['catunits']) && $_POST['catunits'] != "") {
      $newingredient = $_POST['catunits'];
      $upsqling = "UPDATE `producttbl` SET `Ingredient`='$newingredient' WHERE ProductID='$itemid'";
      mysqli_query($con, $upsqling);
    }
    if (isset($_POST['itemquan']) && $_POST['itemquan'] != "") {
      $newingrquan = $_POST['itemquan'];
      $upsqlingquan = "UPDATE `producttbl` SET `NoIngredients`='$newingrquan' WHERE ProductID='$itemid'";
      mysqli_query($con, $upsqlingquan);
    }
  }
}
?>