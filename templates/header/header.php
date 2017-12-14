<?php
/**
 * Header Template
 *
 * This file contains the markup for the header template.
 *
 * @package Prime
 */

// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="masthead" class="<?php echo basename( __FILE__, '.php' ); ?>" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>>
	<?php do_action( 'boldgrid_header_top' ); ?>
		<div class='boldgrid-section'>
			<div class='header-5'>
				<?php do_action( 'boldgrid-theme-location', 'header', '5' ); ?>
			</div><!-- top header social and links -->
			<div class="bgtfw <?php echo $configs['template']['pages']['global']['header']; ?>">
			
				<div class='row header-6 header-7'>
					<div class='col-md-4 header-6'><?php do_action( 'boldgrid-theme-location', 'header', '6' ); ?></div><!-- logo-->
					<div class='col-md-4 col-md-offset-4 header-7'><?php do_action( 'boldgrid-theme-location', 'header', '7' ); ?></div><!-- search and contact -->
				</div>
				<div class='row header-11'>
					<div class='col-md-12 header-11'><?php do_action( 'boldgrid-theme-location', 'header', '11' ); ?></div>
				</div><!-- navigation -->
			</div><!-- .container -->				
				<div class='header-8 text-center'>
					<?php do_action( 'boldgrid-theme-location', 'header', '8' ); ?>
				</div> <!-- header tagline -->

		</div><!-- .section -->
		<div class='boldgrid-section'>
			<?php do_action( 'boldgrid-theme-location', 'header', '13' ); ?>
		</div>
	<?php do_action( 'boldgrid_header_bottom' ); ?>
</header><!-- #masthead -->
