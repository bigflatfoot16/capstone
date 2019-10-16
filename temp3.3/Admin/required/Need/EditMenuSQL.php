<?php
if(isset($_POST['newcat']) && $_POST['newcat'] != ""){
  $cat = $_POST['newcat'];
  $newcat = "INSERT INTO category(Category) VALUES ('$cat')";
  mysqli_query($con,$newcat);
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = $_SESSION['fname']." ".$_SESSION['lname']." has add new category ".$_POST['newcat'];
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}

if(isset($_GET['deletecat']) && $_GET['deletecat'] != ""){
  $cat = $_GET['deletecat'];
  $deletemenu = "DELETE FROM producttbl WHERE ProductCategory='$cat'";
  mysqli_query($con,$deletemenu);
  $deletecat = "DELETE FROM category WHERE Category='$cat'";
  mysqli_query($con,$deletecat);
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = $_SESSION['fname']." ".$_SESSION['lname']." deleted a category ".$_POST['newcat'];
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
}

if(isset($_POST['deletemenu'])){
  $menuid = $_POST['deletemenu'];
  $deletemenu = "DELETE FROM producttbl WHERE ProductID='$menuid'";
  mysqli_query($con,$deletemenu);
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = $_SESSION['fname']." ".$_SESSION['lname']." deleted a Menu ".$_POST['deletemenu'];
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
}




?>