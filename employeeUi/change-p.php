<?php 
session_start();

include '../src/phpFunctions/connection.php';
$con = connect('../../crt/curl-ca-bundle.crt');
if (isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $op = validate($_POST['op']);
    $np = validate($_POST['np']);
    $c_np = validate($_POST['c_np']);
    
    if(empty($op)){
        $_SESSION['error'] = "Old Password is required";
        header("Location: setting.php");
        exit();
    }else if(empty($np)){
        $_SESSION['error'] = "New Password is required";
        header("Location: setting.php");
        exit();
    }else if($np !== $c_np){
        $_SESSION['error'] = "The confirmation password does not match";
        header("Location: setting.php");
        exit();
    }else {
        $user = $_SESSION['username'];

        $sql = "SELECT password FROM accounts WHERE username='$user' AND password='$op'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE accounts SET password='$np' WHERE username='$user'";
            if(mysqli_query($con, $sql_2)){
                $_SESSION['password'] = $np;
                if(isset($_COOKIE['password'])){
                    setcookie('password', $np, time() + (60 * 60 * 24 * 7), "/"); // 7 days
                }
                $_SESSION['success'] = "Your password has been changed successfully";
                header("Location: setting.php");
                exit();
            }else {
                $_SESSION['error'] = "Error changing password";
                header("Location: setting.php");
                exit();
            }
        }else {
            $_SESSION['error'] = "Incorrect password";
            header("Location: setting.php");
            exit();
        }
    }
}else{
    header("Location: setting.php");
    exit();
}
?>
