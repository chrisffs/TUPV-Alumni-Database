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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    
    <title>TUPV Alumni Registration Form</title> 

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <section class="bg-light container m-5" id="hero-form">
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
                
                <div class="form-group bdate mb-0 me-1">
                <label for="date" class="label fw-qs">Birthdate</label>
                    <div class="">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" name="birthdate">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="cv">
                    <label class="label fw-qs" for="cv">Civil Status</label>
                    <select class="form-select" aria-label="Default select example" id="cv" name="cv">
                        <option selected hidden disabled>Select Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                    <!-- <input class="form-control" id="cv" name="cv" type="text" aria-label="default input example"> -->
                </div>
                <div class="email mt-2">
                    <label class="label fw-qs" for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="pnumber mt-2">
                    <label class="label fw-qs" for="phone-number">Phone Number</label>
                    <input class="form-control" id="phone-number" name="pnumber" type="tel" aria-label="default input example" required>
                </div>
                <div class="address mt-2">
                    <label class="label fw-qs" for="address">Address</label>
                    <input class="form-control" id="address" name="add" type="tel" aria-label="default input example" placeholder=>
                </div>
                <div class="form-group y-grad mb-0 me-1">
                <label for="y-grad" class="label fw-qs">Year-Graduated</label>
                    <div class="">
                        <div class="input-group date" id="yearpicker">
                            <input type="text" class="form-control" name="year-graduated" required>
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
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
                <div class="c-prof me-1"> 
                    <label class="label fw-qs" for="c-prof">Current Profession</label>
                    <input class="form-control" id="c-prof" name="c-prof" type="text" aria-label="default input example">
                </div>
                <div class="c-name">
                    <label class="label fw-qs" for="c-name">Company Name</label>
                    <input class="form-control" id="c-name" name="c-name" type="text" aria-label="default input example">
                </div>
                <div class="button-div ">
                    <button type="submit" class="btn btn-success mt-3 w-100" name="submit" >Submit Form</button>
                </div>
                
            </form>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
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