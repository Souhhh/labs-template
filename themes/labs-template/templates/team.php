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
      'posts_per_page'=> 2,
      'orderby' => 'rand',
      // 'category_name' => 'services-card'

    ];
    $teamquery = new WP_Query($args);
    //$team2query = new WP_Query($args);
    ?>


<?php $i=0; ?>
    <?php while ($teamquery->have_posts()): $teamquery->the_post();
    $i++;

    $i == 1 ?
   $post1 = [
     'url' => get_the_post_thumbnail_url(),
     'title' => get_the_title(),
     'content' => get_post_meta(get_the_ID(), 'membre_title' , true),
   ]
   :
   $post2 = [
    'url' => get_the_post_thumbnail_url(),
    'title' => get_the_title(),
    'content' => get_post_meta(get_the_ID(), 'membre_title' , true),
   ];

    //$membre = get_post_meta(get_the_ID(), 'membre_title' , true);
    
    endwhile;
    wp_reset_postdata(); 
           ?>
           

        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $post1['url'] ?>" alt="">
            <h2><?= $post1['title'] ?></h2>
            <h3><?= $post1['content'] ?></h3>
          </div>
        </div>
        
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $profil; ?>" alt="">
            <h2><?= $team_name; ?></h2>
            <h3><?= $team_title; ?></h3>
          </div>
        </div>
        <!-- single member -->
        
        <div class="col-sm-4">
          <div class="member">
            <img src="<?= $post2['url']; ?>" alt="">
            <h2><?= $post2['title']; ?></h2>
            <h3><?= $post2['content']; ?></h3>
          </div>
        </div>
       
      </div>
    </div>
  </div>
  <!-- Team Section end-->