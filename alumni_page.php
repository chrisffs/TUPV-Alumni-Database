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
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="admin/css/dataTables.bootstrap5.min.css">
    <script src="admin/js/jquery-3.6.0.min.js"></script>
    <script src="admin/js/jquery.dataTables.min.js"></script>
    <script src="admin/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
    <style>
        .alumni-table th {
            font-size: 12px;
        }
    </style>
</head>
<body style="background-color: #FAFAFA;">
<section>
     <nav class="navbar navbar-expand-md navbar-light pt-md-3">
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
                            <a href="alumni_page.php" class="nav-link fw-pp active-link">Alumni</a>
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
        <section>
            <div class="container d-flex justify-content-center">
                <div class="ap-title text-center my-5">
                    <p class="hl-txt fw-pp">
                    TUP Visayas Alumni Lists
                    </p>
                    <p class="desc fw-pp">
                    The registered TUPV graduates are listed in this section. Only you can view and search the name, year and the program graduated.
                    </p>
                </div>
            </div>
        </section>
        <div class="container bg-tup text-light p-lg-4  p-2 rounded-top">
        <table class="table table-borderless table-hover mt-5 alumni-table2 text-center bg-white p-0" id="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Year-Graduated</th>
                    <th class="text-center" scope="col">Course</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                error_reporting(0);
                    if (!isset($_POST['submit1'])) {
                        $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `year_graduated`, `program_graduated` FROM `alumni_tbl` ORDER BY year_graduated DESC";
                                            
                    $data = mysqli_query($con, $query) or die('error');
                    if(mysqli_num_rows($data) > 0) {
                        while($row = mysqli_fetch_assoc($data)) {
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['year_graduated']; ?></td>
                            <td><?php echo $row['program_graduated']; ?></td>
                        </tr>
                    <?php 
                        }
                    } else {
                    ?>      
                        <tr>
                            <td colspan="4">No record to show...</td>
                        </tr>
                    <?php
                    }
            }
            ?>
        </table>
        </div>
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

</section>
<script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
        });
</script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

