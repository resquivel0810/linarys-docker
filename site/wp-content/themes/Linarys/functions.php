<?php
/**
* Linarys
*
*
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/

/**
* Definición de constantes
*
*
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/

define('RUTATEMA', get_stylesheet_directory_uri() );
define('IMAGENES', RUTATEMA . '/images' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
/* GENERADOR DE WORPRESS */
/* Definieidno caracteristicas del tema */
/* https://generatewp.com/theme-support/ */

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1200;

if ( ! function_exists('slan_custom_theme_features') ) {

// Register Theme Features
function slan_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#F1F4F6',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'widget-customizer' );
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'slan', get_template_directory() . '/languages' );

  /*Para añadir un tamaño de imagen personalizado*/
  add_image_size('blog-size-image', 820, 615, true);

}
add_action( 'after_setup_theme', 'slan_custom_theme_features' );

}
/* CARGANDO ESTILOS Y SCRIPTS*/

require_once('includes/scripts-styles.php');
// MENU
require_once('includes/menus.php');
require_once('includes/sidebars.php');

function mytheme_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


?>
