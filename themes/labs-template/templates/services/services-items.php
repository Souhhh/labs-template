<?php
$services_titre_left = get_theme_mod('services-text-top-left', __('Titre de la section à gauche'));
$services_titre_middle = get_theme_mod('services-text-top-middle', __('Titre de la section en vert'));
$services_titre_right = get_theme_mod('services-text-top-right', __('Titre de la section à droite'));
?>
<!-- services section -->
<div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
        <h2><?= $services_titre_left; ?> <span><?= $services_titre_middle; ?></span> <?= $services_titre_right; ?></h2>
      </div>

      <?php
    $args = [
      'post_type' => 'services',
      'posts_per_page' => 9,
      'order' => 'asc',
      // asc dans l'ordre croissant et desc dans l'ordre décroissant
    ];
    $servicesquery = new WP_Query($args);
    ?>
      <div class="row">
        <?php while ($servicesquery->have_posts()): $servicesquery->the_post(); ?>
        <!-- single service -->
        <div class="col-md-4 col-sm-6">
          <div class="service">
            <div class="icon">
              <i class="flaticon-023-flask"></i>
            </div>
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
      <div class="text-center">
        <a href="<?php echo get_page_link('6'); ?>" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- services section end -->
