<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</style>
</head>
<body>
<?php   include ('config.php') ?>
<h2>Login Form</h2>

<form action="homepage.php">
 

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br></br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br></br>
        
    <button type="submit">Login</button><br></br>  <button type="button" class="cancelbtn">Cancel</button><br></br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br></br>

    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>