<?php
/**
* Template name: Blog Post
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
</head>
<body <?php body_class(); ?>>
<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
  $menu_name2 = 'footer-menu';
  $locations2 = get_nav_menu_locations();
  $menu2 = wp_get_nav_menu_object( $locations2[ $menu_name2 ] );
  $menuitems2 = wp_get_nav_menu_items( $menu2->term_id, array( 'order' => 'DESC' ) );
?>
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_blog.css">
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_blog_post.css">



  <!-- HEADER -->
  <section>
    <div class="background_post">
      <div class="container relative">
        <div class="icon_box">
          <a href="https://linarys.com/blog/" >
            <img src="<?php echo IMAGENES; ?>/Linarys.png" alt="Logo Linarys" class="img_linarysLogo">
          </a>
        </div>

        <div class="box_search">
          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/post-search/' ) ); ?>">
            <input type="text" class="form_input_1" name="x" id="x" placeholder="<?php esc_attr_e( 'Search', 'Linarys' ); ?>" />
            <button type="submit" class="s_button zoom">
              <i class="icon-search social_media"></i>
            </button>
          </form>
        </div>
        <!-- TAGS -->
        <nav>
          <ul class="nav nav_space justify-content-center">
          <?php $post_home = new WP_Query( array(
              'post_type' => 'post',
              'name' => 'tagsBlog'
            ) );
            ?>
            <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
            <?php $tags = wp_get_post_tags(get_the_ID()); ?>
            <?php foreach ( $tags as $tag ): ?>
            <?php
            $tag_link = get_tag_link( $tag->term_id );
            ?>
            <li>
              <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="button_cate"><?php echo $tag->name; ?></a>
            </li>
            <?php endforeach; ?>
            <?php endwhile; endif; ?>
          </ul>
        </nav>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="box_post">
          <div class="row">
            <div class="col-12">
              <div class="box_img_blog">
                <?php
                     if ( has_post_thumbnail() ) {
                         the_post_thumbnail( 'full', array( 'class'  => 'img_blog_1' ) );
                     }
                 ?>
              </div>
            </div>

            <div class="col-12">
              <div class="">

                  <div class="">
                    <h2><?php the_title_attribute(); ?></h2>
                    <div class="date_1"><?php the_date(); ?></div>
                  </div>

              </div>
            </div>
          </div>
          <div class="row box_post_mt">
            <div class="col-md-12">
              <div class="text_1"><?php the_content(); ?></div>
            </div>
          </div>

          <div class="row box_post_footer_mt">
            <div class="col-md-6">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-4 box_img_blog">
                    <?php echo get_avatar( get_the_author_meta('ID'), '', '', 'avatar', array('class' => 'img_profile') ); ?>
                </div>
                <div class="col-8 col-sm-8 col-md-8">
                    <div class="author_1"><?php the_author(); ?></div>
                    <div class="description_1"><?php the_author_description();?></div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <?php endwhile; endif; ?>

        <img src="<?php echo IMAGENES; ?>/C.svg" alt="" class="shape-post-1 lava_post_1">
        <img src="<?php echo IMAGENES; ?>/D.svg" alt="" class="shape-post-2 lava_post_2">
        <img src="<?php echo IMAGENES; ?>/E.svg" alt="" class="shape-post-3 lava_post_3">
        <img src="<?php echo IMAGENES; ?>/B.svg" alt="" class="shape-post-4 lava_post_4">
        <img src="<?php echo IMAGENES; ?>/F.svg" alt="" class="shape-post-5 lava_post_5">
        <img src="<?php echo IMAGENES; ?>/A.svg" alt="" class="shape-post-6 lava_post_6">
        <img src="<?php echo IMAGENES; ?>/G.svg" alt="" class="shape-post-7 lava_post_7">
      </div>
    </div>
    <div class="transition"></div>
  </section>

  <section>
    <div class="bg_comments">
      <div class="container relative">
        <h2 class="centerText">Recent comments</h2>
        <div class="card_comment">
          <!-- SHOW COMMENTS -->
          <?php
            $postID = get_queried_object_id();
            $args = array(
                'post_id' => $postID ,
                'status'=>'approve',
            );
            $comments_query = new WP_Comment_Query;
            $comments = $comments_query->query( $args );
          ?>

          <div class="comment_box">
            <?php
              if ( !empty( $comments ) ):
                foreach ( $comments as $comment ):
            ?>
            <div class="comment_mb">
              <div class="name_1">
                <?php echo $comment->comment_author; ?>
              </div>
              <div class="comment_text">
                <?php echo $comment->comment_content; ?>
              </div>
            </div>
            <?php  endforeach;?>
            <?php else: ?>
              <h3 class="centerText">No comments found</h3>
            <?php endif;?>
          </div>


          <hr>

          <!-- COMMENTS -->
          <?php
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
          ?>
          <?php
            $fields =  array(
                'author' =>'<input id="author" name="author" type="text" value="" class="input_comment" placeholder="Name" ' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                'email'  =>'<input id="email" name="email" type="text" value="" class="input_comment" placeholder="Email" ' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                'submit' =>'<input name="submit" type="submit" id="submit" class="button" value="Share" >',
            );
            $comments_args = array(
                'fields' =>  $fields,
                'title_reply'=>'Add a comment',
                'title_reply'=>'Please give us your valuable comment',
                'comment_field' =>'<p class="comment-form-comment"><textarea class="text_area_comment" id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" placeholder="Comment"></textarea></p>',
            );
           ?>
           <?php comment_form($comments_args); ?>



        </div>
      </div>
    </div>
  </section>


  <!-- RELATED NEWS -->
  <section>
    <div class="bg_carrousel">
      <div class="container relative centerPosition">
        <h2 class="centerText">RELATED NEWS</h2>
        <div class="center carousel-2">
          <?php
          $text=get_the_content();
          $post_home = new WP_Query( array(
            'post_type' => 'post',
            'offset' => '0',
            'category_name'  => 'Blog',
            'posts_per_page' => '3',
            'order' => 'ASC',
          ) );
          $i=0;
          ?>
          <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
          <div>
            <div class="card_square">
              <?php
                   if ( has_post_thumbnail() ) {
                       the_post_thumbnail( 'full', array( 'class'  => 'image' ) );
                   }
               ?>
              <div class="title_news">
                <?php the_title_attribute(); ?>
              </div>
              <div class="date">
                <?php the_date(); ?>
              </div>
              <div class="text">
                <?php the_excerpt(''); ?>
              </div>
              <?php echo '<a href="' . get_permalink($recent["ID"]) . '" class="link_post ">See more ></a>'; ?>
            </div>
          </div>
          <?php $i++; ?>
          <?php endwhile; endif; ?>
        </div>

        <img src="<?php echo IMAGENES; ?>/Triangle1.svg" alt="" class="shape-post-8 lava_post_8">
        <img src="<?php echo IMAGENES; ?>/Triangle2.svg" alt="" class="shape-post-9 lava_post_9">
        <img src="<?php echo IMAGENES; ?>/Elipse1.svg" alt="" class="shape-post-10 lava_post_10">
        <img src="<?php echo IMAGENES; ?>/Elipse2.svg" alt="" class="shape-post-11 lava_post_11">
      </div>
    </div>
  </section>

  <!-- PROJECT-->
  <section>
    <div class="bg_projectSection">
      <div class="container relative">
        <div class="project element_hide centerPosition">
          <button id="hide" class="button_blog rock_button" >Subscribe!</button>
        </div>
      </div>
    </div>
  </section>

  <?php $post_footer = new WP_Query( array(
      'post_type' => 'post',
      'category_name'  => 'Footer',
      'posts_per_page' => '1',
      'order' => 'DESC',
    ) );
  ?>
  <!-- FOOTER -->
  <?php if (  $post_footer -> have_posts() ): while(  $post_footer -> have_posts() ):  $post_footer -> the_post(); ?>

  <!-- FOOTER -->
  <footer>
    <div class="footer">
      <div class="container relative">
        <div class="row zIndex-2">
          <div class="col-6 col-sm-6 col-md-4 col-lg-4">
            <ul>
              <li class="footer_title"><?php the_field('subtitle_1_f');?></li>
              <?php  foreach( $menuitems2 as $item ):
                $title = $item->title;
                $link = $item->url;
              ?>
              <li><a href="<?php echo $link;?>" class="footer_text"><?php echo $title;?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="d-none d-md-block col-md-4 col-lg-4">
            <div class="">
              <div class="footer_title centerText">
                <?php the_field('subtitle_2_f');?>
              </div>
              <div class="social_container">
                <div class="social_circle">
                  <a href="https://www.linkedin.com/company/linarys-gmbh?trk=public_profile_experience-item_profile-section-card_subtitle-click" target="_blank" rel="noreferrer" aria-label="Visit our LinkedIn profile">
                    <i class="icon-linkedin social_media"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-6 col-md-4 col-lg-4">
            <ul>
              <li class="footer_title"><?php the_field('subtitle_3_f');?></li>
              <li class=""><a href="<?php the_field('link_legal_f');?>" class="footer_text"><?php the_field('text_legal_f');?></a></li>
              <li>
                <div class="footer_reCaptcha_text">
                  This site is protected by reCAPTCHA and the Google
                  <a class="google_link" href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> and <a class="google_link" href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                </div>
              </li>
            </ul>

            <ul>
              <i class="icon-ml footer_icon_ml"></i>
              <?php
            $menu_name_ml = 'ml-menu';
            $locations_ml = get_nav_menu_locations();
            $menu_ml = wp_get_nav_menu_object( $locations_ml[ $menu_name_ml ] );
            $menuitems_ml = wp_get_nav_menu_items( $menu_ml->term_id, array( 'order' => 'DESC' ) );
            ?>
              <?php
                $currLang = pll_current_language();
              ?>
              <?php  foreach( $menuitems_ml as $item_ml ):
                $title_ml = $item_ml->title;
                $link_ml = $item_ml->url;
                $lang_ml = $item_ml->lang;
              ?>
              <a href="<?php echo $link_ml;?>" class="footer_text_ml <?php if (strtoupper($currLang) == $title_ml) {echo "text_ml_active";}?>"><?php echo $title_ml;?></a>
              <?php endforeach; ?>
              <i class="icon-ml header_icon_ml icon-ml-mob"></i>
            </ul>
          </div>

          <div class="col-12 sm-12 d-sm-block d-md-none">
            <div class="">
              <div class="footer_title centerText">
                <?php the_field('subtitle_2_f');?>
              </div>
              <div class="social_container">
                <div class="social_circle">
                  <a href="https://www.linkedin.com/company/linarys-gmbh?trk=public_profile_experience-item_profile-section-card_subtitle-click" target="_blank" rel="noreferrer" aria-label="Visit our LinkedIn profile">
                    <i class="icon-linkedin social_media"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="zIndex-2">
          <div class="">
            <a href="<?php the_field('link_back_to_linarys');?>" class="newsletter"><?php the_field('text_back_to_linarys');?></a>
            <img src="<?php echo IMAGENES; ?>/Grass.png" alt="" class="grass_right">
            <img src="<?php echo IMAGENES; ?>/Grass.png" alt="" class="grass_left">
          </div>

          <div class="footer_address">
            Mythenstrasse 28, 8400 Winterthur
          </div>
          <div class="footer_name">
            &copy Linarys GmbH <?php echo date("Y");?>
          </div>
        </div>

        <!-- <img src="<?php echo IMAGENES; ?>/shape-footer.svg" alt="" class="shape-11"> -->
        <object type="" data="<?php echo IMAGENES; ?>/shape-footer.svg" class="shape-11"></object>
        <img src="<?php echo IMAGENES; ?>/Kite.svg" alt="" class="kite kite_move">
        <img src="<?php echo IMAGENES; ?>/String.svg" alt="" class="string string_move">
        <img src="<?php echo IMAGENES; ?>/Wood.svg" alt="" class="wood">

        <!-- ---- -->
        <!-- BIRDS -->
        <div class="bird-container bird-container--one bird">
          <div class="bird bird--one"></div>
        </div>

        <div class="bird-container bird-container--two bird">
          <div class="bird bird--two"></div>
        </div>

        <div class="bird-container bird-container--three bird">
          <div class="bird bird--three"></div>
        </div>

        <div class="bird-container bird-container--four bird">
          <div class="bird bird--four"></div>
        </div>

        <!-- CLOUDS -->
        <object data="<?php echo IMAGENES; ?>/Cloud_1.svg" type="image/svg+xml" class="cloud_1 cloud1 cloud_move_1">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Cloud_2.svg" type="image/svg+xml" class="cloud_2 cloud2 cloud_move_2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Cloud_3.svg" type="image/svg+xml" class="cloud_3 cloud3 cloud_move_3">Shape</object>

        <!-- ISLAND -->
        <object data="<?php echo IMAGENES; ?>/linarys_footer.svg" type="image/svg+xml" class="linarys_footer rock_linarys">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Principal_rock.svg" type="image/svg+xml" class="principal_rock rock">Shape</object>
        <object data="<?php echo IMAGENES; ?>/2nd_rock.svg" type="image/svg+xml" class="rock_2 rock2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/2nd_rock-right.svg" type="image/svg+xml" class="rock_2_right rock2_right">Shape</object>
        <object data="<?php echo IMAGENES; ?>/2nd_rock-left.svg" type="image/svg+xml" class="rock_2_left rock2_left">Shape</object>
        <object data="<?php echo IMAGENES; ?>/3rd_rock.svg" type="image/svg+xml" class="rock_3 rock3">Shape</object>
        <!-- <object data="<?php echo IMAGENES; ?>/3rd_rock-right" type="image/svg+xml" class="rock_3_right rock3_right">Shape</object> -->
        <object data="<?php echo IMAGENES; ?>/3rd_rock-left.svg" type="image/svg+xml" class="rock_3_left rock3_left">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock.svg" type="image/svg+xml" class="rock_0 rock0">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock_1.svg" type="image/svg+xml" class="rock_1 rock1">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock_2.svg" type="image/svg+xml" class="rock_2_2 rock2_2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock_3.svg" type="image/svg+xml" class="rock_3_3 rock3_3">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock_tiny.svg" type="image/svg+xml" class="rock_tiny_0 rock_tiny0">Shape</object>
        <!-- <object data="<?php echo IMAGENES; ?>/Rock_tiny_1.svg" type="image/svg+xml" class="rock_tiny_1 rock_tiny1">Shape</object> -->
        <object data="<?php echo IMAGENES; ?>/Rock_tiny_2.svg" type="image/svg+xml" class="rock_tiny_2 rock_tiny2">Shape</object>
        <object data="<?php echo IMAGENES; ?>/Rock_tiny_3.svg" type="image/svg+xml" class="rock_tiny_3 rock_tiny3">Shape</object>

        <!-- FORM -->
        <div class="form_rock_blog formrock">
          <div class="form_title_blog">
            Stay tuned!
          </div>
          <div class="tnp tnp-subscription">
            <form method="post" action="https://linarys.com/blog?na=s">
              <input type="hidden" name="nlang" value="">
              <div class="tnp-field tnp-field-firstname">
                <input class="tnp-name form_input_blog" type="text" name="nn" value="" placeholder="Full name">
              </div>
              <div class="tnp-field tnp-field-email">
                <input class="tnp-email form_input_blog" type="email" name="ne" value="" placeholder="Email" required>
              </div>
              <div class="tnp-field tnp-field-button">
                <input class="tnp-submit" type="submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <?php endwhile; endif; ?>


  <!-- COOCKIES -->
  <div class="modal fade" id="cookieModal"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class=" align-items-center">
            <div class="title_coockie">
              Verwendung von Cookies
            </div>
            <div class="text_coockie">
              <p>Wir verwenden Cookies, um Sie zu erkennen, Ihre Erfahrungen zu personalisieren und zu analysieren, wie unsere Website verwendet wird. Weitere Informationen finden Sie auf unserer
                <a href="impressum " class="link_cookie">Impressum- und Datenschutzseite.</a>
              </p>
              <p>Wenn Sie das Setzen von Cookies z.B. durch Google Analytics unterbinden möchten, können Sie dies mithilfe dieses
                <a href="https://tools.google.com/dlpage/gaoptout" class="link_cookie">Browser Add-Ons</a> von Google, einrichten.
              </p>
            </div>
            <div class="center_btn buttons">
              <a href="" class="button" onclick="accept_cookies()">Alle Cookies erlauben</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo RUTATEMA; ?>/js/menu.js"></script>
  <script type="text/javascript" src="<?php echo RUTATEMA; ?>/js/actions_blog.js"></script>
  <!-- SLIDER -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo RUTATEMA; ?>/js/carousel.js"></script>
  <script type="text/javascript" src="<?php echo RUTATEMA; ?>/js/carousel-2.js"></script>
  </body>
</html>
