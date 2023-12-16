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

<!--            TODO: when it clicks, change the icon into employee-ui.svg-->
      <img src="../src/assets/icons/svg/admin.svg" alt="image" class="icon icon-m"
                 onclick="toggle('.open-notification')"/>


            <div class="notification-badge">
                <img src="../src/assets/icons/notification.svg" alt="image" class="icon icon-m"
                    onclick="toggle('.open-notification')"/>

<!--                NOTE: SEE THE DOCUMENTATION IN THE CSS RULE-->
                <span class="notification-badge-counter text-bold txt-teen primary-color">28</span>
            </div>
            <div class="nav-employee-info" onclick="adminSetting()">
                <div class="nav-employee-details">
                    <span class="text-title txt-xs primary-color">John Doe</span> <!--TODO: Change name-->
                    <span class="text-regular txt-xxs primary-color">Admin</span> <!--TODO: Change role-->
                </div>
                <!--TODO: Change image base on the image in the database-->
                <img src="../src/assets/img/img.png" alt="image" class="icon-l icon-round icon-cover"/>
            </div>
            <div id="admin-setting" class="collapse-menu">
                <span class="txt-xxs text-bold group-settings" onclick="openModal('.modal-account-settings')">
                    <img src="../src/assets/icons/svg/account-setting.svg" alt="" class="icon-xs">Account Setting</span>
                <span class="txt-xxs text-bold group-settings">
                    <img src="../src/assets/icons/svg/settings.svg" alt="" class="icon-xs">Settings</span>
                <span class="txt-xxs text-bold group-settings">
                    <img src="../src/assets/icons/svg/logout.svg" alt="" class="icon-xs">Log out</span>
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

<dialog class="modal modal-account-settings"> <?php include_once 'modal/account-settings.php' ?> </dialog>
<script src="../src/js/charts.js"></script>
<script src="../src/js/HTTPRequest.js"></script>
<script src="../src/js/calendar.js"></script>
<script src="../lib/code/highcharts.js"></script>
<script src="../src/js/modal.js"></script>
<script src="../lib/code/modules/variable-pie.js"></script>
<script src="download.js"></script>
<script src="upload.js"></script>

<script>
    function adminSetting() {
        let nav = document.getElementById("admin-setting");
        if (nav.style.display === "none") {
            nav.style.display = "block";
        } else {
            nav.style.display = "none";
        }

    }
    document.addEventListener("DOMContentLoaded", function () {
        fetchDashboard();
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
            } else if (tab_selector.innerHTML === 'EMPLOYEE') {
                await fetch('.admin-content', 'employee/employee.php');
                department_chart();
                requestData('employee');
            } else if (tab_selector.innerHTML === 'SALARY') {
                await fetch('.admin-content', 'salary/salary.php');
                salary_chart();
            } else if (tab_selector.innerHTML === 'ATTENDANCE') {
                await fetch('.admin-content', 'attendance/attendance.php');
                attendance_timesheet_chart();
                calendar();
            } else if (tab_selector.innerHTML === 'PAYMENTS &amp; DEDUCTIONS') {
                await fetch('.admin-content', 'payments_deduction/payments_deduction.php');
            } else if (tab_selector.innerHTML === 'SUMMARY') {
                await fetch('.admin-content', 'summary/summary.php');
                requestData('summary');
                const tableBody = document.querySelector('.table-body');
                const summaryFirstChildren = document.querySelectorAll('.summary-table-row tr > :first-child');
                const summaryNthChildren = document.querySelectorAll('.summary-table-row tr > :nth-child(2)');

                tableBody.addEventListener('mouseover', function (event) {
                    if (event.target.tagName === 'TD' && event.target.parentNode.classList.contains('table-row')) {
                        let index = event.target.parentNode.rowIndex;
                        summaryFirstChildren[index - 2].classList.add('hovered');
                        summaryNthChildren[index - 2].classList.add('hovered');
                    }
                });

                tableBody.addEventListener('mouseout', function (event) {
                    if (event.target.tagName === 'TD' && event.target.parentNode.classList.contains('table-row')) {
                        if (event.relatedTarget && event.target.parentNode.classList.contains('table-row')) {
                            let index = event.target.parentNode.rowIndex;
                            summaryFirstChildren[index - 2].classList.remove('hovered');
                            summaryNthChildren[index - 2].classList.remove('hovered');
                        }
                    }
                });


            }
        });
    });

    async function fetchDashboard() {
        await fetch('.admin-content', 'dashboard/dashboard.php');
        requestData('dashboard');
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

    // For add/edit employee modal title
    function changeToEditTitle(bool){
        let titleElm = document.querySelector('#add-employee-title');
        titleElm.innerHTML = bool? "EDIT EMPLOYEE": "ADD NEW EMPLOYEE";
    }
    function clearEmployeeField(){
        let inputs = document.querySelectorAll('#add-employee-form input');
        alert(inputs.length);
        inputs.forEach((i) =>{
            i.value = null;
        })
        alert("cleared")
    }

</script>
</body>

</html>