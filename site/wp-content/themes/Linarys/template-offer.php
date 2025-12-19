<?php
/**
* Template name: Offer
*
* Plantilla personalizada
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_offer.css">
<!-- HEADER -->
    <section class="header_offer">
      <div class="bg_offer_header">
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

    <!-- DEVELOPMENT-->
    <section id="dev">
      <div class="bg_offer_dev">
        <div class="container relative">
          <div class="row offer_row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="quote">
                <div class="text_offer_dev">
                <?php echo get_field("quote_text_1"); ?>
                </div>
                <div class="author_offer_dev">
                <?php echo get_field("quote_author_1"); ?>
                </div>
                <object type="" data="<?php echo IMAGENES; ?>/shape-offer-1-1.svg" class="shape-offer-1-1 lava_offer_1_1"></object>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="">
                <h2>
                <?php the_field('dev_title');?>
                </h2>
                <div class="text">
                  <?php the_field('dev_text');?>
                </div>
              </div>
            </div>

          </div>

          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-1-2.svg" class="shape-offer-1-2 lava_offer_1_2 "></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-2-1.svg" class="shape-offer-2-1 lava_offer_2_1 "></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-2-2.svg" class="shape-offer-2-2 lava_offer_2_2 "></object>
          <object type="" data="<?php echo IMAGENES; ?>/Development-Home.svg" class="img_dev"></object>

        </div>
      </div>
    </section>

    <!-- DESIGN -->
    <section id="des">
      <div class="bg_offer_des">
        <div class="container relative">
          <div class="row offer_row">
            <div class="col_none">
              <div class="quote">
                <div class="text_offer_dev">
                <?php echo get_field("quote_text_2"); ?>
                </div>
                <div class="author_offer_dev">
                <?php echo get_field("quote_author_2"); ?>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="">
                <h2>
                <?php the_field('design_title');?>
                </h2>
                <div class="text">
                  <?php the_field('design_text');?>
                </div>
              </div>

          </div>
          <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
            <div class="quote">
              <div class="text_offer_dev">
              <?php echo get_field("quote_text_2"); ?>
              </div>
              <div class="author_offer_dev">
              <?php echo get_field("quote_author_2"); ?>
              </div>
            </div>
          </div>
        </div>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-3-1.svg" class="shape-offer-3-1 lava_offer_3_1"></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-3-2.svg" class="shape-offer-3-2 lava_offer_3_2"></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-3-3.svg" class="shape-offer-3-3 lava_offer_3_3"></object>
          <object type="" data="<?php echo IMAGENES; ?>/Design-Home.svg" class="img_des"></object>
        </div>
      </div>
    </section>

    <!-- OUR APPROACH -->

    <section>
      <div class="bg_offer_approach_1">
        <div class="container relative">
          <div class="fcenter">
            <div class="ccenter">
              <div class="title4_offer">
                <?php the_field('approach_title'); ?>
              </div>
              <div class="quote quote_approach">
                <div class="text_approach">
                <?php echo get_field("quote_text_3"); ?>
                </div>
                <div class="author_approach">
                <?php echo get_field("quote_author_3"); ?>
                </div>
                <object type="" data="<?php echo IMAGENES; ?>/shape-offer-4-1.svg" class="shape-offer-4-1 lava_offer_4_1"></object>
              </div>
            </div>
          </div>
          <div class="text_buble">
            <div class="text_white">
              <?php the_field('approach_text'); ?>
            </div>

          </div>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
              <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feBlend in="SourceGraphic" in2="goo" />
              </filter>
            </defs>
          </svg>

          <!-- <object type="" data="<?php echo IMAGENES; ?>/shape-offer-4-2.svg" class="shape-offer-4-2 lava_offer_4_2"></object> -->
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-4-3.svg" class="shape-offer-4-3 lava_offer_4_3"></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-4-4.svg" class="shape-offer-4-4 lava_offer_4_4"></object>
          <object type="" data="<?php echo IMAGENES; ?>/shape-offer-4-5.svg" class="shape-offer-4-5 lava_offer_4_5"></object>
        </div>
      </div>
    </section>
    <section>
      <div class="bg_offer_approach_2">
        <div class="container relative">
          <div class="">
            <div class="row offer_row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_right">
                <div class="bubble_n bn_left">
                  <p class="bn">
                    1
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-analysis icon_offer"></i>
                </div>
                <h4>
                  <?php the_field('title_1');?>
                </h4>
                <div class="text">
                <?php the_field('text_1');?>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_left">
                <div class="bubble_n bn_right">
                  <p class="bn">
                    2
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-synthesis icon_offer"></i>
                </div>
                <h4>
                  <?php the_field('title_2');?>
                </h4>
                <div class="text">
                <?php the_field('text_2');?>
                </div>
              </div>
            </div>
            <div class="row offer_row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_right">
                <div class="bubble_n bn_left">
                  <p class="bn">
                    3
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-implementation icon_offer"></i>
                </div>
                <h4>
                <?php the_field('title_3');?>
                </h4>
                <div class="text">
                <?php the_field('text_3');?>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_left">
                <div class="bubble_n bn_right">
                  <p class="bn">
                    4
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-testing icon_offer"></i>
                </div>
                <h4>
                <?php the_field('title_4');?>
                </h4>
                <div class="text">
                <?php the_field('text_4');?>
                </div>
              </div>
            </div>
            <div class="row offer_row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_right">
                <div class="bubble_n bn_left">
                  <p class="bn">
                    5
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-delivery icon_offer"></i>
                </div>
                <h4>
                <?php the_field('title_5');?>
                </h4>
                <div class="text">
                <?php the_field('text_5');?>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 padd_left">
                <div class="bubble_n bn_right">
                  <p class="bn">
                    6
                  </p>
                </div>
                <div class="bubble_i">
                  <i class="icon-i-steps icon_offer"></i>
                </div>
                <h4>
                <?php the_field('title_6');?>
                </h4>
                <div class="text">
                <?php the_field('text_6');?>
                </div>
              </div>
            </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
