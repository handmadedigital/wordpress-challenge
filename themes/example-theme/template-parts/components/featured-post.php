<?php 
$the_query = new WP_Query(array(
	'posts_per_page' => 1,
	'post__in' => get_option( 'sticky_posts' )
));
if ($the_query->have_posts()) :
		while ($the_query->have_posts()) : $the_query->the_post(); ?>	
				<div class="hero-banner-wrapper alignfull">
					<div class="hero-banner">
						<div class="hero-banner-content">
							<h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
							<a href="" class="button is-primary">Get Started</a>
							<a href="" class="button is-white">Live Demo</a>
						</div>
						<div class="hero-banner-image" role="img" aria-label="{image description}"  style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
						</div>
					</div>
				</div>
		<?php endwhile;
endif;
