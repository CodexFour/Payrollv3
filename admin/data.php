<?php
include_once '../src/phpFunctions/connection.php';
session_start();
$con = connect('');

if (isset($_POST['page'])) {
    if ($_POST['page'] === 'dashboard') {
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
        
        // COUNTS
        $empCount = $employees->num_rows;
        $totalSalary = array_sum(array_column($payroll->fetch_all(MYSQLI_ASSOC), 'amount'));
        $leaveCount = $leave->num_rows;
        $absentCount = $absent->num_rows;
        
        $tableRows = '<tr onclick="openModal(".modal-view-leave")">
                        <td class="table-content-default">
                            <img
                                    src="../../../src/assets/img/img.png"
                                    alt="image"
                                    class="icon-m icon-soft-edge"
                            />
                        </td>
                        <td class="text-regular txt-xxs">John Doe</td>
                        <td class="text-regular txt-xxs">10-20-2023</td>
                        <td class="text-regular txt-xxs">10-30-2023</td>
                        <td class="text-regular txt-xxs">10</td>
                        <td class="text-regular txt-xxs">-</td>
                        <td>
                            <span class="text-regular txt-xxs status inactive"></span>
                        </td>
                    </tr>';

        echo json_encode(
            array(
                'empCount' => $empCount,
                'totalSalary' => $totalSalary,
                'leaveCount' => $leaveCount,
                'absentCount' => $absentCount
            )
        );
    }
}
