<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="CSS/dashboard.css" />
</head>

<body id="dashboard">
  <?php include_once 'components/navbar.php' ?>
  <?php include_once 'components/sidebar.php' ?>
  <section id="hero">
    <h2>DASHBOARD</h2>

    <!-- this is my changes start -->
    <?php
    $user = $_SESSION['username'];
    $query = "SELECT employees.first_name, employees.last_name FROM employees WHERE employee_id =".getEmployeeID();
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    echo "<p class='font-b txt-lite'>Welcome, " . $row['first_name'] . "</p>";
    ?>
    <!-- this is my changes end -->


    <div class="flex center flex-row left gap1">
      <img src="assets/attendance.svg" alt="" class="date-today-icon" />
      <p class="font-b" id="date-today">NOV 12, 2023</p>
    </div>
    <div class="clock flex center">
      <div class="time">
        <div class="clock-dot" style="opacity: 0;"></div>
        <svg class="timer">
          <circle id="circle" cx="90" cy="90" r="90" />
        </svg>
        <span style="--i: 1"><b>|</b></span>
        <span style="--i: 2"><b>|</b></span>
        <span style="--i: 3"><b>|</b></span>
        <span style="--i: 4"><b>|</b></span>
        <span style="--i: 5"><b>|</b></span>
        <span style="--i: 6"><b>|</b></span>
        <span style="--i: 7"><b>|</b></span>
        <span style="--i: 8"><b>|</b></span>
      </div>
      <div class="clock-labels flex center gap1">
        <p class="font-b txt-lite">LOGIN HOURS</p>
        <h1 class="font-b" id="nowtime">--:--:--</h1>
      </div>
    </div>
  </section>
  <section id="time-table">
    <div class="time-labels flex center flex-row space-a">
      <p class="time-in flex center flex-row font-b">TIME IN</p>
      <p class="time-out flex center flex-row font-b">TIME OUT</p>
    </div>
    <div class="clock-grid">
      <div class="box child1 flex center">
        <h1 class="font-l" id="time-in-am">--:--</h1>
      </div>
      <div class="box child2 flex center">
        <h1 class="font-l" id="time-out-am">--:--</h1>
      </div>
      <div class="box child3 flex center">
        <h1 class="font-l" id="time-in-pm">--:--</h1>
      </div>
      <div class="box child4 flex center">
        <h1 class="font-l" id="time-out-pm">--:--</h1>
      </div>
      <div class="vl"></div>
      <div class="hl"></div>
      <div class="am-pm flex center space-a">
        <p class="font-b">AM</p>
        <p class="font-b">PM</p>
      </div>
    </div>
  </section>
  <section id="payslip-info">
    <div class="uni-card" id="recent-payslips">
      <p class="font-b font-s">Payslips Records</p>
      <p class="txt-lite font-b font-s">View previous payslips</p>
      <div id="rp-list">
        <p class="uni-card-lite font-s font-b">09-15-2023</p>
        <p class="uni-card-lite font-s font-b">10-15-2023</p>
        <p class="uni-card-lite font-s font-b">11-15-2023</p>
      </div>
    </div>
    <div class="uni-card" id="next-payroll">
      <p class="font-b font-s">Next Payroll</p>
      <p class="txt-lite font-b font-s">Scheduled payroll date</p>
      <div class="flex center space-e">
        <img class="next-payroll-icon" src="assets/payroll_date.svg" alt="" />
        <p class="font-m font-b" id="nxt-pr-date">Oct 30, 2023</p>
      </div>
    </div>
  </section>

  <script>

    async function fetchDatas(){
      const data = await ajaxRequest('phpFunctions/get-dashb.php','request=dashboard');
      if(data.response){
        document.querySelector('#nxt-pr-date').innerHTML = formatTextDate(data.responseObject.nxt_pr_date);
      }
    }
    fetchDatas();

    let ss = document.getElementById("circle");
    let sdot = document.querySelector(".clock-dot");
    let limit = 60 // Seconds

    function liveClock() {
      setInterval(() => {
        let now = new Date();
        document.querySelector('#nowtime').innerHTML = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}:${now.getSeconds().toString().padStart(2, '0')}`;
      }); // Update every 1000 milliseconds (1 second)
    }
    liveClock();


    let tick = false;
    function updateClock() {
      document.querySelector('.clock-dot').style.opacity = "1";
      let now = new Date();
      let seconds = now.getSeconds() + now.getMilliseconds() / 1000; // Include milliseconds for smoother animation
      ss.style.strokeDashoffset = 570 - (570 * seconds) / limit;
      sdot.style.transform = `rotateZ(${seconds * (360 / limit) + 90}deg)`;


      requestAnimationFrame(updateClock);
      if (tick) {
        let s1 = new Date().getSeconds();
        if (s1 % 2 === 0) {
          document.documentElement.style.setProperty('--timer-bg', 'rgb(255, 187, 62)');
        } else {
          document.documentElement.style.setProperty('--timer-bg', '#dbdbdb');
        }
      } else {
        document.documentElement.style.setProperty('--timer-bg', '#dbdbdb');
      }

      //document.getElementById('nowtime').innerHTML = `${new Date().getHours()}:${new Date().getMinutes()}:${new Date().getSeconds()}`;
    }

    // Initial call to start the continuous animation
    updateClock();


    async function getAtt() {
      const result = await ajaxRequest('phpFunctions/get-dashb.php', 'request=attd&emp-id=<?php echo getEmployeeID()?>');
        try {
          if (result.response) {
            const responseObject = result.responseObject;
            console.log(responseObject)
            if (responseObject != null){
              tick = true;
              if(responseObject.time_in != null){
                const [hours, minutes] = responseObject.time_in.split(':');
                document.querySelector('#time-in-pm').innerHTML = `${hours}:${minutes}`;
                tick = true;
              }
              if(responseObject.time_out != null){
                const [hours, minutes] = responseObject.time_out.split(':');
                document.querySelector('#time-out-pm').innerHTML = `${hours}:${minutes}`;
                tick = false;
              }
            }
          }
        } catch (err) {
          console.log(err);
        }
    }
    setInterval(()=>{getAtt();},1000)

  </script>
</body>

</html>