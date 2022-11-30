<?php 
include 'conn.php';
session_start();

if(isset($_POST['login'])) {

    $username_in = $_POST['unique_id'];
    $pass_in = $_POST['pass'];

    $sql = "SELECT * FROM admin_account WHERE unique_id = '$username_in' AND pass = '$pass_in'";
    $result = $con->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['unique_id'] = $row['unique_id'];
        $_SESSION['pass'] = $row['pass'];
    }
            header('location:admin/index.php');
        } else {
            ?>
            <script>
                alert('Wrong Username or Password')
            </script>
            <?php 
        }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <style>
        .form-account {
            width: fit-content;
        }
    </style>
</head>
<body style="position: relative;">
<div class="container form-account">
    <form class="" action="login.php" method="post">
        <input class="form-control my-3" type="text" placeholder="username" aria-label="default input example" name="unique_id">
        <input type="password" class="form-control my-3" id="inputPassword" name="pass">
        <button type="submit" class="btn btn-danger" value="Login" name="login">Log in</button>
    </form>
</div>
        

<script src="js/jquery.min.js"></script>
<!-- <script src="js/jquery-3.6.1.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>