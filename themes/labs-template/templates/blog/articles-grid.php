<!-- Post item -->
    <div class="col-md-8 col-sm-7 blog-posts">
        
        <?php					
					// pour récupérer tout les articles sur la page
					$args = [
                        'post_type' => 'post',
                        // 'category_name' => 'design'
					];
					

					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post(); 
					
					$post_id = get_the_ID($query);?>

					<div class="post-item">
						
						<div class="post-thumbnail">
							<img src="<?php the_post_thumbnail_url()?>" alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>

						<div >
							<h2 class="post-title">
								<?php the_title(); ?>
							</h2>
							<div class="post-meta">
								<a href="">Loredana Papp</a>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
							</div>
							<p class="post-content">
								<?php wp_reset_query(); ?>
								<?php while (have_posts()): the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; ?>
							</p>
							<a href="<?php the_permalink($post_id); ?>" class="read-more">Read More</a>
						</div>
					</div>						
							
<?php endwhile; ?>	
<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>														
											
				</div>