<?php 
session_start(); 
include "../conn.php";
include "session.php";

if(isset($_POST['submit_event'])) {
    $eventDate = mysqli_real_escape_string($con, $_POST['date_of_event']);
    $eventName = mysqli_real_escape_string($con, $_POST['event_name']);
    $eventStime = mysqli_real_escape_string($con, $_POST['start_time']);
    $eventEtime = mysqli_real_escape_string($con, $_POST['end_time']);
    $eventVenue = mysqli_real_escape_string($con, $_POST['venue_name']);
    $sql = "INSERT INTO events (event_date, event_name, time_start, time_end, event_location) VALUES ('$eventDate', '$eventName', '$eventStime', '$eventEtime', '$eventVenue')";

    if($con->query($sql) === TRUE) {
        echo '<script> alert("Events Added Successfully") </script>';
        header("location: events.php");
    } else {
        echo '<script> alert("Events Failed Successfully") </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="js/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">
    <title>Document</title>
</head>
<body class="bg-light-cs">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header pt-5 pb-2">
            <h3 class="fw-bold text-center">Events</h3>
        </div>
        <ul class="list-unstyled components text-start">
            <li class="my-5 mx-3 py-1 ">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="index.php"><i class="fa-solid fa-table-columns pe-4"></i>Dashboard</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1">
                <div class="ps-5">
                    <a class="nav-link fs-6" href="alumni-list.php"><i class="fa-solid fa-list-ul pe-4"></i>Alumni List</a>
                </div>
            </li>
            <li class="my-5 mx-3 py-1 active">
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
        <div class="mx-3">
            <form action="" method="POST">
                <header class="d-flex justify-content-start">
                    <p class="fw-bold fs-3 ">Event Card Generator</p>
                </header>
                <section class="row align-items-center mx-2 bg-white rounded-4">
                    <form action="" method="post">
                        <div class="col-9 px-5">
                            <div class="row my-3">
                                <div class="col-3 px-1">
                                    <div class="">
                                        <div class="form-group">
                                            <div class="input-group date" id="">
                                                <input type="text" class="py-4 form-control rounded-3 border-0 filter-input" onfocus="(this.type='date')" name="date_of_event" placeholder="Input Date of Event" id="event-date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 px-1">
                                    <div class="">
                                        <input class="py-4 form-control fw-pp rounded-3 border-0 filter-input" type="text" placeholder="Event Name" aria-label="default input example" name="event_name" id="event-name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-2 px-1">
                                    <div class="">
                                        <input type="text" id="start_time" class="py-4 form-control fw-pp rounded-3 border-0 start_time" name="start_time" placeholder="Select start time" autocomplete="off" required/>
                                    </div>
                                </div>
                                <div class="col-2 px-1">
                                    <div class="">
                                        <input type="text" id="end_time" class="py-4 form-control fw-pp rounded-3 border-0 end_time" name="end_time" placeholder="Select end time" autocomplete="off" required/>
                                    </div>
                                </div>
                                <div class="col-8 px-1">
                                    <div class="">
                                        <input class="py-4 form-control fw-pp rounded-3 border-0 filter-input" id="event_venue"type="text" placeholder="Location" aria-label="default input example" name="venue_name" maxlength="30" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 d-flex justify-content-end">
                                    <button class="btn btn-danger rounded-5 px-3" type="submit" name="submit_event"><i class="fa-regular fa-calendar-check"></i> Add Event</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    <div class="col-3 d-flex justify-content-center bg-tup py-4 rounded-4">
                        <div class="col-12">
                            <div class="event-card bg-light px-4 py-3 my-4">
                                <p id="day"class="date mb-0 fw-in">30</p>
                                <p class="month mb-5 fw-pp"><span id="month">November</span> <span id="yearr">2002</span></p>
                                <p id="event_name" class="eventt mb-0 fw-pp">Batch 1993-1994 Reunion</p>
                                <p class="time mb-2 fw-pp"><span id="timeFrom">1PM</span> - <span id="timeEnd">5:30PM</span></p>
                                <p id="venue" class="venue mb-0 fw-pp">TUPV Gymnasium</p>
                            </div>
                        </div>
                    </div>
                </section>
                
            </form>
            
        </div>
        <div class="bg-white mx-3 mt-3">
            <table class="table table-hover">
                <div>
                    <p class="mb-0 fw-semibold fs-2 p-3">Upcoming events</p>
                </div>
                <thead>
                    <tr>
                        <th class="d-none">ID</th>
                        <th>Event Date</th>
                        <th>Event Name</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM events WHERE event_date > now() OR date(event_date) = date(date_sub(now(), interval 0 day)) ORDER BY event_date ASC";

                        $data = mysqli_query($con, $query) or die('error');
                        if(mysqli_num_rows($data) > 0) {
                            while($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <?php 
                    include("editEvent.php");
                    include("deleteEvent.php");
                    ?>
                    <tr>
                        <td class="d-none"><?php echo $row['id'];?></td>
                        <td><?php echo date("Y-d-m",strtotime($row['event_date']));?></td>
                        <td><?php echo $row['event_name'];?></td>
                        <td><?php echo $row['time_start'];?></td>
                        <td><?php echo $row['time_end'];?></td>
                        <td><?php echo $row['event_location'];?></td>
                        <td>
                            <a type="button" class="text-info mx-1" data-bs-toggle="modal" data-bs-target="#editEventModal">
                                <i class="fa-regular fa-pen-to-square fs-3 editEventbtn"></i>
                            </a>
                            <a type="button" class="text-danger mx-1" data-bs-toggle="modal" data-bs-target="#deleteEventModal">
                                <i class="fa-regular fa-calendar-xmark fs-3 deleteEventbtn"></i>
                            </a>
                        </td>
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
            
            
            <table class="table table-hover">
                <div>
                    <p class="mb-0 fw-semibold fs-2 p-3">Events Passed</p>
                </div>
                <thead>
                    <tr>
                        <th>Event Date</th>
                        <th>Event Name</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                        $query = "SELECT * FROM events WHERE event_date < now() AND date(event_date) != date(date_sub(now(), interval 0 day))";

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
    </div>
</div>
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="js/script(admin).js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/fontawesome.js"></script>
<script src="../js/solid.js"></script>
<script src="../js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap.bundle.min.js" defer="defer"></script>
<script src="../js/bootstrap.bundle.min.js" defer="defer"></script>

<script src="js/all.min.js"></script>

<script src="js/combodate.js"></script>
<script src="js/moment.js"></script>
<script src="js/dayjs.min.js"></script>


<script src="js/timepicker-bs4.js" defer="defer"></script>
<script>
    $(document).ready(function() {
        $('.editEventbtn').on('click', function(){
        $tr = $(this).closest('tr');
                
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        $('#id').val(data[0]);
        $('#event-edit-date').val(data[1]);
        $('#event-edit-name').val(data[2]);
        $('#start-edit-time').val(data[3]);
        $('#end-edit-time').val(data[4]);
        $('#event-edit-venue').val(data[5]);

    });
    $('.deleteEventbtn').on('click', function(){
        $tr = $(this).closest('tr');
                
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        $('#id_delete').val(data[0]);
    });
});
</script>


<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
	jQuery('#start_time').timepicker({

	});
    jQuery('#end_time').timepicker({

});
jQuery('#start-edit-time').timepicker({

});
jQuery('#end-edit-time').timepicker({

});
});
</script>
</body>
</html>