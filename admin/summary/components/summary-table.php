<link rel="stylesheet" href="../../admin.css">


<table class="summary-table" id="summary-summary-table">
    <thead class="table-head">
    <tr>
        <th class="text-bold txt-xxs primary-color  asis asis-col1" rowspan="2">No.</th>

        <th class="text-bold txt-xxs primary-color asis asis-col2" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">NAME</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
        <!--        TODO: CHANGE THE COLSPAN BASED ON THE TOTAL ACTIVE EARNINGS
                    NOTE: COLSPAN 2 IS FIX NUMBER     -->
        <th class="text-bold txt-xxs primary-color" colspan="3">SALARY AND OTHER REMUNERATION</th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">TOTAL</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span>
        </th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">TARDINESS</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">ABSENCES</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">GROSS SALARY</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
        <!--        TODO: CHANGE THE COLSPAN BASED ON THE TOTAL ACTIVE DEDUCTIONS -->
        <th class="text-bold txt-xxs primary-color" colspan="1">DEDUCTIONS</th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">TOTAL</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
        <th class="text-bold txt-xxs primary-color" rowspan="2">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">NET SALARY</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span></th>
    </tr>
    <tr class="table-column">
        <!--        NOTE: THIS IS AS IS-->
        <th class="text-bold txt-xxs primary-color">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">SEMI-MONTHLY RATE</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span>
        </th>
        <th class="text-bold txt-xxs primary-color">
            <span class="head">
                <span class="text-bold txt-xxs primary-color">TEACHING LOAD</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </span>
        </th>
        <!--        TODO: ADD COLUMN BASED ON THE NUMBER OF ACTIVE EARNINGS. INSERT IN THIS LINE-->
        <th class="text-bold txt-xxs primary-color">ALLOWANCES</th>
        <!--        NOTE: THIS IS JUS A EXAMPLE TO VISUALIZE-->
        <!--        TODO: ADD COLUMN BASED ON THE NUMBER OF ACTIVE DEDUCTION. INSERT IN THIS LINE-->
        <th class="text-bold txt-xxs primary-color">SSS PREMIUM</th>
        <!--        NOTE: THIS IS JUS A EXAMPLE TO VISUALIZE-->


    </tr>
    </thead>
    <tbody class="table-body summary-table-row">
    <?php
    include_once '../../src/phpFunctions/connection.php';
    $con = connect('');
    $result = $con->query('SELECT first_name, last_name, gross_total_amount, deduction_total_amount, net_salary FROM employees JOIN payroll ON employees.employee_id = payroll.employee_id;');
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr class="table-row">
        <td class="table-content-default row-asis1">
            <img
                    src="../src/assets/img/img.png"
                    alt="image"
                    class="icon-m icon-soft-edge"
            />
        </td>
        <td class="text-regular txt-xxs row-asis2"><?php echo $row['first_name'].' '.$row['last_name']?></td>
        <td class="text-regular txt-xxs">-----</td>
        <td class="text-regular txt-xxs">-----</td>
        <td class="text-regular txt-xxs">-----</td>
        <td class="text-regular txt-xxs"><?php echo $row['gross_total_amount']?></td>
        <td class="text-regular txt-xxs">-</td>
        <td class="text-regular txt-xxs">-</td>
        <td class="text-regular txt-xxs">-</td>
        <td class="text-regular txt-xxs">-</td>
        <td class="text-regular txt-xxs"><?php echo $row['deduction_total_amount']?></td>
        <td class="text-regular txt-xxs"><?php echo $row['net_salary']?></td>
    </tr>
    <?php
    }
    ?>

    </tbody>
</table>
