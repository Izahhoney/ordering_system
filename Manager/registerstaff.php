<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Register</title>
    <link rel="stylesheet" href="mstyle.css">
</head>
<body>

<header>Staff Registeration</header>
<form class="form" action="staffregisterdata.php" method="POST"> 
<form action="staffregisterdata.php"> 
    <section class="container">

            <div class="input-box">
                <label>Staff Id</label>
                <input type="text" placeholder="Enter staff id" name="staff_id" id="staff_id" required><br></br> 
 
            </div>
       
            <div class="input-box">
                <label>E-mail</label>
                <input type="text" placeholder="Enter staff email" name="staff_email" id="staff_email" required><br></br> 
 
            </div>

            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter staff full name" name="staff_name" id="staff_name" required><br></br> 
 
            </div>

            <div class="input-box">
                <label>Address</label>
                <input type="text" placeholder="Enter staff address" name="staff_address" id="staff_address" required><br></br> 
 
            </div>

            <div class="input-box">
                <label>H/P Number</label>
                <input type="text" placeholder="Enter staff H/P No" name="staff_hpno" id="staff_hpno" required><br></br> 
 
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="text" placeholder="Enter staff password" name="staff_password" id="staff_password" required><br></br> 
 
            </div>

            <div class="input-box">
                <label>Position</label>
                <input type="text" placeholder="Enter staff password" name="staff_position" id="staff_position" required><br></br> 
 
            </div>

            <button type="submit" class="registerbtn">Register</button>

</body>
</html>