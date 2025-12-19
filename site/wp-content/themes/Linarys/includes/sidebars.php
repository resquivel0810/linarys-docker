<?php

/**
* Side bars dinamicas
*
*
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/

function slan_sidebars(){
  register_sidebar(array(
    'name'          =>  __( 'Barra lateral' ), 'slan',
  	'id'            => "main-slidebar",
  	'description'   => __('Esta es una zona de widgets principal', 'slan'),
  	'class'         => '',
  	'before_widget' => '<div id="%1$s" class="widget %2$s">',
  	'after_widget'  => "</div>\n",
  	'before_title'  => '<h3 class="widget-title">',
  	'after_title'   => "</h3>\n",
  ));

  register_sidebar(array(
    'name'          =>  __( 'Pie de pagina zona centra' ), 'slan',
    'id'            => "footer-widget-centro",
    'description'   => __('Esta es una zona de widgets central en el pie de página', 'slan'),
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => "</h3>\n",
  ));

  register_sidebar(array(
    'name'          =>  __( 'Pie de pagina zona izquiera' ), 'slan',
    'id'            => "footer-widget-izq",
    'description'   => __('Esta es una zona de widgets izquierda en el pie de página', 'slan'),
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => "</h3>\n",
  ));

  register_sidebar(array(
    'name'          =>  __( 'Pie de pagina zona derecha' ), 'slan',
    'id'            => "footer-widget-der",
    'description'   => __('Esta es una zona de widgets derecha en el pie de página', 'slan'),
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => "</h3>\n",
  ));


}
add_action('widgets_init', 'slan_sidebars')

 ?>
