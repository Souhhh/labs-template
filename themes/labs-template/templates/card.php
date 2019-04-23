  <!-- About section -->
  <div class="about-section">
    <div class="overlay"></div>
    <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page'=> 3,
      // 'category_name' => 'services-card'

    ];
    $query = new WP_Query($args);
    ?>
    <!-- card section -->
    <div class="card-section">
      <div class="container">
        <div class="row">
          <?php while ($query->have_posts()): $query->the_post(); ?>
          <!-- single card -->
          <div class="col-md-4 col-sm-6">
            <div class="lab-card">
              <div class="icon">
                <i class="flaticon-023-flask"></i>
              </div>
              <h2><?php the_title(); ?>Get in the lab</h2>
              <p><?php the_content(); ?>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
          </div>
          <?php 
          endwhile;
          wp_reset_postdata(); 
          ?>
         
        </div>
      </div>
    </div>
    <!-- card section end-->