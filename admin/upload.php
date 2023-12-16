<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve data from the form
// $fileBlob = file_get_contents($_FILES['fileBlob']['tmp_name']);
$id = isset($_POST['employee-id'])? $_POST['employee-id']:"";
$rfid = isset($_POST['employee-rfid'])? $_POST['employee-rfid']:"";
$fn = isset($_POST['employee-firstname'])? $_POST['employee-firstname']:"";
$ln = isset($_POST['employee-lastname'])? $_POST['employee-lastname']:"";
$mn = isset($_POST['employee-middlename'])? $_POST['employee-middlename']:"";
$sf = isset($_POST['employee-suffix'])? $_POST['employee-suffix']:"";
$bd = isset($_POST['employee-birthdate'])? $_POST['employee-birthdate']:NULL;
$age = 20; //$_POST['employee-age'];
$gd = isset($_POST['employee-gender'])? $_POST['employee-gender']:"";
$em = isset($_POST['employee-email'])? $_POST['employee-email']:"";
$phone = isset($_POST['employee-phone'])? $_POST['employee-phone']:"";
$dpm = isset($_POST['employee-department'])? $_POST['employee-department']:"";
$jtt = isset($_POST['employee-job-title'])? $_POST['employee-job-title']:"";
$wt = isset($_POST['employee-working-type'])? $_POST['employee-working-type']:"";
$hd = isset($_POST['employee-hired-date'])? $_POST['employee-hired-date']:"";
$status_ = "ACTIVE";
$isEmployed = 1;


$street = $_POST['employee-street'];
$brgy = $_POST['employee-barangay'];
$cy = $_POST['employee-city'];
$pv = $_POST['employee-province'];
$status = 0;
$err = "";
try{
    if(empty($id)){
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

        
        $lastID = $con->insert_id;
        $query2 = "INSERT INTO address
        VALUES (NULL,?,?,?,?,?)";
        $stmt2 = $con->prepare($query2);
        $stmt2->bind_param('s',$lastID);
        $stmt2->bind_param('s',$street);
        $stmt2->bind_param('s',$brgy);
        $stmt2->bind_param('s',$ct);
        $stmt2->bind_param('s',$pv);
        $stmt2->execute();
        $stmt2->close();

        $status = 1;
    } else{

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

        // Assuming data types and order, adjust accordingly
        $stmt->bind_param('sssssisssissiiii', $fn, $ln, $mn, $sf, $gd, $age, $em, $phone, $bd, $jtt, $wt, $hd, $dpm, $status_, $isEmployed,$id);

        $stmt->execute();

        $status = 2;
    }
} catch (Exception $e){
    $status = 0;
    $err = $e->getMessage();
}

echo json_encode(
    array(
        'error' => $err,
        'status' => $status
    )
);
