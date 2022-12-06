<?php 
if(isset($_SESSION['message_account'])) :
?>
    
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message_account']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php 
    unset($_SESSION['message_account']);
    endif;
?>