<?php
/**
* Archivo con el header del tema
*
*
*
* @package Mouwen
* @subpackage Mouwen
* @since 1.0
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name') ?></title>
     <!-- LINKS DE ESTILO  -->
     <?php wp_head(); ?>
  </head>
  <body>
    <!-- SECTION 404 -->
    <section>
      <div class="bg_404">
        <div class="container relative">
          <div class="container_404">
            <div class="box_message404">
              <div class="message1_404">
                Oh no!
              </div>
              <div class="message2_404">
                Bad request
              </div>
            </div>
            <div class="textError_404">
              Error 400
            </div>
            <div class="center_btn">
              <a href="https://linarys.com/" class="button_404">< Go back to <b>linarys.com </b></a>
            </div>

          </div>
          <object data="<?php echo IMAGENES; ?>/Cloud_1.svg" type="image/svg+xml" class="cloud_1_404 cloud1 cloud_move_1"></object>
          <object data="<?php echo IMAGENES; ?>/Cloud_2.svg" type="image/svg+xml" class="cloud_2_404 cloud2 cloud_move_2"></object>
          <object data="<?php echo IMAGENES; ?>/Ballon.svg" type="image/svg+xml" class="shape_ballons ballon_move"></object>
          <object data="<?php echo IMAGENES; ?>/groupBallons.svg" type="image/svg+xml" class="shape_groupBallons"></object>
          <object data="<?php echo IMAGENES; ?>/bean.svg" type="image/svg+xml" class="shape_bean"></object>
        </div>
      </div>
    </section>
  </body>
</html>
