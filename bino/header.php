<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bino
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( charset ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>Bino</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/normalize.css"> -->

	<?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container top-header">
      <div class="row top-header__block align-items-center justify-content-between">
        <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/img/BINO__logo.png" alt=""></a>

        <nav class="header-nav">
          <i class="fa fa-bars toggler-icon" aria-hidden="true"></i>

          <?php wp_nav_menu(
              array(
              'theme_location' => 'top-menu',
              'container' => null, 
              'menu_class' => 'nav-bar'
              )
            );
          ?>
        </nav>
      </div>
    </div>

    <div class="header-slider">
      <div class="header-slider__slide header-slider__slide_01">
        <h2>Our Clients Are Our First Priority</h2>
        <h1>WELCOME TO BINO</h1>
        <div class="divider">
          <div class="divider__line"></div>
          <div class="divider__circle"></div>
          <div class="divider__line"></div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="header-btn">
          <div class="bino-btn">GET STARTED NOW</div>
          <div class="bino-btn bino-btn_white">Learn more</div>
        </div>
      </div>

      <div class="header-slider__slide header-slider__slide_02">
        <h2>Our Clients Are Our First Priority</h2>
        <h1>WELCOME TO BINO</h1>
        <div class="divider">
          <div class="divider__line"></div>
          <div class="divider__circle"></div>
          <div class="divider__line"></div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="header-btn">
          <div class="bino-btn">GET STARTED NOW</div>
          <div class="bino-btn bino-btn_white">Learn more</div>
        </div>
      </div>

      <div class="header-slider__slide header-slider__slide_03">
        <h2>Our Clients Are Our First Priority</h2>
        <h1>WELCOME TO BINO</h1>
        <div class="divider">
          <div class="divider__line"></div>
          <div class="divider__circle"></div>
          <div class="divider__line"></div>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="header-btn">
          <div class="bino-btn">GET STARTED NOW</div>
          <div class="bino-btn bino-btn_white">Learn more</div>
        </div>
      </div>
    </div>

    <div class="header-slider__nav header-slider__nav_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="header-slider__nav header-slider__nav_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

    <div class="header-triangle header-triangle__left"></div>
    <div class="header-triangle header-triangle__right"></div>

    <div class="header-down__icon">
      <img src="<?php bloginfo("template_directory"); ?>/img/header-down__icon.png" alt="">
    </div>
  </header>
