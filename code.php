<?php 
session_start();
require 'conn.php';

if(isset($_POST['submit']))
{
    $tupv_id = mysqli_real_escape_string($con, $_POST['tupv-id']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $mi = mysqli_real_escape_string($con, $_POST['MI']);
    $bdate = mysqli_real_escape_string($con, $_POST['birthdate']);
    $cv = $_POST['cv'];
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pnum = mysqli_real_escape_string($con, $_POST['pnumber']);
    $add = mysqli_real_escape_string($con, $_POST['add']);
    $ygrad = mysqli_real_escape_string($con, $_POST['year-graduated']);
    $pgrad = mysqli_real_escape_string($con, $_POST['program-graduated']);
    $cprof = mysqli_real_escape_string($con, $_POST['c-prof']);
    $cname = mysqli_real_escape_string($con, $_POST['c-name']);
    
    


    $query = "INSERT INTO alumni_tbl (tupv_id,lastname,firstname,mi,birthdate,civil_status,address,pnumber,email,year_graduated,program_graduated,current_profession,company_name) VALUES ('$tupv_id','$lname','$fname','$mi','$bdate','$cv','$add','$pnum','$email','$ygrad','$pgrad','$cprof','$cname')";

    $query_run = mysqli_query($con, $query);
    if($query_run) { 
        $_SESSION['message'] = "Record Created Successfully";
        header("Location: success.php"); 
        exit(0);
    }
    else {
        $_SESSION['message'] = "Record Not Created";
        header("Location: form.php"); 
        exit(0); 
    }
} else {

}
?>