<div class="wrap">
    

    <!-- nous utilisons la fonction get_admin_page_title() pour récuperer le titre de la page admin que l'on a défini lors de l'enregistrement -->

    <h1><?= get_admin_page_title(); ?></h1>
    
    <!-- Ici nous ajoutons une partie d'html afin de prendre en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->

    <?php view('partials/notice'); ?>

    <div class="row">

        <!-- <div class="col-sm-6"> -->

    
    <!-- vous pouvez trouver la doc sur comment bien intégrer votre html à cette adresse
    https://dotorgstyleguide.wordpress.com/outline/forms/ -->




        <!-- <table class="form-table">
            
         
        </table> -->

        <!-- </div>  -->

        <div class="col-sm-6">
        <p>Cette liste vous permet de contacter vos clients pour leur réservation.</p>
            <?php foreach ($mails as $mail) : ?>
            <div class="postbox">
                <div class="inside">
                    <strong>client : </strong>
                    <?= $mail->email; ?>

                    <a href="<?php menu_page_url('mail-client'); ?>&action=show&id=<?= $mail->id; ?>" class="btn btn-primary">voir</a>
                    
                </div>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</div>