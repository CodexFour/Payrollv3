<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Hub — Simplifying Payroll Control and Oversight</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="../src/assets/icons/logo.png" type="image/png">
</head>

<body>
<header>
    <nav class="nav-header nav-header-color">
        <div class="nav-container-left">
            <img src="../src/assets/icons/logo.png" alt="logo" class="icon-l"/>
            <h1 class="text-title txt-s primary-color" id="nav-title">DASHBOARD</h1>
        </div>
        <div class="nav-container-right">
            <button type="button" class="btn nav-title text-title txt-xxs nav-button ">SWITCH TO EMPLOYEE</button>
            <img src="../src/assets/icons/notification.svg" alt="image" class="nav-notification"
                 onclick="toggle('.open-notification')"/>
            <div class="nav-employee-info">
                <div class="nav-employee-details">
                    <span class="text-title txt-xs primary-color">John Doe</span> <!--TODO: Change name-->
                    <span class="text-regular txt-xxs primary-color">Admin</span> <!--TODO: Change role-->
                </div>
                <!--TODO: Change image base on the image in the database-->
                <img src="../src/assets/img/img.png" alt="image" class="icon-l icon-round"/>
            </div>
        </div>
    </nav>
</header>
<main class="main">
    <aside class="menu-container">
        <a href="#dashboard" class="menu-content links link_active">
            <img src="../src/assets/icons/svg/dashboard.svg" alt="" class="icon-l"/>
            <span class="text-bold txt-teen
">DASHBOARD</span>
        </a>
        <a href="#employee" class="menu-content links">
            <img src="../src/assets/icons/svg/employee.svg" alt="image" class="icon-l"/>
            <span class="text-bold txt-teen
">EMPLOYEE</span>
        </a>
        <a href="#salary" class="menu-content links">
            <img src="../src/assets/icons/svg/salary.svg" alt="image" class="icon-l"/>
            <span class="text-bold txt-teen
">SALARY</span>
        </a>
        <a href="#attendance" class="menu-content links ">
            <img src="../src/assets/icons/svg/attendance.svg" alt="image" class="icon-l"/>
            <span class="text-bold txt-teen
">ATTENDANCE</span>
        </a>
        <a href="#payments" class="menu-content links">
            <img src="../src/assets/icons/svg/payments.svg" alt="image" class="icon-l"/>
            <span class="text-bold txt-teen payments
">PAYMENTS & DEDUCTIONS</span>
        </a>
        <a href="#summary" class="menu-content links">
            <img src="../src/assets/icons/svg/summary.svg" alt="image" class="icon-l"/>
            <span class="text-bold txt-teen
">SUMMARY</span>
        </a>
    </aside>
    <section class="admin-content">
        <?php include_once 'dashboard/dashboard.php' ?>
    </section>

</main>

<script src="../src/js/charts.js"></script>
<script src="../src/js/HTTPRequest.js"></script>
<script src="../src/js/calendar.js"></script>
<script src="../lib/code/highcharts.js"></script>
<script src="../src/js/modal.js"></script>
<script src="../lib/code/modules/variable-pie.js"></script>
<script src="download.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetchDashboard();
        requestData('dashboard');
        // attendance_timesheet_chart();
        // calendar();
    });
    let navLinks = document.querySelectorAll('.links');

    navLinks.forEach(link => {
        link.addEventListener('click', async () => {
            navLinks.forEach(e => {
                e.classList.remove('link_active');
            });
            link.classList.toggle('link_active');
            let tab_selector = document.querySelector('.link_active span');

            document.getElementById('nav-title').innerHTML = tab_selector.innerHTML;
            console.log(tab_selector.innerHTML);
            if (tab_selector.innerHTML === 'DASHBOARD') {
                await fetchDashboard();
                requestData('dashboard');
            } else if (tab_selector.innerHTML === 'EMPLOYEE') {
                await fetch('.admin-content', 'employee/employee.php');
                department_chart();
                requestData('employee');
            } else if (tab_selector.innerHTML === 'SALARY') {
                await fetch('.admin-content', 'salary/salary.php');
                salary_chart();
                requestData('salary');
            } else if (tab_selector.innerHTML === 'ATTENDANCE') {
                await fetch('.admin-content', 'attendance/attendance.php');
                attendance_timesheet_chart();
                calendar();
                requestData('attendance');
            } else if (tab_selector.innerHTML === 'PAYMENTS &amp; DEDUCTIONS') {
                await fetch('.admin-content', 'payments_deduction/payments_deduction.php');
                requestData('deduction');
            } else if (tab_selector.innerHTML === 'SUMMARY') {
                await fetch('.admin-content', 'summary/summary.php');
                requestData('summary');
            }
        });
    });

    async function fetchDashboard() {
        await fetch('.admin-content', 'dashboard/dashboard.php');
        dashboard_chart();
    }

    async function fetch(classes, filepath) {
        return await HTTPRequest(classes, filepath);
    }

    let isDebug;
    const all = document.querySelectorAll("*");
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.code === 'Space') {
            e.preventDefault();
            if (isDebug) {
                all.forEach((evt) => {
                    evt.classList.remove("outline")
                });
                isDebug = false;
            } else {
                all.forEach((evt) => {
                    evt.classList.add("outline")
                });
                isDebug = true;
            }
        }
    });



</script>
</body>

</html>