<!DOCTYPE html>

<html>

<head>
    <title>LOGIN | AGENT</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
     <form action="login.php" method="post">
        <h2>LOGIN FOR AGENT</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>id:</label>
        <input type="text" name="uname" placeholder="Email" required><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required ><br> 
        <button type="submit">Login</button>
     </form>
     <p>Do not have an account yet? <a href="staff_register.php">Register</a>.</p>

</body>
</html>