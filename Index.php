<?php
/*
* This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
  <meta charset="<?php bloginfo('charset') ?> ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
 
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div id="header_area" class="<?php echo get_theme_mod('sohan_menu_position'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href=""><img src="<?php echo get_theme_mod('sohan_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">
        <?php wp_nav_menu( array('theme_location'=>'maim_menu','menu_id'=>'nav') ); ?>
        </div>
      </div>
    </div>
  </div>



  <?php wp_footer(); ?>
</body>

</html>