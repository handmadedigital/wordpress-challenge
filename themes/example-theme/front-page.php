<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

get_template_part("template-parts/components/featured-post", null,);
get_template_part("template-parts/components/recent-posts", null,);

get_footer();
