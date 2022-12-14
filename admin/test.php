<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="style(admin).css" type="text/css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.5.3.min.css">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.2/flatly/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.2/flatly/bootstrap.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js" integrity="sha512-igl8WEUuas9k5dtnhKqyyld6TzzRjvMqLC79jkgT3z02FvJyHAuUtyemm/P/jYSne1xwFI06ezQxEwweaiV7VA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.4/dayjs.min.js" integrity="sha512-Ot7ArUEhJDU0cwoBNNnWe487kjL5wAOsIYig8llY/l0P2TUFwgsAHVmrZMHsT8NGo+HwkjTJsNErS6QqIkBxDw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer" defer="defer"></script> -->
    
    <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
    <title>Document</title>
</head>
<body class="bg-light-cs">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header pt-5 pb-2">
            <h3 class="fw-bold text-center">Dashboard</h3>
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
        </ul>
    </nav>
    <!-- Page Content -->
    <div class="flex-fill" id="content">
        <div class="navbar bg-white">
            <a href="#home" class="navbar-brand d-flex align-items-center " id="logo">
                <img src="../img/Group 1.png" alt="" style="max-width: 24px;"> 
                <p class="text-dark fs-6 mb-0 ms-2">
                Alumni Management System
                </p>
            </a>
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
                    <div class="col-9 px-5">
                        <div class="row my-3">
                            <div class="col-3 px-1">
                                <div class="">
                                    <div class="form-group">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="py-4 form-control border-0" name="date_of_event" placeholder="Input Date of Event" id="filter-input" style="border-radius:0.5rem 0 0 0.5rem ;">
                                            <span class="input-group-append ">
                                                <span class="input-group-text border-0" style="cursor: pointer; border-radius: 0 0.5rem 0.5rem 0;" id="filter-input">
                                                    <i class="fa-solid fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 px-1">
                                <div class="">
                                    <input class="py-4 form-control fw-pp rounded-3 border-0" type="text" placeholder="Event Name" aria-label="default input example" name="event_name" id="filter-input">
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-2 px-1">
                                <div class="">
                                    <input type="text" id="start_time" class="form-control" name="start_time" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-2 px-1">
                            <div class="">
                                    <input class="py-4 form-control fw-pp rounded-3 border-0" type="text" placeholder="Name..." aria-label="default input example" name="search_name" id="filter-input">
                                </div>
                            </div>
                            <div class="col-8 px-1">
                            <div class="">
                                    <input class="py-4 form-control fw-pp rounded-3 border-0" type="text" placeholder="Name..." aria-label="default input example" name="search_name" id="filter-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center bg-tup py-4 rounded-4">
                        <div class="col-12">
                            <div class="event-card bg-light px-4 py-3 my-4">
                                <p class="date mb-0 fw-in">28</p>
                                <p class="month mb-5 fw-pp">November</p>
                                <p class="eventt mb-0 fw-pp">Batch 1993-1994 Reunion</p>
                                <p class="time mb-2 fw-pp">1PM - 5:30PM</p>
                                <p class="venue mb-0 fw-pp">TUPV Gymnasium</p>
                            </div>
                        </div>
                    </div>
                </section>
                
            </form>
            
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
<script src="../js/bootstrap.bundle.min.js" defer="defer"></script>
<script src="js/all.min.js"></script>

<script src="js/combodate.js"></script>
<script src="js/moment.js"></script>
<script src="js/dayjs.min.js"></script>


<script src="js/timepicker-bs4.js" defer="defer"></script>



<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
	jQuery('#start_time').timepicker({

	});
});
</script>
</body>
</html>