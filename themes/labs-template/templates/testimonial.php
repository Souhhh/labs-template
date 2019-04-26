 <!-- Testimonial section -->
 <div class="testimonial-section pb100">
    <div class="test-overlay"></div>
     <?php
            $args = [
              'post_type' => 'post',
              'posts_per_page' => 6,
            ];
            $query = new WP_Query($args);
            ?>
    <div class="container">
      <div class="row">

        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2>What our clients say</h2>
          </div>
          
          <?php while ($query->have_posts()): $query->the_post(); ?>

          <div class="owl-carousel" id="testimonial-slide">
           
            <!-- single testimonial -->
            <div class="testimonial">
              <span>‘​‌‘​‌</span>
              <p> <?php the_content(); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
              <div class="client-info">
                <div class="avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
                </div>
                <div class="client-name">
                  <h2><?php the_title(); ?>Michael Smith</h2>
                  <p>CEO Company</p>
                </div>
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
  <!-- Testimonial section end-->