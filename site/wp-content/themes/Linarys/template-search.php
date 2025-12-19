<?php
/**
* Template name: Search
*
* Plantilla personalizada
*
* @package Linarys
* @subpackage Linarys
* @since 1.0
*/
?>
<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://harvesthq.github.io/chosen/chosen.css">
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
            $tags=$_GET['tags'];
            $aux=explode(",",$tags);
            $s=$_GET['b'];
            $year=$_GET['y'];
            ?>
            <?php endwhile; endif; ?>
      </section>

<!-- RESULT SEARCH -->
<section>
  <div class="bg_work_projects">
    <div class="container relative card_transform">
    <?php
    $i=0;
    if($s!="" && $year!="" && $tags!=""){
      $args = array(
        's' => $s,
        'post_type' => 'post',
        'category_name'  => 'Project',
        'tag__and' => $aux,
        'date_query' => array(
          array(
              'year'  => $year
          ),
      ),

    );
    }
    else
    {
      if($s!="" && $year!=""&& $tags=="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

        );
      }
      if($tags!="" && $year!="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

      );
      }
      if($tags!="" && $year=="" && $s!="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,
      );
      }
      if($tags!="" && $year=="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,

      );
      }
      if($tags=="" && $year!="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

      );
      }
      if($tags=="" && $year=="" && $s!="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
      );
      }
      if($tags=="" && $year=="" && $s==""){
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
      );
      }
    }
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
                      <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
                        <img src="<?php echo $banner_article[0];?>" alt="" class="img_moreWork">
                      </a>
                    <?php else: ?>
                      <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
                        <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="img_moreWork">
                      </a>
                    <?php endif; ?>
            <h3><?php the_title_attribute(); ?></h3>
            <div class="text_purple"><?php the_field('type'); ?> <?php echo get_the_date( "Y", get_the_ID());?></div>
            <a class="linkMore" href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>"><?php echo $mb; ?> > </a>
            <!-- TAGS IN PROJECT -->
            <div class="mt-10">
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
    if($s!="" && $year!="" && $tags!=""){
      $args = array(
        's' => $s,
        'post_type' => 'post',
        'category_name'  => 'Project',
        'tag__and' => $aux,
        'date_query' => array(
          array(
              'year'  => $year
          ),
      ),

    );
    }
    else
    {
      if($s!="" && $year!=""&& $tags=="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

        );
      }
      if($tags!="" && $year!="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

      );
      }
      if($tags!="" && $year=="" && $s!="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,
      );
      }
      if($tags!="" && $year=="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'tag__and' => $aux,

      );
      }
      if($tags=="" && $year!="" && $s=="")
      {
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
          'date_query' => array(
            array(
                'year'  => $year
            ),
        ),

      );
      }
      if($tags=="" && $year=="" && $s!="")
      {
        $args = array(
          's' => $s,
          'post_type' => 'post',
          'category_name'  => 'Project',
      );
      }
      if($tags=="" && $year=="" && $s==""){
        $args = array(
          'post_type' => 'post',
          'category_name'  => 'Project',
      );
      }
    }
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
                      <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
                        <img src="<?php echo $banner_article[0];?>" alt="" class="img_moreWork">
                      </a>
                    <?php else: ?>
                      <a href="<?php echo $link_projects; ?>?idpost=<?php echo get_the_ID(); ?>">
                        <img src="<?php echo IMAGENES; ?>/photo_2.png" alt="" class="img_moreWork">
                      </a>
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
</section>

<?php get_footer(); ?>
<script type="text/javascript" src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
  document.getElementById('output').innerHTML = location.search;
  $(".chosen-select").chosen();
  const val = window.location.search;
  const urlParams = new URLSearchParams(val);
  var b = urlParams.get('b');
  var tags = urlParams.get('tags');
  var year = urlParams.get('y');
  tags=tags.split(",");
  year=year.split(",");
$("#search").val(b);
$( document ).ready(function() {
  for (var i=0;i<tags.length;i++) {
    $("#mulsel").find('option[value="'+tags[i]+'"]').attr('selected','selected');
  }
  $("#mulsel").trigger("chosen:updated");
  for (var i=0;i<year.length;i++) {
    $("#year").find('option[value="'+year[i]+'"]').attr('selected','selected');
  }
  $("#year").trigger("chosen:updated");
});
</script>
<script>
    function look()
    {
        var sel=$("#mulsel").val();
        var s=$("#search").val();
        var year=$("#year").val();
        var aux="";
        var aux1="";
        console.log($("#mulsel").css("display"));
        for (var i=0;i<sel.length;i++) {
            if(i!=0)
            {
                aux=aux+",";
            }
            aux=aux+sel[i];
        }
        if($("#mulsel").css("display")!="none")
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
        if($("#year").css("display")!="none")
        {
            aux1=$("#year1").val();
        }
        window.location.href='/search/?b='+s+'&tags='+aux+'&y='+aux1;
    }
</script>