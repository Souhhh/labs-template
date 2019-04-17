 <!-- FIN HEADER
	============================================ -->
  <?php 
$center = get_theme_mod('banner-centre');
$image1 = get_theme_mod('banner-image1-background');
$image2 = get_theme_mod('banner-image2-background');
?>
  <!-- Intro Section -->
  <div class="hero-section">
    <div class="hero-content">
      <div class="hero-center">
        <img src="<?= $center; ?>" alt="">
        <p><?php echo get_bloginfo('name'); ?></p>
      </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
      <div class="item  hero-item" data-bg="<?= $image1; ?>"></div>
      <div class="item  hero-item" data-bg="<?= $image2; ?>"></div>
    </div>
  </div>
  <!-- Intro Section -->

  <!-- /img/02.jpg"> -->