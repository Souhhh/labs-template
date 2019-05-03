<!-- Post item -->
<div class="col-md-8 col-sm-7 blog-posts">

	<?php
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	// pour récupérer tout les articles sur la page
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3,
		'paged' => $paged,
		// 'category_name' => 'design'
	];


	$query = new WP_Query($args);
	while ($query->have_posts()) : $query->the_post();

		$post_id = get_the_ID($query); ?>

		<div class="post-item">

			<div class="post-thumbnail">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<div class="post-date">
					<h2><?php the_time('j'); ?></h2>
					<h3><?php the_time('F Y'); ?></h3>
				</div>
			</div>

			<div>
				<h2 class="post-title">
					<?php the_title(); ?>
				</h2>
				<div class="post-meta">
					<a href="">
						<?php echo get_the_author_meta('first_name'); ?>
						<?php echo get_the_author_meta('last_name'); ?>
					</a>
					<a href=""><?php $posttags = get_the_tags();
								if ($posttags) {
									foreach ($posttags as $tag) {
										echo $tag->name . ", " . ' ';
									}
								} ?></a>
					<a href=""><?php $num_comments = get_comments_number($post_id); ?>
						2 Comments</a>
				</div>
				<p class="post-content">
					<!-- <?php
							?> -->
					<!-- <?php
							?> -->
					<?php the_content(); ?>
					<!-- <?php
							?> -->
				</p>
				<a href="<?php the_permalink($post_id); ?>" class="read-more">Read More</a>
			</div>
		</div>
	<?php endwhile; ?>


	<!-- Pagination
		<div class="page-pagination">
			<a class="active" href="">01.</a>
			<a href="">02.</a>
			<a href="">03.</a>
			
			</div> -->

	<div class="page-pagination">

		<?php
		$current_page = max(1, get_query_var('paged'));

		echo paginate_links(array(
			'format' => '/page/%#%',
			'current' => $current_page,
			'total' => $query->max_num_pages,
			'prev_text'    => __('« Prev'),
			'next_text'    => __('Next »'),
		));

		wp_reset_postdata();
		?>

	</div>

</div>