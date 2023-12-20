<?php
session_start();

include '../../src/phpFunctions/connection.php';
$con = connect('');

$result = $con->query(
    'SELECT * FROM payroll_db.attendance
        WHERE employee_id = '.$_POST['emp-id'].' and date = current_date();');

echo json_encode(
    $result->fetch_assoc()
);