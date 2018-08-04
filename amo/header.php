<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/slick-theme.css">

	<?php wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '451378148354557');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=451378148354557&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="header-inside flex">
			<a href="<?php echo get_home_url(); ?>">
				<img class="header-inside-logo" src="<?php the_field('logo','option'); ?>" alt="Marlot">
			</a>
			<div class="header-inside-right flex">
				<a class="phone" href="tel:<?php the_field('phone','option'); ?>"><?php the_field('phone','option'); ?></a>
				<button data-toggle="modal" data-target="#myModal" class="btn-style transition">
				<?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Связаться
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Зв’язатись
                  <?php
	                  }
	            ?></button>
				<?php qtranxf_generateLanguageSelectCode('text'); ?>
			</div>
		</div>
	</div>
</header>
