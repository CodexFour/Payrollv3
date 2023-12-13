<?php

session_start();

include_once('../../phpFunctions/connection.php');
// $con = new mysqli($dbhost,$dbuname,$dbpword,$dbname);
// will be used from connection.php
$con = connect('../../crt/curl-ca-bundle.crt');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$remember = isset($_POST['remember']) ? $_POST['remember'] : '';
$usernameWarning = false;
$passwordWarning = false;

if (!isset($username) || empty($username)) {
    $usernameWarning = true;
}
if (!isset($password) || empty($password)) {
    $passwordWarning = true;
}
$userExist = false;
$passExist = false;
if (!empty($username)) {
    if (strpos($username, "@")) {
        $result = $con->query("SELECT email FROM employees WHERE email ='" . $username . "';");
        $userExist = $result->num_rows > 0 ? true : false;
    } else {
        $result = $con->query("SELECT username FROM accounts WHERE username ='" . $username . "';");
        $userExist = $result->num_rows > 0 ? true : false;
    }
}

if (!empty($password)) {
    if (strpos($username, "@")) {
        $result = $con->query(
            "SELECT password
                 FROM accounts
                 JOIN employees
                 ON accounts.employee_id = employees.employee_id
                 WHERE email ='" . $username . "' and password='" . $password . "';");
    } else {
        $result = $con->query("SELECT password FROM accounts WHERE username ='" . $username . "' and password='" . $password . "';");
    }

    if ($result->num_rows === 1) {
        $passExist = true;
        // Convert email to username
        if(strpos($username, "@")){
            $result = $con->query(
                "SELECT username
                     FROM accounts
                     JOIN employees
                     ON accounts.employee_id = employees.employee_id
                     WHERE email ='" . $username . "';");
            $username = mysqli_fetch_assoc($result)['username'];
        }
        // Pass the verified user account to the session
        $_SESSION['user'] = $username;
        if($remember === 'true'){
            setcookie('username',$username,time() + (60*60*24)*30,"/"); // 30 days
            setcookie('password',$password,time() + (60*60*24)*30,"/"); // 30 days
        } else {
            setcookie('username','', time() - 7000000,"/"); // remove 30 days
            setcookie('password','', time() - 7000000,"/");
        }
    } else {
        $passExist = false;
    }
}

echo json_encode(
    array(
        'usernameWarning' => $usernameWarning,
        'passwordWarning' => $passwordWarning,
        'userExist' => $userExist,
        'passExist' => $passExist,
        'remember' => $remember
    )
);
