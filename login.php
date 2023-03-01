<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaint Airasia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #da4646;
	text-align: center;
	border: 1px solid #e35300;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 5px;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: rgb(246, 17, 17);
	background: #e83408;
	border: none;
	border-radius: 5px;
}
</style>

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="" >

		<?php //echo display_error(); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"required>
		</div>
		<div class="input-group">
		<input type="submit" class="" name="login_btn" value="Log in" >
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>