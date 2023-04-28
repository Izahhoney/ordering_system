
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$id = filter_input(INPUT_POST, 'agent_id');
$fullname = filter_input(INPUT_POST, 'agent_name');
$email = filter_input(INPUT_POST, 'agent_email');
$address = filter_input(INPUT_POST, 'agent_address');
$phone = filter_input(INPUT_POST, 'agent_hpno');
$password = filter_input(INPUT_POST, 'agent_password');

$sql="INSERT INTO agent (agent_id, agent_name,agent_email, agent_address, agent_hpno,agent_password)
values ('$id','$fullname','$email','$address','$phone','$password')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Register agent has been submitted!')</script>";
header('refresh:1 url=registeragent.php');
?>