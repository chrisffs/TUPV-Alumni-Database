<?php 
include "../conn.php";

if(isset($_POST['deletedata'])) {
    $tupv_id = mysqli_real_escape_string($con, $_POST['tupv-id']);
    $query = "DELETE FROM alumni_tbl WHERE tupv_id = '$tupv_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:alumni-list.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>





<div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header bg-tup align-items-center">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Delete</h1>
                            
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form mt-3">   
                    <form action="delete.php" method="POST" class="form-main">
                        <input class="form-control" id="tupv-id-delete" name="tupv-id" type="hidden" aria-label="default input example">
                        <p>Are you sure you want to delete this record?</p>
                </div>
            </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger" name="deletedata">Delete</button>
            </div>
                    </form> 
        </div>
    </div>
</div>