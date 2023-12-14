<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');

if (isset($_POST['page'])) {
    $page = strtolower($_POST['page']);
    // GET DASHBOARD DATAS
    if ($page === 'dashboard') {
        // QUERIES
        $employees = $con->query('SELECT * FROM employees');
        $payroll = $con->query( //get lastest months's
            'SELECT *
            FROM payroll_db.payroll
            WHERE MONTH(payroll_date_period) = MONTH((SELECT MAX(payroll_date_period) FROM payroll_db.payroll))
            AND YEAR(payroll_date_period) = YEAR((SELECT MAX(payroll_date_period) FROM payroll_db.payroll));'
        );
        $leave = $con->query(
            "SELECT * FROM payroll_db.leave
            WHERE not status = 'DENIED' 
            or not status = 'COMPLISHED';"
        );
        $absent = $con->query(
            "SELECT DISTINCT employee_id
            FROM `payroll_db`.`attendance`
            WHERE status = 'absent' AND date BETWEEN (SELECT MAX(payroll_date_period) FROM payroll_db.payroll) AND CURDATE();"
        );
        $currPay = $con->query(
            "SELECT DATE_ADD(MAX(payroll_date_period), INTERVAL 1 DAY)
            AS 'Result' FROM payroll_db.payroll"
        );
        $nextPay = $con->query(
            "SELECT 
                CASE 
                    WHEN MAX(payroll_date_period) IS NULL THEN NULL
                    WHEN DAY(MAX(payroll_date_period)) <= 15 THEN LAST_DAY(MAX(payroll_date_period))
                    ELSE DATE_ADD(LAST_DAY(MAX(payroll_date_period)), INTERVAL 15 DAY)
                END AS Result
            FROM payroll_db.payroll;
            ");
        
        // COUNTS
        $empCount = $employees->num_rows;
        $totalSalary = array_sum(array_column($payroll->fetch_all(MYSQLI_ASSOC), 'amount'));
        $leaveCount = $leave->num_rows;
        $absentCount = $absent->num_rows;
        $currPayDate = date('m/d/Y', strtotime($currPay->fetch_assoc()['Result']));
        $nextPayDate = date('m/d/Y', strtotime($nextPay->fetch_assoc()['Result']));
        
        $tableRows = [1,2,3,4,5];

        echo json_encode(
            array(
                'empCount' => $empCount,
                'totalSalary' => $totalSalary,
                'leaveCount' => $leaveCount,
                'absentCount' => $absentCount,
                'currPayDate' => $currPayDate,
                'nextPayDate' => $nextPayDate,
                'leaveRows' => $tableRows
            )
        );



    // GET EMPLOYEE DATAS   
    } elseif ($page === 'employee'){
        $employees = $con->query('SELECT * FROM employees');
        $dprtm = $con->query('SELECT * FROM payroll_db.department;');

        $empCount = $employees->num_rows;
        $empDprtm = array();
        while ($row = $dprtm->fetch_assoc()){
            $dcount = $con->query('SELECT COUNT(employee_id) 
                                    AS "count" FROM employees WHERE department_id = '.$row['department_id']
                                    )->fetch_assoc()['count'];
            $empDprtm[$row['department_id']] = [$row['department_name'], $dcount];
        }
        $employeeRows = array();
        while ($row = $employees->fetch_assoc()){
            $employeeRows[$row['employee_id']] = $row;
        }

        echo json_encode(
            array(
                'employees' => $employeeRows,
                'empCount' => $empCount,
                'departments' => $empDprtm
            )
        );
    }
}
