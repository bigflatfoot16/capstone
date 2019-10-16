<?php
if (isset($_POST['change'])) {
  if($_POST['newpass']!=$_POST['confpass'] && $_POST['confpass']!=""){
    echo "<script>alert('Password are not the same.');</script>";
  }else{
    if (empty($_POST['username']) || empty($_POST['newpass']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['inputHNumber']) || empty($_POST['inputSNumber']) || empty($_POST['slt2']) || empty($_POST['slt1']) || empty($_POST['inputcity']) || empty($_POST['inputMark']) && $_POST['inputcity'] == "Manila") {
      echo "<script>alert('Please input all details.');</script>";
    }else{
      $id = $_SESSION['id'];
      $user = mysqli_real_escape_string($con, $_POST['username']);
      $pass = mysqli_real_escape_string($con, $_POST['newpass']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $num = mysqli_real_escape_string($con, $_POST['number']);
      $address = mysqli_real_escape_string($con, $_POST['inputHNumber']).", ".mysqli_real_escape_string($con, $_POST['inputSNumber']).", ".mysqli_real_escape_string($con, $_POST['slt2']).", ".mysqli_real_escape_string($con, $_POST['slt1']).", ".mysqli_real_escape_string($con, $_POST['inputcity']);
      $mark = mysqli_real_escape_string($con, $_POST['inputMark']);
      $sql = "UPDATE customertbl set  Address='$address', Landmark='$mark', ContactNumber='$num', Email='$email', Username='$user', Password='$pass' where UserID = '$id'";
      mysqli_query($con, $sql);
      echo "<script>alert('Update Successful');</script>";
      $_SESSION['username'] = $user;
      $_SESSION['email'] = $email;
      $_SESSION['number'] = $num;
      $_SESSION['address'] = $address;
      $_SESSION['mark'] = $mark;
      header("location:indexUser.php");
    }
}





?>