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

 
    <h1>Register Staff</h1>
    <p>Please fill in this form.</p>
    <hr>

   
    <label for="staffID"><b>StaffID</b></label>
    <input type="text" placeholder="Enter ID" name="staffID" id="staffID" required><br></br>


    <label for="fullname"><b>Fullname</b></label>
    <input type="text" placeholder="Enter a name" name="fullname" id="fullname" required><br></br>

    <label for="phoneno"><b>Phoneno</b></label>
    <input type="text" placeholder="Enter Phoneno" name="phoneno" id="phoneno" required><br></br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" id="email" required><br></br>

    <label for="position"><b>Position:</b></label>
    <select name="position">
    <option value="Staff">Staff</option>
    <option value="Manager">Manager</option>
    </select></p>

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