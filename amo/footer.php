<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amo
 */

?>

<div class="footer">
	<header class="header">
		<div class="container">
			<div class="header-inside flex">
			<a href="">
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
			</div>
		</div>
		</div>
	</header>
	<div class="container">
		<div class="footer-row flex">
				<label><?php the_field('copyright','option'); ?></label>
				<label><a href="<?php the_field('pol_link','option'); ?>">
				<?php
                  if ( qtrans_getLanguage() == 'ru' ) { ?>
                    Политика конфиденциальности
                  <?php
                  }
                  elseif ( qtrans_getLanguage() == 'ua' ) { ?>
                    Політика конфіденційності
                  <?php
	                  }
	            ?></a></label>
				<label><?php the_field('address','option'); ?></label>
				<label>e-mail: <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></label>
				<label><?php the_field('fop','option'); ?></label>
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade new-modal" id="myModalK" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<button type="button" data-dismiss="modal" aria-label="Close" class="close cmn-toggle-switch cmn-toggle-switch__htx active pop-close-menu">
			✖
		</button>
      <div class="modal-body">
			<div class="mod-ttl"><?php the_field('txt_mod_2','option'); ?></div>
				<?php echo do_shortcode('[contact-form-7 id="34" title="Form-2"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade new-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<button type="button" data-dismiss="modal" aria-label="Close" class="close cmn-toggle-switch cmn-toggle-switch__htx active pop-close-menu">
			✖
		</button>
      <div class="modal-body">
			<div class="mod-ttl"><?php the_field('txt_mod_1','option'); ?></div>
				 <?php echo do_shortcode('[contact-form-7 id="33" title="Form-1"]'); ?>
      </div>
    </div>
  </div>
</div>



<!-- js -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/custom.js"></script>

<script>new WOW().init();</script>

<?php wp_footer(); ?>

</body>
</html>
