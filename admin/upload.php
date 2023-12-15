<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');

// Retrieve data from the form
// $fileBlob = file_get_contents($_FILES['fileBlob']['tmp_name']);
$rfid = $_POST['employee-rfid'];
$fn = $_POST['employee-firstname'];
$ln = $_POST['employee-lastname'];
$mn = $_POST['employee-middlename'];
$sf = $_POST['employee-suffix'];
$bd = $_POST['employee-birthdate'];
$age = 20; //$_POST['employee-age'];
$gd = $_POST['employee-gender'];
$em = $_POST['employee-email'];
$phone = $_POST['employee-phone'];
$dpm = $_POST['employee-department'];
$jtt = $_POST['employee-job-title'];
$wt = $_POST['employee-working-type'];
$hd = $_POST['employee-hired-date'];
$status_ = "ACTIVE";
$isEmployed = 1;


$street = $_POST['employee-street'];
$brgy = $_POST['employee-barangay'];
$cy = $_POST['employee-city'];
$pv = $_POST['employee-province'];
$status = false;
$err = "";
try{
    // $query = "INSERT INTO employees
    //         VALUES (NULL,NULL,NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    // $stmt1 = $con->prepare($query);
    // $stmt1->bind_param('b',$fileBlob);
    // $stmt1->bind_param('i',$rfid);
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
    $stmt1->close();

    
    // $lastID = $con->insert_id;
    // $query2 = "INSERT INTO address
    // VALUES (NULL,?,?,?,?,?)";
    // $stmt2 = $con->prepare($query2);
    // $stmt2->bind_param('s',$lastID);
    // $stmt2->bind_param('s',$street);
    // $stmt2->bind_param('s',$brgy);
    // $stmt2->bind_param('s',$ct);
    // $stmt2->bind_param('s',$pv);
    // $stmt2->execute();
    // $stmt2->close();

    $status = true;
} catch (Exception $e){
    $status = false;
    $err = $e->getMessage();
}

echo json_encode(
    array(
        'error' => $err,
        'status' => $status
    )
);
