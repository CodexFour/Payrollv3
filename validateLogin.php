<?php
include_once 'src/phpFunctions/connection.php';
$con = connect('');
session_start();
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $_SESSION['username'] = isset($_COOKIE['username']) ? $_COOKIE['username'] : $_SESSION['username'];
    $_SESSION['password'] = isset($_COOKIE['password']) ? $_COOKIE['password'] : $_SESSION['password'];

    $result = $con->query(
        'SELECT * FROM payroll_db.accounts 
            WHERE username = "' . $_SESSION['username'] . '" AND password = "' . $_SESSION['password'] . '"'
    );
    if ($result->num_rows === 1) {
        if (isset($_COOKIE['username'])) {
            // Refresh cookie duration
            setcookie('username', $_COOKIE['username'], time() + (60 * 60 * 24 * 7), "/"); // 7 days
            setcookie('password', $_COOKIE['password'], time() + (60 * 60 * 24 * 7), "/"); // 7 days
        }
    } else {
        setcookie('username', '', time() - 7000000, "/"); // remove 30 days
        setcookie('password', '', time() - 7000000, "/"); // remove 30 days
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        die();
    }
} else {
    header("Location: ../index.php");
    die();
}
function isAdmin(){
    $con = connect('');
    $isAdmin = $con->query(
    "SELECT employees.employee_id 
    FROM payroll_db.privilege 
    JOIN employees 
    ON privilege.employee_id = employees.employee_id
    WHERE privilege.employee_id = ".getEmployeeID());
    return $isAdmin->num_rows > 0? true:false;
}
function getEmployeeID(){
    $con = connect('');
    $empId = $con->query(
    "SELECT employee_id FROM accounts 
    WHERE username = '".$_SESSION['username']."'");
    return $empId->fetch_assoc()['employee_id'];
}