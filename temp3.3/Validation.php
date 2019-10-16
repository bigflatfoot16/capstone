<?php
require "Admin/required/Head/Header.php";

session_destroy();
header("location:index.php");
?>