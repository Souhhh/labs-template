<?php

get_header();

get_template_part('templates/blog/banner');

?>
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Single Post -->
                    <?php while (have_posts()) : the_post(); ?>
					<div class="single-post">
						<div class="post-thumbnail">
                            <?php
                            the_post_thumbnail('medium_large') 
                            ?>
                            
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"><?php the_title(); ?></h2>
							<div class="post-meta">
								<a href="">Loredana Papp</a>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
							</div>
							<p class="post-content">
                                <?php the_content(); ?>
                                </p>
                        </div>
<?php endwhile; ?>
                        
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="<?php echo get_template_directory_uri(); ?>/img/avatar/03.jpg" alt="">
							</div>
							<div class="author-info">
								<h2>Lore Williams, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (2)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="<?php echo get_template_directory_uri(); ?>/img/avatar/01.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
								<li>
									<div class="avatar">
										<img src="<?php echo get_template_directory_uri(); ?>/img/avatar/02.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php

get_template_part('templates/blog/widget');

get_footer();

?>