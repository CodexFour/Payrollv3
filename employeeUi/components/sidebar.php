<link rel="stylesheet" href="CSS/sidebar.css" />
<aside class="sidebar flex">
    <img src="assets/close.svg" style="align-self: flex-end;" class="close-menu-icon" onclick="toggleClass('.sidebar','showSidebar')" />
    <ul class="sidebar-list">
        <a class="a-dashboard" href="dashboard.php">
            <li>
                <img src="assets/dashboard.svg" alt="">DASHBOARD</img>
            </li>
        </a>
        <a class="a-salary" href="salary.php">
            <li>
                <img src="assets/salary.svg" alt="">SALARY</img>
            </li>
        </a>
        <a class="a-attendance" href="attendance.php">
            <li>
                <img src="assets/attendance.svg" alt="">ATTENDANCE</img>
            </li>
        </a>
        <a class="a-setting" href="setting.php">
            <li>
                <img src="assets/setting.svg" alt="">SETTING</img>
            </li>
        </a>
        <a href="../src/phpFunctions/logout.php">
            <li id="log-out">
                <img src="assets/setting.svg" alt="">SIGN OUT</img>
            </li>
        </a>
    </ul>
</aside>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        let id = document.querySelector('body').getAttribute('id');
        let aEl = document.querySelector('.sidebar-list a[href*=' + id + ']');

        aEl.querySelector('li').classList.add('active-sidebar');

    })
</script>
<script>
    function toggleClass(targetClass, addClass) {
        let target = document.querySelector(targetClass);
        target.classList.toggle(addClass);
    }
</script>