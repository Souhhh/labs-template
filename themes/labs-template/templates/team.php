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
        <div class="col-sm-4">
          <div class="member">
            <img src="<?php echo get_template_directory_uri(); ?>/img/team/1.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Project Manager</h3>
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/team/3.jpg" alt="">
            <h2>Christinne Williams</h2>
            <h3>Digital designer</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section end-->