<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | AGENT</title>
</head>
<body>
<form method="post" action="staff_registerData.php">
  <div class="staff container">
    <h1>Agent Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="agent_name" id="agent_name" required>
    <hr>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter email" name="agent_email" id="agent_email" required>
    <hr>

    <label for="address"><b>Address:</b></label>
    <input type="text" placeholder="Enter address" name="agent_address" id="agent_address" required>
    <hr>

    <label for="phoneno"><b>HP Number:</b></label>
    <input type="text" placeholder="Enter Email" name="agent_phoneno" id="agent_phoneno" required>
    <hr>

    <label for="password"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="agent_password" id="agent_password" required>
    <hr>

    <input type="submit" value="Register">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="registeragent.php">Log in</a>.</p>
  </div>
</form>
</body>
</html>