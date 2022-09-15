<?php
/**
 * The main template file
 */

get_header();

?>

<div class="blog-posts-wrapper bg-gray-50 py-24 px-8">	
	<div class="blog-posts">
		<div class="blog-posts-items grid grid-cols-3 gap-4 auto-rows-fr">
			
			<?php
					
				// The loop
				$the_query = new WP_Query(array(
					'posts_per_page' => -1
        ));
				if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post(); ?>
								
							<div class="card">
                <a href="<?php the_permalink(); ?>">
                  <div class="card-image" role="img" aria-label="{image description}" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                  </div>
                </a>
								<div class="card-content">
									<h3 class="card-tile"><?php the_title(); ?></h3>
									<div class="card-text"><?php the_excerpt(); ?></div>
								</div>
								<div class="card-author flex items-center mt-8 p-6">
									<img src="<?php echo get_avatar_url(get_the_author_meta( 'user_email')); ?>" alt="author avatar image" class="w-12 h-12 round-avatar rounded-full overflow-hidden mr-4">
									<div class="author-detail">
										<h5 class="text-sm font-semibold"><?php the_author(); ?></h5>
										<p class="text-gray-500">
											<?php the_time('M j, Y'); ?> 
											·
											<?php the_read_time(get_the_content()); ?> 
										</p>										
									</div>
								</div>
							</div>
						<?php endwhile;
				endif;
			?>
		</div>
	</div>
</div>

<?php

get_footer();
