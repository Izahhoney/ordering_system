<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | AGENT</title>
</head>
<body>
<form method="post" action="staffdataregister.php">
  <div class="staff container">
    <h1>Staff Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="id"><b>Staff ID:</b></label>
    <input type="text" placeholder="Enter Staff Id" name="staffID" id="staff_name" required>
    <hr>

    <label for="fullname"><b>Name:</b></label>
    <input type="text" placeholder="Enter name" name="staff_name" id="staff_name" required>
    <hr>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter email" name="staff_email" id="staff_email" required>
    <hr>

    <label for="address"><b>Address:</b></label>
    <input type="text" placeholder="Enter address" name="staff_address" id="staff_address" required>
    <hr>

    <label for="phoneno"><b>HP Number:</b></label>
    <input type="text" placeholder="Enter Email" name="staff_phoneno" id="staff_phoneno" required>
    <hr>

    <label for="position"><b>Choose a Position:</b></label>
    <select name="position" id="carsstaff_position">
    <option value="Staff">Staff</option>
    <option value="Manager">Manager</option>
  </select><br><br>

    <label for="password"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="staff_password" id="staff_password" required>
    <hr>

    <label for="Password-repeat"><b>Repeat Password:</b></label>
    <input type="Password" placeholder="Repeat Password" name="password-repeat" id="Password-repeat" required><br></br>
    <hr>

    <input type="submit" value="Register">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="registerstaff.php">Log in</a>.</p>
  </div>
</form>
</body>
</html>