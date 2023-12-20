<?php
include_once '../validateLogin.php';
if (!isAdmin()) {
    header("Location: ../employeeUi/dashboard.php");
    die();
}
?>
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
            <img src="../src/assets/icons/svg/scanner.svg" alt="image" class="icon icon-m"
                 onclick="window.open('../RFID/RFID-Attendance-Tracking.php', '_blank');"/>

            <!--            TODO: when it clicks, change the icon into employee-ui.svg-->
            <img src="../src/assets/icons/svg/admin.svg" alt="image" class="icon icon-m"
                 onclick="location.href = '../employeeUi/dashboard.php'"/>

            <div class="notification-badge" onclick="openNotification()">
                <img src="../src/assets/icons/notification.svg" alt="image" class="icon icon-m"/>

                <!--                NOTE: SEE THE DOCUMENTATION IN THE CSS RULE-->
                <span class="notification-badge-counter text-bold txt-teen primary-color">28</span>
            </div>
            <section class="admin-notification-container" id="notification">
                <header class="notification-header">
                    <div class="notification-head">
                        <h2 class="text-bold txt-xs">Notifications</h2>
                    </div>
                    <span class="btn btn-transparent text-regular txt-teen highlight margin-left">Clear All</span>
                </header>
                <main class="notification-body">
                    <div class="notification-section">
                        <strong class="text-title txt-xs">Today</strong>
                        <ul class="notification-content read">
                            <?php
                            for($i=0; $i<3; $i++){ // REPEAT
                            ?>
                            <li class="notification-content-pic">
                                <img src="../src/assets/img/profile.jpg" alt="" class="icon-l icon-round icon-cover">
                            </li>
                            <li class="notification-content-body">
                                <span class="text-title txt-xxs">Jane Oxford</span>
                                <span class="text-regular txt-teen response-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt est explicabo illo iste labore modi possimus praesentium quibusdam quod saepe sequi tempora, temporibus, veniam voluptas. Esse pariatur provident voluptate?</span>
                                <!--                    <span class="btn btn-transparent text-regular txt-teen highlight margin-left">Clear All</span>-->
                            </li>
                            <li class="notification-content-time">
                                <span class="text-regular txt-teen">1hr Ago</span>
                            </li>
                            <li class="notification-content-action">
                                <img src="../src/assets/icons/svg/delete.svg" alt="" class="icon-xs">

                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="notification-section">
                        <strong class="text-title txt-xs">Yesterday</strong>
                        <?php
                        for($i=0; $i<10; $i++){
                        ?>
                        <ul class="notification-content">
                            <li class="notification-content-pic">
                                <img src="../../src/assets/img/profile.jpg" alt="" class="icon-l icon-round icon-cover">
                            </li>
                            <li class="notification-content-body">
                                <span class="text-title txt-xxs">Jane Oxford</span>
                                <span class="text-regular txt-teen response-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt est explicabo illo iste labore modi possimus praesentium quibusdam quod saepe sequi tempora, temporibus, veniam voluptas. Esse pariatur provident voluptate?</span>
                            </li>
                            <li class="notification-content-time">
                                <span class="text-regular txt-teen">4:30pm</span>
                            </li>
                            <li class="notification-content-action">
                                <img src="../../src/assets/icons/svg/delete.svg" alt="" class="icon-xs">

                            </li>
                        </ul>
                        <?php
                        }
                        ?>
                    </div>
                </main>
            </section>


            <div class="nav-employee-info" onclick="adminSetting()">
                <div class="nav-employee-details">
                    <span class="text-title txt-xs primary-color" id="nav-admin-name">---- ----</span> <!--TODO: Change name-->
                    <span class="text-regular txt-xxs primary-color" id="nav-admin-job">-----</span> <!--TODO: Change role-->
                </div>
                <!--TODO: Change image base on the image in the database-->
                <img src="../src/assets/img/img.png" alt="image" class="icon-l icon-round icon-cover"/>
            </div>
            <div id="admin-setting" class="collapse-menu">
                <span class="txt-xxs text-bold group-settings" onclick="openModal('.modal-admin-activity-logs')">
                    <img src="../src/assets/icons/svg/activity-log.svg" alt="" class="icon-xs">Activity Log</span>
                <span class="txt-xxs text-bold group-settings" onclick="openModal('.modal-account-settings')">
                    <img src="../src/assets/icons/svg/account-setting.svg" alt="" class="icon-xs">Account Setting</span>
                <span class="txt-xxs text-bold group-settings" onclick="openModal('.modal-admin-settings')">
                    <img src="../src/assets/icons/svg/settings.svg" alt="" class="icon-xs">Settings</span>
                <span class="txt-xxs text-bold group-settings" onclick="logout()">
                    <img src="../src/assets/icons/svg/logout.svg" alt="" class="icon-xs">Log out
                </span>

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
<dialog class="modal modal-pop-up"> <?php include_once 'modal/pop-up/confirmation-pop-up.php' ?> </dialog>
<dialog class="modal modal-admin-settings"> <?php include_once 'modal/admin-settings.php' ?> </dialog>
<dialog class="modal modal-admin-activity-logs"> <?php include_once 'modal/activity-logs.php' ?> </dialog>
<dialog class="modal modal-specify"> <?php include_once 'payments_deduction/components/modal/specify-employee.php' ?> </dialog>
<script src="../src/js/charts.js"></script>
<script src="../src/js/HTTPRequest.js"></script>
<script src="../src/js/calendar.js"></script>
<script src="../lib/code/highcharts.js"></script>
<script src="../src/js/modal.js"></script>
<script src="../src/js/toast-notification.js"></script>
<script src="../lib/code/modules/variable-pie.js"></script>
<script src="download.js"></script>
<script src="upload.js"></script>

<script>

    function calcAge(){
        let bdate = new Date(document.querySelector('#employee-birthdate').value);
        let today = new Date();
        var age = today.getFullYear() - bdate.getFullYear();
            var monthDiff = today.getMonth() - bdate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < bdate.getDate())) {
                age--;
            }

            document.getElementById('employee-age').value = age;
    }

    async function updateNav(){
        const result = await ajaxRequest('download.php','request=get-admin-nav&admin-id='+<?php echo getEmployeeID()?>);
        if (result.response){
            ro = result.responseObject;
            document.querySelector('#nav-admin-name').innerHTML = `${ro.first_name} ${ro.last_name}`;
            document.querySelector('#nav-admin-job').innerHTML = ro.job_title;
        }
    }
    updateNav();

    function openTab(evt, tabName) {
        var i, tabcontent, tabs;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tabs = document.getElementsByClassName("tabs");
        for (i = 0; i < tabs.length; i++) {
            tabs[i].className = tabs[i].className.replace(" activeTab", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " activeTab";
    }

    function importFile() {
        const filepath = document.querySelector("#path"),
            input = document.querySelector("#importing-input");


        input.click();
        input.addEventListener("change", function (e) {
            e.stopImmediatePropagation()
            filepath.setAttribute('value', e.target.files[0].name);
        });

    }

    function logout() {
        window.location.href = '../src/phpFunctions/logout.php';
    }

    function openNotification() {
        let notification = document.getElementById('notification');
        if (notification.style.visibility === 'hidden') {
            notification.style.visibility = 'visible';
        } else {
            notification.style.visibility = 'hidden';
        }

    }

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
                // const result  = await ajaxRequest('download.php','request=emp-names')
                // let names = result.responseObject;
                // autocomplete(document.getElementById("leave-employee-name"), names);
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
                payments_chart();
                const result  = await ajaxRequest('download.php','request=emp-names')
                let names = result.responseObject;
                autocomplete(document.getElementById("search-employee"), names);
            } else if (tab_selector.innerHTML === 'SUMMARY') {
                await fetch('.admin-content', 'summary/summary.php');
                await requestData('summary');
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
    function changeToEditTitle(bool) {
        let titleElm = document.querySelector('#add-employee-title');
        titleElm.innerHTML = bool ? "EDIT EMPLOYEE" : "ADD NEW EMPLOYEE";
    }

    function clearEmployeeField() {
        let inputs = document.querySelectorAll('#add-employee-form input');
        let selects = document.querySelectorAll('#add-employee-form select');
        inputs.forEach((i) => {
            i.value = null;
        })
        selects.forEach((s) => {
            s.value = "";
        });
    }

    function clearEmployeeView() {
        let empView = document.querySelector("#view-employee-modal");
        empView.querySelector("#view-employee_id").innerHTML = "----"
        empView.querySelector("#view-employee-name").innerHTML = "---- ---- ----"
        empView.querySelector("#view-employee-rfid").innerHTML = "-No RFID-"
        empView.querySelector("#view-employee-birthdate").innerHTML = "--- -- ----"
        empView.querySelector("#view-employee-age").innerHTML = "--"
        empView.querySelector("#view-employee-gender").innerHTML = "-"
        empView.querySelector("#view-employee-street").innerHTML = "----"
        empView.querySelector("#view-employee-barangay").innerHTML = "----"
        empView.querySelector("#view-employee-city").innerHTML = "----"
        empView.querySelector("#view-employee-province").innerHTML = "----"
        empView.querySelector("#view-employee-department").innerHTML = "----"
        empView.querySelector("#view-employee-working-type").innerHTML = "----"
        empView.querySelector("#view-employee-job-title").innerHTML = "----"
        empView.querySelector("#view-employee-hired-date").innerHTML = "--- -- ----"
    }

    function clearLeaveTypeField() {
        let leaveTypeForm = document.querySelector("#add-leave-type-form");
        leaveTypeForm.querySelector('#leave-type-id').value = "";
        leaveTypeForm.querySelector('#leave-type-active').checked = true;
        leaveTypeForm.querySelector('#leave-type-name').value = "";
        leaveTypeForm.querySelector('#leave-type-duration').value = "";
    }

    // For format date purposes
    function formatTextDate(inputDate) {
        const dateParts = inputDate.split('-');
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        const formattedDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);

        const monthName = monthNames[formattedDate.getMonth()];

        const day = formattedDate.getDate();
        const year = formattedDate.getFullYear();

        // Concatenate the formatted date
        const result = `${monthName} ${day} ${year}`;

        return result;
    }
    function autocomplete(inp, arr) {
        let currentFocus;
        inp.addEventListener("input", function (e) {
            let a, b, i, val = this.value;
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                if (arr[i].substr(0, val.length).toUpperCase() === val.toUpperCase()) {
                    b = document.createElement("DIV");
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    b.addEventListener("click", function (e) {
                        inp.value = this.getElementsByTagName("input")[0].value;
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        inp.addEventListener("keydown", function (e) {
            let x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode === 40) {
                currentFocus++;
                addActive(x);
            } else if (e.keyCode === 38) {
                currentFocus--;
                addActive(x);
            } else if (e.keyCode === 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            for (let i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            let x = document.getElementsByClassName("autocomplete-items");
            for (let i = 0; i < x.length; i++) {
                if (elmnt !== x[i] && elmnt !== inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

</script>
</body>

</html>