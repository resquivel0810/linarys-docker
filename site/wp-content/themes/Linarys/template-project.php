<?php
/**
* Template name: project
*
* Plantilla personalizada
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name"description" charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name') ?></title>
     <!-- LINKS DE ESTILO  -->

     <?php wp_head(); ?>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
    <link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_work.css">
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
                <a href="<?php echo $link; ?>" class="nav-sep">
                  <div class="navbar_circle">
                    <i class="<?php echo $class; ?> navbar_img"></i>
                    <div class="fix_menu">
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
              <div class="nav_movText">
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

    <?php $id=$_GET["idpost"];
    $id=pll_get_post( $id, get_locale() );
    ?>
    <?php
      $menu_name_ml = 'ml-menu';
      $locations_ml = get_nav_menu_locations();
      $menu_ml = wp_get_nav_menu_object( $locations_ml[ $menu_name_ml ] );
      $menuitems_ml = wp_get_nav_menu_items( $menu_ml->term_id, array( 'order' => 'DESC' ) );
    ?>

    <div class="box_ml">
      <i class="icon-ml header_icon_ml icon-ml-desk"></i>
      <?php
        $currLang = get_bloginfo('language');
      ?>
      <?php  foreach( $menuitems_ml as $item_ml ):
        $title_ml = $item_ml->title;
        $link_ml = $item_ml->url;
        $lang_ml = $item_ml->lang;
      ?>
      <a href="<?php echo $link_ml."?idpost=".$id;?>" class="header_text_ml <?php if ($currLang == $lang_ml) {echo "text_ml_active";}?>"><?php echo $title_ml;?></a>
      <?php endforeach; ?>
      <i class="icon-ml header_icon_ml icon-ml-mob"></i>
    </div>

<?php
  $post_home = new WP_Query( array(
    'p' => $id,
  ) );
?>

<?php
    $currLang = get_bloginfo('language');
    $link_back = get_field('link_back');
    $text_button_more=get_field('text_button_more');
    $title_about = get_field('title_about');
    $title_needs = get_field('title_needs');
    $title_approach = get_field('title_approach');
    $title_process = get_field('title_process');
    $title_consulting = get_field('title_consulting');
    $title_identity = get_field('title_identity');
    $title_branding = get_field('title_branding');
    $title_web_design= get_field('title_web_design');
    $subtitle_web_design= get_field('subtitle_web_design');
    $title_web_development= get_field('title_web_development');
    $subtitle_web_development= get_field('subtitle_web_development');
    $title_impressions= get_field('title_impressions');

    $title_more_projects = get_field('title_more_projects');
    $text_button_visit = get_field('text_button_visit_');
    $link_back_text = get_field('link_back_text');
?>
</div>

<?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
<section>
  <div class="bg_intro_projects">
    <div class="container relative">
      <!-- NAV -->
      <nav class="nav_desk">
        <ul class="nav justify-content-center">
        <?php include 'menu.php';?>
        </ul>
      </nav>

      <div class="">
        <h1 class="title_project_ow title_project_ow_an">
          <?php the_title(); ?>
        </h1>
        <div class="desktop-hero-image">
          <img src="<?php echo get_field('image_cover_desktop'); ?>" alt="image project" class="img-project img-project_an ">
        </div>
        <div class="tablet-hero-image">
          <img src="<?php echo get_field('image_cover_tablet'); ?>" alt="image project" class="img-project img-project_an ">
        </div>
        <div class="mobile-hero-image">
          <img src="<?php echo get_field('image_cover_mobile'); ?>" alt="image project" class="img-project img-project_an ">
        </div>
        <!-- IMAGES -->
        <object data="<?php echo IMAGENES; ?>/shape-1.svg" type="image/svg+xml" class="shape-intro-1 intro_1">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-2-1.svg" type="image/svg+xml" class="shape-intro-2-1 intro_2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-2-2.svg" type="image/svg+xml" class="shape-intro-2-2 intro_2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-3-1.svg" type="image/svg+xml" class="shape-intro-3-1 intro_3">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-3-2.svg" type="image/svg+xml" class="shape-intro-3-2 intro_3">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-4-1.svg" type="image/svg+xml" class="shape-intro-4-1 intro_4">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-4-2.svg" type="image/svg+xml" class="shape-intro-4-2 intro_4 ">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-4-3.svg" type="image/svg+xml" class="shape-intro-4-3 intro_4 ">Shape</object>
        <object data="<?php echo IMAGENES; ?>/shape-4-4.svg" type="image/svg+xml" class="shape-intro-4-4 intro_4 ">Shape</object>
      </div>
    </div>
  </div>
  <a href="<?php echo $link_back; ?>">
    <div class="box_back">
      <div class="back-initial">
        <img src="<?php echo IMAGENES; ?>/back.svg" alt="back" class="">
      </div>
      <div class="back-hover">
        <?php echo $link_back_text; ?>
      </div>
    </div>
  </a>
  <div class="transition">
    <div class="bg_tags_project">
      <div class="container relative">
        <?php
          $tags = wp_get_post_tags(get_the_ID());
            if ($tags) {
              foreach($tags as $i_tag)
              {
                echo "<div class='box_tag'>".$i_tag->name."</div>";
              }
          }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT THE BRAND -->
<section>
  <div class="bg_about_projects">
    <div class="container relative">
      <div class="">
        <h2 class="centerText mb-25"><?php echo $title_about; ?></h2>
        <div class="text">
          <?php echo get_field('about_the_brand_text'); ?>
        </div>
      </div>
      <!-- IMAGES -->
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b1.svg" class="shape-work-b1-project lava_work_2_1"></object>
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-1-4.svg" class="shape-work-1-4-project lava_work_1_3"></object>
    </div>
  </div>
</section>

<!-- THE NEEDS -->
<section>
  <div class="bg_about_projects">
    <div class="container relative">
      <div class="">
        <h2 class="centerText mb-25"><?php echo $title_needs; ?></h2>
        <div class="text">
          <?php echo get_field('needs_text'); ?>
        </div>
      </div>
      <!-- IMAGES -->
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b1.svg" class="shape-work-b1-project lava_work_2_1"></object>
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-1-4.svg" class="shape-work-1-4-project lava_work_1_3"></object>

    </div>
  </div>
</section>

<!-- APPROACH -->
<section>
  <div class="bg_goals_projects">
    <div class="container relative">
      <div class="line_box_project_goal">
        <div class="box_project_goal">
          <div class="title_white mb-25">
            <?php echo $title_approach; ?>
          </div>
          <div class="text_white">
            <?php echo get_field('approach_text'); ?>
          </div>
        </div>
        <!-- <object type="" data="<?php echo IMAGENES; ?>/shape-2-work-goal.svg" class="shape-2-work-goal"></object>
        <object type="" data="<?php echo IMAGENES; ?>/shape-1-work-goal.svg" class="shape-1-work-goal"></object> -->
      </div>
      <!-- IMAGES -->
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b2.svg" class="shape-work-b2-project lava_work_1_3"></object>
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b6.svg" class="shape-work-b6-project lava_work_1_3"></object>
    </div>
  </div>
</section>

<!-- CONSULTING -->
<?php
$approach_activate = get_field('consulting_activate');
?>
<?php if ($approach_activate == 0): ?>
<section>
  <!-- <div class="bg_transition_purple">
  </div> -->
</section>
<?php endif; ?>

<?php if ($approach_activate == 1): ?>
<section>
  <div class="bg_goals_consulting">
    <div class="container relative">
      <div class="">
        <div class="box_project_goal">
          <div class="title_white mb-25">
            <?php echo $title_consulting; ?>
          </div>
          <div class="text_white">
            <?php echo get_field('consulting_text'); ?>
          </div>
        </div>
        <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-2-work-consulting.svg" class="shape-2-work-goal"></object>
        <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-1-work-consulting.svg" class="shape-1-work-goal"></object>
      </div>
      <!-- IMAGES -->
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b2.svg" class="shape-work-b2-project lava_work_1_3"></object>
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b6.svg" class="shape-work-b6-project lava_work_1_3"></object>
    </div>
  </div>
</section>

<section>
  <div class="bg_transition_purple">
  </div>
</section>

<?php endif; ?>



<!-- CORPORATE IDENTITY -->
<?php
$identity_activate = get_field('identity_activate');
?>
<?php if ($identity_activate == 1): ?>
<section>
  <div class="bg_corporateIdentity">
    <div class="container relative card_transform">
      <h2 class="centerText mb-25"><?php echo $title_identity; ?></h2>
      <?php
        $item = get_field('identity_group');
        $size=count($item);
      ?>
      <div class="">
        <?php
          for($i=0;$i<$size;$i++):
        ?>
        <div class="mb-80">
          <img src="<?php echo $item ['identity_group_'.($i+1)]['identity_img']; ?>" alt="" class="img_ci">
          <div class="text_ci">
            <?php
              echo $item ['identity_group_'.($i+1)]['identity_text'];
            ?>
          </div>
        </div>
        <?php
          endfor;
        ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<!-- BRANDING -->
<?php
$branding_activate = get_field('branding_activate');
?>
<?php if ($branding_activate == 1): ?>
<section>
  <div class="bg_branding">
    <div class="container relative card_transform">
      <h2 class="centerText mb-25"><?php echo $title_branding; ?></h2>
      <?php
        $item = get_field('branding_group');
        $size=count($item);
        $i = 0;
      ?>
      <div class="">
        <div class="row">
          <?php
            for($i=0;$i<$size;$i++):
          ?>
          <div class="d-none d-lg-block col-lg-4 container_branding">
            <a href="#modalBranding<?php echo ($i+1); ?>" data-toggle="modal" role="button"  aria-controls="modalBranding<?php echo ($i+1); ?>" >
              <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding']; ?>" alt="" class="container_branding img_branding">
              <div class="container_branding box_hover_branding"></div>
            </a>
          </div>
<div class="modal-branding fade bd-modal-lg" id="modalBranding<?php echo ($i+1); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content-branding">
      <div class="">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-lg-6 center_content_align">
              <div id='carr<?php echo ($i+1); ?>' class="single-item carousel-projects-branding">
                <?php if($item ['branding_group_'.($i+1)]['img_branding_1']!=""): ?>
                <div>
                  <img  src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_1']; ?>" alt="" class="img-modal-branding">
                </div>
                <?php endif; ?>
                <?php if($item ['branding_group_'.($i+1)]['img_branding_2']!=""): ?>
                <div>
                  <img  src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_2']; ?>" alt="" class="img-modal-branding">
                </div>
                <?php endif; ?>
                <?php if($item ['branding_group_'.($i+1)]['img_branding_3']!=""): ?>
                <div>
                  <img  src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_3']; ?>" alt="" class="img-modal-branding">
                </div>
                <?php endif; ?>
                <?php if($item ['branding_group_'.($i+1)]['img_branding_4']!=""): ?>
                <div>
                  <img  src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_4']; ?>" alt="" class="img-modal-branding">
                </div>
                <?php endif; ?>
                <?php if($item ['branding_group_'.($i+1)]['img_branding_5']!=""): ?>
                <div>
                  <img  src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_5']; ?>" alt="" class="img-modal-branding">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="container-modal-branding">
                <h3 class="" ><?php echo $item ['branding_group_'.($i+1)]['title_branding']; ?></h3>
                <div class="text_ci"><?php echo $item ['branding_group_'.($i+1)]['text_branding']; ?></div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
          <?php
            endfor;
          ?>

          <?php
            for($i=0;$i<$size;$i++):
          ?>
          <div class="col-12 d-md-block d-lg-none container_branding">
            <div class="" id="accordion">
              <div class="card">
                <div class="single-item carousel-projects-branding-mov">
                  <?php if($item['branding_group_'.($i+1)]['img_branding_1']!=""):?>
                    <div class="">
                      <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_1']; ?>" alt="" class="container_branding img_branding">
                    </div>
                  <?php endif; ?>
                  <?php if($item['branding_group_'.($i+1)]['img_branding_2']!=""):?>
                    <div class="">
                      <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_2']; ?>" alt="" class="container_branding img_branding">
                    </div>
                  <?php endif; ?>
                  <?php if($item['branding_group_'.($i+1)]['img_branding_3']!=""):?>
                    <div class="">
                      <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_3']; ?>" alt="" class="container_branding img_branding">
                    </div>
                  <?php endif; ?>
                  <?php if($item['branding_group_'.($i+1)]['img_branding_4']!=""):?>
                    <div class="">
                      <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_4']; ?>" alt="" class="container_branding img_branding">
                    </div>
                  <?php endif; ?>
                  <?php if($item['branding_group_'.($i+1)]['img_branding_5']!=""):?>
                    <div class="">
                      <img src="<?php echo $item ['branding_group_'.($i+1)]['img_branding_5']; ?>" alt="" class="container_branding img_branding">
                    </div>
                  <?php endif; ?>

                </div>

                <div id="collapse<?php echo $i+1; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="text">
                      <?php echo $item ['branding_group_'.($i+1)]['text_branding']; ?>
                    </div>
                  </div>
                </div>
                <div class="card-header">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i+1; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i+1; ?>">
                    <img src="<?php echo IMAGENES; ?>/icon-arrow-circle.svg" alt="" class="" id="buttonArrow">
                  </button>
                </div>
              </div>
            </div>
          </div>
          <?php
            endfor;
          ?>
        </div>

      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- MODAL BRANDING -->


<!-- THE PROCESS -->
<?php
$process_activate = get_field('process_activate');
?>
<?php if ($process_activate == 1): ?>
<section>
  <div class="bg_process_projects">
    <div class="container relative card_transform">
      <h2 class="centerText mb-25"><?php echo $title_process; ?></h2>
      <!-- <h3 class="centerText mb-25"><?php echo $subtitle_web_design; ?></h3> -->

      <?php
        $item = get_field('process_gallery_');
        $size=count($item);
      ?>
      <div class="slider-for carousel-projects-process">
        <?php
          for($i=0;$i<$size;$i++):
        ?>
        <div class="container-process">
          <img src="<?php echo $item ['process_group_'.($i+1)]['process_img']; ?>" alt="">
          <div class="box_text">
            <?php
              echo $item ['process_group_'.($i+1)]['process_text'];
            ?>
          </div>
        </div>
        <?php
          endfor;
        ?>
      </div>

      <div class="slider-nav-size hide-mobile">
        <div class="slider-nav carousel-projects-process ">
          <?php
            for($i=0;$i<$size;$i++):
          ?>
          <div class="carousel-slick-slide">
            <img src="<?php echo $item ['process_group_'.($i+1)]['process_img']; ?>" alt="">
          </div>
          <?php
            endfor;
          ?>
        </div>
      </div>


      <!-- IMAGES -->
      <object type="" data="<?php echo IMAGENES; ?>/shape-work-b5.svg" class="shape-work-b5-project lava_work_2_1"></object>
      <!-- <img src="<?php echo IMAGENES; ?>/shape-work-b3.svg" alt="" class="shape-work-b3-project lava_work_2_1"> -->
    </div>
  </div>
</section>
<?php endif; ?>

<!-- WEB DEV -->
<?php
$web_dev_activate = get_field('web_dev_activate');
?>
<?php if ($web_dev_activate == 1): ?>
<section>
  <div class="bg_webdev">
    <div class="container relative card_transform">
      <h2 class="centerText mb-25"><?php echo $title_web_development; ?></h2>
      <h3 class="centerText mb-25"><?php echo $subtitle_web_development; ?></h3>
      <?php
        $item = get_field('web_dev_group');
      ?>
      <div class="">
        <?php if ($item ['web_dev_group_architecture']['activate'] == 1): ?>
        <div class="row">
          <div class="col-2 col-lg-3">
            <i class="bubble_webdev">
              <object type="" data="<?php echo IMAGENES; ?>/img-projects/icon-arq.svg" class="icon"></object>
            </i>
          </div>
          <div class="col-10 col-lg-9">
            <h3>
              <?php
                echo $item ['web_dev_group_architecture']['title'];
              ?>
            </h3>
            <div class="text">
              <?php
                echo $item ['web_dev_group_architecture']['text'];
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['web_dev_group_data_base']['activate'] == 1): ?>
        <div class="row">
          <div class="col-2 col-lg-3 ">
            <i class="bubble_webdev">
              <object type="" data="<?php echo IMAGENES; ?>/img-projects/icon-db.svg" class="icon"></object>
            </i>
          </div>
          <div class="col-10 col-lg-9">
            <h3>
              <?php
                echo $item ['web_dev_group_data_base']['title'];
              ?>
            </h3>
            <div class="text">
              <?php
                echo $item ['web_dev_group_data_base']['text'];
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['web_dev_group_front-end']['activate'] == 1): ?>
        <div class="row">
          <div class="col-2 col-lg-3 ">
            <i class="bubble_webdev">
              <object type="" data="<?php echo IMAGENES; ?>/img-projects/icon-fe.svg" class="icon"></object>
            </i>
          </div>
          <div class="col-10 col-lg-9">
            <h3>
              <?php
                echo $item ['web_dev_group_front-end']['title'];
              ?>
            </h3>
            <div class="text">
              <?php
                echo $item ['web_dev_group_front-end']['text'];
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['web_dev_group_back-end']['activate'] == 1): ?>
        <div class="row">
          <div class="col-2 col-lg-3 ">
            <i class="bubble_webdev">
              <object type="" data="<?php echo IMAGENES; ?>/img-projects/icon-be.svg" class="icon"></object>
            </i>
          </div>
          <div class="col-10 col-lg-9">
            <h3>
              <?php
                echo $item ['web_dev_group_back-end']['title'];
              ?>
            </h3>
            <div class="text">
              <?php
                echo $item ['web_dev_group_back-end']['text'];
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['web_dev_group_pwa']['activate'] == 1): ?>
        <div class="row">
          <div class="col-2 col-lg-3 ">
            <i class="bubble_webdev">
              <object type="" data="<?php echo IMAGENES; ?>/img-projects/icon-pwa.svg" class="icon"></object>
            </i>
          </div>
          <div class="col-10 col-lg-9">
            <h3>
              <?php
                echo $item ['web_dev_group_pwa']['title'];
              ?>
            </h3>
            <div class="text">
              <?php
                echo $item ['web_dev_group_pwa']['text'];
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>

<!-- IMPRESSIONS -->
<section>
  <div class="bg_des_dev_projects">
    <div class="container relative card_transform">
      <h2 class="centerText mb-25"><?php echo $title_impressions; ?></h2>
      <div class="text">
        <?php echo get_field('des_and_dev_text'); ?>
      </div>

      <!-- TEXT AND IMAGES -->
      <?php
        $item = get_field('impressions_group');
        $size=count($item);
      ?>
      <div class="">
        <div class="row mtb-100">
          <div class="col-md-4 no-padd center_content_align_end hide-mobile">
            <div class="text-process">
              <?php
                echo $item ['impressions_group_1']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-5.svg" class="shape-process-left-1"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-1.svg" alt="" class="shape-process-left-1"> -->
          </div>
          <div class="col-12 col-lg-8 no-padd">
            <?php if($item ['impressions_group_1']['video']): ?>
                <div class="img-process-left"><video src="<?php echo $item ['impressions_group_1']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_1']['img_imp']; ?>"  alt="" class="img-process-left">
            <?php endif; ?>
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_1']['text_imp'];
              ?>
            </div>
          </div>
        </div>
        <div class="row mtb-100">
          <div class="col-12 col-lg-8 no-padd">
          <?php if($item ['impressions_group_2']['video']): ?>
                <div class="img-process-right"><video src="<?php echo $item ['impressions_group_2']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_2']['img_imp']; ?>"  alt="" class="img-process-right">
            <?php endif; ?>
          </div>
          <div class="col-md-4 no-padd center_content_align_start hide-mobile">
            <div class="text-process">
              <?php
                echo $item ['impressions_group_2']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-2.svg" class="shape-process-right-1"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-2.svg" alt="" class="shape-process-right-1"> -->
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_2']['text_imp'];
              ?>
            </div>
          </div>
        </div>
        <div class="row mtb-100">
          <div class="col-md-4 no-padd center_content_align_end hide-mobile">

            <div class="text-process">
              <?php
                echo $item ['impressions_group_3']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-6.svg" class="shape-process-left-2"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-3.svg" alt="" class="shape-process-left-2"> -->
          </div>
          <div class="col-12 col-lg-8 no-padd">
            <?php if($item ['impressions_group_3']['video']): ?>
                <div class="img-process-left"><video src="<?php echo $item ['impressions_group_3']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_3']['img_imp']; ?>"  alt="" class="img-process-left">
            <?php endif; ?>
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_3']['text_imp'];
              ?>
            </div>
          </div>
        </div>
        <div class="row mtb-100">
          <div class="col-12 col-lg-8 no-padd">
            <?php if($item ['impressions_group_4']['video']): ?>
                <div class="img-process-right"><video src="<?php echo $item ['impressions_group_4']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_4']['img_imp']; ?>"  alt="" class="img-process-right">
            <?php endif; ?>
          </div>
          <div class="col-md-4 no-padd center_content_align_start hide-mobile">
            <div class="text-process">
              <?php
                echo $item ['impressions_group_4']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-4.svg" class="shape-process-right-2"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-4.svg" alt="" class="shape-process-right-2"> -->
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_4']['text_imp'];
              ?>
            </div>
          </div>
        </div>
        <div class="row mtb-100">
          <div class="col-md-4 no-padd center_content_align_end hide-mobile">

            <div class="text-process">
              <?php
                echo $item ['impressions_group_5']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-5.svg" class="shape-process-left-3"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-5.svg" alt="" class="shape-process-left-3"> -->
          </div>
          <div class="col-12 col-lg-8 no-padd">
            <?php if($item ['impressions_group_5']['video']): ?>
                <div class="img-process-left"><video src="<?php echo $item ['impressions_group_5']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_5']['img_imp']; ?>"  alt="" class="img-process-left">
            <?php endif; ?>
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_5']['text_imp'];
              ?>
            </div>
          </div>
        </div>
        <div class="row mtb-100">
            <div class="col-12 col-lg-8 no-padd">
            <?php if($item ['impressions_group_6']['video']): ?>
                <div class="img-process-right"><video src="<?php echo $item ['impressions_group_6']['video_imp']; ?>" controls></video></div>
            <?php else: ?>
                <img src="<?php echo $item ['impressions_group_6']['img_imp']; ?>"  alt="" class="img-process-right">
            <?php endif; ?>
            </div>
          <div class="col-md-4 no-padd center_content_align_start hide-mobile">
            <div class="text-process">
              <?php
                echo $item ['impressions_group_6']['text_imp'];
              ?>
            </div>
            <object type="" data="<?php echo IMAGENES; ?>/img-projects/shape-process-6.svg" class="shape-process-right-3"></object>
            <!-- <img src="<?php echo IMAGENES; ?>/img-projects/shape-process-6.svg" alt="" class="shape-process-right-3"> -->
          </div>
          <div class="d-md-block d-lg-none">
            <div class="text mt-20">
              <?php
                echo $item ['impressions_group_6']['text_imp'];
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php
      $button_link_active = get_field('button_link_active');
      $link_website = get_field('link');
      ?>
      <?php if ($button_link_active == 1): ?>
        <div class="center_btn">
          <a target="_blank" href="<?php echo $link_website; ?>"  class="button "><?php echo $text_button_visit; ?></a>
        </div>
      <?php endif; ?>

      <?php
        $item = get_field('group_more_projects');

        $size=count($item);
      ?>

      <div class="row">
        <?php if ($item ['active_1'] == 1): ?>
        <div class="col-12 col-sm center-grid">
          <div class="">
            <img src="<?php echo $item ['img_project_1']; ?>" alt="" class="img-projects">
          </div>
          <div class="">
            <a target="_blank" href="<?php echo $item ['button_website_1']; ?>"  class="button "><?php echo $text_button_visit; ?></a>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['active_2'] == 1): ?>
        <div class="col-12 col-sm center-grid">
          <div class="">
            <img src="<?php echo $item ['img_project_2']; ?>" alt="" class="img-projects">
          </div>
          <div class="">
            <a target="_blank" href="<?php echo $item ['button_website_2']; ?>"  class="button "><?php echo $text_button_visit; ?></a>
          </div>
        </div>
        <?php endif; ?>
        <?php if ($item ['active_3'] == 1): ?>
        <div class="col-12 col-sm center-grid">
          <div class="">
            <img src="<?php echo $item ['img_project_3']; ?>" alt="" class="img-projects">
          </div>
          <div class="">
            <a target="_blank" href="<?php echo $item ['button_website_3']; ?>"  class="button "><?php echo $text_button_visit; ?></a>
          </div>
        </div>
        <?php endif; ?>
      </div>


    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php
        $item1 = get_field('branding_group');
        $size1=count($item1);
        $k = 0;
?>
<!-- MORE PROJECTS -->
<section>
  <div class="">
    <div class="container relative">
      <h2 class="centerText"><?php echo $title_more_projects; ?></h2>
      <div class="container_morePojects">
        <div class="row">
            <?php
            $text=get_the_content();
            $post_projects = new WP_Query( array(
              'post_type' => 'post',
              'category_name'  => 'Project',
              'posts_per_page' => '3',
              'order' => 'ASC',
            ) );
            $i=0;
            ?>
            <?php if (  $post_projects -> have_posts() ): while(  $post_projects -> have_posts() ):  $post_projects -> the_post(); ?>
            <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" role="button" aria-expanded="false" class="subtitle_purple" data-target="#collapseExample" data-content="<?php echo get_the_content(); ?>"  data-date="<?php the_field('type'); ?>-<?php echo get_the_date( " F Y", get_the_ID());?>" data-title="<?php echo get_the_title()?>" data-image="<?php if ( has_post_thumbnail() ){echo $banner_article[0];}else{echo IMAGENES."/photo_2.png";} ?>">
          <div class="col-6 col-sm-4">
            <div class="container_projects">
              <?php if ( has_post_thumbnail() ): ?>
              <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
              <img src="<?php echo $banner_article[0];?>" alt="" class="more_projects more_img">
              <?php else: ?>
                <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="more_projects more_img">
              <?php endif; ?>
              <div class="more_projects more_box">
                <div class="text_whiteHide">
                  <?php the_excerpt(); ?>

                </div>
              </div>
            </div>
            <a class="subtitle_purple"  href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" role="button" aria-expanded="false"  class="subtitle_purple" data-target="#collapseExample" data-content="<?php echo get_the_content(); ?>"   data-date="<?php the_field('type'); ?>-<?php echo get_the_date( " F Y", get_the_ID());?>" data-title="<?php echo get_the_title()?>" data-image="<?php if ( has_post_thumbnail() ){echo $banner_article[0];}else{echo IMAGENES."/photo_2.png";} ?>">
              <?php the_title_attribute(); ?>
            </a>
          </div>
              </a>
          <?php endwhile; endif; ?>
          <div class="col-md-12">
          <br>
          <br>
          <div class="center_btn">
            <a href="<?php if($currLang=="en-GB"){echo "/en";}else{echo "";} ?>/search " class="button "><?php echo $text_button_more; ?></a>
          </div>
          </div>

        </div>
        <div class="row">

        </div>
      </div>
    </div>
  </div>
</section>


<!--
<?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4><?php the_content(); ?></h4>
<?php if ( has_post_thumbnail() ): ?>
<?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
    <img src="<?php echo $banner_article[0];?>" alt="" class="">
<?php else: ?>
    <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="">
<?php endif; ?>
<?php endwhile; endif; ?> -->





<?php get_footer(); ?>

<script>
    <?php for($i=0;$i<$size1;$i++): ?>
        $('#modalBranding<?php echo ($i+1); ?>').on('shown.bs.modal', function () {
            console.log("fun<?php echo ($i+1); ?>");
            $('#carr<?php echo ($i+1); ?>> .slick-list> .slick-track').css('width','355px');
            $('#carr<?php echo ($i+1); ?>> .slick-list> .slick-track> .slick-active').css('width','355px');
            $('#carr<?php echo ($i+1); ?>').slick('slickPrev');
            $('#carr<?php echo ($i+1); ?>').slick('slickNext');
        });
    <?php endfor; ?>
</script>
<script type="text/javascript">
    $('.slider-for').slick({
     asNavFor: '.slider-nav',
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: true,
     fade: true,
     infinite: true,
     initialSlide: 0,
     responsive:[
       {
         breakpoint: 992,
         settings: {
           dots: true,
         }
       },
       {
         breakpoint: 576,
         settings: {
           dots: true,
           arrows: false,
         }
       },
     ]
    });
    $('.slider-nav').slick({
     asNavFor: '.slider-for',
     infinite: true,
     slidesToShow: 5,
     slidesToScroll: 1,
     dots: false,
     infinite: true,

     focusOnSelect: true,
     arrows: false,
     initialSlide: 0,

     centerMode: false,
     centerPadding: '12%',
    });

</script>
<script type="text/javascript">
    $('.single-item').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      infinite: true,
    });
</script>

<script type="text/javascript">
var buttonArrow = document.getElementById("buttonArrow");
$("#collapse1").on("show.bs.collapse", function(){
  buttonArrow.style.transform = "rotate(180deg)";
});
$("#collapse1").on("hide.bs.collapse", function(){
  buttonArrow.style.transform = "rotate(0deg)";
});
</script>
