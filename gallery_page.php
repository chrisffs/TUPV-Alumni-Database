<?php 
session_start(); 
include "conn.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Gallery</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <title>Document</title>
</head>
<body style="background-color: #FAFAFA;">
<section>
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
                            <a href="index.php" class="nav-link fw-pp">Home</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="alumni_page.php" class="nav-link fw-pp">Alumni</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="gallery_page.php" class="nav-link fw-pp active-link">Gallery</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="about.php" class="nav-link fw-pp">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<section>
<!-- HERO -->
<section>
    <div class="container">
        <br>
        <p class="hl-txt gallery-head pb-2">
            Gallery
        </p>
        <div class="row">
            <div class="col-lg-7 col-md-10 col-12">
                <p class="fs-6 fw-bold"><em>TUPV Alumni photos and images can be found here.</em></p>
            </div>
        </div>

        <section class="">
            <div class="row flex-fill me-0">
                <?php 
                    $sql = "SELECT * FROM gallery_uploads";
                    $data = mysqli_query($con, $sql) or die('error');
                    if(mysqli_num_rows($data)>0) {
                        while($row = mysqli_fetch_assoc($data)) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-3 px-2">
                                <a href="admin/uploads/<?php echo $row['image_name'];?>" class="fancylight popup-btn" data-fancybox-group="light"> 
                                    <img class="images" src="admin/uploads/<?php echo $row['image_name'];?>">
                                </a>
                            </div>
                            <?php 
                        }//while
                    
                    }//if
                ?>
                
            
            </div>
        </section>
        

    </div>
</section>
                <br>
                <br>
                <br>
                <br>
                <br>

<div class="text-light" id="footer">
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
<script>
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
</script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>