
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO Agent (name, email, password, nohp)
values ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[nohp]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=index.php');

?>