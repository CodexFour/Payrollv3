<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="CSS/salary.css" />
</head>

<body id="salary">
  <?php include_once 'components/navbar.php' ?>
  <?php include_once 'components/sidebar.php' ?>
  <section id="hero">
    <h2 style="grid-area: h2">SALARY</h2>
    <p style="grid-area: p" class="font-b txt-lite">November 15, 2023</p>
    <button style="grid-area: b">DOWNLOAD</button>
  </section>
  <section id="main">
    <div class="uni-card" style="grid-area: gsc">
      <p class="font-b font-s">GROSS SALARY</p>
      <!-- added -->
      <?php
      $user = $_SESSION['username'];
      $query = "SELECT payroll.gross_total_amount FROM payroll WHERE payroll.employee_id =" . getEmployeeID();
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      if (empty($row['gross_total_amount'])) {
        echo "<h1 class='font-b'>" . 0 . "</h1>";
        exit();
      }
      echo "<h1 class='font-b'>" . $row['gross_total_amount'] . "</h1>";
      ?>
      <!-- added -->
      <p class="font-b txt-lite">PHP</p>
    </div>
    <div class="uni-card" style="grid-area: tdc">
      <p class="font-b font-s">TOTAL DEDUCTION</p>
           <!-- added -->
           <?php
      $user = $_SESSION['username'];
      $query = "SELECT payroll.deduction_total_amount FROM payroll WHERE payroll.employee_id =" . getEmployeeID();
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      if (empty($row['deduction_total_amount'])) {
        echo "<h1 class='font-b'>" . 0 . "</h1>";
        exit();
      }
      echo "<h1 class='font-b'>" . $row['deduction_total_amount'] . "</h1>";
      ?>
      <!-- added -->
      <p class="font-b txt-lite">PHP</p>
    </div>
    <div class="uni-card" style="grid-area: sbc">
      <p class="font-b">EARNINGS</p>
      <p class="txt-lite font-s">BREAKDOWN</p>
      <br>
      <ul>
        <li class="salary-list">
          <p class="font-b font-s">UNITS</p>
          <p class="font-b font-s">100</p>
        </li>
        <li class="salary-list">
          <p class="font-b font-s">HOURS</p>
          <p class="font-b font-s">100</p>
        </li>
        <li class="salary-list">
          <p class="font-b font-s">PART-TIME</p>
          <p class="font-b font-s">100</p>
        </li>
      </ul>
    </div>
    <div class="uni-card" style="grid-area: dbc">
      <p class="font-b">DEDUCTION</p>
      <p class="txt-lite font-s">BREAKDOWN</p>
      <br>
      <ul>
        <li class="salary-list">
          <p class="font-b font-s">SSS-LOAN</p>
          <p class="font-b font-s">100</p>
        </li>
        <li class="salary-list">
          <p class="font-b font-s">PAG-IBIG</p>
          <p class="font-b font-s">100</p>
        </li>
        <li class="salary-list">
          <p class="font-b font-s">A/P LOAN</p>
          <p class="font-b font-s">100</p>
        </li>
        <li class="salary-list">
          <p class="font-b font-s">FASA</p>
          <p class="font-b font-s">100</p>
        </li>
      </ul>
    </div>
    <div class="uni-card flex center flex-row space-b" style="grid-area: nsc">
      <p class="font-b">NET SALARY:</p>
      <!-- added -->
      <?php
      $user = $_SESSION['username'];
      $query = "SELECT payroll.net_salary FROM payroll WHERE payroll.employee_id =" . getEmployeeID();
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      if (empty($row['net_salary'])) {
        echo "<h1 class='font-b'>" . 0 . "</h1>";
        exit();
      }
      
      echo "<h1 class='font-b'><span class='font-m txt-lite'>PHP </span>". $row['net_salary'] . "</h1>";
      ?>
      <!-- added -->
    </div>
  </section>
  <section id="graph">
    <div class="uni-card">
      <p class="font-b">SEMESTER SALARY</p>
      <canvas id="myChart" style="max-height: 300px;"></canvas>
    </div>
  </section>
  <script src="assets/chart.js"></script>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'amount per salary',
          data: [17, 19, 15, 18, 17, 8],
          borderWidth: 1,
          bordeColor: [
            'rgba(66, 138, 255)',
            'rgb(255, 66, 66)',
            'rgb(66, 255, 91)',
            'rgb(255, 66, 154)',
            'rgb(255, 189, 66)',
            'rgb(138, 66, 255)'
          ],
          backgroundColor: [
            'rgba(66, 138, 255, 0.5)',
            'rgb(255, 66, 66, 0.2)',
            'rgb(66, 255, 91, 0.2)',
            'rgb(255, 66, 154, 0.2)',
            'rgb(255, 189, 66, 0.2)',
            'rgb(138, 66, 255, 0.2)'
          ]
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>