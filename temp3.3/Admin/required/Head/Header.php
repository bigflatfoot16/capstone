<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost","root","","db_kagatsarap");

if(mysqli_connect_errno()){
	echo "Failed to Connect to the Database: " . mysqli_connect_error();
}

?>
