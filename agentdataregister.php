
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO Agent (Fullname,Email, Address, Phoneno,Password)
values ('$_POST[name]','$_POST[email]','$_POST[Address]','$_POST[Phoneno]','$_POST[Password]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=index.php');
?>