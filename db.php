<?php

	error_reporting(0);
	$con=mysqli_connect("localhost","root","") or die(mysqli_error());
	$db=mysqli_select_db($con,"lms") or die(mysqli_error());

?>