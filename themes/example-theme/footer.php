<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer class="bg-white flex flex-initial flex-col justify-center items-center py-8 px-5">
		<!-- footer menu -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-initial flex-row space-between space-x-8 text-gray-500 ">%3$s</ul>'
			)
		);
		?>
		<!-- boilerplate copyright -->
		<p class="text-gray-400 mt-6">© 2022 Workflow, Inc. All rights reserved.</p>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
