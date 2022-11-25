<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/fonts.css">
    <title>Document</title>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script> -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
</head>
<body>
<section> 
    <div class="navbar bg-light">
        <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
            <img src="../img/Group 1.png" alt="" style="max-width: 24px;"> 
            <p class="text-dark fs-6 fw-regular mb-0 ms-2">
            Alumni Management System
            </p>
        </a>
    </div>
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
        </ul>
    </nav>
    <!-- Page Content -->
    <div class="flex-fill" id="content">
        <nav class="px-1 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-1">
                <button type="button" id="sidebarCollapse" class="btn btn-danger">
                    <i class="fas fa-align-left"></i>
                </button>
            </div> 
        </nav>
        <div class="mx-4">
            <div class="bg-tup text-light my-3 w-100 br10 box-shadow1">
                <div class="alum-count p-4">
                    <p class="fs-1 fw-bold text-center mb-0 text-light">
                    203
                    </p>
                    <p class="text-light text-center fs-6">
                    Number of Alumni registration
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>
















    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/script(admin).js"></script>
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="../js/solid.js"></script>

    <!-- <script src="../js/jquery.min.js"></script>
    <script src="js/jquery-3.6.1.js"></script> -->
    <!-- <script src="../js/bootstrap.min.js"></script> -->
    <!-- <script src="../js/bootstrap-datepicker.min.js"></script> -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>