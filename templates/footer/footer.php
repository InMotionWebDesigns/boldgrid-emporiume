<?php
/**
 * Footer Template
 *
 * This file contains the markup for the footer template.
 *
 * @since 2.0
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<footer id="colophon" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
<div class="container">
	<?php do_action( 'boldgrid_footer_top' ); ?>
		<div class='boldgrid-section'>
			<div class="bgtfw <?php echo $configs['template']['pages']['global']['footer']; ?>">
				<div class='row footer-1'>
					<div class='col-md-12 footer-1'><?php do_action( 'boldgrid-theme-location', 'footer', '1' ); ?></div>
				</div>
			</div><!-- .container -->
		</div><!-- .section -->
		</div><!-- .container -->
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->
