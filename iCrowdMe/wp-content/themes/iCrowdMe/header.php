<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iCrowdMe
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>iCrowdMe</title>

  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/slick-theme.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css">

  <?php wp_head(); ?>
  
</head>
<body>
  <header class="header">
    <div class="container nav-container">
      <a href="" class="header__logo"><img src="<?php bloginfo("template_directory"); ?>/img/iCrowdMe__logo.png" alt=""></a>

      <div class="header-nav">
        <div class="toggler-icon">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <ul class="nav-bar">
          <li class="nav-item"><a href="" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="" class="nav-link">How it works</a></li>
          <li class="nav-item"><a href="" class="nav-link">Discover a project</a></li>
          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="" class="nav-link">Find out more</a></li>
        </ul>
      </div>

      <button class="login-btn">Login</button>
    </div>
  </header>
