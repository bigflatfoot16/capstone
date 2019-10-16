<?php
if(isset($_POST['submitComment']))
{
	if(empty($_SESSION["fname"] || empty($_SESSION["lname"] || empty($_SESSION["email"] || empty($_SESSION["number"] || empty($_SESSION["comment"]){
		echo "<script>alert('Please input all details.');</script>";
	}else{
		$name = mysqli_real_escape_string($con, $_POST['fname'])." ".mysqli_real_escape_string($con, $_POST['lname']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$num = mysqli_real_escape_string($con, $_POST['number']);
		$comm = mysqli_real_escape_string($con, $_POST['comment']);
		$sql = "INSERT INTO contacttbl (contactName ,contactNumber , contactEmail, contactcomments) VALUES ('$name', '$num', '$email', '$comm')";
		mysqli_query($con, $sql);
		echo "<script>alert('Thank You for submitting your statement.');</script>";
	}

}
?>