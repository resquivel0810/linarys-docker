<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<?php  foreach( $menuitems as $item ):
    $title = $item->title;
    $link = $item->url;
    ?>
    <li>
      <a href="<?php echo $link; ?>" class="link <?php if(get_the_title() == $title || ($pagename=="" && $title=='Home' )){echo'link_active';} ?>">
        <?php echo $title; ?>
      </a>
    </li>
<?php endforeach; ?>
