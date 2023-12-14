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
    <p class="font-b txt-lite">Welcome, [Nizam]</p>
    <div class="flex center flex-row left gap1">
      <img src="" alt="" class="date-today-icon" />
      <p class="font-b" id="date-today">NOV 12, 2023</p>
    </div>
    <div class="clock flex center">
      <div class="time">
        <div class="clock-dot"></div>
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
        <h1 class="font-b" id="nowtime">05:30:00</h1>
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
        <h1 class="font-l">07:30</h1>
      </div>
      <div class="box child2 flex center">
        <h1 class="font-l">12:00</h1>
      </div>
      <div class="box child3 flex center">
        <h1 class="font-l">01:00</h1>
      </div>
      <div class="box child4 flex center">
        <h1 class="font-l">05:00</h1>
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
        <img class="next-payroll-icon" src="" alt="" />
        <p class="font-m font-b">Oct 30, 2023</p>
      </div>
    </div>
  </section>

  <script>
    let ss = document.getElementById("circle");
    let sdot = document.querySelector(".clock-dot");
    let limit = 60 // Seconds

    function updateClock() {
      let now = new Date();
      let seconds = now.getSeconds() + now.getMilliseconds() / 1000; // Include milliseconds for smoother animation
      ss.style.strokeDashoffset = 570 - (570 * seconds) / limit;
      sdot.style.transform = `rotateZ(${seconds * (360/limit) + 90}deg)`;

      requestAnimationFrame(updateClock);

      let s1 = new Date().getSeconds();
      if (s1%2 === 0) {
        document.documentElement.style.setProperty('--timer-bg', 'rgb(255, 187, 62)');
      } else {
        document.documentElement.style.setProperty('--timer-bg', '#dbdbdb');
      }

      //document.getElementById('nowtime').innerHTML = `${new Date().getHours()}:${new Date().getMinutes()}:${new Date().getSeconds()}`;
    }

    // Initial call to start the continuous animation
    updateClock();
  </script>
</body>

</html>