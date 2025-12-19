<?php
/**
* Template name: Work
*
* Plantilla personalizada
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
<!-- <link rel="stylesheet" href="css/select.css"> -->
<link rel="stylesheet" href="<?php echo RUTATEMA; ?>/css/style_work.css">
<?php $aux=$pagename; ?>
 <!-- HEADER -->
 <section id="home">
        <div class="bg_work_header">
          <div class="container relative">
            <!-- NAV -->
            <nav class="nav_desk">
              <ul class="nav justify-content-center">
              <?php include 'menu.php';?>
              </ul>
            </nav>
            <div class="search_container">
              <input type="text" name="" id="search" class="form_input_work">
              <a class="s_button zoom_works"  onclick="look();">
                <i class="icon-search shape_icon"></i>
              </a>
            </div>
            <!-- IMAGES -->
            <img src="<?php echo IMAGENES; ?>/Linarys on top.png" alt="" class="linarys_logo_top">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-1.svg" alt="" class="shape-work-1-1 lava_work_1_1">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-2.svg" alt="" class="shape-work-1-2 lava_work_1_2">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-3.svg" alt="" class="shape-work-1-3 ">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-4.svg" alt="" class="shape-work-1-4 lava_work_1_3">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-5.svg" alt="" class="shape-work-1-5">
            <img src="<?php echo IMAGENES; ?>/shape-work-1-6.svg" alt="" class="shape-work-1-6 lava_work_1_3">

            <div class="">
              <div id="output"></div>
              <form class="form-select">
                <div class="">
                  <select data-placeholder="Category" name="tags[]" multiple class="chosen-select" id='mulsel'>
                    <?php $post_home = new WP_Query( array(
                      'post_type' => 'post',
                      'name' => 'TagsOurWork'
                    ) );
                    ?>
                    <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
                      <?php
                        $tags = wp_get_post_tags(get_the_ID());
                        if ($tags):
                          foreach($tags as $tag):
                      ?>
                            <option value="<?php echo $tag->term_id; ?>">
                              <?php echo $tag->name; ?>
                            </option>
                      <?php
                          endforeach;
                        endif;
                      ?>
                    <?php endwhile; endif; ?>
                  </select>

                  <!-- FILTER MOBILE -->
                  <select data-placeholder="Category" name="tags[]" class="d-md-block d-lg-none mr-1" id='mulsel1'>

                    <?php $post_home = new WP_Query( array(
                      'post_type' => 'post',
                      'name' => 'TagsOurWork'
                    ) );
                    ?>
                    <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
                      <?php
                        $tags = wp_get_post_tags(get_the_ID());
                        if ($tags):
                          foreach($tags as $tag):
                      ?>
                            <option value="<?php echo $tag->term_id; ?>">
                              <?php echo $tag->name; ?>
                            </option>
                      <?php
                          endforeach;
                        endif;
                      ?>
                    <?php endwhile; endif; ?>
                  </select>

                </div>
                <?php

              $post_home = new WP_Query( array(
              'post_type' => 'page',
              'pagename'  => $aux
              ) );
              ?>
              <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
              <?php endwhile; endif; ?>
                <!-- FILTER MOBILE -->
                <div class="">
                  <select data-placeholder="Year" name="tags[]" multiple class="chosen-select" id='year'>
                    <?php for($i=2020;$i<=intval(date("Y"));$i++): ?>
                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                      </option>
                    <?php endfor; ?>
                  </select>

                  <select data-placeholder="Year" name="tags[]" class="d-md-block d-lg-none mr-1" id='year1'>
                    <?php for($i=2020;$i<=intval(date("Y"));$i++): ?>
                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                      </option>
                    <?php endfor; ?>
                  </select>
                </div>

                <div class="">
                  <a class="s_button zoom_works"  onclick="look();">
                    <i class="icon-search shape_icon"></i>
                  </a>
                </div>
                <!-- <input type="submit"> -->
              </form>
            </div>



          </div>
        </div>


        <!--

        <img src="images/shape-11.png" alt="">
      -->
        <?php
            $currLang = get_bloginfo('language');
        ?>
      </section>
                <?php
                $title_p=get_field('more_p');
                $button_p=get_field('see_more');
                $look=get_field('take_a_look');
                $dev=get_field('development');
                $link_projects=get_field('link_projects');
                ?>

      <!-- PROJECTS -->
      <section>
        <div class="bg_work_projects">
          <div class="container card_transform">

            <h2 class="centerText mb_titleProjects"><?php the_field('new_p'); ?></h2>
          <?php $post_home = new WP_Query( array(
              'post_type' => 'post',
              'category_name'  => 'Project',
              'posts_per_page' => '3',
              'order' => 'DESC',
            ) );
            $i=1;
            ?>
            <?php if (  $post_home -> have_posts() ): while(  $post_home -> have_posts() ):  $post_home -> the_post(); ?>
             <?php if($i==1): ?>
              <div class="">
                <div class="box_imgP_mov">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="img_project_mov">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="img_project_mov">
                    <?php endif; ?>
                </div>
                <div class="card_bubble cardColor1">

                  <img src="<?php echo IMAGENES; ?>/shape-work-2-1.svg" alt="" class="shape-work-2-1 center_translate">
                  <img src="<?php echo IMAGENES; ?>/shape-work-2-2.svg" alt="" class="shape-work-2-2 lava_work_line ">

                  <div class="card_project_title">
                  <?php the_title_attribute(); ?>
                  </div>
                  <div class="card_project_desc">
                    <?php the_field('type'); ?> <?php echo get_the_date( "Y", get_the_ID());?>
                  </div>
                  <?php if(get_the_content()!=""): ?>
                  <div class="row">

                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                    <?php endif; ?>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">
                        <div class="card_project_text">
                        <?php the_content(); ?>
                        </div>
                        <div class="card_project_titleLink">
                          <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" class="card_project_link" target="_blank"><?php the_field('short_link');?></a>
                        </div>
                      </div>
                    </div>



                  </div>
                  <?php else: ?>
                  <div class="row">

                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                      <?php if ( has_post_thumbnail() ): ?>
                      <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                        <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                      <?php else: ?>
                        <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                      <?php endif; ?>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">
                        <div class="card_project_titleLink">
                          <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" class="card_project_link" target="_blank"><?php echo $look; ?></a>
                        </div>
                        <!-- TAGS IN PROJECT -->
                        <div class="mt-20">
                          <?php
                            $tags = wp_get_post_tags(get_the_ID());
                            if ($tags) {
                              foreach($tags as $i_tag)
                              {
                                echo "<div class='box_tag_in_project'>".$i_tag->name."</div>";
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </div>

                  </div>
                    <?php endif; ?>



                </div>
              </div>
              <?php endif; ?>
              <?php if($i==2): ?>
              <div class="">
                <div class="box_imgP_mov">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="img_project_mov">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="img_project_mov">
                    <?php endif; ?>
                </div>
                <div class="card_bubble cardColor1">

                  <img src="<?php echo IMAGENES; ?>/shape-work-2-3.svg" alt="" class="shape-work-2-3 center_translate">
                  <img src="<?php echo IMAGENES; ?>/shape-work-2-4.svg" alt="" class="shape-work-2-4 lava_work_line ">

                  <div class="card_project_title">
                  <?php the_title_attribute(); ?>
                  </div>
                  <div class="card_project_desc">
                  <?php the_field('type'); ?> <?php echo get_the_date( "Y", get_the_ID());?>
                  </div>
                  <?php if(get_the_content()!=""): ?>

                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">
                        <div class="card_project_text">
                        <?php the_content(); ?>
                        </div>
                        <div class="card_project_titleLink">
                          Schau mal *
                          <a href="<?php the_field('link');?>" class="card_project_link" target="_blank"><?php the_field('short_link');?></a>
                        </div>
                        <!-- <a href="<?php the_permalink(); ?>" class="card_project_blog">Shortcut to blog > </a> -->
                      </div>
                    </div>
                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                    <?php endif; ?>
                    </div>
                  </div>

                  <?php else: ?>
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">

                        <div class="card_project_titleLink">
                          <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" class="card_project_link" target="_blank"><?php echo $look; ?></a>
                        </div>
                        <!-- <a href="<?php the_permalink(); ?>" class="card_project_blog">Shortcut to blog > </a> -->
                        <!-- TAGS IN PROJECT -->
                        <div class="mt-20">
                          <?php
                            $tags = wp_get_post_tags(get_the_ID());
                            if ($tags) {
                              foreach($tags as $i_tag)
                              {
                                echo "<div class='box_tag_in_project'>".$i_tag->name."</div>";
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                      <?php if ( has_post_thumbnail() ): ?>
                      <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                        <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                      <?php else: ?>
                        <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>

              </div>
              <?php endif; ?>
              <?php if($i==3): ?>
              <div class="">
                <div class="box_imgP_mov">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="img_project_mov">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="img_project_mov">
                    <?php endif; ?>
                </div>
                <div class="card_bubble cardColor1">

                  <img src="<?php echo IMAGENES; ?>/shape-work-2-5.svg" alt="" class="shape-work-2-5 center_translate">
                  <img src="<?php echo IMAGENES; ?>/shape-work-2-6.svg" alt="" class="shape-work-2-6 lava_work_line ">

                  <div class="card_project_title">
                  <?php the_title_attribute(); ?>
                  </div>
                  <div class="card_project_desc">
                  <?php the_field('type'); ?> <?php echo get_the_date( "Y", get_the_ID());?>
                  </div>
                    <?php if(get_the_content()!=""): ?>
                  <div class="row">

                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                    <?php endif; ?>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">
                        <div class="card_project_text">
                        <?php the_content(); ?>
                        </div>
                        <div class="card_project_titleLink">
                          Schau mal *
                          <a href="<?php the_field('link');?>" class="card_project_link" target="_blank"><?php the_field('short_link');?></a>
                        </div>
                        <!-- <a href="<?php the_permalink(); ?>" class="card_project_blog">Shortcut to blog > </a> -->
                        <!-- TAGS IN PROJECT -->
                        <div class="mt-20">
                          <?php
                            $tags = wp_get_post_tags(get_the_ID());
                            if ($tags) {
                              foreach($tags as $i_tag)
                              {
                                echo "<div class='box_tag_in_project'>".$i_tag->name."</div>";
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </div>

                  </div>
                  <?php else: ?>
                    <div class="row">

                    <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-6">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php $banner_article = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                      <img src="<?php echo $banner_article[0];?>" alt="" class="soft-border">
                    <?php else: ?>
                      <img src="<?php echo IMAGENES; ?>/example.jpeg" alt="" class="soft-border">
                    <?php endif; ?>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                      <div align="">
                        <div class="card_project_titleLink">
                          <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>" class="card_project_link" target="_blank"><?php echo $look; ?></a>
                        </div>
                        <!-- <a href="<?php the_permalink(); ?>" class="card_project_blog">Shortcut to blog > </a> -->
                        <!-- TAGS IN PROJECT -->
                        <div class="mt-20">
                          <?php
                            $tags = wp_get_post_tags(get_the_ID());
                            if ($tags) {
                              foreach($tags as $i_tag)
                              {
                                echo "<div class='box_tag_in_project'>".$i_tag->name."</div>";
                              }
                            }
                          ?>
                        </div>
                      </div>
                    </div>

                  </div>
                    <?php endif; ?>
                </div>
              </div>
              <?php endif; ?>
              <?php $i++; ?>
            <?php endwhile; else: ?>

            <?php endif; ?>

              <img src="<?php echo IMAGENES; ?>/shape-work-b1.svg" alt="" class="shape-work-b1 lava_work_2_1">
              <img src="<?php echo IMAGENES; ?>/shape-work-b2.svg" alt="" class="shape-work-b2 lava_work_1_3">
              <img src="<?php echo IMAGENES; ?>/shape-work-b3.svg" alt="" class="shape-work-b3 lava_work_2_1">
              <img src="<?php echo IMAGENES; ?>/shape-work-b4.svg" alt="" class="shape-work-b4 lava_work_1_3">
              <img src="<?php echo IMAGENES; ?>/shape-work-b5.svg" alt="" class="shape-work-b5 lava_work_2_1">
              <img src="<?php echo IMAGENES; ?>/shape-work-b6.svg" alt="" class="shape-work-b6 lava_work_1_3">

              <img src="<?php echo IMAGENES; ?>/shape-work-m1-1.svg" alt="" class="shape-work-m1-1 lava_work_1_1">
              <img src="<?php echo IMAGENES; ?>/shape-work-m1-2.svg" alt="" class="shape-work-m1-2 lava_work_line">
              <img src="<?php echo IMAGENES; ?>/shape-work-m2-1.svg" alt="" class="shape-work-m2-1 lava_work_1_2">
              <img src="<?php echo IMAGENES; ?>/shape-work-m2-2.svg" alt="" class="shape-work-m2-2 lava_work_line">
              <img src="<?php echo IMAGENES; ?>/shape-work-m3-1.svg" alt="" class="shape-work-m3-1 lava_work_1_1">
              <img src="<?php echo IMAGENES; ?>/shape-work-m3-2.svg" alt="" class="shape-work-m3-2 lava_work_line">
              <img src="<?php echo IMAGENES; ?>/shape-work-m4-1.svg" alt="" class="shape-work-m4-1 lava_work_1_2">
              <img src="<?php echo IMAGENES; ?>/shape-work-m4-2.svg" alt="" class="shape-work-m4-2 lava_work_line">
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
                    'order' => 'ASC',
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
                <a href="<?php if($currLang=="en-GB"){echo "/en";}else{echo "";} ?>/search/" class="button "><?php echo $button_p; ?></a>
                </div>
                </div>

              </div>
              <div class="row">

              </div>
            </div>
          </div>
        </div>
        <!-- <div class="modal-search fade" id="collapseExample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content white-background">
              <div class="modal-header">
                <div class="">
                  <div class="modal-title" id="m-title">Modal title</div>
                  <div class="modal-subtitle" id="m-date"></div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="" alt="" srcset="" id="m-image" class="img-modal">

                <div class="card_project_text text" id="m-text"></div>

                <div class="modal-footer">
                  <div class="modal-titleFooter">
                  <?php echo $look; ?>
                  </div>
                  <a href="<?php the_field('link');?>" class="modal-linkFooter" target="_blank"><?php the_field('short_link');?></a>
                  <!-- <a href="<?php the_permalink(); ?>" class="modal-linkFooter">Shortcut to blog > </a> -->
                <!-- </div>
              </div>

            </div>
          </div>
        </div>  -->
      </section>

<?php get_footer(); ?>
<script type="text/javascript" src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
  document.getElementById('output').innerHTML = location.search;
  $(".chosen-select").chosen();
</script>
<script>
    function look()
    {
        console.log($("#year1").val());
        var sel=$("#mulsel").val();
        var s=$("#search").val();
        var year=$("#year").val();
        var aux="";
        var aux1="";
        for (var i=0;i<sel.length;i++) {
            if(i!=0)
            {
                aux=aux+",";
            }
            aux=aux+sel[i];
        }
        if($("#mulsel").css("display")=="none")
        {
            aux=$("#mulsel1").val();
        }
        for (var i=0;i<year.length;i++) {
            if(i!=0)
            {
                aux1=aux1+",";
            }
            aux1=aux1+year[i];
        }
        if($("#year").css("display")=="none")
        {
            aux1=$("#year1").val();
        }
        window.location.href='/search/?b='+s+'&tags='+aux+'&y='+aux1;
    }
</script>
