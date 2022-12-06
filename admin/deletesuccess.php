<?php 
if(isset($_SESSION['message_delete'])) :
?>
    
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message_delete']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
    unset($_SESSION['message_delete']);
    endif;
?>