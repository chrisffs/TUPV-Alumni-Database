<?php 
session_start(); 
include "../conn.php";
include "session.php";

$query = "SELECT * FROM events WHERE date(event_date) = date(date_sub(now(), interval 0 day))";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/fonts.css">
    <title>Alumni Database Management</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">
    <link rel="stylesheet" href="../style.css">
    
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
</head>
<body class="bg-light-cs">
<section> 

</section>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header pt-5 pb-2">
            <h3 class="fw-bold text-center">Dashboard</h3>
        </div>
        <ul class="list-unstyled components text-start">
            <li class="my-5 mx-3 py-1 active">
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
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="gallery.php"><i class="fa-solid fa-images pe-4"></i>Gallery</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- Page Content -->
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
            <div class="row">
                <div class="col mx-3 bg-white text-dark px-5 py-2 mb-5 box-shadow1 rounded-pill">
                    <p class="fs-1 fw-bold mb-0 ">Welcome Back, <?php echo strtok($_SESSION['username'], " ");?></p>
                </div>
            </div>
            <section class="row mx-2">
                <div class="d-flex col-5">
                    
                    <div class="bg-tup text-light box-shadow1 me-3 rounded-3 d-flex align-items-center">
                        <div class="alum-count p-4">
                            <?php 
                            $sql = "SELECT * FROM alumni_tbl";
                            $queryy = "SELECT * FROM alumni_tbl WHERE date(timestamp) LIKE date(date_add(now(), interval 0 day));";
                            $que = "SELECT * FROM alumni_tbl WHERE month(timestamp) LIKE month(now())";
                            
                            $mysqliStatusTotal = $con->query($sql);
                            $mysqliStatustThisDay = $con->query($queryy);
                            $mysqliStatustThisMonth = $con->query($que);
                            
                            $rows_count_value_total = mysqli_num_rows($mysqliStatusTotal);
                            $rows_count_value_this_day = mysqli_num_rows($mysqliStatustThisDay);
                            $rows_count_value_this_month = mysqli_num_rows($mysqliStatustThisMonth);
                            ?>
                            <p class="fs-1 fw-bold text-center mb-0 text-light">
                            <?php echo $rows_count_value_total?>
                            </p>
                            <?php 	
                            ?>
                            <p class="text-light text-center fs-6">
                            Total Number of Alumni registered
                            </p>
                        </div>
                    </div>
                    <div class="flex-fill">
                        <div class="bg-tup text-light box-shadow1 rounded-3 px-4 py-4 mb-3">
                            <div class="">
                                <p class="fs-3 fw-bold text-center mb-0 text-light">
                                <?php echo $rows_count_value_this_day?>
                                </p>
                                <p class="text-light text-center fs-6 mb-0">
                                Number of Alumni registered <div class="text-center">Today</div>
                                </p>
                            </div>
                        </div>
                        <div class="bg-tup text-light box-shadow1 rounded-3 px-4 py-4 mt-3">
                            <div class="">
                                <p class="fs-3 fw-bold text-center mb-0 text-light">
                                <?php echo $rows_count_value_this_month?>
                                </p>
                                <p class="text-light text-center fs-6 mb-0">
                                Number of Alumni registered <div class="text-center">This Month</div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 box-shadow1 px-0 bg-white">
                    <table class="table table-borderless bg-white mb-0 " style="height: 18.5rem; display: block; overflow-x: auto;">
                        <div class="bg-tup px-3 py-3 text-light">
                            <p class="mb-0 fw-semibold fs-3">Upcoming events</p>
                        </div>
                        <thead>
                            <tr>
                                <th class="fw-semibold">Event Date</th>
                                <th class="fw-semibold">Event Name</th>
                                <th class="fw-semibold">Start Time</th>
                                <th class="fw-semibold">End Time</th>
                                <th class="fw-semibold">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = "SELECT * FROM events WHERE event_date > now() OR date(event_date) = date(date_sub(now(), interval 0 day)) ORDER BY event_date ASC";

                                $data = mysqli_query($con, $query) or die('error');
                                if(mysqli_num_rows($data) > 0) {
                                    while($row = mysqli_fetch_assoc($data)) {
                            ?>
                            <tr>
                                <td><?php echo date("Y-d-m",strtotime($row['event_date']));?></td>
                                <td><?php echo $row['event_name'];?></td>
                                <td><?php echo $row['time_start'];?></td>
                                <td><?php echo $row['time_end'];?></td>
                                <td><?php echo $row['event_location'];?></td>
                            </tr>
                            <?php 
                                    }
                                } else {
                                    ?>      
                                    <tr>
                                        <td colspan="5">No Events to show...</td>
                                    </tr>
                                <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </section>
            
        </div>

        
    </div>
</div>



<!-- Modal -->



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