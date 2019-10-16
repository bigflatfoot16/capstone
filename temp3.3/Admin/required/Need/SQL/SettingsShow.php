<?php
$sql = "SELECT * FROM settings WHERE 1";
$q = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($q)){
$sendername = $row['SMSname'];
$gcashnum = $row['GCashNum'];
}
?>