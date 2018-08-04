<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package amo
 */

get_header(); ?>

	<section class="main-section other-page">
		<div class="container">
			<div class="main-section-inside flex">
				<div class="h1">
					<img src="<?php bloginfo("template_directory"); ?>/img/404.png" alt="">
				</div>
				<h2><?php  
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                   Такой страницы нет, перейдите на главную страницу
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Такої сторінки немає, перейдіть на головну сторінку
                  <?php
                    }
              ?></h2>
				<div class="btn-block">
					<a href="<?php echo get_home_url(); ?>" class="btn-style transition"><?php  
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Перйти на главную
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Перйти на головну
                  <?php
                    }
              ?></a>
				</div>
			</div>
		</div>
</section>

<?php
get_footer('other');
