
<?php 

session_start(); 

include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{

        $sql = "SELECT * FROM agent WHERE agent_email='$uname' AND agent_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['staff_email'] === $uname && $row['staff_password'] === $pass) {
                echo "Logged in!";
                $_SESSION['staff_id'] = $row['staff_id']; 
                $_SESSION['staff_name'] = $row['staff_name']; 
                $_SESSION['staff_address'] = $row['staff_address']; 
                $_SESSION['staff_phoneno'] = $row['staff_phoneno']; 
                $_SESSION['staff_password'] = $row['staff_password']; 
                $_SESSION['staff_position'] = $row['staff_position'];

             
                header("Location: home.php");
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