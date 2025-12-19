<?php 
 $post_home = new WP_Query( array(
    'post_type' => 'post',
    'category_name'  => 'Project',
    'order' => 'DESC',
  ) );
  $i=1;

    if (  $post_home -> have_posts() ): 
        while(  $post_home -> have_posts() ):  $post_home -> the_post(); 
            $tags = wp_get_post_tags(get_the_ID());
            $i++;
            if ($tags) {
                $arr=[];
                foreach($tags as $i_tag)
                {
                    $aux=[];
                    array_push($aux,$i_tag->name);
                    array_push($aux,$i_tag->term_id);
                    array_push($arr,$aux);
                }
              }
        endwhile;
    endif;
?>