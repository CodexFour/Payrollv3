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