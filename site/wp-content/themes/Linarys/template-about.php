<?php
/**
* Template name: About
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

  $title_text=get_field('title_text');
?>
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_about.css">
<!-- HEADER -->
<section id="home">
        <div class="bg_about_header">
          <div class="container relative">
            <!-- NAV -->
            <nav class="nav_desk">
              <ul class="nav justify-content-center">
              <?php include 'menu.php';?>
              </ul>
            </nav>
            <h1 class="mt-40"><?php echo $title_text; ?></h1>
            <div class="text_light">
               <?php the_field('intro_text'); ?>
            </div>
            <!-- IMAGES -->
            <object data="<?php echo IMAGENES; ?>/shape-about-1-1.svg" type="image/svg+xml" class="shape-about-1-1 lava_about-1-1">Shape</object>
            <object data="<?php echo IMAGENES; ?>/shape-about-1-2.svg" type="image/svg+xml" class="shape-about-1-2 linarys_move">Shape</object>
            <object data="<?php echo IMAGENES; ?>/shape-about-1-3.svg" type="image/svg+xml" class="shape-about-1-3 lava_about-1-3">Shape</object>
            <object data="<?php echo IMAGENES; ?>/shape-about-1-4.svg" type="image/svg+xml" class="shape-about-1-4 lava_about-1-4">Shape</object>
            <img src="<?php echo IMAGENES; ?>/Linarys on top.png" alt="" class="linarys_logo_top linarys_move">

          </div>
        </div>


      </section>
       <!-- OUR VALUES-->
       <section>
        <div class="bg_about_values">
          <div class="container relative">
            <h2 class="mb-H2">
                <?php the_field('values_title'); ?>
            </h2>
            <div class="row">
                  <div class="d-none d-lg-block col-lg-4 col-xl-4">
                    <div class="val_circle color1">
                      <i class="icon-i-consistency val_icon"></i>
                      <div class="val_text">
                      <?php the_field('text_1'); ?>
                      </div>
                    </div>
                    <div class="subtitle"><?php the_field('title_1'); ?></div>

                  </div>
                  <div class="d-none d-lg-block  col-lg-4 col-xl-4">
                    <div class="val_circle color2">
                      <i class="icon-i-quality val_icon"></i>
                      <div class="val_text">
                      <?php the_field('text_2'); ?>
                      </div>
                    </div>
                    <div class="subtitle"><?php the_field('title_2'); ?></div>
                  </div>
                  <div  class="d-none d-lg-block  col-lg-4 col-xl-4">
                    <div class="val_circle color3">
                      <i class="icon-i-trust val_icon"></i>
                      <div class="val_text">
                      <?php the_field('text_3'); ?>
                      </div>
                    </div>
                    <div class="subtitle"><?php the_field('title_3'); ?></div>
                  </div>
            </div>
            <div class="val_mov">
              <div class="row val_row">
                <div class="col-12 col-sm-12 col-md-12 val_content">
                  <div class="val_circle_mov color1">
                    <i class="icon-i-consistency val_icon"></i>
                  </div>
                  <div class="val_card color1">
                  </div>
                  <div class="val_text_container">
                    <div class="val_legend_mov">
                    <?php the_field('title_1'); ?>
                    </div>
                    <div class="val_text_mov">
                    <?php the_field('text_1'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row val_row">
                <div class="col-12 col-sm-12 col-md-12 val_content">
                  <div class="val_circle_mov color2">
                    <i class="icon-i-quality val_icon"></i>
                  </div>
                  <div class="val_card color2">
                  </div>
                  <div class="val_text_container">
                    <div class="val_legend_mov">
                    <?php the_field('title_2'); ?>
                    </div>
                    <div class="val_text_mov">
                    <?php the_field('text_2'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row val_row">
                <div class="col-12 col-sm-12 col-md-12 val_content">
                  <div class="val_circle_mov color3">
                    <i class="icon-i-trust val_icon"></i>
                  </div>
                  <div class="val_card color3">
                  </div>
                  <div class="val_text_container">
                    <div class="val_legend_mov">
                    <?php the_field('title_3'); ?>
                    </div>
                    <div class="val_text_mov">
                    <?php the_field('text_3'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--TEAM-->
      <section>
          <div class="bg_about_team">
            <div class="container relative card_transform">
              <h2 class="mb-H2">Team</h2>

              <div class="row">
                  <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <div>
                          <div class="card_semiCircle_about">
                            <img src="<?php echo get_field('franco')['photo'];?>" class="image">
                            <div class="title_news">
                              <?php echo get_field('franco')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('franco')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div> -->
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                      <div>
                          <div class="card_semiCircle_about floatRight">
                            <img src="<?php echo get_field('loic')['photo'];?>" class="image">
                            <div class="title_news">
                            <?php echo get_field('loic')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('loic')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div>
                  <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                      <div>
                          <div class="card_semiCircle_about floatLeft">
                            <img src="<?php echo get_field('michael')['photo'];?>" class="image">
                            <div class="title_news">
                            <?php echo get_field('michael')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('michael')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div>
              </div>

              <div class="row team_row">
                <div class="col-12 col-sm-6">
                    <div>
                        <div class="card_semiCircle_about">
                          <img src="<?php echo get_field('michael')['photo'];?>" class="image">
                          <div class="title_news">
                          <?php echo get_field('michael')['name'];?>
                          </div>
                          <div class="text">
                          <?php echo get_field('michael')['degree'];?>
                          </div>
                          <a href="#"></a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div>
                        <div class="card_semiCircle_about">
                          <img src="<?php echo get_field('marythe')['photo'];?>" class="image">
                          <div class="title_news">
                          <?php echo get_field('marythe')['name'];?>
                          </div>
                          <div class="text">
                          <?php echo get_field('marythe')['degree'];?>
                          </div>
                          <a href="#"></a>
                        </div>
                      </div>
                </div>

              </div>

              <div class="row">
                  <div class="d-none d-md-block col-md-4 col-lg-4 col-xl-4">
                      <div>
                          <div class="card_semiCircle_about">
                            <img src="<?php echo get_field('marythe')['photo'];?>" class="image">
                            <div class="title_news">
                            <?php echo get_field('marythe')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('marythe')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div>
				  <!-- 
                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <div>
                          <div class="card_semiCircle_about">

                            <img src="<?php echo get_field('natalia')['photo'];?>" class="image">
                            <div class="title_news">
                            <?php echo get_field('natalia')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('natalia')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div>
					-->
                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <div>
                          <div class="card_semiCircle_about">
                            <img src="<?php echo get_field('gil')['photo'];?>" class="image">
                            <div class="title_news">
                            <?php echo get_field('gil')['name'];?>
                            </div>
                            <div class="text">
                            <?php echo get_field('gil')['degree'];?>
                            </div>
                            <a href="#"></a>
                          </div>
                        </div>
                  </div>
              </div>
              <!-- <object data="<?php echo IMAGENES; ?>/Franco bubble.svg" type="image/svg+xml" class="bubble_franco lava_bubble_1">Shape</object> -->
              <object data="<?php echo IMAGENES; ?>/Loic bubble.svg" type="image/svg+xml" class="bubble_loic lava_bubble_2">Shape</object>
              <object data="<?php echo IMAGENES; ?>/Michael buble.svg" type="image/svg+xml" class="bubble_michael lava_bubble_3">Shape</object>
              <object data="<?php echo IMAGENES; ?>/Marythe bubble.svg" type="image/svg+xml" class="bubble_marythe lava_bubble_2">Shape</object>
              <object data="<?php echo IMAGENES; ?>/Natalia bubble.svg" type="image/svg+xml" class="bubble_natalia lava_bubble_3">Shape</object>
              <object data="<?php echo IMAGENES; ?>/Gil bubble.svg" type="image/svg+xml" class="bubble_gil lava_bubble_6">Shape</object>
            </div>
          </div>
        </section>
        <?php get_footer(); ?>
