<?php 
session_start(); 
include "../conn.php";
include "session.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">
    <link rel="stylesheet" href="../style.css">
    
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
</head>
<body>
<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
        <div class="sidebar-header pt-5 pb-2">
            <h3 class="fw-bold text-center">Gallery</h3>
        </div>
        <ul class="list-unstyled components text-start">
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="index.php"><i class="fa-solid fa-table-columns pe-4"></i>Dashboard</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="alumni-list.php"><i class="fa-solid fa-list-ul pe-4"></i>Alumni List</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="events.php"><i class="fa-solid fa-calendar-day pe-4"></i>Events</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1 active">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="gallery.php"><i class="fa-solid fa-images pe-4"></i>Gallery</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="flex-fill" id="content">
    <div class="navbar bg-white">
        <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
            <img src="../img/Group 1.png" alt="" style="max-width: 24px;"> 
            <p class="text-dark fs-6 mb-0 ms-2">
                Alumni Monitoring System
            </p>
        </a>
        <div class="btn-group">
                <button type="button" class="btn dropdown-toggle pe-5 rounded-5" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a type="button" href="logout.php" class="dropdown-item">Logout</a></li>
                    <li><a type="button" href="createaccount.php" class="dropdown-item">Create Account</a></li>
                </ul>
            </div>   
            
    </div>
        <nav class="px-0 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-0">
                <button type="button" id="sidebarCollapse" class="btn btn-danger bg-tup border-none" style="border-radius: 0 10px 10px 0;">
                    <i class="fas fa-align-left"></i>
                </button>
            </div> 
        </nav>
        <div class="mx-3 pt-2">
        <section class="mt-5">
                <p class="mb-0 fs-2 fw-bold m-color">
                    Gallery Management Section
                </p>
                <section class="row bg-white ">
                    <div class="mx-2 rounded-3 p-4 col-3">
                        <div>
                            <p class="fw-bold">Rules for uploading image.</p>
                            <ol>
                                <li>Must be on <span class="fw-semibold ">.jpeg</span>, <span class="fw-semibold ">.jpg</span> or <span class="fw-semibold ">.png</span> format</li>
                                <li>Image size must be less than <span class="fw-semibold ">25MB</b></li>
                            
                            </ol>
                            <form class="mt-5" action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file">
                                    <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="submit" name="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-9 row flex-fill pt-3">
                        <?php 
                            include "deleteImg.php";
                            $sql = "SELECT * FROM gallery_uploads";
                            $data = mysqli_query($con, $sql) or die('error');
                            if(mysqli_num_rows($data)>0) {
                                while($row = mysqli_fetch_assoc($data)) {
                                    $image_name = $row['image_name'];
                                    ?>

                                    <div class="col-lg-4 col-md-6 col-12 pb-3 px-2">
                                        <form action="deleteImg.php" method="post">
                                            <input class="form-control" name="img-id" type="hidden" aria-label="default input example" value="<?php echo $row['image_id'];?>">
                                        
                                            <div class="float-end mb-0">
                                                <button type="submit" class="btn mt-1 p-0 border-0" name="deleteImg">
                                                <i class="fa-solid fa-square-xmark fs-3"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <a href="uploads/<?php echo $row['image_name'];?>" class="fancylight popup-btn" data-fancybox-group="light"> 
                                            <img class="images" src="uploads/<?php echo $row['image_name'];?>">
                                        </a>
                                        <div class="d-flex justify-content-center align-items-center bg-dark rounded-bottom">
                                            <p class="fs-10 d-none" id="path">
                                            <?php echo realpath('uploads/'.$row['image_name']);?>
                                            </p>
                                            <p class="fs-10 mb-0 d-none">
                                                <?php echo $row['image_name'];?>
                                            </p>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-circle-info p-1 viewImgDetails text-light fs-5"></i>
                                            </a>
                                            
                                        </div>
                                    
                                    </div>
                                    <!-- Button trigger modal -->
                                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                        </button> -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <!-- <h4 class="modal-title fs-5" id="exampleModalLabel">File Path</h4> -->
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <p class="fs-6 fw-semibold mb-0">File Name</p>
                                            <p id="file-name" class="fs-10">
                                            
                                            </p>
                                            <p class="fs-6 fw-semibold mb-0">File Path</p>
                                            <p id="file-path" class="fs-10">
                                            
                                            </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    <?php 
                                    
                                }//while
                            
                            }//if
                        ?>
                    </div>
                    
                </section>
            </section>
        </div>
    </div>
    
</div>



<script src="js/bootstrap.bundle.min.js"></script>
<script src="../js/bootstrap.bundle.min.js" defer="defer"></script>
<script src="js/jquery-3.6.1.js"></script>             
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="js/script(admin).js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/isotope.pkgd.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/fontawesome.js"></script>
<script src="../js/solid.js"></script>
<script>
        $(document).ready(function() {
        $('.viewImgDetails').on('click', function(){
            $imgDetail = $(this).closest('div');
            var data = $imgDetail.children("p").map(function() {
                    return $(this).text();
                }).get();
            $('#file-path').text(data[0]);
            $('#file-name').text(data[1]);
        });
        


        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
        type : 'image',
        gallery : {
        enabled : true
        }
        });
        });
</script>
</body>
</html>