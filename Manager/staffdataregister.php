
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';
$id = filter_input(INPUT_POST, 'staff_id');
$fullname = filter_input(INPUT_POST, 'staff_name');
$email = filter_input(INPUT_POST, 'staff_email');
$address = filter_input(INPUT_POST, 'staff_address');
$phone = filter_input(INPUT_POST, 'staff_hpno');
$password = filter_input(INPUT_POST, 'staff_password');
$position = filter_input(INPUT_POST, 'staff_position');

$sql="INSERT INTO staff (staff_id,staff_name,staff_email,staff_address, staff_hpno,staff_password,staff_position)
values ('$id','$fullname','$email','$address','$phone','$password','$position')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}

echo "<script
type='text/jscript'>alert('Staff has been registered!')</script>";
header('refresh:1 url=registerstaff.php');
?>

