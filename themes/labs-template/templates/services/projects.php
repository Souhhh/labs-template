<?php
$projets_titre_left = get_theme_mod('projets-text-top-left', __('Titre de la section à gauche'));
$projets_titre_middle = get_theme_mod('projets-text-top-middle', __('Titre de la section en vert'));
$projets_titre_right = get_theme_mod('projets-text-top-right', __('Titre de la section à droite'));
?>
 <!-- features section -->
 <div class="team-section spad">
    <div class="overlay"></div>

    <?php
    $args = [
      'post_type' => 'projets',
      'posts_per_page'=> 3,
      'order' => 'ASC',
      // 'category_name' => 'services-card'

    ];
    $firstquery = new WP_Query($args);
    ?>

    <div class="container">
      <div class="section-title">
        <h2><?= $projets_titre_left; ?> <span><?= $projets_titre_middle; ?></span> <?= $projets_titre_right; ?></h2>
      </div>
      
      

      <div class="row">

        

        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">

<?php while ($firstquery->have_posts()): $firstquery->the_post();
          $icon = get_post_meta(get_the_ID() , 'labs_icon_projets' , true);
        ?>

          <div class="icon-box light left">
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
            <div class="icon">
              <i class="<?= $icon ?>"></i>
            </div>
          </div>
          
<?php 
  endwhile;
          wp_reset_postdata(); 
          ?>
        </div>

       
          
          
        <!-- Devices -->
        <div class="col-md-4 col-sm-4 devices">
          <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/device.png" alt="">
          </div>
        </div>

        <?php
        $args = [
          'post_type' => 'projets',
          'posts_per_page'=> 3,
          'order' => 'DESC',
          // 'category_name' => 'services-card'
        ];

        $secondquery = new WP_Query($args);
        ?>

       

        <!-- feature item -->
        <div class="col-md-4 col-sm-4 features">
           <?php while ($secondquery->have_posts()): $secondquery->the_post();
          $icon = get_post_meta(get_the_ID() , 'labs_icon_projets' , true);
           ?>
          <div class="icon-box light">
            <div class="icon">
              <i class="<?= $icon ?>"></i>
            </div>
            <div class="service-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div>
           <?php 
          endwhile;
          wp_reset_postdata(); 
        ?>
        </div>

       

      </div>

        

      <div class="text-center mt100">
        <a href="#last" class="site-btn">Browse</a>
      </div>
    </div>
  </div>
  <!-- features section end-->