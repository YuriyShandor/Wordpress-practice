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


<!-- js -->
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
