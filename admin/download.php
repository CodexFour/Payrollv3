<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');

if (isset($_POST['request'])) {
    $request = strtolower($_POST['request']);
    // GET DASHBOARD DATAS
    if ($request === 'dashboard') {
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
    } elseif ($request === 'employee'){
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
    } elseif ($request === 'leave_types'){
        $result = $con->query('SELECT * FROM payroll_db.leave_type');
        $leaveTypes = array();
        while($row = $result->fetch_assoc()){
            $leaveTypes[$row['leave_type_id']] = $row;
        }
        echo json_encode(
            $leaveTypes
        );

    } elseif ($request === 'emp_info'){
        $employees = $con->query('SELECT * FROM employees WHERE employee_id = '.$_POST['emp_id']);
        $empRow = $employees->fetch_assoc();
        $empRow['department_name'] = $con->query('SELECT department_name AS "dn" FROM department WHERE department_id = '.$empRow['department_id'])->fetch_assoc()['dn'];
        $empRow['job_title'] = $con->query('SELECT job_title AS "jt" FROM job_class WHERE job_id = '.$empRow['job_id'])->fetch_assoc()['jt'];
        $empRow['address'] = $con->query('SELECT * FROM `address` WHERE employee_id ='.$_POST['emp_id'])->fetch_assoc();
        echo json_encode(
            $empRow
        );
    } elseif ($request === 'leave_type_info'){
        $leaveType = $con->query('SELECT * FROM leave_type WHERE leave_type_id = '.$_POST['leave_type_id']);
        $ltRow = $leaveType->fetch_assoc();
        echo json_encode(
            $ltRow
        );
    } elseif ($request === 'get-admin-nav'){
        $result = $con->query('SELECT first_name, last_name, job_title FROM employees JOIN job_class ON employees.job_id = job_class.job_id WHERE employee_id = '.$_POST['admin-id']);
        $admin = $result->fetch_assoc();
        echo json_encode(
            $admin
        );
    }
}
