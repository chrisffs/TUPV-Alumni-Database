<?php 
session_start(); 
    // include "conn.php";

    // if (isset($_POST['submit'])) {
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $pnum = $_POST['pnumber'];

    //     $sql = "INSERT INTO alumni_tbl (lastname,firstname,email, pnumber) 
    //     VALUES('$fname','$lname','$email','$pnum')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "New record was successfully saved.";
    //         header('location: index.php');
    //     } else {
    //         echo "Unable to save student record due to following error" . $conn->connect_error;
    //         header('location: index.php');
    //     }

    //     $sql->close();
    // }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <section class="bg-light container" id="hero-form">
        <div class="image-container-md">
            <img src="img/tup-logo.png" class="mx-auto d-block" alt="Logo of TUP" id="tup-logo">
        </div>
        <div class="header text-center">
            <p class="h-txt">Alumni Registration Form</p>
            <div class="m-txt-container">
                <p class="m-txt m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
        <div class="form mt-3">
            <?php include('message.php'); ?>
            <form action="code.php" method="POST" class="form-main">
                <div class="fname me-1"> 
                    <label class="label" for="first-name">First Name</label>
                    <input class="form-control" id="first-name" name="fname" type="text" aria-label="default input example">
                </div>
                <div class="lname">
                    <label class="label" for="last-name">Last Name</label>
                    <input class="form-control" id="last-name" name="lname" type="text" aria-label="default input example">
                </div>
                <div class="email mt-2">
                    <label class="label" for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="pnumber mt-2">
                    <label class="label" for="phone-number">Phone Number</label>
                    <input class="form-control" id="phone-number" name="pnumber" type="tel" aria-label="default input example">
                </div>
                
                <button type="submit" class="btn btn-success mt-3" name="submit" >Submit</button>
            </form>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>