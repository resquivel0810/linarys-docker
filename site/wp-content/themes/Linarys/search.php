<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Linarys
 * @since Lianrys 1.0
 */

?>
<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_work.css">



<!-- HEADER -->
<section id="home">
        <div class="bg_work_header">
          <div class="container relative">
            <!-- NAV -->
            <nav class="nav_desk">
              <ul class="nav justify-content-center">
              <?php  foreach( $menuitems as $item ):
                  $title = $item->title;
                  $link = $item->url;
                ?>
              <li><a href="<?php echo $link; ?>" class="link"><?php echo $title; ?></a></li>
              <?php endforeach; ?>
              </ul>
            </nav>
            <div class="search_container" >
                <center>
                <input type="text" name="" id="search" class="form_input_work">
                    <a class="s_button"  onclick="window.location.href='/?s='+$('#search').val();">
                    <i class="icon-search shape_icon"></i>
                    </a>
                </center>
            </div>
            <!-- IMAGES -->
            <img src="<?php echo IMAGENES; ?>/Linarys on top.png" alt="" class="linarys_logo_top">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-1.svg" alt="" class="shape-work-1-1 lava_work_1_1">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-2.svg" alt="" class="shape-work-1-2 lava_work_1_2">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-3.svg" alt="" class="shape-work-1-3 ">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-4.svg" alt="" class="shape-work-1-4 lava_work_1_3">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-5.svg" alt="" class="shape-work-1-5">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-6.svg" alt="" class="shape-work-1-6 lava_work_1_3">

          </div>
        </div>


        <!--

        <img src="images/shape-11.png" alt="">
      -->
      <div class="fill_1"></div>
      <?php $post_home = new WP_Query( array(
              'post_type' => 'post',
              'category_name'  => 'Search-project',
            ) );
            ?>
            <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
            <?php
            $title_p=get_field('more_p');
            $button_p=get_field('see_more');
            $look=get_field('take_a_look');
            $mb=get_field('more_button');
            $link_projects=get_field('link_projects');
            ?>
            <?php endwhile; endif; ?>
      </section>

<!-- RESULT SEARCH -->
<section>
  <div class="bg_work_projects">
    <div class="container relative card_transform">
    <?php
    $i=0;
    $s=get_search_query();
    $tags=$__GET['tags'];
    $aux=explode($tags);
    echo "<h1>";
    echo $s;
    echo "</h1>";
    $args = array(
                    'post_type' => 'post',
                    'tag__in' => $aux,
                );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
               $the_query->the_post();
    ?>
      <?php if($i%2==0): ?>
        <div class="row projectsDesktop">
      <?php endif; ?>
      <div class="col-12 col-md-6">
          <div class="container_moreWork">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="img_moreWork">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="img_moreWork">
                    <?php endif; ?>
            <h3><?php the_title_attribute(); ?></h3>
            <div class="text_purple"><?php the_field('type'); ?>-<?php echo get_the_date( " F Y", get_the_ID());?></div>
            <a class="linkMore" href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>"><?php echo $mb; ?> > </a>
            <div class="mt-10">
              <div class="box_tag_in_project">
                Consulting
              </div>
              <div class="box_tag_in_project">
                Branding
              </div>
              <div class="box_tag_in_project">
                Web design
              </div>
              <div class="box_tag_in_project">
                Web Development
              </div>
            </div>
          </div>
        </div>
        <?php if($i%2!=0): ?>
        </div>
      <?php endif; ?>
<?php
$i++;
    }
    if(($i-1)%2==0):
      echo "</div>";
    endif;
    ?>

    <?php
    }else{
?>
<div class="">
  <div class="message2_404">
    No results!
  </div>
  <div class="centerText">
    <a href="https://preview.linarys.com/our-work/" class="linkBack "> < Go back</a>
  </div>
</div>
<?php } ?>
<?php
    $i=0;
    $s=get_search_query();
    $args = array(
                    'post_type' => 'post',
                    'category_name'  => 'Project',
                    'tag__and' => $tags,
                );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
               $the_query->the_post();
    ?>
      <!-- MOVIL -->
      <div class="row projectsMob">
        <div class="col-12 col-md-6">
          <div class="container_moreWork">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="img_moreWork">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="img_moreWork">
                    <?php endif; ?>
            <div class="card_project_title">
              <?php the_title_attribute(); ?>
            </div>
            <div class="card_project_desc"><?php the_field('type'); ?>-<?php echo get_the_date( " F Y", get_the_ID());?></div>
            <div class="center_content_align">
              <a class="card_project_link" href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>"><?php echo $mb; ?> ></a>
            </div>
            <!-- TAGS IN PROJECT -->
            <div class="centerText mt-20">
              <div class="box_tag_in_project">
                Consulting
              </div>
              <div class="box_tag_in_project">
                Branding
              </div>
              <div class="box_tag_in_project">
                Web design
              </div>
              <div class="box_tag_in_project">
                Web Development
              </div>
            </div>
            </div>
        </div>
        <!-- COLLAPSE -->

        <!-- ** -->
      </div>
<?php
$i++;
    }
    }else{
?>

<?php } ?>
    </div>
  </div>
</section>

<!-- MORE PROJECTS -->
<section>
  <div class="bg_work_moreP">
    <div class="container relative">
      <h2 class="centerText"><?php echo $title_p; ?></h2>
      <div class="container_morePojects">
        <div class="row">
            <?php
            $text=get_the_content();
            $post_home = new WP_Query( array(
              'post_type' => 'post',
              'category_name'  => 'Project',
              'posts_per_page' => '3',
              'order' => 'DESC',
            ) );
            $i=0;
            ?>
            <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>

          <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
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


              <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" class="subtitle_purple" >
                <?php the_title_attribute(); ?>
              </a>
            </div>
          </a>
          <?php endwhile; endif; ?>
          <div class="col-md-12">
          <br>
          <br>
          <div class="center_btn">
          <a href="<?php if($currLang=="en-GB"){echo "/en";}else{echo "";} ?>/?s= " class="button "><?php echo $button_p; ?></a>
          </div>
          </div>

        </div>
        <div class="row">

        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
