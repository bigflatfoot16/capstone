<?php
$sql = "SELECT * FROM contacttbl";
$q = mysqli_query($con,$sql);
if(mysqli_num_rows($q)>30){
$numDelete = mysqli_num_rows($q) - 30;
$sql2 = "DELETE FROM `contacttbl` LIMIT '$numDelete'";
mysqli_query($con, $sql2);
}
?>