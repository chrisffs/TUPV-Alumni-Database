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
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
    
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --> 
    <script src="js/jquery-3.6.0.min.js"></script>
    
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
</head>
<body class="bg-light-cs">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" style="position:relative;">
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
    <div class="flex-fill" id="content">
        <section> 
        <div class="navbar bg-white">
            <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
                <img src="../img/Group 1.png" alt="" style="max-width: 24px;"> 
                <p class="text-dark fs-6 mb-0 ms-2">
                Alumni Management System
                </p>
            </a>
            <div class="dropdown">
                <button class="btn dropdown-toggle pe-5 rounded-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['fullname']?>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <a type="button" href="logout.php" class="dropdown-item">Logout</a>  
                </div>
            </div>  
            
        </div>
        </section>
        <nav class="px-0 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-0">
                <button type="button" id="sidebarCollapse" class="btn btn-danger bg-tup" style="border-radius: 0 10px 10px 0;">
                    <i class="fas fa-align-left"></i>
                </button>
            </div> 
        </nav>
        <div class="mx-3">
                <div class="">
                        <p class="fs-2 fw-bold mb-0">
                            Alumni list
                        </p>
                    </div>
            <div class="d-flex justify-content-between align-items-center">
            <div>
            <a type="button" class="btn btn-outline-success rounded-3 mb-3 mt-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Add
            </a>
            </div>
            </div>
            

            <div class="rounded-3">
                <div class="rounded-3 ">
                    
                    <div class="bg-white p-3 rounded-4 box-shadow1" id="searchresult">
                        <table class="table table-hover alumni-table text-center bg-white" style="font-size: 12px;" id="table">
                        <thead>
                            <tr>
                                <th class="m-tbl-th fw-light low-col" scope="col">TUPV-ID</th>
                                <th class="m-tbl-th fw-light" scope="col">Last Name</th>
                                <th class="m-tbl-th fw-light" scope="col">First Name</th>
                                <th class="m-tbl-th fw-light" scope="col">M.I.</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Birthdate</th>
                                <th class="m-tbl-th fw-light d-none" scope="col">Civil-Status</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Sex</th>
                                <th class="m-tbl-th fw-light d-none sup-col" scope="col">Address</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Contact Number</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Email</th>
                                <th class="m-tbl-th fw-light" scope="col">Year Graduated</th>
                                <th class="m-tbl-th fw-light sup-col" scope="col">Program Graduated</th>
                                <th class="m-tbl-th fw-light" scope="col">Current Profession</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Company Name</th>
                                <th class="m-tbl-th fw- d-none" scope="col">Present Employment Status</th>
                                <th class="m-tbl-th fw-light action-td" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $query = "SELECT * FROM alumni_tbl ORDER BY tupv_id DESC";
                            $data = mysqli_query($con, $query) or die('error');

                            if(mysqli_num_rows($data) > 0) {
                                while($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                    <tr>
                                        <td class="low-col"><?php echo $row['tupv_id']; ?></td>
                                        <td><?php echo $row['lastname']; ?></td>
                                        <td><?php echo $row['firstname']; ?></td>
                                        <td><?php echo $row['mi']; ?></td>
                                        <td class="d-none"><?php echo $row['birthdate']; ?></td>
                                        <td class="d-none"><?php echo $row['civil_status']; ?></td>
                                        <td class="d-none"><?php echo $row['sex']; ?></td>
                                        <td class="sup-col d-none"><?php echo $row['address']; ?></td>
                                        <td class="d-none"><?php echo $row['pnumber']; ?></td>
                                        <td class="d-none"><?php echo $row['email_address']; ?></td>
                                        <td><?php echo $row['year_graduated']; ?></td>
                                        <td class="sup-col"><?php echo $row['program_graduated']; ?></td>
                                        <td><?php echo $row['current_profession']; ?></td>
                                        <td class="d-none"><?php echo $row['company_name']; ?></td>
                                        <td class="d-none"><?php echo $row['present_employment_status']; ?></td>
                                        <td valign=middle class="action-td">
                                            <div class="row">
                                                <div class="col-3">
                                                    <a href="" class="text-info fs-5" data-bs-toggle="modal" data-bs-target="#exampleModalEdit"><i class="fa-regular fa-pen-to-square editbtn"></i></a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="" class="text-danger fs-5" data-bs-toggle="modal" data-bs-target="#exampleModalDelete"><i class="fa-regular fa-trash-can deletebtn"></i></a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="" class="text-primary fs-3" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fa-solid fa-ellipsis viewbtn"></i></a>
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    </a>
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
                    
                    <!-- MODALS -->
                    <?php error_reporting(0) ?>
                    <?php include('add.php')?>
                    <?php include('edit.php')?>
                    <?php include('delete.php')?>
                    <?php include('view.php')?>
                    
                </div>
            </div>
            
        </div>
        
    </div>
</div>
<script>
        $(document).ready(function() {
            $('.editbtn').on('click', function(){
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#tupv-id-edit').val(data[0]);
                $('#first-name-edit').val(data[2]);
                $('#last-name-edit').val(data[1]);
                $('#MI-edit').val(data[3]);
                $('#birthdate-edit').val(data[4]);
                $('#cv-edit').val(data[5]);
                $('#sex-edit').val(data[6]);
                $('#address-edit').val(data[7]);
                $('#phone-number-edit').val(data[8]);
                $('#email-edit').val(data[9]);
                $('#year-graduated-edit').val(data[10]);
                $('#program-graduated-edit').val(data[11]);
                $('#c-prof-edit').val(data[12]);
                $('#c-name-edit').val(data[13]);
                $('#p-emp-status-edit').val(data[14]);
            });
            $('.deletebtn').on('click', function(){
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#tupv-id-delete').val(data[0]);
            });
            $('.viewbtn').on('click', function(){
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#tupv-view').text(data[0]);
                $('#lname-view').text(data[1]);
                $('#fname-view').text(data[2]);
                $('#mi-view').text(data[3]);
                $('#bdate-view').text(data[4]);
                $('#cs-view').text(data[5]);
                $('#sex-view').text(data[6]);
                $('#add-view').text(data[7]);
                $('#cnum-view').text(data[8]);
                $('#email-view').text(data[9]);
                $('#ygrad-view').text(data[10]);
                $('#pgrad-view').text(data[11]);
                $('#cprof-view').text(data[12]);
                $('#cname-view').text(data[13]);
                $('#pes-view').text(data[14]);
            });
            $('#table').DataTable();

        });
</script>
    <script src="js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="../js/bootstrap.bundle.min.js" defer="defer"></script>
    <script src="js/jquery-3.6.1.js" ></script>
    <script src="../js/popper.min.js" defer="defer"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/solid.js"></script>
    <script src="../js/fontawesome.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
        $("#yearpicker").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
        $(function() {
            $('#datepicker-edit').datepicker();
        });
        $("#yearpicker-edit").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
    </script>

    
</body>
</html>