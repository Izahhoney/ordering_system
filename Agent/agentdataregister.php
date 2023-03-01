
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO register ( name, age, gender, email)
values ('$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[email]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Register has been submitted!')</script>";
header('refresh:1 url=index.php');

?>