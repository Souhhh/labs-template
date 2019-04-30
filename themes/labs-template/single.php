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
								<h2><?php the_time('j'); ?></h2>
								<h3><?php the_time('F Y'); ?></h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"><?php the_title(); ?></h2>
							<div class="post-meta">
								<a href="">
								<?php echo get_the_author_meta('first_name'); ?>
								<?php echo get_the_author_meta('last_name'); ?>
							</a>
								<a href="">
								<?php
									$posttags = get_the_tags();
									if ($posttags) {
  									foreach($posttags as $tag) {
   									 echo $tag->name . ", " . ' '; 
 										 }
									}
								?>
								</a>
								<a href=""><?php  $num_comments = get_comments_number($post_id); ?> 2 Comments</a>
							</div>
							<p class="post-content">
                                <?php the_content(); ?>
                                </p>
                        </div>
<?php endwhile; ?>
                        
						<!-- Post Author -->
						<div class="author">
						<div class="avatar">
								<img src=" <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>" alt="">
							</div>
							<div class="author-info">
								<h2>
								<?php echo get_the_author_meta('first_name'); ?>
								<?php echo get_the_author_meta('last_name'); ?>, <span>Author</span></h2>
								<p> <?php echo get_the_author_meta('description'); ?>
								</p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2><?php get_comments_number($post_id); ?>Comments (2)</h2>
							<ul class="comment-list">
								<li>
									<div class="commetn-text">
										<h3><?php comment_author(); ?> | <?php comment_date( 'j F, Y', $comment_post_ID ); ?>03 nov, 2017 | Reply</h3>
										<p><?php comment_text( $comment_post_ID ); ?> Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
								<li>
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
								<form class="form-class" method="post" action="<?php echo get_home_url()?>/wp-comments-post.php">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="author" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" placeholder="Message"></textarea>

											<input name="submit" type="submit" id="submit" class="site-btn" value="send">

											<input type="hidden" name="comment_post_ID" value="<?php the_ID();?>" id="comment_post_ID">
											<input type="hidden" name="comment_parent" id="comment_parent" value="0">
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