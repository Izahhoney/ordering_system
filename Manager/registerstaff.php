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

<form class="form" action="staffdataregister.php" method="POST">
<form action="staffdataregister.php">

 
    <h1>Register Agent</h1>
    <p>Please fill in this form to be register agent.</p>
    <hr>

   
    <label for="StaffID"><b>StaffID</b></label>
    <input type="text" placeholder="Enter ID" name="StaffID" id="StaffID" required><br></br>


    <label for="Fullname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter a name" name="Fullname" id="Fullname" required><br></br>

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="Email" id="Email" required><br></br>

    <label for="Position"><b>Position</b></label>
    <input type="radio" name="position" value="Staff"/>
    <input type="radio" name="position" value="Manager"/>

    <label for="Address"><b>Address:</b></label>
    <input type="text" placeholder="Enter Address" name="Address" id="Address" required><br></br>


    <label for="Password"><b>Password:</b></label>
    <input type="Password" placeholder="Enter Password" name="Password" id="Password" required><br></br>

    <label for="Password-repeat"><b>Repeat Password:</b></label>
    <input type="Password" placeholder="Repeat Password" name="password-repeat" id="Password-repeat" required><br></br>
   

    <button type="submit" class="registerbtn">Register</button><br></br>
   

    <p>By creating an account you agree to our <a href="login.php">Terms & Privacy</a>.</p><br></br>

  </form>
</body>
</html>