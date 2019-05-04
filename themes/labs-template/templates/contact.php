 <?php
$contact_titre = get_theme_mod('contact-text-title', __('Titre de contact'));
$contact_subtitle = get_theme_mod('contact-text-subtitle', __('Sous-titre de contact'));
$contact_vert = get_theme_mod('contact-text-titre-vert', __('Titre en vert'));
$contact_info = get_theme_mod('contact-text-info',__('Les informations'));
 ?>
 
 <!-- Contact section -->
 <div class="contact-section spad fix">
    <div class="container">
      <div class="row">
        <!-- contact info -->
        <div class="col-md-5 col-md-offset-1 contact-info col-push">
          <div class="section-title left">
            <h2><?= $contact_titre ?></h2>
          </div>
          <p> <?= $contact_subtitle ?> </p>
          <h3 class="mt60"><?= $contact_vert ?></h3>
          <p class="con-item"> <?php  echo aLaLigne('contact-text-info'); ?></p>
        </div>
        <!-- contact form -->
        <div class="col-md-6 col-pull">
        <?php view('partials/notice'); ?>

          <form class="form-class" id="con_form" action="<?= admin_url('admin-post.php') . '?action=send-mail'; ?>#mail" method="post">
          <input type="hidden" name="action" value="send-mail">
 <!-- cette fonction permet une sécurité pour véirfier que le formulaire est authentique -->
          <?php wp_nonce_field('send-mail'); ?>

            <div class="row">
<!-- Name -->
              <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name" id="name" value="<?= $old['name']; ?>">
              </div>
<!-- email -->
              <div class="col-sm-6">
                <input type="text" name="email"  id="email" value="<?= $old['email']; ?>" placeholder="Your email">
              </div>
<!-- Prénom / subject -->
              <div class="col-sm-12">
                <input type="text" name="firstname" id="firstname" value="<?= $old['firstname']; ?>" placeholder="Subject">
                <!-- message -->
                <textarea name="message" placeholder="Message" id="message" ><?= $old['message']; ?></textarea>
                <button class="site-btn" type="submit">send</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end-->