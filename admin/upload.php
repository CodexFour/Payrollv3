<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$status = 0;
$err = "";
$rowsAffected = 0;
if (!isset($_POST['request'])) { // It means we are uploading a form data
    // Retrieve data from the form
    // $fileBlob = file_get_contents($_FILES['fileBlob']['tmp_name']);
    $id = isset($_POST['employee_id']) ? $_POST['employee_id'] : NULL;
    $rfid = isset($_POST['employee-rfid']) ? $_POST['employee-rfid'] : "";
    $fn = isset($_POST['employee-firstname']) ? $_POST['employee-firstname'] : "";
    $ln = isset($_POST['employee-lastname']) ? $_POST['employee-lastname'] : "";
    $mn = isset($_POST['employee-middlename']) ? $_POST['employee-middlename'] : "";
    $sf = isset($_POST['employee-suffix']) ? $_POST['employee-suffix'] : "";
    $bd = isset($_POST['employee-birthdate']) ? $_POST['employee-birthdate'] : NULL;
    $age = isset($_POST['employee-age']) ? $_POST['employee-age'] : ""; //$_POST['employee-age'];
    $gd = isset($_POST['employee-gender']) ? $_POST['employee-gender'] : "";
    $em = isset($_POST['employee-email']) ? $_POST['employee-email'] : "";
    $phone = isset($_POST['employee-phone']) ? $_POST['employee-phone'] : "";
    $dpm = isset($_POST['employee-department']) ? $_POST['employee-department'] : "";
    $jtt = isset($_POST['employee-job-title']) ? $_POST['employee-job-title'] : "";
    $wt = isset($_POST['employee-working-type']) ? $_POST['employee-working-type'] : "";
    $hd = isset($_POST['employee-hired-date']) ? $_POST['employee-hired-date'] : NULL;
    $status_ = "ACTIVE";
    $isEmployed = 1;


    $strt = $_POST['employee-street'];
    $brgy = $_POST['employee-barangay'];
    $ct = $_POST['employee-city'];
    $pv = $_POST['employee-province'];
    try {
        if ($id === NULL || empty($id)) { // Insert an employee
            $query = "INSERT INTO `payroll_db`.`employees`
            (`first_name`,
            `last_name`,
            `middle_name`,
            `suffix`,
            `gender`,
            `age`,
            `email`,
            `phone_no`,
            `birthdate`,
            `job_id`,
            `working_type`,
            `hired_date`,
            `department_id`,
            `status_`,
            `isEmployed`)
            VALUES
            (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt1 = $con->prepare($query);

            $stmt1->bind_param('sssssisssissiii', $fn, $ln, $mn, $sf, $gd, $age, $em, $phone, $bd, $jtt, $wt, $hd, $dpm, $status_, $isEmployed);


            $stmt1->execute();

            $lastID = $con->insert_id;
            $query2 = "INSERT INTO address
            VALUES (NULL,?,?,?,?,?)";
            $stmt2 = $con->prepare($query2);
            $stmt2->bind_param('issss',$lastID,$strt,$brgy,$ct,$pv);
            $stmt2->execute();
            $stmt2->close();

            $status = 1;
            $err = $stmt1->errno > 0 ? $stmt1->error : "";
            $rowsAffected = $stmt1->affected_rows;
            $stmt1->close();
            
        } else { // UPDATE EMPLOYEE

            $query = "UPDATE `employees`
            SET `first_name` = ?,
                `last_name` = ?,
                `middle_name` = ?,
                `suffix` = ?,
                `gender` = ?,
                `age` = ?,
                `email` = ?,
                `phone_no` = ?,
                `birthdate` = ?,
                `job_id` = ?,
                `working_type` = ?,
                `hired_date` = ?,
                `department_id` = ?,
                `status_` = ?,
                `isEmployed` = ?
            WHERE `employee_id` = ?";

            $stmt = $con->prepare($query);
            $stmt->bind_param('sssssisssissiiii', $fn, $ln, $mn, $sf, $gd, $age, $em, $phone, $bd, $jtt, $wt, $hd, $dpm, $status_, $isEmployed, $id);
            $stmt->execute();

            $addressExist = $con->query('SELECT * FROM `address` WHERE employee_id ='.$id);
            if ($addressExist->num_rows > 0){
                $query2 = "UPDATE `address`
                SET `street` = ?,
                    `barangay` = ?,
                    `city` = ?,
                    `province` = ?
                WHERE `employee_id` = ?";

                $stmt2 = $con->prepare($query2);
                $stmt2->bind_param('ssssi',$strt,$brgy,$ct,$pv, $id);
                $stmt2->execute();
                $stmt2->close();
            } else {
                $query2 = "INSERT INTO address
                VALUES (NULL,?,?,?,?,?)";
                $stmt2 = $con->prepare($query2);
                $stmt2->bind_param('issss',$id,$strt,$brgy,$ct,$pv);
                $stmt2->execute();
                $stmt2->close();
            }

            $status = 2;
            $err = $stmt->errno > 0 ? $stmt->error : "";
            $rowsAffected = $stmt->affected_rows;
            $stmt->close();
        }
    } catch (Exception $e) {
        $status = 0;
        $err = $e->getMessage();
    }
} else {

    if ($_POST['request'] === 'emp-delete') {
        $stmt = $con->prepare('DELETE FROM employees WHERE employee_id =' . $_POST['emp-id']);
        $stmt->execute();

        $status = 1;
        $err = $stmt->errno > 0 ? $stmt->error : "";
        $rowsAffected = $stmt->affected_rows;
    } elseif ($_POST['request'] === 'leave-type'){
        $id = isset($_POST['leave-type-id'])? $_POST['leave-type-id']:NULL;
        $isActive = isset($_POST['leave-type-active'])? "1":"0";
        if($id == null || empty($id)){
            $stmt = $con->prepare(
                'INSERT INTO `leave_type`
                    (`leave_type_id`,
                    `leave_name`,
                    `duration`,
                    `isActive`)
                    VALUES (NULL, ?,?,?);');
            $stmt->bind_param('sii',
                        $_POST['leave-type-name'],
                        $_POST['leave-type-duration'],
                        $isActive);
            $stmt->execute();
            $status = 1;
            $err = $stmt->errno > 0 ? $stmt->error : "";
            $rowsAffected = $stmt->affected_rows;
        } else {
            $stmt = $con->prepare(
                'UPDATE `leave_type`
                 SET `leave_name` = ?,
                     `duration` = ?,
                     `isActive` = ?
                 WHERE `leave_type_id` = ?');
            $stmt->bind_param('siii',
                        $_POST['leave-type-name'],
                        $_POST['leave-type-duration'],
                        $isActive,
                        $id);
            $stmt->execute();
            $status = 2;
            $err = $stmt->errno > 0 ? $stmt->error : "";
            $rowsAffected = $stmt->affected_rows;
        }
        
    } elseif ($_POST['request'] === 'leave-type-delete') {
        $stmt = $con->prepare('DELETE FROM leave_type WHERE leave_type_id =' . $_POST['leave-type-id']);
        $stmt->execute();

        $status = 1;
        $err = $stmt->errno > 0 ? $stmt->error : "";
        $rowsAffected = $stmt->affected_rows;

    } elseif ($_POST['request'] === 'add-leave'){
        // $stmt = $con->prepare(
        //     'INSERT INTO `leave`
        //     (`leave_id`,
        //     `employee_id`,
        //     `start_date`,
        //     `end_date`,
        //     `comment`,
        //     `status`,
        //     `leave_type_id`)
        //     VALUES
        //     (NULL,
        //     ?,
        //     ?,
        //     ?,
        //     ?,
        //     ?,
        //     ?);
        //     ');
        // $stmt->bind_param('issssi',
        //             $_POST['employee_id'],
        //             $_POST['start-date'],
        //             $_POST['comment'],
        //             $_POST['end-date'],
        //             $_POST['status'],
        //             $_POST['leave_type_id']);
        // $stmt->execute();
        $status = $_POST;
        // $status = 1;
        // $err = $stmt->errno > 0 ? $stmt->error : "";
        // $rowsAffected = $stmt->affected_rows;
    }
}

echo json_encode(
    array(
        'error' => $err,
        'status' => $status,
        'rowsAffected' => $rowsAffected
    )
);
