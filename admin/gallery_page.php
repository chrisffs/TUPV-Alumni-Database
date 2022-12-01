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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit" name="submit">upload</button>
    </form>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file">
            <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="submit" name="submit">Button</button>
        </div>
    </form>

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