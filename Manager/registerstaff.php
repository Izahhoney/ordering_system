<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGER|REGISTER STAFF</title>
    <link rel="stylesheet" href="mstyle.css">
</head>
<body>

<H2>Staff Registration</H2>
<form class="form" action="staffdataregister.php" method="POST"> 
<form action="staffregisterdata.php"> 
    <section class="container">

            <div class="input-box">
                <label><b>Staff Id</b></label>
                <input type="text" placeholder="Enter staff id" name="staff_id" id="staff_id" required><br></br> 
 
            </div>


            <div class="input-box">
                <label><b>Full Name</b></label>
                <input type="text" placeholder="Enter staff full name" name="staff_name" id="staff_name" required><br></br> 
 
            </div>

            <div class="input-box">
                <label><b>Address</b></label>
                <input type="text" placeholder="Enter staff address" name="staff_address" id="staff_address" required><br></br> 
 
            </div>

            <div class="input-box">
                <label><b>H/P Number</b></label>
                <input type="text" placeholder="Enter staff H/P No" name="staff_hpno" id="staff_hpno" required><br></br> 
 
            </div>


            <div class="input-box">
                <label for ="staff_position"><b>Choose a Position:</b></label>
                <select name="staff_position" id="staff_position">
                <option value="Staff"><b>Staff</b></option>
                <option value="Manager"><b>Manager</b></option> 
                </select>
                <br><br>
            </div>

            <div class="input-box">
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="staff_password" id="staff_password" required><br></br>
    

            <label for="Password-repeat"><b>Repeat Password:</b></label>
            <input type="Password" placeholder="Repeat Password" name="password-repeat" id="Password-repeat" required><br></br>
            </div>

            <button type="submit" class="registerbtn"><b>Register</b></button>

</body>
</html>