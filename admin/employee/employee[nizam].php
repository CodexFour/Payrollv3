<?php
include_once '../../src/phpFunctions/connection.php';
$db = connect('../../src/assets/curl-ca-bundle.crt');

$employees = $db->query("SELECT first_name AS 'fn',middle_name AS 'mn',last_name AS 'ls',department_id AS 'dp',status FROM payroll_db.employees;");
$empCount = $employees->num_rows;
$color;
$status;

$department = $db->query("SELECT * FROM payroll_db.department;");
?>
<!-- <link rel="stylesheet" href="CSS/style.css" />
<link rel="stylesheet" href="CSS/table.css" /> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="employee/CSS/style.css">
  <link rel="stylesheet" href="employee/CSS/table.css">
  <title>Document</title>
</head>

<body>
  <section>
    <header class="employee-container">
      <div class="uni-card emp-count">
        <div class="left flex center">
          <h2 class="txt txt-center font-m">TOTAL EMPLOYEES</h2>
          <p class="txt-lite font-s">DECEMBER</p>
        </div>
        <div class="vl"></div>
        <div class="flex center">
          <h1 class="txt font-l font-b" style="font-size: 5rem;">
            <!-- TODO: Return numbers employee -->
            <?php echo $empCount ?>
            <!-- ============================= -->
          </h1>
          <p class="txt-lite font-s">EMPLOYEES</p>
        </div>
      </div>
      <div class="uni-card dept-count">
        <h2 class="txt font-m">DEPARTMENT</h2>
        <p class="txt-lite font-s">EMPLOYEES PER DEPARTMENT</p>
        <div class="dept-container p1 flex gap1" style="overflow: auto">
          <!-- TODO: Loop each department for each of their own card -->
          <?php
          $flagColor = 1;
          while ($row = $department->fetch_assoc()) {
            $empDeptCount = ($db->query(
              "SELECT COUNT(*) AS 'count' 
                FROM employees 
                WHERE department_id = '" . $row['department_id'] . "';"
            ))->fetch_assoc()['count'];
          ?>
            <div class="uni-card-lite flex space-a" style="height: 90px">
              <h3 class="txt font-s">
                <?php echo $row['department_name'] ?>
              </h3>
              <div class="full-bar flex center flex-row space-b">
                <div class="perc-bar" style="
                        background-color: var(--clr<?php echo $flagColor ?>);
                        width: <?php echo $empDeptCount / $empCount * 100 ?>%;"></div>
                <p class="font-s font-white p1 font-b">
                  <?php echo $empDeptCount; ?>
                </p>
              </div>
            </div>
          <?php
            if ($flagColor == 10)
              $flagColor = 1;
            else
              $flagColor++;
          }
          ?>
          <!-- ========================================================= -->
        </div>
      </div>
      <div class="uni-card emp-table">
        <h2 class="txt font-m">EMPLOYEES</h2>
        <div class="input flex flex-row space-b">
          <div class="emp-search flex center left flex-row">
            <input type="text" class="font-s" placeholder="Search" />
            <img id="emp-search-icon" src="../src/assets/icons/svg/search.svg" alt="">
          </div>
          <button class=" font-s">ADD EMPLOYEE</button>
        </div>
        <div class="table-wrapper">
          <table class="uni-table">
            <thead class=" font-s">
              <tr>
                <th class="col-pfp">PFP</th>
                <th class="col-name">NAME</th>
                <th class="col-dept">DEPT.</th>
                <th class="col-unit">UNITS</th>
                <th class="col-stat">STATUS</th>
                <th class="col-act">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <!-- TODO: Loop each employees for each of their own rows in this table -->
              <?php
              while ($row = $employees->fetch_assoc()) {
                $fullname = sprintf("%s %s. %s", $row['fn'], strtoupper(substr($row['mn'], 0, 1)), $row['ls']);
                $dept = $db->query(
                  "SELECT department_name AS 'dp'
                       FROM department 
                       WHERE department.department_id = " . $row['dp']
                )->fetch_assoc()['dp'];
                if ($row['status'] === '0') {
                  $status = 'INACTIVE';
                  $color = 'indianred';
                } elseif ($row['status'] === '1') {
                  $status = 'ACTIVE';
                  $color = 'cadetblue';
                } elseif ($row['status'] === '2') {
                  $status = 'LEAVE';
                  $color = 'rebeccapurple';
                }
              ?>
                <tr>
                  <td>
                    <div style="
                        margin: 0 auto;
                        width: 45px;
                        height: 45px;
                        background-color: rebeccapurple;
                        border-radius: 50%;
                      "></div>
                  </td>
                  <td class="txt-left p-x2">
                    <?php
                    echo $fullname
                    ?>
                  </td>
                  <td>
                    <?php echo $dept ?>
                  </td>
                  <td>1</td>
                  <td>
                    <div style="
                        background-color: <?php echo $color; ?>;
                        width: 75px;
                        margin: 0 auto;
                        border-radius: 10px;
                      ">
                      <p class="txt font-s font-white"><?php echo $status; ?></p>
                    </div>
                  </td>
                  <td class="flex center flex-row gap1">
                    <button id="btn-edit-emp" class="flex center"><img src="../src/assets/icons/svg/edit.svg" alt="EDIT" width="15px" height="15px"></button>
                    <button id="btn-delete-emp" class="flex center"><img src="../src/assets/icons/svg/deleterow.svg" alt="DELETE" width="15px" height="15px"></button>
                  </td>
                </tr>
              <?php
              }
              ?>
              <!-- =================================================================== -->
            </tbody>
          </table>
        </div>
      </div>
    </header>
  </section>
</body>

</html>