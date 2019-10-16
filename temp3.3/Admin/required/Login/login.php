<?php
if(isset($_POST['login']))
{//mysqli_real_escape_string
  $user = mysqli_real_escape_string($con, $_POST['recipient-name']);
  $pass = mysqli_real_escape_string($con, $_POST['Password']);
  $enc_pass = md5(md5($pass));
  $sql = "SELECT * FROM customertbl WHERE Username='$user' AND Password='$enc_pass'";
  $q = mysqli_query($con,$sql);
  $sql2 = "SELECT * FROM stafftbl WHERE SUsername='$user' AND SPassword='$enc_pass'";
  $q2 = mysqli_query($con,$sql2);
  
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
      $_SESSION['Log'] = 0;
    }
  }elseif(mysqli_num_rows($q2)>0){
    while($row = mysqli_fetch_array($q2)){
      $_SESSION['id'] = $row['UserID'];
      $_SESSION['username'] = $row['SUsername'];
      $_SESSION['fname'] = $row['SFname'];
      $_SESSION['lname'] = $row['SLname'];
      $_SESSION['Log'] = $row['UserType'];
    }
  }else{
    echo "<script>alert('Invalid Username or Password.');</script>";
  }
}
?>