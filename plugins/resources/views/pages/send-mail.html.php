<div class="wrap">
    

    <!-- nous utilisons la fonction get_admin_page_title() pour récuperer le titre de la page admin que l'on a défini lors de l'enregistrement -->

    <h1><?= get_admin_page_title(); ?></h1>
    
    <!-- Ici nous ajoutons une partie d'html afin de prendre en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->

    <?php view('partials/notice'); ?>
    
    <p>Ce formulaire vous permet de contacter vos clients pour leur réservation.</p>
    <!-- vous pouvez trouver la doc sur comment bien intégrer votre html à cette adresse
    https://dotorgstyleguide.wordpress.com/outline/forms/
 -->

 <form action="<?= get_admin_url() . '/?action=send-mail'; ?>" method="post" >

 <!-- cette fonction permet une sécurité pour véirfier que le formulaire est authentique -->
 <?php wp_nonce_field('send-mail'); ?>

     <table class="form-table">
         <tr>
             <th>e-mail</th>
             <td><input type="email" name="email" id="email" value="<?= $old['email']; ?>"></td>
         </tr>
         <tr>
             <th>Nom</th>
             <td><input type="text" name="name" id="name" value="<?= $old['name']; ?>"></td>
         </tr>
         <tr>
             <th>Prénom</th>
             <td><input type="text" name="firstname" id="firstname" value="<?= $old['firstname']; ?>"></td>
         </tr>
         <tr>
             <th>Message</th>
             <td><textarea name="message" id="message" cols="30" rows="10" ><?= $old['message']; ?>"</textarea></td>
         </tr>
         <tr>
             <th></th>
             <td><button type="submit" class="button-primary">Envoyer</button></td>
         </tr>
         
        </table>
    </form>

</div>