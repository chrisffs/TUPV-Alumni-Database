<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONTS -->
    <link rel="stylesheet" href="css/fonts.css">
    
    <title>TUPV Alumni Registration Form</title> 
    
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
</head>
<body class="d-flex" style="background-color: #C3203B;">
    <section class="bg-light my-5 mx-auto px-3 py-2" id="hero-form">
        <div class="image-container-md my-2">
            <img src="img/tup-logo.png" class="mx-auto d-block" alt="Logo of TUP" id="tup-logo">
        </div>
        <div class="header text-center">
            <p class="h-txt fw-pp">Alumni Registration Form</p>
            <div class="m-txt-container">
                <p class="m-txt m-0 fw-pp">Registration is open to individuals who graduated in TUP Visayas with a degree or a certification program and/or former students who have completed more than 30 or more credit hours.</p>
            </div>
        </div>
        <div class="form mt-3">
            <?php
            if(isset($_SESSION['tupv_dup'])){
                $warn = $_SESSION['tupv_dup'];
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $warn?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['tupv_dup']);
            }
            ?>
            <?php include('message.php'); ?>
            <form action="code.php" method="POST" class="form-main">
                <div class="tupv"> 
                    <label class="label fw-qs" for="tupv-id">TUPV-ID</label>
                    <input class="form-control" id="tupv-id" name="tupv-id" type="text" aria-label="default input example" required>
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
                <div class="status">
                    <div class="form-group bdate mb-0 me-1">
                        <label for="date" class="label fw-qs">Birthdate</label>
                        <div class="">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" name="birthdate">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white" style="cursor: pointer;">
                                        <i class="fa-solid fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="cv me-1">
                        <label class="label fw-qs" for="cv">Civil Status</label>
                        <select class="form-select" aria-label="Default select example" id="cv" name="cv">
                            <option selected hidden disabled>Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widow/er">Widow/er</option>
                            <option value="Seperated">Seperated</option>
                        </select>
                    </div>
                    <div class="sex">
                        <label class="label fw-qs" for="sex">Sex</label>
                        <select class="form-select" aria-label="Default select example" id="sex" name="sex">
                            <option selected hidden disabled>Select Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                
                <div class="email mt-2">
                    <label class="label fw-qs" for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="pnumber mt-2">
                    <label class="label fw-qs" for="phone-number">Contact Number</label>
                    <input class="form-control" id="phone-number" name="pnumber" type="tel" aria-label="default input example" required>
                </div>
                <div class="address mt-2">
                    <label class="label fw-qs" for="address">Permanent Address</label>
                    <input class="form-control" id="address" name="add" type="tel" aria-label="default input example" placeholder=>
                </div>
                <div class="form-group y-grad mb-0 me-1">
                <label for="y-grad" class="label fw-qs">Year-Graduated</label>
                    <div class="">
                        <div class="input-group date" id="yearpicker">
                            <input type="text" class="form-control" name="year-graduated" required>
                            <span class="input-group-append">
                                <span class="input-group-text bg-white" style="cursor: pointer;">
                                    <i class="fa-solid fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-grad">
                <label for="p-grad" class="label fw-qs">Program Graduated</label>
                    <select class="form-select" aria-label="Default select example" name="program-graduated">
                        <option selected hidden disabled>Select Program</option>
                        <option value="BS in Electronics Engineering">BS in Electronics Engineering</option>
                        <option value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
                        <option value="BS in Computer Engineering">BS in Computer Engineering</option>
                        <option value="BS in Chemistry">BS in Chemistry</option>
                        <option value="BS in Electrical Engineering">BS in Electrical Engineering</option>
                        <option value="BS in Mechatronics Engineering">BS in Mechatronics Engineering</option>
                        <option value="BS in Instrumentation and Control Engineering">BS in Instrumentation and Control Engineering</option>
                        <option value="BET Major in Computer Engineering Technology">BET Major in Computer Engineering Technology</option>
                        <option value="BET Major in Manufacturing Engineering Technology">BET Major in Manufacturing Engineering Technology</option>
                        <option value="BET Major in Automotive Engineering Technology">BET Major in Automotive Engineering Technology</option>
                        <option value="BET Major in Chemical Engineering Technology">BET Major in Chemical Engineering Technology</option>
                        <option value="BET Major in Electrical Engineering Technology">BET Major in Electrical Engineering Technology</option>
                        <option value="BET Major in Electronics Engineering Technology">BET Major in Electronics Engineering Technology</option>
                    </select>
                </div>
                <div class="p-em me-1">
                <label for="p-emp-status" class="label fw-qs">Present Employment Status</label>
                    <select class="form-select" aria-label="Default select example" name="p-emp-status">
                    <option selected hidden disabled>Select Employment Status</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Contractual">Contractual</option>
                    <option value="Casual">Casual</option>
                    <option value="Self-Employed">Self-Employed</option>
                    </select>
                </div>
                <div class="c-name">
                    <label class="label fw-qs" for="c-name">Company Name</label>
                    <input class="form-control" id="c-name" name="c-name" type="text" aria-label="default input example">
                </div>
                <div class="c-prof"> 
                    <label class="label fw-qs" for="c-prof">Job Description</label>
                    <input class="form-control" id="c-prof" name="c-prof" type="text" aria-label="default input example">
                </div>
                <div class="button-div ">
                    <button type="submit" class="btn btn-success mt-3 w-100 rounded-3" name="submit" >Submit Form</button>
                </div>
                
            </form>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.6.1.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
    
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
        $("#yearpicker").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
    </script>
</body>
</html>