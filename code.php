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
    $cv = mysqli_real_escape_string($con, $_POST['cv']);
    $sex = mysqli_real_escape_string($con, $_POST['sex']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pnum = mysqli_real_escape_string($con, $_POST['pnumber']);
    $add = mysqli_real_escape_string($con, $_POST['add']);
    $ygrad = mysqli_real_escape_string($con, $_POST['year-graduated']);
    $pgrad = mysqli_real_escape_string($con, $_POST['program-graduated']);
    $cprof = mysqli_real_escape_string($con, $_POST['c-prof']);
    $cname = mysqli_real_escape_string($con, $_POST['c-name']);
    $p_emp_status = mysqli_real_escape_string($con, $_POST['p-emp-status']);
    
    


    $query = "INSERT INTO alumni_tbl (tupv_id,lastname,firstname,mi,birthdate,civil_status,sex,address,pnumber,email_address,year_graduated,program_graduated,current_profession,company_name,present_employment_status) VALUES ('$tupv_id','$lname','$fname','$mi','$bdate','$cv','$sex','$add','$pnum','$email','$ygrad','$pgrad','$cprof','$cname','$p_emp_status')";

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

