<?php 
session_start();
require 'conn.php';

if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pnum = mysqli_real_escape_string($con, $_POST['pnumber']);

    $query = "INSERT INTO alumni_tbl (lastname,firstname,pnumber,email) VALUES ('$lname','$fname', '$pnum', '$email')";

    $query_run = mysqli_query($con, $query);
    if($query_run) { 
        $_SESSION['message'] = "Record Created Successfully";
        header("Location: form.php"); 
        exit(0);
    }
    else {
        $_SESSION['message'] = "Record Not Created";
        header("Location: form.php"); 
        exit(0); 
    }
}
?>