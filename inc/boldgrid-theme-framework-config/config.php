<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'boldgrid-prime';
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-emporiume';
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['template']['footer'] = '3';
	$boldgrid_framework_configs['template']['navbar-search-form'] = false;
//	$boldgrid_framework_configs['template']['header'] = '2';
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'none';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'5' => array( '[widget]boldgrid-widget-1' ), // social and cart links
		'6' => array( '[action]boldgrid_site_identity' ), // logo
		'7' => array( '[widget]boldgrid-widget-3' ), // search and contact
		'11' => array( '[menu]primary' ), // navigation
		'8' => array( '[widget]boldgrid-widget-2' ), // tagline
	);
	
		// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-4' ), // menu and contact info areas
	);
	
	// Remove Container ID that is targetted by navbar-toggle.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_id'] = 'primary-menu';

	// Remove the container classes that are targetted with navbar-collapse.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_class'] = 'primary-menu';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#000000',
				'#fb0000',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#000000',
			'colors' => array(
				'#ffffff',
				'#000000',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#169dc5',
				'#000000',
				'#facc2d',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#72754d',
				'#000000',
				'#40422c',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#c3ae69',
			'colors' => array(
				'#6c473f',
				'#6c473f',
				'#c3ae69',
			),
		)
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 14: //<-- Fashion
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 32: //<-- General
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}



	// Social Media Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon-circle-open-thin';
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';
	$boldgrid_framework_configs['menu']['default-menus']['social']['items'] = array(
		array (
			'menu-item-title' =>  __( 'Pinterest' ),
			'menu-item-classes' => 'pinterest',
			'menu-item-url' => '//pinterest.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Instagram' ),
			'menu-item-classes' => 'instagram',
			'menu-item-url' => '//instagr.am',
			'menu-item-status' => 'publish',
		),
		array (
			'menu-item-title' =>  __( 'Flickr' ),
			'menu-item-classes' => 'flickr',
			'menu-item-url' => '//flickr.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Dribbble' ),
			'menu-item-classes' => 'dribbble',
			'menu-item-url' => '//dribbble.com',
			'menu-item-status' => 'publish',
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#000000';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary Menu, Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Top Right, Above Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Top of Footer";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	/**
	 * Widgets
	 */

	// Widget 1


	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer Center';

	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Open Sans';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
