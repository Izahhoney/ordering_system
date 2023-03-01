<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'projectairasia');

// variable declaration
$Fullname = "";
$Email    = "";
$Address  = "";
$Phoneno    = "";
$Password    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['registerbtn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $fullname, $email, $address, $date, $password;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Fullname    =  e($_POST['Fullname']);
	$Email       =  e($_POST['Email']);
	$Address       =  e($_POST['Address']);
	$Phoneno       =  e($_POST['Phoneno']);
	$Password  = e($_POST['Password']);
	


	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$Password = md5($Password);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO Agent (Fullname, Email, Address, Phoneno, Password) 
					  VALUES('$Fullname', '$Email','$Address', '$Phoneno','$Password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
					
		}
	}
}

// return user array from their id
function getUserById($Email){
	global $db;
	$query = "SELECT * FROM Agent WHERE Email=" . $id;
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
	//echo "haiii";
	login();
}

// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$Email = e($_POST['Email']);
	$Password = e($_POST['Password']);
	


	// attempt login if no errors on form
	if (count($errors) == 0) {
		

		$query = "SELECT * FROM Agent WHERE Email='$Email' AND Password='$Password' LIMIT 1";
		//echo $querys;
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			$_SESSION['Agent_mail'] = $email;
			$user = mysqli_fetch_assoc($results);
			$_SESSION['Agent'] = $Agent; 
			header ('location: index.php');
			}
		}else {
			array_push($errors, "Wrong email or password combination");
		}
	}



// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user']) ) {
		return true;
	}else{
		return false;
	}
}