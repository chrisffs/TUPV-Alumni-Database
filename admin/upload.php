<?php 

session_start();
include "../conn.php";
include "session.php";

if(isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError= $file['error'];
    $fileType= $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png',);

    if(in_array($fileActualExt, $allowed )) {
        if($fileError === 0 ) {
            if($fileSize < 25000000) {
                $fileNameNew = uniqid('IMG-', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;

                if(move_uploaded_file($fileTmpName, $fileDestination)) {
                    $sql = "INSERT INTO gallery_uploads(image_name) VALUES ('$fileNameNew')";
                    $result = mysqli_query($con, $sql);
                };

                header("location: index.php?uploadsuccess");

            } else {
                echo "Your file is too big";
            }
        } else {
            echo "There was an erro uploading your file";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
        if($result) {
            header('location:upload.php?uploaded=ins');
        }


}
?>