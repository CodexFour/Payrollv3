<?php 
include_once '../validateLogin.php';
$con = connect('');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); ?>
<script src="data.js"></script>
<link rel="stylesheet" href="CSS/navbar.css" />
<nav class="flex center flex-row space-b">
    <div class="nav-left flex center flex-row">
        <img class="menu-icon" src="assets/menu.svg" onclick="toggleClass('.sidebar','showSidebar')" />
    </div>
    <div class="nav-right flex center space-e flex-row gap1">
        <!-- <img id="nav-bell" src="" alt=""> -->
        <!-- <p class="font-b font-white">Employee</p> -->
        <?php
        if(isAdmin()){
            echo '<img src="assets/account.svg" id="nav-switch" onclick="location.href = \'../admin/admin.php\'">';
        }
        ?>
        <img src="assets/bell.svg" id="nav-bell">
        <img id="nav-pfp" src="" alt="" />
    </div>
</nav>
<script>
    // For format date purposes
    function formatTextDate(inputDate) {
        const dateParts = inputDate.split('-');
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        const formattedDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);

        const monthName = monthNames[formattedDate.getMonth()];

        const day = formattedDate.getDate();
        const year = formattedDate.getFullYear();

        // Concatenate the formatted date
        const result = `${monthName} ${day}, ${year}`;

        return result;
    }
</script>