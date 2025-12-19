<?php
/**
* Archivo de estilos y scripts
*
*
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/

/* REGISTRAR HOJAS DE ESTILO */

function slan_theme_styles(){
  /* REGISTRAR HOJAS DE ESTILO */
  // wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css', '', '4.7.0', 'all');
  wp_register_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', '', '', 'all');
  wp_register_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap', '', '', 'all');
  wp_register_style('lobster', 'https://fonts.googleapis.com/css2?family=Lobster&display=swap', '', '', 'all');
  wp_register_style('main', RUTATEMA . '/css/style.css', '', '', 'all');
  wp_register_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', '', '4.3.1', 'all');
  wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css', '', '', 'all');
  wp_register_style('slickTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '', '', 'all');
  wp_register_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', '', '', 'all');
  wp_register_style('toast', RUTATEMA . '/css/toastr.css', '', '', 'all');
  wp_register_style('fontello', RUTATEMA . '/css/icons/css/fontello.css', '', '', 'all');
  wp_register_style('slan-styles', get_stylesheet_uri(), array('roboto','poppins', 'lobster' ,'main','bootstrap4','animate', 'slickTheme', 'slick', 'toast', 'fontello'), '1.0', 'all');
  /* CARGAR LAS HOJAS DE ESTILO */

  wp_enqueue_style('slan-styles');
}

add_action('wp_enqueue_scripts', 'slan_theme_styles');


/* REGISTRAR SCRIPTS */

function slan_theme_scripts(){
  /* REGISTRAR SCRIPTS */
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', '', '3.5.1', true);
  wp_register_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', '3.5.1', true);
  wp_register_script('bootstrapjs4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', '', '4.1.3', true);
  wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', '', '1.14.3', true);
  wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '1.8.1', true);
  wp_register_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', '', '1.1.2', true);
  wp_register_script('menu', RUTATEMA . '/js/menu.js', array('jquery-min'), '1.0', true);
  wp_register_script('cookies', RUTATEMA . '/js/cookies.js',array('jquery'), '1.0', true);
  wp_register_script('actions', RUTATEMA . '/js/actions.js', array('jquery'), '1.0', true);
  wp_register_script('carousel', RUTATEMA . '/js/carousel.js', array('jquery'), '1.0', true);
  wp_register_script('carousel-2', RUTATEMA . '/js/carousel-2.js', '', '1.0', true);
  wp_register_script('toast', RUTATEMA . '/js/toastr.js', '', '1.0', true);
  wp_register_script('mail', RUTATEMA . '/js/mail.js', '', '1.0', true);
  wp_register_script('slan-scripts','', array('jquery', 'jquery-min','bootstrapjs4', 'popper', 'slick' , 'wow' , 'menu', 'cookies','actions' , 'carousel','carousel-2','toast','mail'), '1.5.1', true);

  /* CARGAR SCRIPTS */
  wp_enqueue_script('slan-scripts');

}
add_action('wp_enqueue_scripts', 'slan_theme_scripts');
