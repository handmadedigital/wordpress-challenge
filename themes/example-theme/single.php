<?php
get_header();

while (have_posts()) : the_post(); ?>
	<article class="prose prose-headings:text-center prose-img:mb-0 prose-img:rounded-md mx-auto py-20 md:px-5">
		<header>
			<span class="block text-pink-600 text-center">INTRODUCING</span>
			<h1 class="h2"><?php the_title(); ?></h1>
		</header>
		<main>
        <div class="max-w-3xl mx-auto rte">
          <?php the_content(); ?>
        </div>
		</main>
	</article>
<?php
endwhile;

wp_reset_postdata(); 
get_template_part("template-parts/components/related-posts", null,);

get_footer();