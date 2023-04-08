<?php
session_start();
include "config.php";

if (isset($post['sid'])&& isset($_post['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
    $sid = validate($_POST['sid']);
    $pass = validate($_POST['password']);
    if (empty($sid)) {
        header("Location: index.php?error=Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{

        $sql = "SELECT * FROM staff WHERE staffid='$sid' AND staff_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['staffid'] === $sid && $row['staff_password'] === $pass) {
                echo "Logged in!";
                $_SESSION['staffid'] = $row['staffid'];
                $_SESSION['staff_name'] = $row['staff_name'];
                $_SESSION['staff_email'] = $row['staff_email'];
                $_SESSION['staff_phoneno'] = $row['staff_phoneno'];
                $_SESSION['staff_address'] = $row['staff_address'];
                $_SESSION['staff_position'] = $row['staff_position'];
                $_SESSION['staff_password'] = $row['staff_password'];
                
                header("Location: homepage.php");
                exit();

            }
            else{
                header("Location: index.php?error=Incorect Email or Password");
                exit();
            }

        }else{
            header("Location: index.php?error=Incorect Email or Password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}

?>