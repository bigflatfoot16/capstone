<?php
if (isset($_POST['savecha'])) {
  if ($_POST['password'] != "" && $_POST['confirmpass'] != "") {
    $id = $_POST['editID'];
    if ($_POST['password'] == $_POST['password']) {
      $newpass = md5(md5($_POST['confirmpass']));
      $sql1 = "UPDATE `stafftbl` SET `SPassword`='$newpass' WHERE UserID = '$id'";
      mysqli_query($con, $sql1);
      echo"<script>alert('Password was Save.');</script>";
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
      $det = "has update a passsword of a account named ".$_POST['editName'];
      $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
      mysqli_query($con,$log);
    }else{
      echo"<script>alert('Password is incorrect.');</script>";
    }
  }
  if ($_POST['position'] != "") {
    $id = $_POST['editID'];
    if ($_POST['position'] == "Staff") {
      $newpos = 1;
    }else{
      $newpos = 3;
    }
    $sql1 = "UPDATE `stafftbl` SET `UserType`='$newpos' WHERE UserID = '$id'";
    mysqli_query($con, $sql1);
    echo"<script>alert('New Position was Save.');</script>";
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $det = "has change the Position of ".$_POST['editName'];
    $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
    mysqli_query($con,$log);
  }
  if ($_POST['accstatus'] != "") {
    $id = $_POST['editID'];
    if ($_POST['accstatus'] == "Active") {
      $newstatus = 1;
    }else{
      $newstatus = 2;
    }
    $sql1 = "UPDATE `stafftbl` SET `Status`='$newstatus' WHERE UserID = '$id'";
    mysqli_query($con, $sql1);
    echo"<script>alert('Status has update.');</script>";
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $det = "has change the status account of ".$_POST['editName'];
    $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
    mysqli_query($con,$log);
  }
}


if (isset($_POST['AddUserStaff'])) {
  $fname = $_POST['staffName'];
  $lname = $_POST['staffLName'];
  $num = $_POST['staffNumber'];
  $user = $_POST['staffUsername'];
  $pass = md5(md5($_POST['staffPassword']));
  if ($_POST['staffPassword'] == "Staff") {
    $pos = 1;
  }else{
    $pos = 3;
  }
  $log = "INSERT INTO logs(UserType, SFname, SLname, SNumber, SUsername, SPassword) VALUES ('$pos', '$fname', '$lname', '$num', '$user', '$pass')";
  mysqli_query($con,$log);
  echo"<script>alert('User has been Created.');</script>";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has created an account named ".$fname." ".$lname;
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}
?>