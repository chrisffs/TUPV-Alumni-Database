<?php 
session_start(); 
include "conn.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- FONTS -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/fonts.css">

    <title>TUPV Alumni</title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->
</head>
<body style="background-color: #FAFAFA;">
    <section id="home">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-light pt-md-3 bg-white">
            <div class="container">
                <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
                        <img src="img/tup-logo.png" alt="TUPV Logo" id="logo">
                        <div class="collapse navbar-collapse">
                            <p class="logo-text fw-pp mb-0 ms-2">
                            Technological University of the Philippines Visayas
                            </p>
                        </div>
                </a>

                <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#nav-menu"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto d-flex align-items-center text-light" id="nav-link-ul">
                        <li class="nav-item mx-1 ">
                            <a href="index.php" class="nav-link fw-pp active-link">Home</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="alumni_page.php" class="nav-link fw-pp">Alumni</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="gallery_page.php" class="nav-link fw-pp">Gallery</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="about.php" class="nav-link fw-pp">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->
        <!-- HERO -->

        <section class="bg-light py-5">
            <div class="container">
                <div class="d-flex flex-lg-row flex-column-reverse justify-content-around align-items-center">
                    <div class="text-lg-start" id="title-l">
                        <p class="blck-txt fw-pp">Welcome to <span class=" hl-txt fw-pp">TUP Visayas Alumni</span></p>
                        <!-- <p class="hl-txt fw-pp">Alumni</p> -->
                        <p class="desc fw-pp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <img class="img-fluid img-r" src="img/Group 1.png" alt="" srcset="">
                </div>
            </div>
        </section>
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/15th Hmecoming, March 2019_page-0001.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/15th Hmecoming, March 2019_page-0003.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/15th Hmecoming, March 2019_page-0002-final.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- HERO END-->
        <br>
        <br>
        <br>
        <section class="pt-5">
            <div class="container bg-primary1" id="events">
                <div class="events-header px-3 py-2">
                    <p class="mb-0 fw-pp">Upcoming Events</p>
                </div>
                <br>
                <div class="event-cards mt-5 px-sm-5 row">
                <?php 
                $query = "SELECT * FROM events WHERE event_date > now() ORDER BY event_date ASC";

                $data = mysqli_query($con, $query) or die('error');
                if(mysqli_num_rows($data) > 0) {
                    while($row = mysqli_fetch_assoc($data)) 
                    {
                    
                ?>

                    <div class="col-md-6 col-lg-4 reveal">
                        <div class="event-card bg-light px-4 py-3 my-4">
                            <p class="date mb-0 fw-in"><?php echo date("d", strtotime($row['event_date'])); ?></p>
                            <p class="month mb-5 fw-pp"><span id="month"><?php echo date("F", strtotime($row['event_date'])); ?></span> <span id="yearr"><?php echo date("Y", strtotime($row['event_date'])); ?></span></p>
                            <p class="eventt mb-0 fw-pp"><?php echo $row['event_name']; ?></p>
                            <p class="time mb-2 fw-pp"><span><?php echo $row['time_start']; ?></span> - <span><?php echo $row['time_end'];?></span></p>
                            <p class="venue mb-0 fw-pp"><?php echo $row['event_location']; ?></p>
                        </div>
                    </div>
                <?php 
                    }
                } else {
                    ?>
                    <div class="col-12 text-center">
                        <p class="fs-1 fw-semibold text-light">No events planned.</p>
                    </div>

                        <?php
                }
                ?>
                    

                    
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <div class="bg-light px-lg-5 py-lg-4 px-4 py-3 d-flex flex-lg-row flex-column align-items-center text-center" id="register-container">
                    <div class="text-lg-start">
                        <p class="mb-0 fs-32 fw-bold fw-pp">Are you an Alumni?</p>
                        <p class="pe-lg-4 fw-pp">Can you spare your time to Click the register button and fill out the form. Be one of us!</p>
                    </div>
                    <div class="flex-fill">
                        <a type="button" href="form.php" class="btn btn-danger px-5 w-100 rounded-3" target="_blank" id="btn-register">
                            Register
                        </a>
                    </div>
                    

                </div>
            </div>
            <div class="text-light" id="footer">
                <br>
                <br>
                <br>
                <br>
                <br>

                <footer class="container c-light-500 pb-5">
                    <div class="row">
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                            <p class="fw-semibold">OFFICE OF TUPV ALUMNI ASSOCIATION INCORPORATED</p>
                            <p>
                            Rm. 2 Conference Hall (TUPVAAI Center) TUP Visayas,
 Talisay City, Philippines 6115
                            </p>
                        </div>
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                        <p class="fw-semibold">EMAIL</p>
                        <p class="mb-1">Admin Section: <span class="text-primary"><u>oaai.admin@tup.edu.ph</u></span></p>
                        <p class="mb-1">Database Section: <span class="text-primary"><u>oaai.database@tup.edu.ph</u></span></p>
                        <p class="">Communications Section: <span class="text-primary"><u>tupv.alumnioffice@tup.edu.ph</u></span></p>
                        </div>
                        <div class="col-lg-4 col-12 text-lg-start txt-center mb-3">
                        <p class="fw-semibold">
                        TUPV TRUNKLINE
                        </p>
                        <p><em>+63 (034) 495.3480</em> local 8753 (Staff) and 2341 (Director)</p>
                        </div>
                    </div>

                </footer>
            </div>
        </section>
    </section>
    <script>
        window.addEventListener('scroll', reveal)

function reveal(){

    var reveals = document.querySelectorAll('.reveal')

    for (let i = 0; i < reveals.length; i++) {
        
        let windowHeight = window.innerHeight;
        let revealTop = reveals[i].getBoundingClientRect().top;
        let revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active')
        } else {
            reveals[i].classList.remove('active')
        }
    }

}
    </script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.6.1.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>