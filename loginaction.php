<?php
session_start();
// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM Agent WHERE Email=" . $Email;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $Agent;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}



// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $Email, $errors;

	// grap form values
	$Email = e($_POST['Email']);
	$Password = e($_POST['Password']);

	// make sure form is filled properly
	if (empty($Email)) {
		array_push($errors, "Email is required");
	}
	if (empty($Password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$Password = md5($Password);

		$query = "SELECT * FROM Agent WHERE email='$Email' AND password='$Password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong email or password combination");
		}
	}
}

?>