
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';
$id = filter_input(INPUT_POST, 'staffID');
$fullname = filter_input(INPUT_POST, 'staff_name');
$email = filter_input(INPUT_POST, 'staff_email');
$address = filter_input(INPUT_POST, 'staff_address');
$phone = filter_input(INPUT_POST, 'staff_phoneno');
$password = filter_input(INPUT_POST, 'staff_password');
$position = filter_input(INPUT_POST, 'staff_position');

$sql="INSERT INTO Staff (staffID,staff_name,staff_email, staff_address, staff_phoneno,staff_password,staff_position)
values ('$_POST[id]','$_POST[fullname]','$_POST[email]','$_POST[address]','$_POST[phoneno]','$_POST[password]','$_POST[position]'))";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}

echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=registeragent.php');
?>

