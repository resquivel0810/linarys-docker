<?php
  $menu_name = 'footer-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

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
<!-- FOOTER -->
<?php if (  $post_footer -> have_posts() ): while(  $post_footer -> have_posts() ):  $post_footer -> the_post(); ?>
<!-- PROJECT-->
  <section>
      <div class="bg_projectSection">
        <div class="container relative">
          <div class="">
            <h5 class="element_hide">
              <?php the_field('text_footer_big');?>
            </h5>
            <br>
            <div class="center_btn">
              <div class="button_center_3 element_hide">
                <button id="hide" class="button rock_button" ><?php the_field('button_text_f');?></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer>
      <div class="bg_footer">
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

              <ul class='<?php if($menu_ml==null){echo "d-none";} ?>'>
                <i class="icon-ml footer_icon_ml"></i>
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
          <object type="" data="<?php echo IMAGENES; ?>/shape-11.svg" alt="" class="shape-11"></object>

          <object data="<?php echo IMAGENES; ?>/Tree.svg" type="image/svg+xml" class="tree">Shape</object>

          <div class="">
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


          </div>

          <!-- FORM -->
          <div class="form_rock formrock">
            <div class="form_title">
              <?php the_field('title_form_f');?>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
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
<?php wp_footer();  ?>
<script>
  new WOW().init();
  var wpcf7Elm = document.querySelector( '.wpcf7' );

  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    setTimeout(function() {
      location.reload();
  }, 3000);
  }, false );
</script>
<script>
  $("#search").keyup(function(e){
    var code = e.key; // recommended to use e.key, it's normalized across devices and languages
    if(code==="Enter") e.preventDefault();
    if(code===" " || code==="Enter" || code===","|| code===";"){
      look();
    } // missing closing if brace
});
$("#form_input_1").keyup(function(e){
    var code = e.key; // recommended to use e.key, it's normalized across devices and languages
    if(code==="Enter") e.preventDefault();
    if(code===" " || code==="Enter" || code===","|| code===";"){
      document.getElementById("searchform").submit();
    } // missing closing if brace
});
$('#collapseExample').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var content = button.data('content');
  var date = button.data('date');
  var title = button.data('title');
  var image = button.data('image');
  var modal = $(this);
  var link = button.data('link');
  var slink = button.data('slink');
  $("#m-text").html(content);
  $("#m-date").html(date);
  $("#m-title").html(title);
  $("#m-image").attr("src",image);
  $("#m-link").html(slink);
  $("#m-link").attr('href', link);
  if(content=="")
  {
    $("#m-text").hide();
  }
});
</script>
</body>
</html>
