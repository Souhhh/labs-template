   <?php
$text_titre_left = get_theme_mod('about-text-top-left', __('Titre de la section à gauche'));
$text_titre_middle = get_theme_mod('about-text-top-middle', __('Titre de la section en vert'));
$text_titre_right = get_theme_mod('about-text-top-right', __('Titre de la section à droite'));
$text_column_left = get_theme_mod('about-text-left',__('Texte colonne gauche'));
$text_column_right = get_theme_mod('about-text-right',__('Texte colonne droite'));
$text_url = get_theme_mod('about-url',__('Url de la video'));
$image_video = get_theme_mod('image-video',__('Upload a image for your video'));

   ?>
   <!-- About contant -->
    <div class="about-contant">
      <div class="container">
        <div class="section-title">
          <h2><?= $text_titre_left; ?>
          <span><?= $text_titre_middle; ?></span>
          <?= $text_titre_right; ?></h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p><?= $text_column_left; ?></p>
          </div>
          <div class="col-md-6">
            <p><?= $text_column_right; ?></p>
          </div>
        </div>
        <div class="text-center mt60">
          <a href="<?php echo get_page_link('7'); ?>" class="site-btn">Browse</a>
        </div>
        <!-- popup video -->
        <div class="intro-video">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <img src="<?= $image_video; ?>" alt="">
              <a href="<?= $text_url; ?>" 
              class="video-popup">
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About section end -->
  <!-- https://www.youtube.com/watch?v=JgHfx2v9zOU -->
