<!-- HEADER -->
<?php get_header(); ?>
<?php $post_home = new WP_Query( array(
  'post_type' => 'page',
  'pagename'  => 'Home'
 ) );
?>
<?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
  <?php
    $title_text=get_field('title_text');
    $intro_text_1=get_field('intro_text_1');
    $intro_text_2=get_field('intro_text_2');
    $dev_title=get_field('dev_title');
    $dev_text=get_field('dev_text');
    $design_title=get_field('design_title');
    $design_text=get_field('design_text');

    $title_our_work=get_field('title_our_work');
    $text_button_our_work=get_field('text_button_our_work');

    $title_latest_news=get_field('title_latest_news');
    $text_button_latest_news=get_field('text_button_latest_news');

    // BUTTONS
    $btn_intro=get_field('btn_intro');
    $link_button_intro=get_field('link_button_intro');
    $btn_develop=get_field('btn_develop');
    $btn_design=get_field('btn_design');
    $btn_latest_news=get_field('btn_lastest_news');
    $button_our_work = get_field('button_our_work');

    $link_projects=get_field('link_projects');
  ?>
<?php endwhile; else: ?>
<?php endif; ?>
<!-- HEADER -->
<section id="home">
      <div class="bg_intro">
        <div class="container relative">
          <!-- NAV -->
          <nav class="nav_desk">
            <ul class="nav justify-content-center">
              <?php include 'menu.php';?>
            </ul>
          </nav>

          <div class="text-center">
            <img src="<?php echo IMAGENES; ?>/Linarys.png" alt="Logo Linarys" class="logo_img">
          </div>

          <h1><?php echo $title_text; ?></h1>
          <p class="logo_desc">
            <?php echo $intro_text_1; ?><br><?php echo $intro_text_2; ?>
          </p>
          <div class="center_btn">
            <a href="<?php echo $link_button_intro; ?> " class="button "><?php echo $btn_intro; ?></a>
          </div>

          <!-- IMAGES -->

          <object data="<?php echo IMAGENES; ?>/shape-1.svg" type="image/svg+xml" class="shape-1 lava_1">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-2-1.svg" type="image/svg+xml" class="shape-2-1 lava_2">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-2-2.svg" type="image/svg+xml" class="shape-2-2 lava_2">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-3-1.svg" type="image/svg+xml" class="shape-3-1 lava_3">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-3-2.svg" type="image/svg+xml" class="shape-3-2 lava_3">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-4-1.svg" type="image/svg+xml" class="shape-4-1 lava_4">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-4-2.svg" type="image/svg+xml" class="shape-4-2 lava_4">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-4-3.svg" type="image/svg+xml" class="shape-4-3 lava_4">Shape</object>
          <object data="<?php echo IMAGENES; ?>/shape-4-4.svg" type="image/svg+xml" class="shape-4-4 lava_4">Shape</object>

        </div>
      </div>
      <div class="transition"></div>
    </section>


    <!-- OFFER -->
    <section id="offer">
      <div class="bg_offerIntro">
        <div class="container relative">

          <div class="offer_images">
            <img src="<?php echo IMAGENES; ?>/Development-Home.svg" alt="Development image" class="computer  wow fadeInRight" data-wow-delay="0.8s">
            <object type="" data="<?php echo IMAGENES; ?>/shape-5-1.png" class="shape-5-1 lava_5"></object>
            <object type="" data="<?php echo IMAGENES; ?>/shape-5-2.png" class="shape-5-2 lava_5_line"></object>
          </div>

          <div class="row mb-100">
            <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
              <div class="">
                <h2>
                  <?php echo $dev_title; ?>
                </h2>
                <p class="text">
                <?php echo $dev_text; ?>
                </p>
                <div class="button_dev_des">
                  <a href="<?php echo $link_button_intro; ?>#dev" class="button"><?php echo $btn_develop; ?></a>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block col-md-5 col-lg-6 col-xl-6">
              <img src="<?php echo IMAGENES; ?>/Development-Home.svg" alt="" class="computer  wow fadeInRight" data-wow-delay="0.5s">
              <object type="" data="<?php echo IMAGENES; ?>/shape-5-1.png" class="shape-5-1 lava_5"></object>
              <object type="" data="<?php echo IMAGENES; ?>/shape-5-2.png" class="shape-5-2 lava_5_line"></object>
    				</div>
          </div>

          <div class="offer_images mt-100">
            <img src="<?php echo IMAGENES; ?>/Design-Home.svg" alt="" class="smartphone  wow fadeInLeft" data-wow-delay="0.8s">
            <object type="" data="<?php echo IMAGENES; ?>/shape-6-1.png" class="shape-6-1 lava_6"></object>
            <object type="" data="<?php echo IMAGENES; ?>/shape-6-2.png" class="shape-6-2 lava_6_line"></object>
          </div>

          <div class="row">
    				<div class="d-none d-md-block col-md-5 col-lg-6 col-xl-6">
              <img src="<?php echo IMAGENES; ?>/Design-Home.svg" alt="" class="smartphone  wow fadeInLeft" data-wow-delay="0.5s">
              <object type="" data="<?php echo IMAGENES; ?>/shape-6-1.png" class="shape-6-1 lava_6"></object>
              <object type="" data="<?php echo IMAGENES; ?>/shape-6-2.png" class="shape-6-2 lava_6_line"></object>
    				</div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
    					<h2>
    				  <?php echo $design_title; ?>
              </h2>
    					<p class="text">
              <?php echo $design_text; ?>
    					</p>
              <div class="button_dev_des">
                <a href="<?php echo $link_button_intro; ?>#des" class="button"><?php echo $btn_design; ?></a>
              </div>
    				</div>
          </div>

        </div>
      </div>

    </section>

    <!-- OUR WORK-->

    <section id="work">
      <div class="white_section_1">
        <div class="container relative centerPosition">
          <h2 class="centerText"><?php echo $title_our_work; ?></h2>

          <div class="center-1 carousel-1 ">
            <?php
            $text=get_the_content();
            $post_work = new WP_Query( array(
              'post_type' => 'post',
              'offset' => '1',
              'category_name'  => 'Project',
              'posts_per_page' => '3',
              'order' => 'ASC',
            ) );
            $i=0;
            ?>
            <?php if (  $post_work -> have_posts() ): while(  $post_work -> have_posts() ):  $post_work -> the_post(); ?>
            <div class="centerPosition">
              <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
              <div class="card_circle" align=center>
                <p class="card_circle_content">
                  <p class="card_circle_title">
                    <?php the_title_attribute(); ?>
                  </p>
                  <p class="card_circle_desc">
                    <?php the_time('Y'); ?>
                  </p>
                  <p class="card_circle_text">
                    <?php the_excerpt(); ?>
                  </p>

                </p>
              </div>
              <?php if ( has_post_thumbnail() ): ?>
              <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
              <img src="<?php echo $banner_article[0];?>" alt="" class="card_circle_image">
              <?php else: ?>
                <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="card_circle_image">
              <?php endif; ?>
              <!-- <img src="images/work1.jpg" class="card_circle_image"> -->
              </a>
            </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="centerTrans_indexWork">
            <a href="<?php echo $button_our_work; ?>" class="button"><?php echo $text_button_our_work; ?></a>
          </div>

          <img src="<?php echo IMAGENES; ?>/shape-7-1.png" alt="" class="shape-7-1 lava_7">
          <img src="<?php echo IMAGENES; ?>/shape-7-2.png" alt="" class="shape-7-2 lava_7_1">
          <img src="<?php echo IMAGENES; ?>/shape-8-1.png" alt="" class="shape-8-1 lava_8_1">
          <img src="<?php echo IMAGENES; ?>/shape-8-2.png" alt="" class="shape-8-2 lava_8_2">
          <img src="<?php echo IMAGENES; ?>/shape-8-3.png" alt="" class="shape-8-3 lava_8_3">
        </div>
      </div>

    </section>
                <?php
    $query = new WP_Query( array(
              'post_type' => 'post',
              'category_name'  => 'Blog',
            ) );
           $count = $query->post_count;
            ?>
    <!-- NEWS -->
    <section>
      <div class="white_section_1_1 <?php if ($count==0): echo "d-none"; endif;?>">
        <div class="container relative centerPosition">
          <h2 class="centerText"><?php echo $title_latest_news; ?></h2>

          <div class="center carousel-2 ">
            <?php
            $text=get_the_content();
            $post_news = new WP_Query( array(
              'post_type' => 'post',
              'offset' => '0',
              'category_name'  => 'Blog',
              'posts_per_page' => '3',
              'order' => 'ASC',
            ) );
            $i=0;
            ?>
            <?php if (  $post_news -> have_posts() ): while(  $post_news -> have_posts() ):  $post_news -> the_post(); ?>
            <div>
              <a href="<?php the_permalink(); ?>">
              <div class="card_semiCircle">
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
              </div>
              </a>
            </div>
            <?php $i++; ?>
            <?php endwhile; endif; ?>

          </div>
          <div class="centerTrans_indexBlog">
            <a href="<?php echo $btn_latest_news; ?>" class="button"><?php echo $text_button_latest_news; ?></a>
          </div>

          <img src="<?php echo IMAGENES; ?>/shape-9-1.png" alt="" class="shape-9-1 lava_9_1">
          <img src="<?php echo IMAGENES; ?>/shape-9-2.png" alt="" class="shape-9-2 lava_9_2">
          <img src="<?php echo IMAGENES; ?>/shape-10-1.png" alt="" class="shape-10-1 lava_10_1">
          <img src="<?php echo IMAGENES; ?>/shape-10-2.png" alt="" class="shape-10-2 lava_10_2">
          <img src="<?php echo IMAGENES; ?>/shape-10-3.png" alt="" class="shape-10-3 lava_10_3">

        </div>
      </div>
    </section>

<?php get_footer(); ?>
