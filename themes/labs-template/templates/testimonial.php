<?php

$titre_testimonials = get_theme_mod('testimonials-text-top',__(''));
?>
<!-- Testimonial section -->
 <div class="testimonial-section pb100">
    <div class="test-overlay"></div>
     <?php
            $args = [
              'post_type' => 'testimonials',
              'posts_per_page' => 6,
            ];
            $query = new WP_Query($args);
            ?>
    <div class="container">
      <div class="row">

        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2><?= $titre_testimonials; ?></h2>
          </div>
          

          <div class="owl-carousel" id="testimonial-slide">
          
          <?php while ($query->have_posts()): $query->the_post(); ?>

            <!-- single testimonial -->
            <div class="testimonial">
              <span>‘​‌‘​‌</span>
              <p> <?php the_content(); ?></p>
              <div class="client-info">
                <div class="avatar">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="client-name">
                  <h2><?php the_title(); ?></h2>
                  <p>CEO Company</p>
                </div>
              </div>
            </div>
           <?php 
            endwhile; 
            wp_reset_postdata();
            ?> 

          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial section end-->