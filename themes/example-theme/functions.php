<?php
/**
 * Example Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Example_Theme
 * @since Example Theme 1.0
 */

/**
 * Theme Support
 */
if ( ! function_exists( 'example_theme_support' ) ) :
	function example_theme_support() {
		add_theme_support( 'menus' );
    register_nav_menus( array( 
			'primary-menu' => 'Primary Menu', 
			'footer' => 'Footer menu' 
		) );
    
    remove_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );
	}
endif;
add_action( 'after_setup_theme', 'example_theme_support' );


/**
 * Theme Styles
 */
if ( ! function_exists( 'example_theme_styles' ) ) :
	function example_theme_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'example-theme-style',
			get_stylesheet_directory_uri() . '/dist/common.css',
			array(),
			$version_string
		);

		wp_enqueue_style( 'example-theme-style' );
	}
  
endif;
add_action( 'wp_enqueue_scripts', 'example_theme_styles' );


/**
 * Load all files from inc/
 */
function load_inc_files() {
  $fileList = [];
  $directoryIterator = new DirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . 'inc');

  foreach ($directoryIterator as $fileInfo) {

    if ($fileInfo->isDot()) {
      continue;
    }

    if ($fileInfo->getExtension() === 'php') {
      $fileList[] = $fileInfo->getRealPath();
    }

  }

  foreach ($fileList as $file) {
    require_once($file);
  }
}
add_action( 'init', 'load_inc_files' );
