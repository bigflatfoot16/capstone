<?php
if (isset($_POST['Submit'])) {
  $smsname = $_POST['SMSname'];
  $gcashnum = $_POST['gcashNum'];
  if (empty($_POST['SMSname']) || empty($_POST['gcashNum'])){
    echo "<script>alert('Details are required.');</script>";
  }else{
    $upsql = "UPDATE settings SET `SMSname`='$smsname', `GCashNum`='$gcashnum' WHERE 1";
    mysqli_query($con,$upsql);
  }
  if (isset($_POST['SMSapi']) && $_POST['SMSapi'] != "") {
    $api = $_POST['SMSapi'];
    $upsql = "UPDATE settings SET `SMSapikey`='$api' WHERE 1";
    mysqli_query($con,$upsql);
  }
  echo "<script>alert('Settings has been Updated.');</script>";
}


if (isset($_POST['TestSubmit'])) {
  $sql = "SELECT * FROM settings";
  $q = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($q)){
    $apikey = $row['SMSapikey'];
    $sendername = $row['SMSname'];
  }
  $num = $_POST['TestNumber'];
  $mess = $_POST['TestMess'];
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
  echo "<script>alert('You have sent a test Message.');</script>";
}

?>