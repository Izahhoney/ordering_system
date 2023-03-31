
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO Staff (StaffID,Fullname,Email,Position,Address,Phoneno,Password)
values ('$_POST[Fullname]','$_POST[Email]','$_POST[Position]','$_POST[Address]','$_POST[Phoneno]','$_POST[Password]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('1 staff record succesfully added')</script>";
header('refresh:1 url=registerstaff.php');
?>