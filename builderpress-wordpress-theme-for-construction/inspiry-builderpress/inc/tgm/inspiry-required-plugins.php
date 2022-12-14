<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'inspiry_builderpress_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function inspiry_builderpress_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

//         Inspiry Real Estate Plugin
		array(
			'name'     => 'BuilderPress Pack',
			'slug'     => 'builderpress-pack', // The plugin slug (typically the folder name).
			'source'   => get_template_directory() . '/inc/plugins/builderpress-pack.zip', // The plugin source.
			'required' => true, // If false, the plugin is only 'recommended' instead of required.
			'version' => '1.1.2'
		),

		array(
			'name'     => 'Meta Box',
			'slug'     => 'meta-box', // The plugin slug (typically the folder name).
			'required' => true, // If false, the plugin is only 'recommended' instead of required.
		),

		array(
			'name'     => 'Visual Composer',
			'slug'     => 'js_composer', // The plugin slug (typically the folder name).
			'source'   => get_template_directory() . '/inc/plugins/js_composer.zip', // The plugin source.
			'required' => true, // If false, the plugin is only 'recommended' instead of required.
			'version' => '6.6.0'
		),

		array(
			'name'     => 'Quick and Easy Testimonials',
			'slug'     => 'quick-and-easy-testimonials', // The plugin slug (typically the folder name).
			'required' => false, // If false, the plugin is only 'recommended' instead of required.
		),

		array(
			'name'     => 'Woocommerce',
			'slug'     => 'woocommerce', // The plugin slug (typically the folder name).
			'required' => false, // If false, the plugin is only 'recommended' instead of required.
		),

		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7', // The plugin slug (typically the folder name).
			'required' => false, // If false, the plugin is only 'recommended' instead of required.
		),

		array(
			'name'     => 'One Click Demo Import',
			'slug'     => 'one-click-demo-import', // The plugin slug (typically the folder name).
			'required' => false, // If false, the plugin is only 'recommended' instead of required.
		),


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',
		// Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'parent_slug'  => 'themes.php',
		// Parent menu slug.
		'capability'   => 'edit_theme_options',
		// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => true,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,
		// Automatically activate plugins after installation or not.
		'message'      => '',
		// Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );

}
