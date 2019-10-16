<?php
if(isset($_POST['Submit'])){
  $address = mysqli_real_escape_string($con, $_POST['inputHNumber']).", ".mysqli_real_escape_string($con, $_POST['inputSNumber']).", ".mysqli_real_escape_string($con, $_POST['slt2']).", ".mysqli_real_escape_string($con, $_POST['slt1']).", ".mysqli_real_escape_string($con, $_POST['inputcity']);
  $mark = mysqli_real_escape_string($con, $_POST['inputMark']);
  $fname = mysqli_real_escape_string($con, $_POST['inputFname']);
  $lname = mysqli_real_escape_string($con, $_POST['inputLname']);
  $number = mysqli_real_escape_string($con, $_POST['inputNumber']);
  $email = mysqli_real_escape_string($con, $_POST['inputEmail']);
  $username = mysqli_real_escape_string($con, $_POST['inputUsername']);
  $psw = mysqli_real_escape_string($con, $_POST['inputPassword']);
  $cnfpsw = $_POST['inputConfirmPass'];
  if(empty($_POST['inputHNumber']) || empty($_POST['inputSNumber']) || empty($_POST['slt2']) || empty($_POST['slt1']) || empty($_POST['inputcity']) || empty($fname) || empty($lname) || empty($number) || empty($email) || empty($username) || empty($psw) || empty($cnfpsw)){
    echo"Fields are required.";
  }else{
    if($psw != $cnfpsw){
      echo"Password does not match";
    }else{
      $enc_psw = md5(md5($psw));
      $sql = "INSERT INTO customertbl (Fname ,Lname , Address, Landmark, ContactNumber, Email, Username, Password) VALUES ('$fname', '$lname', '$address', '$mark', '$number', '$email', '$username', '$enc_psw')";
      mysqli_query($con, $sql);
      $onacc = "SELECT * FROM customertbl WHERE Username='$username' AND Password='$enc_pass'";
      $q = mysqli_query($con,$onacc);
      if(mysqli_num_rows($q)>0){
        while($row = mysqli_fetch_array($q)){
          $_SESSION['id'] = $row['UserID'];
          $_SESSION['username'] = $row['Username'];
          $_SESSION['email'] = $row['Email'];
          $_SESSION['fname'] = $row['Fname'];
          $_SESSION['lname'] = $row['Lname'];
          $_SESSION['address'] = $row['Address'];
          $_SESSION['mark'] = $row['Landmark'];
          $_SESSION['number'] = $row['ContactNumber'];
          $_SESSION['Log'] = 1;
        }
      }
      echo "<script>alert('Register Successful');</script>";
    }
  }
}
?>