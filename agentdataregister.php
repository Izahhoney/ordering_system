
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO Agent (name,email,nohp,password)
values ('$_POST[name]','$_POST[email]','$_POST[nohp]','$_POST[password]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=index.php');

echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=index.php');

?>