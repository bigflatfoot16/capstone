<?php
if(isset($_POST['submitguest'])){
  $_SESSION['id'] = -1;
  $_SESSION['fname'] = $_POST['inputfName'];
  $_SESSION['lname'] = $_POST['inputlName'];
  $_SESSION['number'] = $_POST['inputNumber'];
  $_SESSION['address'] = $_POST['inputHNumber'].", ".$_POST['inputSNumber'].", ".$_POST['slt2'].", ".$_POST['slt1'].", ".$_POST['slt1'].", ".$_POST['guestCity'];
  $_SESSION['mark'] = $_POST['inputMark'];
  $_SESSION['Log'] = -1;
  echo "<script> $('#Thanks').modal('show') </script>";
  header("location:guesthome.php");
}
?>