<?php

include_once '../../src/phpFunctions/connection.php';

$con = connect('');
$employee_leave_query = "SELECT employee_id, first_name, last_name, middle_name, suffix, rfid from employees WHERE rfid =".$_POST['rfid'];

$sql = $employee_leave_query;
$result = $con->query($sql) or die($con->error);
if ($result->num_rows > 0) {
    $employees = array();
    while($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }

    try{
        $result2 = $con->query(
            'SELECT attendance_id FROM payroll_db.attendance
                WHERE employee_id = '.$employees[0]['employee_id'].' and date = current_date();');
        if($result2->num_rows > 0){
            $stmt = $con->prepare(
                "UPDATE `payroll_db`.`attendance`
                SET
                `time_out` = CURRENT_TIME()
                WHERE
                `attendance_id` = ?
                ");
            $stmt->bind_param('i',$result2->fetch_array()['attendance_id']);
            $stmt->execute();
        } else {
            $stmt = $con->prepare(
                'INSERT INTO `payroll_db`.`attendance`
                    (`attendance_id`,
                    `employee_id`,
                    `date`,
                    `time_in`,
                    `time_out`,
                    `shift_length`,
                    `over_time`,
                    `under_time`,
                    `late_duration`,
                    `status`)
                    VALUES
                    (NULL, ?, current_date(), current_time(), NULL, NULL, NULL, NULL,NULL, "on-time"); ');
            $stmt->bind_param('i',$employees[0]['employee_id']);
            $stmt->execute();
        };
    } catch (Exception $e) {
        $err = $e;
    }

    // echo json_encode($err);
    echo json_encode($employees);
}