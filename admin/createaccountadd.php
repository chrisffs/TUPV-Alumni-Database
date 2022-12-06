<?php 
session_start();
include "../conn.php";

if(isset($_POST['create_account']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $admin_type = mysqli_real_escape_string($con, $_POST['admin_type']);

    $sql = "SELECT * FROM admin_account WHERE unique_id = '$username'";
    $data = mysqli_query($con, $sql) or die('error');

    if(mysqli_num_rows($data) > 0) {
        $_SESSION['username_dup'] = "Username has already been taken!";
        header("location: createaccount.php");

    } else {
        $query = "INSERT INTO admin_account (unique_id, pass, username, admin_type) VALUES ('$username', '$pass', '$fullname', '$admin_type')";

        $query_run = mysqli_query($con, $query);
        if($query_run) { 
            $_SESSION['message_account'] = "Account Created Successfully";
            header("Location: createaccount.php"); 
            exit(0);
        }       
        else {
            $_SESSION['message_account'] = "Account Not Created. Try Again.";
            header("Location: createaccount.php"); 
            exit(0); 
        }
    }
}
?>