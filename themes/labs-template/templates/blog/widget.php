<!-- Sidebar area -->
<style></style>
<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
					<?php //dynamic_sidebar('sidebar-1'); ?>
					<?php get_search_form(); ?>

					</div>

					<!-- Single widget -->
					<div class="widget-item">
						<?php dynamic_sidebar('sidebar-2'); ?>
	
					</div>
				
					<!-- Single widget -->
					<div class="widget-item">
					<?php dynamic_sidebar('sidebar-4'); ?>
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<?php
							$categories = get_tags();
							foreach($categories as $cat)
							{
								echo '<li><a href="' . get_tag_link($cat->term_id).'"> ' . $cat->name . '</a></li>';
							};
							 ?>
						</ul>
					</div>

					<!-- Single widget -->
					<div class="widget-item">
						<?php dynamic_sidebar('sidebar-5'); ?>
					</div>

					<!-- Single widget -->
					<div class="widget-item">
						<?php dynamic_sidebar('sidebar-6'); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->