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

        $sql = "SELECT * FROM agent WHERE agent_id='$uname' AND agent_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['agent_id'] === $uname && $row['agent_password'] === $pass) {
                echo "Logged in!";
                $_SESSION['agent_id'] = $row['agent_id'];
                $_SESSION['agent_email'] = $row['agent_email'];
                $_SESSION['agent_name'] = $row['agent_name'];
                $_SESSION['agent_password'] = $row['agent_password'];
                $_SESSION['agent_phoneno'] = $row['agent_phone'];
                $_SESSION['agent_address'] = $row['agent_address'];

             
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