<?php 
if(isset($_SESSION['message_update'])) :
?>
    
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_SESSION['message_update']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
    unset($_SESSION['message_update']);
    endif;
?>