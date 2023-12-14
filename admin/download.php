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
            'SELECT leave_id AS "li", 
                employees.first_name AS "fn",
                employees.last_name AS "ln",
                start_date AS "sd",
                end_date AS "ed",
                DATEDIFF(end_date, CURDATE()) AS "rem",
                payroll_db.leave.status AS "st" FROM payroll_db.leave
                JOIN employees ON employees.employee_id = payroll_db.leave.employee_id'
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
        $totalSalary = array_sum(array_column($payroll->fetch_all(MYSQLI_ASSOC), 'net_salary'));
        $leaveCount = $leave->num_rows;
        $absentCount = $absent->num_rows;
        $currPayDate = date('m/d/Y', strtotime($currPay->fetch_assoc()['Result']));
        $nextPayDate = date('m/d/Y', strtotime($nextPay->fetch_assoc()['Result']));
        $leaveRows = array();
        while($row = $leave->fetch_assoc()){
            $leaveRows[$row['li']] = $row;
        }

        echo json_encode(
            array(
                'empCount' => $empCount,
                'totalSalary' => $totalSalary >= 1000? sprintf("%.1fk", $totalSalary / 1000) : $totalSalary,
                'leaveCount' => $leaveCount,
                'absentCount' => $absentCount,
                'currPayDate' => $currPayDate,
                'nextPayDate' => $nextPayDate,
                'leaves' => $leaveRows
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