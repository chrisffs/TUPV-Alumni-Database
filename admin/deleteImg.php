<?php 
include "../conn.php";
    if(isset($_POST['deleteImg'])) {
        $img_id = mysqli_real_escape_string($con, $_POST['img-id']);
        $query = "DELETE FROM gallery_uploads WHERE id = '$img_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            // echo '<script> alert("Data Deleted"); </script>';
            header("Location:gallery.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>
<!-- <div class="modal fade" id="imgDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-tup align-items-center">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Delete</h1>
                                
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                
                                                    
                <p>Are you sure you want to delete this Picture?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="deleteImg" onClick="window.location.reload()">Delete</button>
                
            </div>
        </div>
    </div>
</div> -->

                                    