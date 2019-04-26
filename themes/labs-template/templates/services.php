<?php

$services_titre_left = get_theme_mod('services-text-top-left', __('Titre de la section à gauche'));
$services_titre_middle = get_theme_mod('services-text-top-middle', __('Titre de la section en vert'));
$services_titre_right = get_theme_mod('services-text-top-right', __('Titre de la section à droite'));
// $text_column_left = get_theme_mod('about-text-left',__('Texte colonne gauche'));

 ?> 
  <!-- Services section -->
  <?php
    $args = [
      'post_type' => 'services',
      'posts_per_page' => 9,
    ];
    $ninequery = new WP_Query($args);
    ?>

  <div class="services-section spad">

    <div class="container">
      <div class="section-title dark">
        <h2><?= $services_titre_left; ?><span><?= $services_titre_middle; ?></span><?= $services_titre_right; ?></h2>
      </div>
      <div class="row">
        <?php get_template_part('templates/services', 'modal'); ?>
      </div>
      <div class="text-center">
        <a href="<?php echo get_page_link('6'); ?>" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->