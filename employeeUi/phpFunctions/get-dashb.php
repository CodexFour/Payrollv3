<?php
session_start();

include '../../src/phpFunctions/connection.php';
$con = connect('');

$request = $_POST['request'];
if($request === 'dashboard'){
    $nxt_pr_date = $con->query(
        'SELECT 
              CASE 
                  WHEN MAX(payroll_date_period) IS NULL THEN NULL
                  WHEN DAY(MAX(payroll_date_period)) <= 15 THEN LAST_DAY(MAX(payroll_date_period))
                  ELSE DATE_ADD(LAST_DAY(MAX(payroll_date_period)), INTERVAL 15 DAY)
              END AS Result
          FROM payroll_db.payroll');

    echo json_encode(
        array(
            'nxt_pr_date' => $nxt_pr_date->fetch_assoc()['Result']
        )
    );
} elseif ($request === 'attd'){
    $result = $con->query(
        'SELECT * FROM payroll_db.attendance
            WHERE employee_id = '.$_POST['emp-id'].' and date = current_date();');
    
    echo json_encode(
        $result->fetch_assoc()
    );
}