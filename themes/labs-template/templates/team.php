 <?php 
$team_titre_left = get_theme_mod('team-text-top-left', __('Titre de la section à gauche'));
$team_titre_middle = get_theme_mod('team-text-top-middle', __('Titre de la section en vert'));
$team_titre_right = get_theme_mod('team-text-top-right', __('Titre de la section à droite'));
$profil = get_theme_mod('team-image-center');
$team_name = get_theme_mod('team-text-name', __('Name & Lastname'));
$team_title = get_theme_mod('team-text-title', __('Titre de Profession'));
 ?>

 
 <!-- Team Section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?= $team_titre_left; ?> <span><?= $team_titre_middle; ?> </span> <?= $team_titre_right; ?></h2>
      </div>
      <div class="row">
        <!-- single member -->
        <?php
    $args = [
      'post_type' => 'team',
      'posts_per_page'=> 1,
      'orderby' => 'rand',
      // 'category_name' => 'services-card'

    ];
    $teamquery = new WP_Query($args);
    $team2query = new WP_Query($args);
    ?>

    <?php while ($teamquery->have_posts()): $teamquery->the_post();
           ?>

        <div class="col-sm-4">
          <div class="member">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
        <?php 
          endwhile;
          wp_reset_postdata(); 
          ?> 
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $profil; ?>" alt="">
            <h2><?= $team_name; ?></h2>
            <h3><?= $team_title; ?></h3>
          </div>
        </div>
        <!-- single member -->
        <?php while ($team2query->have_posts()): $team2query->the_post();
           ?>
        <div class="col-sm-4">
          <div class="member">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_content(); ?></h3>
          </div>
        </div>
       <?php 
          endwhile;
          wp_reset_postdata(); 
          ?>  
      </div>
    </div>
  </div>
  <!-- Team Section end-->