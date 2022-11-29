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
</head>
<body>
    <?php 
        $sql = "SELECT * FROM gallery_uploads";
        $data = mysqli_query($con, $sql) or die('error');
        if(mysqli_num_rows($data)>0) {
            while($row = mysqli_fetch_assoc($data)) {
                ?>
                <img src="admin/uploads/<?php echo $row['image_name'];?>" width="100">
                <?php
            }//while
           
        }//if
    
    
    ?>
</body>
</html>