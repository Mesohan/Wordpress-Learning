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
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div id="header_area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href=""><img src="<?php echo get_theme_mod('sohan_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">
          <ul id="nav">
            <li><a href="">Home</a></li>
            <li><a href="">about</a></li>
            <li><a href="">media</a></li>
            <li><a href="">file</a></li>
            <li><a href="">download</a></li>
            <li><a href="">contract</a></li>
            <li><a href="">service</a>
              <ul>
                <li><a href="">Dropdown Menu</a></li>
                <li><a href="">Dropdown Menu</a></li>
                <li><a href="">Dropdown Menu</a></li>
                <li><a href="">Dropdown Menu</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <?php wp_footer(); ?>
</body>

</html>