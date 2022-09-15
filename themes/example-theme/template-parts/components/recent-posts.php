<div class="recent-posts-wrapper bg-gray-50 py-24 px-8">	
	<div class="recent-posts">
		<div class="section-title text-center mx-auto mb-12 max-w-screen-md">
			<h1 class="h2">More from the Blog</h1>
			<p class="text-xl text-gray-500 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
		</div>
		<div class="recent-posts-items grid grid-cols-3 gap-4 auto-rows-fr">
			<?php
					
				// The loop
				$the_query = new WP_Query(array(
					'posts_per_page' => 3,
					'post__not_in' => get_option( 'sticky_posts' ) // do not display the sticky posts at all.
				));
				if ($the_query->have_posts()) :
						while ($the_query->have_posts()) : $the_query->the_post(); ?>
								
							<div class="card">
                <a href="<?php the_permalink(); ?>" >
                  <div class="card-image" role="img" aria-label="{image description}" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                  </div>
                </a>
								<div class="card-content">
                  <a href="<?php the_permalink(); ?>" >
                    <h3 class="card-tile"><?php the_title(); ?></h3>
                  </a>
									<div class="card-text"><?php the_excerpt(); ?></div>
								</div>
								<div class="card-author flex items-center mt-8 p-6">
									<img src="<?php echo get_avatar_url(get_the_author_meta( 'user_email')); ?>" alt="" class="w-12 h-12 round-avatar rounded-full overflow-hidden mr-4">
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