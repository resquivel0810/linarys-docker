<?php
/**
* Template name: Contact
*
* Plantilla personalizada
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/
?>
<?php get_header(); ?>
<?php

  $menu_name2 = 'footer-menu';
  $locations2 = get_nav_menu_locations();
  $menu2 = wp_get_nav_menu_object( $locations2[ $menu_name2 ] );
  $menuitems2 = wp_get_nav_menu_items( $menu2->term_id, array( 'order' => 'DESC' ) );


  $menu_name_ml = 'ml-menu';
  $locations_ml = get_nav_menu_locations();
  $menu_ml = wp_get_nav_menu_object( $locations_ml[ $menu_name_ml ] );
  $menuitems_ml = wp_get_nav_menu_items( $menu_ml->term_id, array( 'order' => 'DESC' ) );
?>

<?php $post_footer = new WP_Query( array(
    'post_type' => 'post',
    'category_name'  => 'Footer',
    'posts_per_page' => '1',
    'order' => 'DESC',
  ) );
?>

<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_contact.css">
<!-- HEADER -->
  <section class="header_contact">
      <div class="bg_contact_header">
        <div class="container relative">
          <!-- NAV -->
          <nav class="nav_desk">
            <ul class="nav justify-content-center">
            <?php include 'menu.php';?>
            </ul>
          </nav>
        </div>
      </div>

    </section>


    <!-- INFO -->
    <section class="">
      <div class="bg_contact_info">
        <div class="container relative">
          <div class="info">
            <h1 class="title1_contact mt-40">
              <?php the_field('title_contact');?>
            </h1>
          </div>

          <div class="info_container info">
            <div class="row row_ct">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="title2_contact">
                <?php the_field('intro_text');?>
                </div>

              </div>
            </div>
            <div class="row row_ct none">
              <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="icon_contact">
                  <img src="<?php echo IMAGENES; ?>/Icon_telephone.svg" alt="" class="">
                </div>
              </div>
              <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                <div class="text1_contact">
                  <?php the_field('phone');?>
                </div>

              </div>
            </div>
            <div class="row row_ct">
              <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <div class="icon_contact">
                  <img src="<?php echo IMAGENES; ?>/Icon_adress.svg" alt="" class="">
                </div>
              </div>
              <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                <div class="text1_contact">
                <?php the_field('address');?>
                </div>
              </div>
            </div>
          </div>

          <img src="<?php echo IMAGENES; ?>/shape-contact-1.svg" alt="" class="shape-contact-1 lava_ct_1">
          <img src="<?php echo IMAGENES; ?>/shape-contact-2.svg" alt="" class="shape-contact-2 lava_ct_2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.5986359631547!2d8.708766016205939!3d47.49773180348451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a996e8faebe13%3A0xc2aaf7e9742be40a!2sMythenstrasse%2028%2C%208400%20Winterthur%2C%20Switzerland!5e0!3m2!1sen!2smx!4v1603317218112!5m2!1sen!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>

        </div>
      </div>
    </section>

    <?php if (  $post_footer -> have_posts() ): while(  $post_footer -> have_posts() ):  $post_footer -> the_post(); ?>
    <!-- FORM -->
    <section class="">
      <div class="bg_contact_form">
        <div class="container relative">
        <div class="" style="color:transparent;">
          linary form
        </div>
        <div class="form_title_ct">
          <?php the_field('title_form_f');?>
        </div>
        <div class="form_rock_ct">
          <!-- <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 2"]');?> -->
          <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
        </div>
        <div class="formR_bg_ct">
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
          <img src="<?php echo IMAGENES; ?>/Cloud_1.svg" alt="" class="cloud_1_ct cloud_move_1">
          <img src="<?php echo IMAGENES; ?>/Cloud_2.svg" alt="" class="cloud_2_ct cloud_move_2">
          <img src="<?php echo IMAGENES; ?>/Cloud_3.svg" alt="" class="cloud_3_ct cloud_move_3">
          <!-- ISLAND -->

          <!-- ISLAND -->
          <img src="<?php echo IMAGENES; ?>/linarys_footer.svg" alt="" class="linarys_ct">
          <img src="<?php echo IMAGENES; ?>/Principal_rock.svg" alt="" class="principalR_ct">
          <img src="<?php echo IMAGENES; ?>/2nd_rock.svg" alt="" class="rock_2_ct">
          <img src="<?php echo IMAGENES; ?>/2nd_rock-right.svg" alt="" class="rock_2_right_ct">
          <img src="<?php echo IMAGENES; ?>/2nd_rock-left.svg" alt="" class="rock_2_left_ct">
          <img src="<?php echo IMAGENES; ?>/3rd_rock.svg" alt="" class="rock_3_ct">
          <img src="<?php echo IMAGENES; ?>/3rd _rock-right.svg" alt="" class="rock_3_right_ct">
          <img src="<?php echo IMAGENES; ?>/3rd_rock-left.svg" alt="" class="rock_3_left_ct">
          <img src="<?php echo IMAGENES; ?>/Rock.svg" alt="" class="rock_0_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_1.svg" alt="" class="rock_1_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_2.svg" alt="" class="rock_2_2_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_3.svg" alt="" class="rock_3_3_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_tiny.svg" alt="" class="rock_tiny_0_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_tiny_1.svg" alt="" class="rock_tiny_1_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_tiny_2.svg" alt="" class="rock_tiny_2_ct">
          <img src="<?php echo IMAGENES; ?>/Rock_tiny_3.svg" alt="" class="rock_tiny_3_ct">
        </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <footer>
      <div class="footer">
        <div class="container relative">
          <div class="row zIndex-2">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
              <ul>
                <li class="footer_title"><?php the_field('subtitle_1_f');?></li>
                <?php  foreach( $menuitems as $item ):
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
                  $currLang = get_bloginfo('language');
                ?>
                <?php  foreach( $menuitems_ml as $item_ml ):
                  $title_ml = $item_ml->title;
                  $link_ml = $item_ml->url;
                  $lang_ml = $item_ml->lang;
                ?>
                <a href="<?php echo $link_ml;?>" class="footer_text_ml <?php if ($currLang == $lang_ml) {echo "text_ml_active";}?>"><?php echo $title_ml;?></a>
                <?php endforeach; ?>
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
              <a href="<?php the_field('link_contact_us_f');?>" class="newsletter"><?php the_field('text_contact_us_f');?></a>
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

          <!-- <img src="<?php echo IMAGENES; ?>/shape-11.svg" alt="" class="shape-11"> -->
          <object type="" data="<?php echo IMAGENES; ?>/shape-11.svg" class="shape-11"></object>

          <img src="<?php echo IMAGENES; ?>/Tree.svg" alt="" class="tree">


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


    <?php wp_footer();  ?>


  </body>
</html>
