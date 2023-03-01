<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



body
 {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #E78587;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:	#808080;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php 

if(!session_id())
{
session_start();
}
include('config.php');

?>

<form class="form" action="agentdataregister.php" method="POST" style="width:100%;">
<form action="agentdataregister.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to be an agent.</p>
    <hr>

    <label for="Fullname"><b>Fullame</b></label>
    <input type="text" placeholder="Enter Name" name="Fullname" id="Fullname" required>

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Email: @yahoo.com" name="Email" id="Email" required>

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="Address" id="Address" required>

    <label for="Phoneno"><b>Phone no</b></label>
    <input type="text" placeholder="Enter phoneno" name="Phoneno" id="Phoneno" required>

    <label for="Password"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="Password" id="Password" required>

    <label for="Password-repeat"><b>Repeat Password</b></label>
    <input type="Password" placeholder="Repeat Password" name="password-repeat" id="Password-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

   

    
  </div>
  </form>
</body>
</html>