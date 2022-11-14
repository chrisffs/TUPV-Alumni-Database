<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "alumni_db";

    //create connection
    $con = mysqli_connect($server,$username,$pass,$db);

    if ($con->connect_error) {
        die ("Connection Failed!". $con->connect_error);
    }
?>