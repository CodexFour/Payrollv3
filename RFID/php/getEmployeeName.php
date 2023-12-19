<?php

include_once '../../src/phpFunctions/connection.php';

$con = connect('');
$employee_leave_query = "SELECT first_name, last_name, middle_name, suffix, rfid from employees";

$sql = $employee_leave_query;
$result = $con->query($sql) or die($con->error);
if ($result->num_rows > 0) {
    $employees = array();
    while($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
    echo json_encode($employees);
}