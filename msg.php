<?php
    if(isset($_SESSION['mensagem']));
    

?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>HEY!</strong> <?= $_SESSION['mensagem'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

</div>

<?php 
unset($_SESSION['mensagem']);

?>