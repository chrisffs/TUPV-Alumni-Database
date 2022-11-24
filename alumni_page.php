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
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap4.5.3.min.css">
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
                            <a href="alumni-page.php" class="nav-link fw-pp active-link">Alumni</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="" class="nav-link fw-pp">Gallery</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="" class="nav-link fw-pp">About</a>
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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="container mb-5">
                <p class="text-center blck-txt fw-pp">
                    Filter
                </p>
                <div>
                    <form class="d-flex flex-md-row flex-column justify-content-center" action="alumni_page.php" method="post">
                        <div class="mx-2">
                            <input class="form-control fw-pp rounded-4 border-0" type="text" placeholder="Name..." aria-label="default input example" name="search_name" id="filter-input">
                        </div>
                        <div class="mx-2">
                            <div class="form-group">
                                <div class="input-group date" id="yearpicker">
                                    <input type="text" class="form-control border-0" name="search_y_grad" placeholder="Select Year Graduated" id="filter-input" style="border-radius:1rem 0 0 1rem ;">
                                    <span class="input-group-append ">
                                        <span class="input-group-text border-0" style="cursor: pointer; border-radius: 0 1rem 1rem 0;" id="filter-input">
                                                <i class="fa-solid fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mx-2">
                            <select class="form-select fw-pp rounded-4 border-0" aria-label="Default select example" id="filter-input" name="program-graduated">
                                <option selected disabled hidden>Select Course Graduated</option>
                                <option value="BS in Electronics Engineering">BS in Electronics Engineering</option>
                                <option value="BS in Mechanical Engineering">BS in Mechanical Engineering</option>
                                <option value="BS in Computer Engineering">BS in Computer Engineering</option>
                                <option value="BS in Chemistry">BS in Chemistry</option>
                                <option value="BS in Electrical Engineering">BS in Electrical Engineering</option>
                                <option value="BS in Mechatronics Engineering">BS in Mechatronics Engineering</option>
                                <option value="BS in Instrumentation and Control Engineering">BS in Instrumentation and Control Engineering</option>
                                <option value="BET Major in Computer Engineering Technology">BET Major in Computer Engineering Technology</option>
                                <option value="BET Major in Manufacturing Engineering Technology">BET Major in Manufacturing Engineering Technology</option>
                                <option value="BET Major in Automotive Engineering Technology">BET Major in Automotive Engineering Technology</option>
                                <option value="BET Major in Chemical Engineering Technology">BET Major in Chemical Engineering Technology</option>
                                <option value="BET Major in Electrical Engineering Technology">BET Major in Electrical Engineering Technology</option>
                                <option value="BET Major in Electronics Engineering Technology">BET Major in Electronics Engineering Technology</option>
                            </select>
                        </div>
                        <div class="mx-2">
                            <button type="submit" class="btn btn-danger w-100 rounded-4" name="submit1" id="search-button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container bg-primary1" id="events">
                <div class="events-header1 px-3 py-2">
                        <p class="mb-0 fw-pp">Result</p>
                </div>
                <br>
                <div class="bg-light rounded-3">
                    <table class="table table-borderless table-hover mt-5 alumni-table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Year-Graduated</th>
                                <th scope="col">Course</th>
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
                    } else {
                            $search_key = $_POST['search_name'];
                            $search_y_grad = $_POST['search_y_grad'];
                            $search_course = $_POST['program-graduated'];
                            
                                if($search_key != "" && $search_y_grad != "" && $search_course != "") {

                                $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi`, `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE (lastname = '$search_key' OR firstname = '$search_key' OR mi = '$search_key' OR CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) = '$search_key') AND year_graduated = '$search_y_grad' AND program_graduated = '$search_course'";
                                
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
                            }
                        } else if($search_key != "" && $search_y_grad != ""){
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` ,  `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE (lastname = '$search_key' OR firstname = '$search_key' OR mi = '$search_key' OR CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) = '$search_key') AND year_graduated LIKE '$search_y_grad'";

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
                                }
                            
                        } else if($search_y_grad != "" && $search_course != "") {
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` ,  `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE year_graduated LIKE '$search_y_grad' AND program_graduated LIKE '$search_course'";

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
                                }
                        } else if ($search_key != "" && $search_course != ""){
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` ,  `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE (lastname = '$search_key' OR firstname = '$search_key' OR mi = '$search_key' OR CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) = '$search_key') AND program_graduated LIKE '$search_course'";
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
                                    }
                        } else if ($search_key != "") {
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` ,  `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE (lastname = '$search_key' OR firstname = '$search_key' OR mi = '$search_key' OR CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) = '$search_key')";

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
                                }
                        } else if ($search_y_grad != ""){
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` , `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE year_graduated LIKE '$search_y_grad'";

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
                                }
                        } else if ($search_course != ""){
                            $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi` ,  `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE program_graduated LIKE '$search_course'";
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
                            }

                        }
                    }
                    
                            ?>
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </section>
        

    </section>
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.6.1.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $("#yearpicker").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
    </script>
</body>
</html>
<?php 
// $query = "SELECT CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) as name, `lastname`, `firstname`, `mi`, `year_graduated`, `program_graduated` FROM `alumni_tbl` WHERE lastname LIKE '%$search_key%' OR firstname LIKE '%$search_key%' OR mi LIKE '%$search_key%' OR CONCAT(`firstname`, ' ' , `mi` , ' ' , `lastname`) LIKE '%$search_key%' || ";
?>
<!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr> -->