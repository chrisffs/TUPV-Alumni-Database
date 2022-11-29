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

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <title>Document<<title>Document</title>
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
                            <a href="" class="nav-link fw-pp">About</a>
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
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque atque vel enim officia maiores repellendus blanditiis libero magnam error voluptatem ipsum voluptatibus harum, quasi explicabo a velit amet. Sint, consequuntur?</p>
            </div>
        </div>

        <section class="d-lg-flex justify-content-between ">
            <div class="row">
                <?php 
                    $sql = "SELECT * FROM gallery_uploads";
                    $data = mysqli_query($con, $sql) or die('error');
                    if(mysqli_num_rows($data)>0) {
                        while($row = mysqli_fetch_assoc($data)) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-6 pb-1">
                                <img class="img-fluid"src="admin/uploads/<?php echo $row['image_name'];?>">
                            </div>
                            <?php 
                        }//while
                    
                    }//if
                ?>
                
            
            </div>
        </section>

    </div>
</section>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-light" style="max-width: 569px;">
            <div class="modal-header bg-tup align-items-center">
                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Add</h1>
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form mt-3">
                    <div class="img-fluid mb-3">
                        <img src="img/15th Hmecoming, March 2019_page-0001.jpg" class="w-100" alt="" srcset="">
                    </div>
                    <div class="img-fluid mb-3">
                        <img src="img/15th Hmecoming, March 2019_page-0001.jpg" class="w-100" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>