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
    <link rel="stylesheet" href="../css/fonts.css">
    <title>Alumni Database Management</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
</head>
<body style="background-color: #FAFAFA;">
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header pt-5 pb-2">
            <h3 class="fw-bold text-center">Dashboard</h3>
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
            <li class="my-5 mx-3 py-1">
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
                Alumni Management System
                </p>
            </a>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle pe-5 rounded-5" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a type="button" href="logout.php" class="dropdown-item">Logout</a></li>
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
            
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-white flex-fill row mx-3 pt-2 rounded-4 box-shadow1">
                <div class="col-6 ps-5 pt-2 pb-5">
                    <p class="fs-1 fw-bold text-center">Create An Account.</p>
                    <?php
                    if(isset($_SESSION['username_dup'])){
                        $warn = $_SESSION['username_dup'];
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= $warn?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['username_dup']);
                    }
                    ?>

                    <?php
                    include('createaccountmessage.php');
                    ?>
                    
                    <form class="w-75 mx-auto mt-5" action="createaccountadd.php" method="post">

                        <label for="full_name" class="form-label fw-light">Full Name</label>
                        <input class="py-4 mb-3 form-control rounded-4 px-3 border-0 filter-input" type="text" placeholder="e.g John Doe" aria-label="default input example" name="fullname" id="full_name" required>

                        <label for="user_name" class="form-label fw-light">User Name</label>
                        <input class="py-4 mb-3 form-control rounded-4 px-3 border-0 filter-input" type="text" placeholder="e.g TUPV-22-1234" aria-label="default input example" name="username" id="user_name" required>

                        <label for="password" class="form-label fw-light">Password</label>
                        <input type="password" class="py-4 mb-3 form-control rounded-4 px-3 border-0 filter-input" placeholder="password" id="password" name="pass" required>

                        <label for="admin_type" class="form-label fw-light">Admin Type</label>
                        <select id="admin_type" class="fw-normal form-select rounded-4 mb-5" aria-label="Default select example" name="admin_type">
                            <option selected disabled hidden>Select Admin Type</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Staff">Staff</option>
                        </select>

                        <button class="btn btn-success w-100 rounded-5" type="submit" name="create_account">Create Account</button>

                    </form>
                </div>
                <div class="col-6 text-center d-flex justify-content-center align-items-center">
                    <div>
                        <img src="../img/Group 1.png" alt="" srcset="">
                        <p class="fs-4 fw-semibold">TUPV Alumni Management System</p>
                    </div>
                </div>
            </div>
        </div>

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
</body>
</html>