<?php
session_start();

include '../../src/phpFunctions/connection.php';
$con = connect('');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $payroll = $con->query(
        'SELECT * FROM payroll_db.payroll
            WHERE employee_id = '.$_POST['emp-id'].'
            ORDER BY payroll_date_period DESC
            LIMIT 1')->fetch_assoc();
    
    $empGross = $con->query(
        'SELECT earnings_name, amount FROM employee_gross
            JOIN earnings ON employee_gross.earnings_id = earnings.earnings_id
            WHERE payroll_id = '.$payroll['payroll_id']);
    $gross = array();
    while($row = $empGross->fetch_assoc()){
        $gross[$row['earnings_name']] = $row;
    }
    $empDeduct = $con->query(
        'SELECT deduction_name, employee_deduction.amount FROM employee_deduction
            JOIN deduction ON employee_deduction.deduction_id = deduction.deduction_id
            WHERE payroll_id = '.$payroll['payroll_id']);
    $deduct = array();
    while($row = $empDeduct->fetch_assoc()){
        $deduct[$row['deduction_name']] = $row;
    }
    echo json_encode(
        array(
            'payroll' => $payroll,
            'gross' => $gross,
            'deduction' => $deduct
        )
    );
}