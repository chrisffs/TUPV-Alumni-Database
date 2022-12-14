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
            $_SESSION['username'] = $row['username'];
        }

            header('location:admin/index.php');
            exit(0);
        } else {
            $_SESSION['invalid'] = "Wrong Username or Password!";
            header("Location: login.php");
            exit(0);
        }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 19rem;
        }

        input {
            outline: 0 !important;
            border-width: 0 0 1px;
            border-color: #837777;
            display: block;
            width: 100%;
        }
        input:focus {
            border-color: #C3203B;
        }
    </style>
</head>
<body class="bg-light">
    <div class="center mb-5">
        <div class=" d-flex flex-column align-items-center">
            <img class="w-100"src="img/Group 1.png" alt="" srcset="">
        </div>
        <p class="fs-2 fw-semibold text-center mt-5 c-tupv">    
            Login
        </p>
        <?php
        
            if(isset($_SESSION['invalid'])){
                $invalid = $_SESSION['invalid'];
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $invalid?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['invalid']);
            }
        ?>
        <form class="form" action="login.php" method="post">
            <input class="my-3 bg-light py-2 px-1" type="text" placeholder="username" aria-label="default input example" name="unique_id">
            <input type="password" class="my-3 bg-light py-2 px-1" placeholder="password" id="inputPassword" name="pass">
            <button type="submit" class="btn btn-danger w-100 rounded-5 mt-4" value="Login" name="login">Log in</button>
        </form>
    </div>
        
<script src="js/jquery.min.js"></script>
<!-- <script src="js/jquery-3.6.1.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>