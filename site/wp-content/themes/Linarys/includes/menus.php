<?php
/**
* Archivo de menu tema
*
*
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/

function slan_menus(){
  register_nav_menus(array(
    'main-menu' => __('Navbar', 'slan'),
    'footer-menu' => __('Footer', 'slan'),
    'ml-menu' => __('Multilanguaje', 'slan')
  ));
}
add_action('init', 'slan_menus');

?>
