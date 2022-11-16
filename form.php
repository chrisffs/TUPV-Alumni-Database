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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Document</title> 
    <link rel="stylesheet" href="style.css" type="text/css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <section class="bg-light container" id="hero-form">
        <div class="image-container-md my-2">
            <img src="img/tup-logo.png" class="mx-auto d-block" alt="Logo of TUP" id="tup-logo">
        </div>
        <div class="header text-center">
            <p class="h-txt fw-pp">Alumni Registration Form</p>
            <div class="m-txt-container">
                <p class="m-txt m-0 fw-pp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
        <div class="form mt-3">
            <?php include('message.php'); ?>
            <form action="code.php" method="POST" class="form-main">

                <div class="tupv fw-qs"> 
                    <label class="label" for="tupv-id">TUPV-ID</label>
                    <input class="form-control" id="tupv-id" name="tupv-id" type="text" aria-label="default input example">
                </div>
                <div class="names">
                    <div class="fname me-1"> 
                        <label class="label fw-qs" for="first-name">First Name</label>
                        <input class="form-control" id="first-name" name="fname" type="text" aria-label="default input example">
                    </div>
                    <div class="lname">
                        <label class="label fw-qs" for="last-name">Last Name</label>
                        <input class="form-control" id="last-name" name="lname" type="text" aria-label="default input example">
                    </div>
                    <div class="mi ms-1"> 
                        <label class="label fw-qs" for="MI">MI</label>
                        <input class="form-control" id="MI" name="MI" type="text" aria-label="default input example">
                    </div>
                </div>

                <div class="bdate me-1"> 
                    <label class="label fw-qs" for="birthdate">Birthdate</label>
                    <input class="form-control" id="birthdate" name="bdate" type="text" aria-label="default input example">
                </div>
                <div class="cv">
                    <label class="label fw-qs" for="cv">Civil Status</label>
                    <input class="form-control" id="cv" name="cv" type="text" aria-label="default input example">
                </div>

                <div class="email mt-2">
                    <label class="label fw-qs" for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="pnumber mt-2">
                    <label class="label fw-qs" for="phone-number">Phone Number</label>
                    <input class="form-control" id="phone-number" name="pnumber" type="tel" aria-label="default input example">
                </div>
                <div class="address mt-2">
                    <label class="label fw-qs" for="address">Address</label>
                    <input class="form-control" id="address" name="add" type="tel" aria-label="default input example" placeholder="Barangay                               town">
                </div>
                
                <button type="submit" class="btn btn-success mt-3" name="submit" >Submit</button>
            </form>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>