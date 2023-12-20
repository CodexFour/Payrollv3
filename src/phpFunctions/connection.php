<?php


function connect($sslcrt){

    // $dbhost = 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com';
    // $dbuname = 'Wg5U9sLofQp61Gx.root';
    // $dbpword = 'KZnvdBjZZa61xwhI';
    // $dbname = 'payroll_db';
    $dbhost = 'localhost:3306';
    $dbuname = 'root';
    $dbpword = 'root';
    $dbname = 'payroll_db';
    $db = mysqli_init();
    mysqli_options ($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

    $link = mysqli_real_connect(
        $db, $dbhost, $dbuname, $dbpword,  $dbname, 4000, NULL, MYSQLI_CLIENT_SSL);

    if (!$link)
    {
        die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
    } else {
        return $db;
    }

//    $query = 'SELECT username, password FROM accounts';
//    $mysqli_result = mysqli_query($db, $query);
//    if ($mysqli_result) {
//        // Loop through the result set and generate <option> elements
//        while ($row = mysqli_fetch_assoc($mysqli_result)) {
//            echo  $row['username'] . ' ' . $row['password'];
//        }
//

// $dbhost = 'localhost:3306';
// $dbuname = 'root';
// $dbpword = 'root';
// $dbname = 'payroll_db';

// $con = new mysqli($dbhost,$dbuname,$dbpword,$dbname);


}