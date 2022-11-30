<?php 

    session_start();
    session_destroy();
    unset($_SESSION['unique_id']);
    unset($_SESSION['id']);
    header('location:../login.php');
    exit();
?>