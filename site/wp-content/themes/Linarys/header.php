<?php
/**
* Archivo con el header del tema
*
*
*
* @package linarys
* @subpackage linarys
* @since 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name"description" charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1.0">
    <title>
      <?php wp_title('|', true, 'right'); ?> <?php bloginfo('name') ?>
    </title>
     <!-- LINKS DE ESTILO  -->
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- MENU -->
<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<!-- FIXED MENU -->
    <div class="">
      <nav class="nav justify-content-center nav_desk_fixed" id="fixed_desk">
      <?php $i=1 ?>
            <?php  foreach( $menuitems as $item ):
                  $title = $item->title;
                  $link = $item->url;
                  switch($i)
                  {
                    case 1:
                        $class="icon-home";
                        break;
                      case 2:
                        $class="icon-offer";
                        break;
                      case 3:
                        $class="icon-our-work";
                        break;
                      case 4:
                        $class="icon-about_us";
                        break;
                      case 5:
                        $class="icon-contact";
                        break;
                      case 6:
                        $class="icon-blog";
                        break;
                  }
                  if($i==1){
                    echo(' <div id="links_left">');
                  }
                ?>
                <a href="<?php echo $link; ?>" class="nav-sep ">
                  <div class="navbar_circle">
                    <i class="<?php echo $class; ?> navbar_img"></i>
                    <div class="fix_menu ">
                    <?php echo $title; ?>
                    </div>
                  </div>
                </a>
              <?php
              if($i==3):
                ?>
                </div>
                <a href="javascript:void(0);" class="nav-sep" aria-label="Fixed menú" onclick="myFunction()">
                <div class="navbar_logo" id="link_center">
                <img src="<?php echo IMAGENES; ?>/Linarys.png" alt="" class="navbar_img_logo">
                <div class="link_fix_menu">
                </div>
                </div>
                </a>
                <div id="links_right">
                <?php
                endif;
                if($i==6)
                {
                  echo('</div>');
                }
              $i++;
            endforeach;
            ?>
      </nav>

      <nav class="nav_mov">
        <ul class="nav justify-content-center">
            <?php $i=1 ?>
            <?php  foreach( $menuitems as $item ):
                  $title = $item->title;
                  $link = $item->url;
                  switch($i)
                  {
                    case 1:
                        $class="icon-home";
                        break;
                      case 2:
                        $class="icon-offer";
                        break;
                      case 3:
                        $class="icon-our-work";
                        break;
                      case 4:
                        $class="icon-about_us";
                        break;
                      case 5:
                        $class="icon-contact";
                        break;
                      case 6:
                        $class="icon-blog";
                        break;
                  }
                ?>
               <li class="nav-sep">
            <a href="<?php echo $link; ?>">
              <div class="navbar_circle">
                <i class="<?php echo $class; ?> navbar_img"></i>
              </div>
              <div class="nav_movText <?php if(get_the_title() == $title || ($pagename=="" && $title=='Home' )){echo'link_active';} ?>">
                <?php echo $title; ?>
              </div>
            </a>
            </li>
              <?php
              $i++;
            endforeach;
            ?>
        </ul>
      </nav>
    </div>


    <?php
      $menu_name_ml = 'ml-menu';
      $locations_ml = get_nav_menu_locations();
      $menu_ml = wp_get_nav_menu_object( $locations_ml[ $menu_name_ml ] );
      $menuitems_ml = wp_get_nav_menu_items( $menu_ml->term_id, array( 'order' => 'DESC' ) );
    ?>

    <?php
      $currLang = pll_current_language();
    ?>

    <div class="box_ml">
      <i class="icon-ml header_icon_ml icon-ml-desk"></i>
      <?php  foreach( $menuitems_ml as $item_ml ):
        $title_ml = $item_ml->title;
        $link_ml = $item_ml->url;
        $lang_ml = $item_ml->lang;

      ?>
      <a href="<?php echo $link_ml;?>" class="header_text_ml <?php if (strtoupper($currLang) == $title_ml) echo "text_ml_active";?>"><?php echo $title_ml;?></a>
      <?php endforeach; ?>
      <i class="icon-ml header_icon_ml icon-ml-mob"></i>
    </div>
