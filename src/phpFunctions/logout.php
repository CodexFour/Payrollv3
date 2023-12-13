<?php

session_start();
setcookie('username','',time() - 10000000,"/"); // remove 30 days
setcookie('password','',time() - 10000000,"/"); // remove 30 days
session_unset();
session_destroy();

header("Location: ../../index.php");