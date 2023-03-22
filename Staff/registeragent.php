<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <p>By creating an account you agree to our <a href="login.php">Terms & Privacy</a>.</p>

  </form>
</body>
</html>