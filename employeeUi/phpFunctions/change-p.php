<?php
session_start();

include '../../src/phpFunctions/connection.php';
$con = connect('');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $op = validate($_POST['op']);
        $np = validate($_POST['np']);
        $c_np = validate($_POST['c_np']);

        if (empty($op) || empty($np) || empty($c_np)) {
            echo json_encode(['error' => 'All fields are required']);
        } elseif ($np !== $c_np) {
            echo json_encode(['error' => 'The confirmation password does not match']);
        } else {
            $user = $_SESSION['username'];

            $sql = "SELECT password FROM accounts WHERE username='$user' AND password='$op'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) === 1) {
                $sql_2 = "UPDATE accounts SET password='$np' WHERE username='$user'";
                if (mysqli_query($con, $sql_2)) {
                    $_SESSION['password'] = $np;
                    if (isset($_COOKIE['password'])) {
                        setcookie('password', $np, time() + (60 * 60 * 24 * 7), "/"); // 7 days
                    }
                    echo json_encode(['success' => 'Your password has been changed successfully']);
                } else {
                    echo json_encode(['error' => 'Error changing password']);
                }
            } else {
                echo json_encode(['error' => 'Incorrect password']);
            }
        }
    } else {
        echo json_encode(['error' => 'Invalid request']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}
?>
