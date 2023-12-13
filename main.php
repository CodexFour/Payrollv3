<?php 
session_start();
    echo 'Hello '. $_COOKIE['username'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="src/phpFunctions/logout.php"><button>Log out</button></a>
</body>
</html>