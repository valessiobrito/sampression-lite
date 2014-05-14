<?php
/**
 * The template for displaying the footer.
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */
?>

 </div>
</div>
<!-- #content -->

<footer id="footer">
<div class="container">
<div class="columns fourteen">
<div class="alignleft copyright" style="display: none !important;"><?php esc_attr_e( 'Copyright', 'sampression' ); ?> &copy; <?php _e(date('Y')); ?> "<?php bloginfo( 'name' ); ?>".</div><?php do_action( 'sampression_credits' ); ?>
</div>

		<div class="columns two footer-right">
<div id="btn-top-wrapper">
<a href="javascript:pageScroll('.top');" class="btn-top"><?php _e('Voltar ao Topo', 'sampression'); ?></a>
			</div>
		</div>

	</div><!-- .container -->
</footer><!-- #footer -->



<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/js/selectivizr.js"></script>
<![endif]-->

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

<?php
	   	/** sampression_footer hook **/
	   	do_action( 'sampression_footer' );
?>

<?php wp_footer(); ?>

</body>
</html>
