<!-- On vérifie si une notification existe en variable de sesssion -->

<?php if (isset($_SESSION['notice2'])) : ?>
<?php 

$status = $_SESSION['notice2']['status'];
$message = $_SESSION['notice2']['message'];
?>

<div class="notice notice-<?= $status; ?> is-dismissible">
    <p><?= $message; ?> 
</p>

</div>
<?php

// on supprime la notification des variables de sessions afin qu'elle ne s'affiche plus au rechargement de la page

unset($_SESSION['notice2']);
?>
<?php endif; ?>