<?php 
session_start(); 
include "../conn.php"
?>
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
<body class="bg-light-cs">
<section> 
    <div class="navbar" style="background-color: white;">
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
            <h3 class="fw-bold text-center">Alumni Lists</h3>
        </div>
        <ul class="list-unstyled components text-start">
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="index.php"><i class="fa-solid fa-table-columns pe-4"></i>Dashboard</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1 active">
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
    <div class="flex-fill mx-3" id="content">
        <nav class="px-0 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-0">
                <button type="button" id="sidebarCollapse" class="btn btn-danger">
                    <i class="fas fa-align-left"></i>
                </button>
            </div> 
        </nav>
        <div class="rounded-3 box-shadow1">
            <div class="bg-light rounded-3 ">
                <div class="bg-tup text-center">
                    <p class="fs-5 fw-semibold text-light mb-0">
                        Alumni list
                    </p>
                </div>
                <table class="table table-hover alumni-table text-center rounded-3" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th class="m-tbl-th fw-light low-col" scope="col">TUPV-ID</th>
                            <th class="m-tbl-th fw-light" scope="col">Last Name</th>
                            <th class="m-tbl-th fw-light" scope="col">First Name</th>
                            <th class="m-tbl-th fw-light" scope="col">M.I.</th>
                            <th class="m-tbl-th fw-light" scope="col">Birthdate</th>
                            <th class="m-tbl-th fw-light" scope="col">Civil-Status</th>
                            <th class="m-tbl-th fw-light" scope="col">Sex</th>
                            <th class="m-tbl-th fw-light sup-col" scope="col">Address</th>
                            <th class="m-tbl-th fw-light" scope="col">Contact Number</th>
                            <th class="m-tbl-th fw-light" scope="col">Email</th>
                            <th class="m-tbl-th fw-light" scope="col">Year Graduated</th>
                            <th class="m-tbl-th fw-light sup-col" scope="col">Program Graduated</th>
                            <th class="m-tbl-th fw-light" scope="col">Current Profession</th>
                            <th class="m-tbl-th fw-light" scope="col">Company Name</th>
                            <th class="m-tbl-th fw-light" scope="col">Present Employment Status</th>
                            <th class="m-tbl-th fw-light action-td" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query = "SELECT * FROM alumni_tbl";
                        $data = mysqli_query($con, $query) or die('error');

                        if(mysqli_num_rows($data) > 0) {
                            while($row = mysqli_fetch_assoc($data)) {
                                ?>
                                <tr>
                                    <td class="low-col"><?php echo $row['tupv_id']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['mi']; ?></td>
                                    <td><?php echo $row['birthdate']; ?></td>
                                    <td><?php echo $row['civil_status']; ?></td>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td class="sup-col"><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['pnumber']; ?></td>
                                    <td><?php echo $row['email_address']; ?></td>
                                    <td><?php echo $row['year_graduated']; ?></td>
                                    <td class="sup-col"><?php echo $row['program_graduated']; ?></td>
                                    <td><?php echo $row['current_profession']; ?></td>
                                    <td><?php echo $row['company_name']; ?></td>
                                    <td><?php echo $row['present_employment_status']; ?></td>
                                    <td valign=middle class="action-td">
                                        <div class="row">
                                            <div class="col">
                                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href=""><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                <?php 
                                } 
                            } else {
                                ?>      
                                <tr>
                                    <td colspan="16">No record to show...</td>
                                </tr>
                            <?php
                            }
                            $con->close();
                        ?>
                    </tbody>
                </table>
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