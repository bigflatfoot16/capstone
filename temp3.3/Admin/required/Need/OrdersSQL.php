<?php
if (isset($_POST['NotifyGCash'])) {
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
  }
  $num = $_POST['ConNumber'];
  $mess = "Kagat Sarap \n\nYour Order is now being process thank you for Paying via GCash.";
  $ch = curl_init();
  $parameters = array(
      'apikey' => $apikey,
      'number' => $num,
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
  $Order = $_POST['orno'];
  $upsql = "UPDATE ordertbl SET `SendSMS`='1' WHERE OrderNo = '$Order'";
  mysqli_query($con,$upsql);
  echo "<script>alert('SMS has been send the Order ".$_POST['orno']." is now being Process.');</script>";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has send the SMS stated the Order No. ".$OrderNo." is now being process.";
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}

if (isset($_POST['Notify'])) {
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
  }
  $num = $_POST['ConNumber'];
  $mess = "Kagat Sarap \n\nYour Order is now being process.";
  $ch = curl_init();
  $parameters = array(
      'apikey' => $apikey,
      'number' => $num,
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
  $Order = $_POST['orno'];
  $upsql = "UPDATE ordertbl SET `SendSMS`='1' WHERE OrderNo = '$Order'";
  mysqli_query($con,$upsql);
  echo "<script>alert('SMS has been send the Order ".$_POST['orno']." is now being Process.');</script>";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has send the SMS stated the Order No. ".$OrderNo." is now being process.";
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}

if (isset($_POST['NotifyGCashash'])) {
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
  }
  $num = $_POST['ConNumber'];
  $mess = "Kagat Sarap \n\n Thank you for paying with GCash your Order is now being process.";
  $ch = curl_init();
  $parameters = array(
      'apikey' => $apikey,
      'number' => $num,
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
  $Order = $_POST['orno'];
  $upsql = "UPDATE ordertbl SET `SendSMS`='1' WHERE OrderNo = '$Order'";
  mysqli_query($con,$upsql);
  echo "<script>alert('SMS has been send the Order ".$_POST['orno']." is now being Process.');</script>";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has send the SMS stated the Order No. ".$OrderNo." is now being process.";
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}

if(isset($_POST['PassRider'])){
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
  }
  $num = $_POST['ConNumber'];
  $message = "Kagat Sarap \n\nYour Order will now be delivered to your place.\n\nGives this code to the Driver after receiving the items ".$_POST['UniNumber'];
  $ch = curl_init();
  $parameters = array(
      'apikey' => $apikey,
      'number' => $num,
      'message' => $message,
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
  $Order = $_POST['orno'];
  $upsql = "UPDATE ordertbl SET `SendDriver`='1' WHERE OrderNo = '$Order'";
  mysqli_query($con,$upsql);
  echo "<script>alert('Order ".$_POST['orno']." has been pass o the driver.');</script>";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $det = "has Pass the Order No. ".$OrderNo." to the Driver.";
  $log = "INSERT INTO logs(Fname, Lname, Details) VALUES ('$fname', '$lname', '$det')";
  mysqli_query($con,$log);
}




?>