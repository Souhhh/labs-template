 <!-- services card section-->
 <div class="services-card-section spad" id="last">
    <div class="container">
      <div class="row">

      <?php
    $args = [
      'post_type' => 'projets',
      'posts_per_page'=> 3,
      'order' => 'DESC',
      // 'category_name' => 'services-card'

    ];
    $cardquery = new WP_Query($args);
    ?>

    <?php while ($cardquery->have_posts()): $cardquery->the_post();
          
           ?>

        <!-- Single Card -->
        <div class="col-md-4 col-sm-6">
          <div class="sv-card">
            <div class="card-img">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="card-text">
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
    </div>
  </div>
  <!-- services card section end-->